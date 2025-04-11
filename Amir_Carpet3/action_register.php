
<?php
include("header2.php");
?>
<?php
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["passw"];
    $repassword=$_POST["repassw"];
    $c=mysqli_connect("localhost","root","","amir");
    mysqli_query($c,"INSERT INTO `carpet`(`username`, `email`, `password`, `repassword`) VALUES
    ('$username','$email','$password','$repassword');");
    mysqli_close($c);
    if ($row) {
        header("Location: header2.php?msg=success");
    } else {
        header("Location: header2.php?msg=error");
    }
        ?>
<?php
include("footer2.html");
?>


