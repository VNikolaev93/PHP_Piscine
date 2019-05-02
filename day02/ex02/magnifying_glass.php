#!/usr/bin/php
<?php
//if ($argc == 2)
//{
//	$hendle = fopen($argv[1], 'r'); //открываем файл, написанный в argv[1]. 'r' - только для чтения
//	while (!feof($hendle))    //пока открытый файл не закончился
//	{
//		$line = fgets($hendle);   //читаем его
//		$line = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches)
//		{
//			return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
//		}, $line);
/*		$line = preg_replace_callback('/<a.*?>(.*?)</', function ($matches)*/
//		{
//			return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
//		}, $line);
//		echo $line;
//	}
//}


//

/* фильтр, подобный тому, что используется в системах Unix
 * для преобразования заглавных букв в начале параграфа в строчные */
$fp = fopen($argv[1], "r");
while (!feof($fp)) {
    $line = fgets($fp);
    $line = preg_replace_callback('/<a.*?title="(.*?)">/', function ($matches) {
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
        },
        $line
    );
    $line = preg_replace_callback('/<a.*?>(.*?)</', function ($matches)
		{
            return (str_replace($matches[1], strtoupper($matches[1]), $matches[0]));
		},
    $line);
        echo $line;
}
?>