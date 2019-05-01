#!/usr/bin/php
<?php

if ($argc < 2)
    exit();

function ft_push(&$res, $arr)
{
    for ($i = 0; $i < count($arr); $i++) {
            array_push($res, $arr[$i]);
        }
}

function ft_split($str)
{
    $str = trim($str);
    $str = preg_replace('/\s+/', ' ', $str);
    $arr = explode(" ", $str);
    return ($arr);
}

$array = [];

for ($i = 1; $i < $argc; $i++) {
    $split = ft_split($argv[$i]);
    ft_push($array, $split);
}

function cmp($a, $b){

        $i = 0;
        $line = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";
        while (($i < strlen($a)) || ($i < strlen($b)))
        {
            $a_index = stripos($line, $a[$i]);
            $b_index = stripos($line, $b[$i]);
            if ($a_index > $b_index)
                return (1);
            else if ($a_index < $b_index)
                return (-1);
            $i++;
        }
}


usort($array, "cmp");

foreach ($array as $val){
    echo "$val\n";
}

?>