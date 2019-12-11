<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div class="header-login">
    <?php
    if(isset($_SESSION['userId'])) {
        echo '<form action="includes/signup.inc.php" method="post">
        <buton type="submit" name="logout-submit">Logout</button>
        </form>';
    }
    else{
        echo '<form action="includes/login.inc.php" method="post">
        <input type="text" name="mailuid" placeholder="Username/E-mail">
        <input type="password" name="pwd" placeholder="Password">
        <button type="submit" name="login-submit">Login</button>
        </form>
        <a href="signup.php">Signup</a>';
    }
    ?>
</div>
