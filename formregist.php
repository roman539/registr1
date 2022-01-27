<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>
<?php

require_once 'regup.php';
require_once  'file.php';
?>
<p>Регистрация</p>
<div id="form_reg">
    <form action="regup.php" method="get" name="Form" onsubmit="" autocomplete="no">
        <label for="login">Логин пользователя:</label>
        <input type="text" name="login"  placeholder="Не менее 6 символов" value="<?php if(isset($_GET['login'])){echo $_GET['login'];}  ?>"/><?php  if(isset($_SESSION['login'])) {echo $_SESSION['login'];}  ?>
        <div >
            <label for="password">Пароль пользователя:</label>
            <input type="password" name="password"  placeholder="Не менее 6 символов" value="<?php if(isset($_GET['password'])){echo $_GET['password'];}  ?>"/> <?php  if(isset($_SESSION['password'])) {echo $_SESSION['password'];}  ?>
            </div>
                <label for="password">Повторите пароль:</label>
                <input type="password" name="password1"  placeholder="Не менее 6 символов" value="<?php if(isset($_GET['password1'])){echo $_GET['password1'];}  ?>"/><?php  if(isset($_SESSION['password1'])) {echo $_SESSION['password1'];}  ?>
                <div>
                    </div>
                        <label for="text">Введите @mail:</label>
                        <input type="text" name="mail"  placeholder="email" value="<?php if(isset($_GET['mail'])){echo $_GET['mail'];}  ?>"/><?php  if(isset($_SESSION['mail'])) {echo $_SESSION['mail'];}  ?>
                        <div>
                        </div>
                        <div>
                            <label for="text">Введите Имя:</label>
                            <input type="text" name="Name"  placeholder="Только буквы не менее 2" value="<?php if(isset($_GET['Name'])){echo $_GET['Name'];}  ?>"/><?php  if(isset($_SESSION['Name'])) {echo $_SESSION['Name'];}  ?>

                            </div>
                                </label>
                                <input type="submit" value="Войти" name="btn-submit1"  />
    </form>
</body>
</html>