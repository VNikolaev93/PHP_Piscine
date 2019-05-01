#!/usr/bin/php
<?php
    function ft_split ($str)
    {
        $str = trim(preg_replace('/\s+/',' ', $str));
        $str = explode(" ", $str);
        sort($str);
        return $str;
    }
?>