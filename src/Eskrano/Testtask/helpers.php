<?php

if (! function_exists('_log')) {
    function _log($string)
    {
        echo $string;
        echo '(lenght : '.mb_strlen($string).')';
    }
}