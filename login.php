<?php
    session_start();

    if(isset($_SESSION['email'])){
        header('location:index.php');
    }

    if(isset($_POST['loginBtn'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        if($email == '' && $password == ''){
            $_SESSION['email'] = $email;
            header('location:index.php');
        }
    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login todo list</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div id="login-container">
        <label for="form-login">Đăng nhập</label>
        <form action="login.php" method="post" id="form-login">
            <label for="email">Tài khoản</label><br>
            <input type="email" name="email" id="email" value="" placeholder="Email" size="25"><br>
            <br>
            <label for="password">Mật khẩu</label><br>
            <input type="password" name="password" id="password" value="" placeholder="Password" size="25"><br>
            <br>

            <button type="submit" class="button" name="loginBtn" id="loginBtn"> Đăng nhập</button>
            <button type="submit" class="button" name="addAccount" id="addAccount"> Đăng ký</button>
        </form> 
    </div>
    <script type="module" src="core/login.js"></script>
</body>
</html>