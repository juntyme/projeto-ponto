<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if ($uri === '/' || $uri === '' || $uri === '/index.php') {
    $uri = 'login.php';
}

require_once(CONTROLLER_PATH . "/{$uri}");

// loadView('login', ['texto' => 'a']);

// require_once(MODEL_PATH . '/Login.php');

// $login = new Login([
//     'email' => 'admin@cod3r.com.br',
//     'password' => 'a'
// ]);

// try {
//     $login->checkLogin();
//     echo 'Deus certo :)';
// } catch (Exception $e) {
//     echo "Problema no Login :(";
// }

// // $user = new User(['name' => 'Jonas', 'email' => 'suporte@yesflex.com.br']);
// // echo $user->getSelect('id, name');


// print_r(User::get(['id' => 1], 'name, email'));
// echo '<br/>';
// print_r(User::get());

// foreach (User::get([], 'name') as $user) {
//     echo $user->name;
//     echo '<br>';
// }
