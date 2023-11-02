<?php

namespace App\Parsers\GameLang;

class GameLangVM {
    private $code = [];

    public function __construct(array $code)
    {
        $this->code = $code;
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
        $stack = [];
        $regs = [3];
        $mem = [];
        for ($i = 0; $i < count($code); $i++) {
            [$lineNumber, $op, $reg, $data] = $code[$i];
            switch ($op) {
                case Operation::reg:
                    $regs[$reg] = $data;
                    break;
                case Operation::psh:
                    array_push($stack, $regs[$reg]);
                    break;
                case Operation::pop:
                    if ($reg == 9) {
                        dd($i, count($code));
                    }
                    $regs[$reg] = array_pop($stack);
                    break;
                case Operation::add:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left + $right;
                    break;
                case Operation::sub:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left - $right;
                    break;
                case Operation::mul:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left * $right;
                    break;
                case Operation::div:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left / $right;
                    break;
                case Operation::mem:
                    $result = $regs[$reg];
                    $mem[$data] = $result;
                    break;
                case Operation::get:
                    if (!array_key_exists($data, $mem)) {
                        throw new \Exception("Undefined variable '$data' at line $lineNumber.");
                    }
                    $value = $mem[$data];
                    $regs[$reg] = $value;
                    break;
                case Operation::eql:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left == $right;
                    break;
                case Operation::neq:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left != $right;
                    break;
                case Operation::grt:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left > $right;
                    break;
                case Operation::lst:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left < $right;
                    break;
                case Operation::gte:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left >= $right;
                    break;
                case Operation::lte:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left <= $right;
                    break;
                case Operation::lor:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left || $right;
                    break;
                case Operation::and:
                    $left = $regs[1];
                    $right = $regs[2];
                    $regs[$reg] = $left && $right;
                    break;
                case Operation::not:
                    $left = $regs[1];
                    $regs[$reg] = !$left;
                    break;
                case Operation::cat:
                    $left = $regs[1];
                    $right = $regs[2];
                    if (is_bool($left)) {
                        $left = $left ? 'V' : 'F';
                    }
                    if (is_bool($right)) {
                        $right = $right ? 'V' : 'F';
                    }
                    $regs[$reg] = $left . $right;
                    break;
                case Operation::out:
                    $str = $regs[$reg];
                    echo $str . "\n";
                    break;
                case Operation::ifi:
                    // dd($regs[0], $regs[1], $i, count($code));
                    $condition = $regs[0];
                    if (!$condition) {
                        // dd($i, $regs[1]);
                        $i = $data;
                    }
                    break;
                case Operation::jmp:
                    $i = $data;
                    break;
            }
        }
        // echo json_encode($mem, JSON_PRETTY_PRINT) . "\n";
    }

}
