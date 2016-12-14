<?php

namespace Eskrano\Testtask\Contracts;

interface ConverterContract
{
    /**
     * Convert array to some format
     * @param $input array
     * @return string
     */
    public function convert($input);
}