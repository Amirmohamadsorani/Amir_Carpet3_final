
<?php
include("tag_a.php");
?>
<?php
    $username=$_POST["username"];
    $email=$_POST["email"];
    $password=$_POST["passw"];
    $repassword=$_POST["repassw"];
     include("connect.php");
    mysqli_query($a,"INSERT INTO `carpet`(`username`, `email`, `password`, `repassword`) VALUES
    ('$username','$email','$password','$repassword');");
    mysqli_close($a);
    if ($row) {
        header("Location: header2.php?msg=success");
    } else {
        header("Location: header2.php?msg=error");
    }
        ?>
<?php
include("footer2.html");
?>


