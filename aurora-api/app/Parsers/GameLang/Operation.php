<?php

namespace App\Parsers\GameLang;

enum Operation implements \JsonSerializable
{
    case reg; // register
    case psh; // push
    case pop; // pop
    case add; // math add operation
    case sub; // math substract operation
    case mul; // math muliplication operation
    case div; // math div operation
    case lor; // logical or
    case and; // logical and
    case grt; // greater than
    case not; // not
    case lst; // less than
    case gte; // greater than or equal
    case lte; // less than or equal
    case eql; // equal
    case neq; // not equal
    case mem; // store in memory
    case get; // get from memory
    case out; // output
    case inp; // input
    case ifi; // if instruction
    case cat; // concatenate
    case jmp; // jump
    case delta; // delta

    public function jsonSerialize(){
        return $this->name;
    }
}
