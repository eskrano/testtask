<?php

namespace Eskrano\Testtask\Contracts;

interface StorageContract
{
    /**
     * Save array to some file foramt
     * @param $data array
     * @return bool
     */
    public function save($data);

    public function setSavePath($path);

    public function getSavePath();

    public function getConverter();
    
    public function setConverter(ConverterContract $converter);
}