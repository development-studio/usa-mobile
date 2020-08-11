<?php

namespace application\classes;

class Form {
    public static function pay() {
        $errors = false;

        if ($_POST) {
            $server = $_POST['server'];
            $nickname = $_POST['nickname'];
            $sum = $_POST['sum'];

            if (!($server && $nickname && $sum))
                $errors[] = 'Заполните все поля!';

            if (!$errors)
                header('Location: https://unitpay.ru/pay/165761-ad869?sum=' . $sum . '&account=' . $nickname . '&desc=' . $server);
        }

        return $errors;
    }
}

?>