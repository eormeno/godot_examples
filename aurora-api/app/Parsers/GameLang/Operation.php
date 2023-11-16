<?php

namespace App\Parsers\GameLang;

enum Operation implements \JsonSerializable
{
    case REG; // register
    case PSH; // push
    case POP; // pop
    case ADD; // math add operation
    case SUB; // math substract operation
    case MUL; // math muliplication operation
    case DIV; // math div operation
    case LOR; // logical or
    case AND; // logical and
    case GRT; // greater than
    case NOT; // not
    case LST; // less than
    case GTE; // greater than or equal
    case LTE; // less than or equal
    case EQL; // equal
    case NEQ; // not equal
    case MEM; // store in memory
    case GET; // get from memory
    case OUT; // output
    case IFI; // if instruction
    case CAT; // concatenate
    case JMP; // jump
    case DELTA; // delta
    case PSHCS; // push call stack
    case POPCS; // pop call stack
    case LCALL; // line call
    case CALL; // call
    case SYS; // system
    case AWAIT; // await
    case END; // end

    public function jsonSerialize()
    {
        return $this->name;
    }
}
