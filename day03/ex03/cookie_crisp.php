<?php
if ($_GET["action"] === "set")
    setcookie($_GET["name"], $_GET["value"], time() + 3600); //установить cookie на час (3600 секунд)
else if ($_GET["action"] === "get")
    echo $_COOKIE[$_GET["name"]]."\n";
else if ($_GET["action"] === "del")
    setcookie($_GET["name"], " ", time() - 3600); //удалить cookie

//    setcookie($_GET["name"], $_GET["value"], time() - 3600); //удалить cookie

?>