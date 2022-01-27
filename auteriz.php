<?php
require_once 'aut.php';

require_once  'file.php';
if (empty($_GET['passwordaut']) or empty($_GET['loginaut'])){
    unset($_SESSION['loginaut']);
    unset($_SESSION['passwordaut']);
    $_SESSION['loginaut'] = 'Заполните все поля';
    include 'formaut.php';
}
else {

    $getlogin = $_GET['loginaut'];
    $getpassword = $_GET['passwordaut'];

    $hero = new aut($getlogin, $getpassword);

    $fike = new file('json/package.json');
    if (!$fike->searchfile($getlogin, $getpassword)) {

    $_SESSION['loginaut']='Такого пользователя нету зарегестрируйтесь';
        require_once 'formaut.php';
    }
    else {
    $_SESSION['aut']='';
    echo 'привет'. '  ' .$_SESSION['name'] .' <a href="index.php">Выход</a>';
    }
}
















