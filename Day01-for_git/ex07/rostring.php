#!/usr/bin/php
<?php
    if ($argc > 1)
    {
        for ($i = 0; $i < $argc; $i++)
        {
            $str = trim(preg_replace('/\s+/', ' ', $argv[$i]));
            $strn = explode(" ", $str);
        }
        for ($i = 1; $i < count($strn); $i++)
            echo $strn[$i].' ';
        echo $strn[0];
    }
?>