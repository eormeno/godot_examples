<?php
namespace App\Parsers\GameLang;

class GameLangInterCode {
    private $code = array();

    public function getCode()
    {
        return $this->code;
    }

    public function lastIntermediateCodeLine(): int
    {
        return count($this->code) - 1;
    }

    public function add(GameLangMicroinstruction $microinstruction) : int
    {
        $this->code[] = $microinstruction;
        return $this->lastIntermediateCodeLine();
    }

}
