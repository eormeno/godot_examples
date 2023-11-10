<?php

namespace App\Parsers\GameLang;

class GameLangMicroinstruction
{
    private int $source_code_line_number;
    private Operation $operation;
    private int $register_index;
    private $data;
    private $aux;
    private $label;

    public function __construct(int $line, Operation $operation, int $register_index, $data, $aux, $label)
    {
        $this->source_code_line_number = $line;
        $this->operation = $operation;
        $this->register_index = $register_index;
        $this->data = $data;
        $this->aux = $aux;
        $this->label = $label;
    }

    /**
     * Creates a REG microinstruction (MI) object.
     * This MI stores the given data in the register specified by register_index.
     *
     * @param int $source_code_line
     * @param int $register_index
     * @param mixed $data
     * @param string|null $label
     */
    public static function REG(int $source_code_line, int $register_index, $data, $label = null)
    {
        return new GameLangMicroinstruction($source_code_line, Operation::reg, $register_index, $data, null, $label);
    }
    /**
     * Creates a MEM microinstruction (MI) object.
     * This MI stores tee value of the register specified by register_index in a memory location
     * specified by identificator.
     *
     * @param int $source_code_line
     * @param int $register_index
     * @param mixed $identificator
     * @param string|null $label
     */
    public static function MEM(int $source_code_line, int $register_index, $identificator, $label = null)
    {
        return new GameLangMicroinstruction($source_code_line, Operation::mem, $register_index, $identificator, null, $label);
    }

    /**
     * Creates a GET microinstruction (MI) object.
     * This MI gets the value of the memory with the given identificator and stores it in the
     * register.
     */
    public static function GET(int $source_code_line, int $register_index, $identificator, $label = null)
    {
        return new GameLangMicroinstruction($source_code_line, Operation::get, $register_index, $identificator, null, $label);
    }
}
