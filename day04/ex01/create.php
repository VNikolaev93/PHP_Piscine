<?php
    if ($_POST['login'] && $_POST['passwd'] && $_POST['submit'] == "OK") {
        if (!file_exists('../private')) {
            mkdir("../private");
        }
        if (!file_exists('../private/passwd')) {
            file_put_contents('../private/passwd', null);
        }
        $user = unserialize(file_get_contents('../private/passwd'));
        if ($user) {
            $ex_user = 0;
            foreach ($user as $key => $value) {
                if ($value['login'] === $_POST['login'])
                    $ex_user = 1;
            }
        }
        if ($ex_user) {
            echo "ERROR\n";
        } else {
            $temp['login'] = $_POST['login'];
            $temp['passwd'] = hash('whirlpool', $_POST['passwd']);
            $user[] = $temp;
            file_put_contents('../private/passwd', serialize($user));
            echo "OK\n";
        }
    } else {
        echo "ERROR\n";
    }
?>