<?php

	class register
    {
        public $logine;
        public $password;
        public $password1;
        public $mail;
        public $name3;

        public function __construct($logine,$password,$password1,$mail,$name3)
        {
            $this->logine = $logine;
            $this->password=$password;
            $this->password1=$password1;
            $this->mail=$mail;
            $this->name3=$name3;
        }

        public function checkLogin(){
            if($this->delspase($this->logine)){
                $_SESSION['login'] = 'Пробелы недопустимы';
                return false;
            }
            else {
            if ($this->logine== null or strlen($this->logine) < 6) {
                $_SESSION['login'] = 'Неправильный логин';
                return false ;
                 }

            }
            unset($_SESSION['login']);
            return true;
        }
        public function checkPass(){
         if($this->delspase($this->password)){
         $_SESSION['password'] = 'Пробелы недопустимы';
         return false;
         }
         else   {
                if ((!preg_match('#([a-z])#', $this->password)  and !preg_match('#([а-яё])#u', $this->password)) or !preg_match('#[0-9]#', $this->password)  or   strlen($this->password) < 6) {
                    $_SESSION['password'] = 'Неправильный пароль';
                    return false;
                }
            }
         unset($_SESSION['password']);
         return true;
        }
        public function comparisonPass(){
        if($this->delspase($this->password1)){
            $_SESSION['password1'] = 'Пробелы недопустимы';

            return false;
        }
        else{
            if ($this->password!= $this->password1) {
                $_SESSION['password1'] = 'Пароли не совпадают';
                return false;
            }

        }
        unset($_SESSION['password1']);
        return true;

        }
        public function mail(){
          if($this->delspase($this->mail)) {
            $_SESSION['mail'] = 'Пробелы недопустимы';
            return false;
             }
        else{

            if(preg_match_all('#@#',  $this->mail)!=1 ){
                $_SESSION['mail'] = 'Неправильный mail';
                return false;

            }
         }
        unset($_SESSION['mail']);
        return true;
        }
        public function Name() {
            if($this->delspase($this->name3)){
                $_SESSION['Name']='Пробелы недопустимы';
                return false;
            }
            else {

                $res1 = preg_match('#[^(a-zA-Z)]#',  $this->name3);
                $res2=preg_match('#[^(а-яёА-Я)]#u',  $this->name3);

                if (strlen ($this->name3)<=1 or (($res1 and $res2) or (!$res1 and !$res2))) {
                    $_SESSION['Name']='Неправильное имя';
                    return false;
                }

            }

            unset($_SESSION['Name']);
            return true;
        }
        public function delspase($tt)
        {

            return preg_match('/\s+/',$tt);
        }

    }

	?>





