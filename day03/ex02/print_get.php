<?php
if ($_GET) {
    foreach ($_GET as $key => $value) //идем по массиву
        echo($key . ': ' . $value . "\n");   //выводя ключ и его значение
}
?>