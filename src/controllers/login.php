<?php

loadModel('Login');
session_start();

if (count($_POST) > 0) {
    $login = new Login($_POST);
    try {

        $user = $login->checkLogin();
        $_SESSION['user'] = $user;

        header('location: day_records.php');
    } catch (AppException $e) {
        $exception = $e;
    }
}


loadView('login', $_POST + ['exception' => $exception]);
