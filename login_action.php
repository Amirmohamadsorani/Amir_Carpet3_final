
<?php
include("tag_a.php");
?>

<?php
    $username=$_POST["username"];
    $password=$_POST["passw"];
    include("connect.php");

    $result=mysqli_query($a," SELECT * FROM `carpet` WHERE 
    `username` = '$username' AND `password` = '$password';");
    $row=mysqli_fetch_array($result);
    mysqli_close($a);
    if ($row) {
        header("Location: header3.php?msg=success");
        $_SESSION["id"]=$row["id"];
        $_SESSION["login"] = true;
        $_SESSION["admin"]=$row["admin"];
    } else {
        header("Location: header3.php?msg=error");
    }
    exit();
?>

<?php
include("footer2.html");
?>
