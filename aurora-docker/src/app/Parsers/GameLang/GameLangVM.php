<?php

namespace App\Parsers\GameLang;
use JsonSerializable;
use App\Parsers\GameLang\Constants;

class MemoryBlock implements JsonSerializable
{
    private static $next_id = 0;
    private $id = 0;

    // todo: quitar el static
    private static $stack = [];
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
        //$this->stack = [];
    }

    public function setReg(int $reg, $data, int $icl = 0): void
    {
        if ($icl != 0) {
            echo "$icl setReg($reg, $data)\n";
        }
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
        if ($reg == Constants::NO_REG) {
            array_push(self::$stack, $data);
            return;
        }
        array_push(self::$stack, $this->getReg($reg));
    }

    public function pop(int $reg, string $identificator = null): mixed
    {
        if (empty(self::$stack)) {
            throw new \Exception("Stack is empty.");
        }
        $value = array_pop(self::$stack);
        if ($identificator != null) {
            $this->setHeap($identificator, $value);
        }
        if ($reg != Constants::NO_REG) {
            $this->setReg($reg, $value);
        }
        return $value;
    }

    public function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'stack' => self::$stack,
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
            return '';
        }
        $tableStyle = 'border-collapse: collapse; width: 40%;';
        $cellStyle = 'font-family: monospace; font-size:1.1em; border: 1px solid #999; padding: 6px; text-align: left;';

        $html = '<table style="' . $tableStyle . '">';
        $html .= '<tr>';
        $html .= '<th style="' . $cellStyle . '">#</th>';
        $html .= '<th style="' . $cellStyle . '">Source</th>';
        $html .= '<th style="' . $cellStyle . '">Mnemonic</th>';
        $html .= '<th style="' . $cellStyle . '">Register</th>';
        $html .= '<th style="' . $cellStyle . '">Data/Ident</th>';
        $html .= '<th style="' . $cellStyle . '">Aux</th>';
        $html .= '<th style="' . $cellStyle . '">Label</th>';
        $html .= '</tr>';

        $i = 0;

        foreach ($this->code as $row) {
            $register = $row[2] < 0 ? '' : $row[2];

            $html .= '<tr>';
            $html .= '<td style="' . $cellStyle . '">' . $i . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . $row[0] . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . strtoupper(($row[1]->jsonSerialize() ?? '')) . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . $register . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . ($row[3] ?? '') . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . ($row[4] ?? '') . '</td>';
            $html .= '<td style="' . $cellStyle . '">' . ($row[5] ?? '') . '</td>';
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
        //echo json_encode($this->getBlock(), JSON_PRETTY_PRINT) . "\n";
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
        $i = 0;
        while ($i < count($code)) {
            [$lineNumber, $op, $reg, $data, $aux, $label] = $code[$i];
            switch ($op) {
                case Operation::REG:
                    $this->getBlock()->setReg($reg, $data);
                    break;
                case Operation::PSH:
                    $this->getBlock()->push($reg, $data);
                    break;
                case Operation::POP:
                    $this->getBlock()->pop($reg, $data);
                    break;
                case Operation::ADD:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left + $right);
                    break;
                case Operation::SUB:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left - $right);
                    break;
                case Operation::MUL:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left * $right);
                    break;
                case Operation::DIV:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left / $right);
                    break;
                case Operation::MEM:
                    if ($reg == Constants::NO_REG) {
                        $this->getBlock()->setHeap($data, $aux);
                        break;
                    }
                    $result = $this->getBlock()->getReg($reg);
                    $this->getBlock()->setHeap($data, $result);
                    break;
                case Operation::GET:
                    if (!$this->getBlock()->has($data)) {
                        throw new \Exception("Undefined variable '$data' at line $lineNumber.");
                    }
                    $value = $this->getBlock()->getHeap($data);
                    $this->getBlock()->setReg($reg, $value);
                    break;
                case Operation::EQL:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left == $right);
                    break;
                case Operation::NEQ:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left != $right);
                    break;
                case Operation::GRT:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left > $right);
                    break;
                case Operation::LST:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left < $right);
                    break;
                case Operation::GTE:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left >= $right);
                    break;
                case Operation::LTE:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left <= $right);
                    break;
                case Operation::LOR:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left || $right);
                    break;
                case Operation::AND:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    $this->getBlock()->setReg($reg, $left && $right);
                    break;
                case Operation::NOT:
                    $left = $this->getBlock()->getReg(1);
                    $this->getBlock()->setReg($reg, !$left);
                    break;
                case Operation::CAT:
                    $left = $this->getBlock()->getReg(1);
                    $right = $this->getBlock()->getReg(2);
                    if (is_bool($left)) {
                        $left = $left ? 'V' : 'F';
                    }
                    if (is_bool($right)) {
                        $right = $right ? 'V' : 'F';
                    }
                    $this->getBlock()->setReg($reg, $left . $right);
                    break;
                case Operation::OUT:
                    $str = $this->getBlock()->getReg($reg);
                    echo $str . "\n";
                    break;
                case Operation::IFI:
                    $condition = $this->getBlock()->getReg(0);
                    if (!$condition) {
                        $i = $data - 1; // -1 because the loop will increment it
                    }
                    break;
                case Operation::JMP:
                    $jump_to = $data;
                    if ($reg != -1)  {
                        $jump_to = $this->getBlock()->getReg($reg);
                    }
                    $i = $jump_to - 1; // -1 because the loop will increment it
                    break;
                case Operation::PSHCS:
                    $this->pushCallStack();
                    break;
                case Operation::POPCS:
                    $this->popCallStack();
                    break;
                case Operation::LCALL:
                    $i = $data - 1; // -1 because the loop will increment it
                    break;
                case Operation::DELTA:
                    $this->getBlock()->setReg($reg, 0.2);
                    break;
                case Operation::SYS:
                    if ($data == "move") {
                        $destination = $this->getBlock()->pop(0);
                        echo "Moving to $destination\n";
                    }
                    break;
                case Operation::AWAIT:
                    // Simulates the waited random event is produced.
                    // Calculates two random integers between 0 and 10
                    $random1 = rand(0, 1000000);
                    $random2 = rand(0, 1000000);
                    if ($random1 == $random2) {
                        $i = $i + 1; // skip the next instruction
                    }
                    $i = $i - 1; // repeat the same instruction
                    break;
                case Operation::END:
                    $this->popCallStack();
                    return;
            }
            $i++;
        }
    }
}
