<?php

namespace Eskrano\Testtask\Converters;

use Eskrano\Testtask\Contracts\ConverterContract;

class JsonConverter implements ConverterContract
{
    private $pretty_print = true;

    public function convert($input)
    {
        return json_encode($input,
                ($this->pretty_print ? JSON_PRETTY_PRINT : 0)
            );
    }

    public function setPrettyPrint($value)
    {
        $this->pretty_print = $value;

        return $this;
    }
}