<?php
echo'fsafsa';
if(isset($_POST['login-submit'])){
require 'dbh.inc.php';


$mailuid=$_POST['mailuid'];
$password=$_POST['pwd'];
if (empty($mailuid)||empty($password)){
 header("Location:../index.php?error=emptyfields");
    exit();
}
else{
    $sql="SELECT*FROM users WHERE uidUsers=? OR emailUsers=?;";
    $stmt = mysqli_stmt_init($conn);}

$_SESSION['userId'] =$row['idUsers'];
$_SESSION['userId'] =$mailuid;
header("Location:../index.php");
            exit();
}

?>