<?php
class Targaryen
{
    public function getBurned() {
        if ($this->resistsFire()) {      //ссылаемся к методу "resistsFire()"
            return "emerges naked but unharmed"; //если успешно, то возвращаем одну строку
        }
        return "burns alive";  //если нет, то возвращаем другую строку
    }
    public function resistsFire() {
        return false;
    }
}
?>