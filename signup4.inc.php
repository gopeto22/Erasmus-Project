<?php
$db=mysqli_connect("localhost","root","","loginsystem");
$sql="SELECT * FROM users";
$result=mysqli_query($db,$sql);
if(isset($_POST['signup-button']))
{
    $check=false;
    $username=$_POST['uid'];
    $email=$_POST['mail'];
    $password=$_POST['pwd'];
    $passwordRepeat=$_POST['pwd-repeat'];

    
        $sql="INSERT INTO users('uid','mail','pwd','pwd-repeat') VALUES('$username','$email','$password',' $passwordRepeat')";
        mysqli_query($db,$sql);
        $_SESSION['uid']=$username;
        header("location:index.php");//redirect to home page
    
}
?>

<!Doctype html>
<html lang="en-US">
<head>
<title>Sign Up Form</title>
<meta charset ="UTF-8">
<meta name="author" content="Georgi Iliev">
<meta name="description" content="BoxRec">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<body>

<?php
    if(isset($_SESSION['message']))
    {
        echo "<div id='error_msg'>".$_SESSION['message']."</div>";
        unset($_SESSION['message']);
    }
?>

        <div class="loginbox">

                <div class="leftbox">
                    <form method="POST" action="index.php">
                        <h1>Sign Up</h1>
                        <input type="text" name="uid" placeholder="Username">
                        <input type="text" name="mail" placeholder="Email">
                        <input type="password" name="pwd" placeholder="Password">

                        <input type="password" name="pwd-repeat" placeholder="Repeat Password">

                        <input type="submit" name="signup-button" value="Sign Up">

                    <p><a href="index.php" target="_top">Already have an account?</a></p>
                    </form>
                </div>

                
       
</body>
</html>





