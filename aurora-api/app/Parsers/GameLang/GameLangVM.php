<?php

namespace App\Parsers\GameLang;
use JsonSerializable;

class MemoryBlock implements JsonSerializable
{
    private static $next_id = 0;
    private $id = 0;
    private $stack = [];
    private $registers = Array(4);
    private $heap = [];

    public function __construct()
    {
        $this->id = self::$next_id++;
        $this->registers[0] = 0;
        $this->registers[1] = 0;
        $this->registers[2] = 0;
        $this->registers[3] = 0;
        $this->heap = [];
        $this->stack = [];
    }

    public function setReg(int $reg, $data, int $icl = 0): void
    {
        if ($icl != 0) {
            echo "$icl setReg($reg, $data)\n";
        }
        // if the data is numeric, convert it to float and round it to 2 decimal places
        if (is_numeric($data)) {
            $data = round(floatval($data), 6);
        }
        $this->registers[$reg] = $data;
    }

    public function getReg(int $reg, int $icl = 0)
    {
        if ($icl != 0) {
            echo "$icl getReg($reg)\n";
        }
        if (!array_key_exists($reg, $this->registers)) {
            debug_print_backtrace();
            throw new \Exception("Register $reg does not exist.");
        }
        return $this->registers[$reg];
    }

    public function setHeap(string $id, $data): void
    {
        $this->heap[$id] = $data;
    }

    public function getHeap(string $id)
    {
        return $this->heap[$id];
    }

    public function has(string $id): bool
    {
        return array_key_exists($id, $this->heap);
    }

    public function push(int $reg, $data = null): void
    {
        if ($reg == GameLangSpecificListener::NO_REG) {
            array_push($this->stack, $data);
            return;
        }
        array_push($this->stack, $this->getReg($reg));
    }

    public function pop(int $reg, string $identificator = null): void
    {
        if (empty($this->stack)) {
            throw new \Exception("Stack is empty.");
        }
        if ($identificator != null) {
            $this->setHeap($identificator, array_pop($this->stack));
            return;
        }
        $this->setReg($reg, array_pop($this->stack));
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'stack' => $this->stack,
            'registers' => $this->registers,
            'heap' => $this->heap,
        ];
    }
}

class GameLangVM
{
    private $call_stack = [];
    private $code = [];

    public function __construct(array $code)
    {
        $this->code = $code;
    }

    function createHtmlTableFromCodeArray()
    {
        if (empty($this->code)) {
            return ''; // Return an empty string if the input array is empty
        }
        // Add CSS styles to the table
        $tableStyle = 'border-collapse: collapse; width: 40%;';
        $cellStyle = 'font-family: monospace; font-size:1.1em; border: 1px solid #999; padding: 6px; text-align: left;';

        $html = '<table style="' . $tableStyle . '">';
        $html .= '<tr>';
        $html .= '<th style="' . $cellStyle . '">#</th>';
        $html .= '<th style="' . $cellStyle . '">line</th>';
        $html .= '<th style="' . $cellStyle . '">mnemonic</th>';
        $html .= '<th style="' . $cellStyle . '">register</th>';
        $html .= '<th style="' . $cellStyle . '">data</th>';
        $html .= '</tr>';

        $i = 0;

        // Iterate over the data and create table rows
        foreach ($this->code as $row) {
            $html .= '<tr>';
            $html .= '<td style="' . $cellStyle . '">' . $i . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . $row[0] . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . strtoupper(($row[1]->jsonSerialize() ?? '')) . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . ($row[2] ?? '') . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . ($row[3] ?? '') . '</td>';
            $html .= '</tr>';
            $i++;
        }

        return $html;
    }

    public function saveHtmlFile(string $file)
    {
        $html = $this->createHtmlTableFromCodeArray();
        file_put_contents($file, $html);
    }

    private function pushCallStack()
    {
        array_push($this->call_stack, new MemoryBlock());
    }

    private function popCallStack()
    {
        echo json_encode($this->getBlock(), JSON_PRETTY_PRINT) . "\n";
        array_pop($this->call_stack);
    }

    private function getBlock(): MemoryBlock
    {
        return $this->call_stack[count($this->call_stack) - 1];
    }

    public function run()
    {
        try {
            $this->runCode($this->code);
        } catch (\Exception $e) {
            echo $e->getMessage() . "\n";
        }
    }

    private function runCode(array $code)
    {
        $this->pushCallStack();
        // $stack = [];
        // $regs = [3];
        // $mem = [];
        $i = 0;
        while ($i < count($code)) {
//        for ($i = 0; $i < count($code); $i++) {
            [$lineNumber, $op, $reg, $data] = $code[$i];
            switch ($op) {
                case Operation::reg:
                    $this->getBlock()->setReg($reg, $data);
                    // $regs[$reg] = $data;
                    break;
                case Operation::psh:
                    $this->getBlock()->push($reg, $data);
                    // array_push($stack, $regs[$reg]);
                    break;
                case Operation::pop:
                    $this->getBlock()->pop($reg, $data);
                    // $regs[$reg] = array_pop($stack);
                    break;
                case Operation::add:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left + $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left + $right;
                    break;
                case Operation::sub:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left - $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left - $right;
                    break;
                case Operation::mul:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left * $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left * $right;
                    break;
                case Operation::div:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left / $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left / $right;
                    break;
                case Operation::mem:
                    $result = $this->getBlock()->getReg($reg);
                    $this->getBlock()->setHeap($data, $result);
                    // $result = $regs[$reg];
                    // $mem[$data] = $result;
                    break;
                case Operation::get:
                    if (!$this->getBlock()->has($data)) {
                        throw new \Exception("Undefined variable '$data' at line $lineNumber.");
                    }
                    $value = $this->getBlock()->getHeap($data);
                    $this->getBlock()->setReg($reg, $value);
                    // if (!array_key_exists($data, $mem)) {
                    //     throw new \Exception("Undefined variable '$data' at line $lineNumber.");
                    // }
                    // $value = $mem[$data];
                    // $regs[$reg] = $value;
                    break;
                case Operation::eql:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left == $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left == $right;
                    break;
                case Operation::neq:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left != $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left != $right;
                    break;
                case Operation::grt:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left > $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left > $right;
                    break;
                case Operation::lst:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left < $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left < $right;
                    break;
                case Operation::gte:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left >= $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left >= $right;
                    break;
                case Operation::lte:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left <= $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left <= $right;
                    break;
                case Operation::lor:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left || $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left || $right;
                    break;
                case Operation::and:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left && $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // $regs[$reg] = $left && $right;
                    break;
                case Operation::not:
                    $left = $this->getBlock()->getReg(1);
                    $this->getBlock()->setReg($reg, !$left);
                    // $left = $regs[1];
                    // $regs[$reg] = !$left;
                    break;
                case Operation::cat:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    if (is_bool($left)) {
                        $left = $left ? 'V' : 'F';
                    }
                    if (is_bool($right)) {
                        $right = $right ? 'V' : 'F';
                    }
                    $this->getBlock()->setReg($reg, $left . $right);
                    // $left = $regs[1];
                    // $right = $regs[2];
                    // if (is_bool($left)) {
                    //     $left = $left ? 'V' : 'F';
                    // }
                    // if (is_bool($right)) {
                    //     $right = $right ? 'V' : 'F';
                    // }
                    // $regs[$reg] = $left . $right;
                    break;
                case Operation::out:
                    $str = $this->getBlock()->getReg($reg);
                    // $str = $regs[$reg];
                    echo $str . "\n";
                    break;
                case Operation::ifi:
                    // dd($regs[0], $regs[1], $i, count($code));
                    $condition = $this->getBlock()->getReg(0);
                    // $condition = $regs[0];
                    if (!$condition) {
                        // dd($i, $regs[1]);
                        $i = $data - 1; // -1 because the loop will increment it
                    }
                    // $condition = $regs[0];
                    // if (!$condition) {
                    //     // dd($i, $regs[1]);
                    //     $i = $data;
                    // }
                    break;
                case Operation::jmp:
                    $jump_to = $data;
                    if ($reg != -1)  {
                        $jump_to = $this->getBlock()->getReg($reg);
                    }
                    $i = $jump_to - 1; // -1 because the loop will increment it
                    break;
                case Operation::pshcs:
                    $this->pushCallStack();
                    break;
                case Operation::popcs:
                    $this->popCallStack();
                    break;
                case Operation::lcall:
                    $i = $data - 1; // -1 because the loop will increment it
                    break;
                case Operation::delta:
                    // $regs[$reg] = 0.01; // simulates a small delta time
                    $this->getBlock()->setReg($reg, 0.2);
                    break;
                case Operation::end:
                    $this->popCallStack();
                    return;
            }
            $i++;
        }
        // echo json_encode($mem, JSON_PRETTY_PRINT) . "\n";
    }

}
