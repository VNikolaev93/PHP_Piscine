#!/usr/bin/php
<?php
    if ($argc > 0)
        echo trim(preg_replace('/[\t\s]+/', ' ', $argv[1]."\n"));
    else
        exit;
?>