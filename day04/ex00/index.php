<?php
session_start();
//$_GET["login"] != NULL && $_GET["passwd"] != NULL &&
if ($_GET["submit"] == "OK") //если пользователь вбил свой логин, пароль и нажал submit
{
    $_SESSION["login"] = $_GET["login"];
    $_SESSION["passwd"] = $_GET["passwd"];
}



//echo 'Добро пожаловать на страницу 1';
//
//$_SESSION['favcolor'] = 'green';
//$_SESSION['animal']   = 'cat';
//$_SESSION['time']     = time();
//
//// Работает, если сессионная cookie принята
//echo '<br /><a href="page2.php">page 2</a>';
//
//// Или можно передать идентификатор сессии, если нужно
//echo '<br /><a href="page2.php?' . SID . '">page 2</a>';
?>


<html><body>
<form method="GET" action="index.php">
    Username: <input type="text" name="login" value="<?= $_SESSION["login"] ?>" />
    <br />
    Password: <input type="text" name="passwd" value="<?= $_SESSION["passwd"] ?>" /> <br />
    <input type="submit" name="submit" value="OK" />
</form>
</body></html>

