<?php





if (empty($_GET['login']) or empty($_GET['password']) or empty($_GET['password1']) or empty($_GET['mail']) or empty($_GET['Name'])) {
    unset($_SESSION['password']);
    unset($_SESSION['password1']);
    unset($_SESSION['mail']);
    unset($_SESSION['Name']);

      $_SESSION['login'] = 'Заполните все поля';
  require('formregist.php');
    }
else {
    require_once 'register.php';
    require_once 'file.php';

        $login = $_GET['login'];
        $password = $_GET['password'];
        $password1 = $_GET['password1'];
        $mail = $_GET['mail'];
        $name = $_GET['Name'];


        $das = new register($login, $password, $password1, $mail, $name);


        if ($das->checkPass()) {
            unset($_SESSION['password']);
        }
        if ($das->comparisonPass()) {
            unset($_SESSION['password1']);
        }

        if ($das->mail()) {
            unset($_SESSION['mail']);
        }

        if ($das->Name()) {
            unset($_SESSION['Name']);
        }


        if ($das->checkLogin() and $das->checkPass() and $das->comparisonPass() and $das->mail() and $das->Name()) {



            $zap = new file('json/package.json');
            $peremen = ['login' => $_GET['login'], 'password' => $_GET['password'], 'name' => $_GET['Name'], 'mail' => $_GET['mail']];
            $zap->writefile($peremen);
            unset($_SESSION['login']);


        }
        else {


            include 'formregist.php';


        }
    }



?>
