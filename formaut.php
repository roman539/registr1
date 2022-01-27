<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

</head>
<body>

<p>Авторизация</p>
<div >
    <form action="auteriz.php" method="get" name="form_aut" onsubmit="" autocomplete="no">
        <label for="login">Логин пользователя:</label>
        <input type="text" name="loginaut"  placeholder="Не менее 6 символов" value="<?php if(isset($_GET['loginaut'])){echo $_GET['loginaut'];}  ?>"/><?php  if(isset($_SESSION['loginaut'])) {echo $_SESSION['loginaut'];}  ?>
        <div >
            <label for="password">Пароль пользователя:</label>
            <input type="password" name="passwordaut"  placeholder="Не менее 6 символов" value="<?php if(isset($_GET['passwordaut'])){echo $_GET['passwordaut'];}  ?>"/><?php  if(isset($_SESSION['passwordaut'])) {echo $_SESSION['passwordaut'];}  ?>
            <div>
                </label>
                <input type="submit" value="Войти" name="btn-submit1"  />
            </div>
</body>
</html>