#!/usr/bin/php
<?php
$file = fopen("/var/run/utmpx", "r");
date_default_timezone_set("Europe/Moscow");
while (!feof($file))
{
    $data = fread($file, 628);
    if (strlen($data) == 628)
    {
        $data = unpack("a256user/a4id/a32line/ipid/itype/itime", $data);
        if ($data['type'] == 7)
        {
            echo trim($data['user']) . " ";
            echo trim($data['line']) . " ";
            $time = date("M d H:i", $data['time']);
            echo $time . " \n";
        }
    }
}



//date_default_timezone_set('Europe/Moscow');
//$file = fopen("/var/run/utmpx", "r");
//while ($utmpx = fread($file, 628)){
//    $unpack = unpack("a256a/a4b/a32c/id/ie/I2f/a256g/i16h", $utmpx);
//    $array[$unpack['c']] = $unpack;
//}
//ksort($array);
//foreach ($array as $v){
//    if ($v['e'] == 7) {
//        echo str_pad(substr(trim($v['a']), 0, 8), 8, " ")." ";
//        echo str_pad(substr(trim($v['c']), 0, 8), 8, " ")." ";
//        echo date("M", $v["f1"]);
//        echo str_pad(date("j", $v["f1"]), 3, " ", STR_PAD_LEFT)." ".date("H:i", $v["f1"]);
//        echo "\n";
//    }
//}
?>
