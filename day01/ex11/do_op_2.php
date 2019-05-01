#!/usr/bin/php
<?php
    if (isset($argv) && isset($argv[1]) && $argc == 2) {
        if (preg_match("/^ *(-?[0-9]+) *([\+\-\*\/\%]) *(-?[0-9]+) *$/", $argv[1], $value))
        {
            $num1 = trim($value[1]);
            $znak = trim($value[2]);
            $num2 = trim($value[3]);
            if ($znak == '+')
                echo ($num1 + $num2);
            else if ($znak == '-')
                echo ($num1 - $num2);
            else if ($znak == '*')
                echo ($num1 * $num2);
            else if ($znak == '/')
                echo ($num1 / $num2);
            else if ($znak == '%')
                echo ($num1 % $num2);
        }
        else
            echo "Syntax Error";
    }
    else
        echo "Incorrect Parameters";
    echo ("\n");
?>