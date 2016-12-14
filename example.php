<?php

require __DIR__ . '/vendor/autoload.php';

use Eskrano\Testtask\Storage;

$storage = new Storage(
    new \Eskrano\Testtask\Converters\JsonConverter()
);

$storage->setSavePath(__DIR__ . '/converted.txt');

// u can set converter
//$storage->setConverter(new \Eskrano\Testtask\Converters\XMLConverter());

$storage->save([
    'test'  =>  1,
    'test2'  => ' Lorerrerere',
    'testt' =>  [
        'test'  =>  1,
        'rss'   =>  'trs'
    ]
]);