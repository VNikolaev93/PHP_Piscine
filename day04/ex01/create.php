<?php
if ($_POST["login"] && $_POST["passwd"] && $_POST["submit"] == "OK")
{
    if (!(file_exists("../private"))) //если папки Private нет
        mkdir("../private");         //то создаем ее
    if (!(file_exists("../private/passwd")))        //если файла passwd нет
        file_put_contents("../private/passwd");     //то создаем его

}