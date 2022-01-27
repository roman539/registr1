<?php
    require_once 'register.php';
         class aut extends register
    {

        public function __construct($logine, $password)
        {
            $this->logine = $logine;
            $this->password = $password;
        }
    }

 ?>
