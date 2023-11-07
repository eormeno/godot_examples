<?php

namespace App\Parsers\GameLang;

class MemoryBlock {
    private $stack = [];
    private $registers = [];
    private $heap = [];

    public function setReg(int $reg, $data): void
    {
        $this->registers[$reg] = $data;;
    }

    public function getReg(int $reg)
    {
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

    public function push(int $reg, $data): void
    {
        array_push($this->stack, $this->getReg($reg));
    }

    public function pop(int $reg): void
    {
        $this->setReg($reg, array_pop($this->stack));
    }
}

class GameLangVM {
    private $call_stack = [];
    private $code = [];

    public function __construct(array $code)
    {
        $this->code = $code;
    }

    private function pushCallStack()
    {
        array_push($this->call_stack, new MemoryBlock());
    }

    private function popCallStack()
    {
        array_pop($this->call_stack);
    }

    private function getBlock(): MemoryBlock
    {
        return $this->call_stack[count($this->call_stack) - 1];
    }

    public function run() {
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
        for ($i = 0; $i < count($code); $i++) {
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
                    $this->getBlock()->pop($reg);
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
                        $i = $data;
                    }
                    // $condition = $regs[0];
                    // if (!$condition) {
                    //     // dd($i, $regs[1]);
                    //     $i = $data;
                    // }
                    break;
                case Operation::jmp:
                    $i = $data;
                    break;
                case Operation::delta:
                    // $regs[$reg] = 0.01; // simulates a small delta time
                    $this->getBlock()->setReg($reg, 0.01);
                    break;
            }
        }
        // echo json_encode($mem, JSON_PRETTY_PRINT) . "\n";
    }

}
