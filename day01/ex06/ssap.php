#!/usr/bin/php
<?php
function ft_split ($str)
{
    $str = trim(preg_replace('/\s+/',' ', $str));
    $str = explode(" ", $str);
    sort($str);
    return $str;
}
if ($argc > 1)
{
    $arr = array();
    for ($i = 1; $i < count($argv); $i++) {
        $str = trim(preg_replace('/\s+/', ' ', $argv[$i]));
        $del = ft_split($str);
        for ($j = 0; $j < count($del); $j++) {
            $word = array_push($arr, $del[$j]);
        }

    }
    sort($arr);
    for ($i = 0; $i < count($arr); $i++)
        echo ($arr[$i]."\n");
}
?>