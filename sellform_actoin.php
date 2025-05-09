<?php
include("tag_a.php")
?>
<?php
if (
    isset($_POST["username"], $_POST["meter"], $_POST["mobile"], $_POST["address"], $_POST["email"]) &&
    !empty($_POST["username"]) &&
    !empty($_POST["meter"]) &&
    !empty($_POST["mobile"]) &&
    !empty($_POST["address"]) &&
    !empty($_POST["email"])
) {
    header("Location: header4.php?msg=success");
} else {
    header("Location: header4.php?msg=error");
    exit;
}
?>
<?php
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$username=$_POST["username"];
$meter=$_POST["meter"];
$mobile=$_POST["mobile"];
$address=$_POST["address"];
$email=$_POST["email"];
$totalprice=$_POST["totalprice"];
$idk=$_SESSION["id"];
include("connect.php");
$b=mysqli_query($a,"INSERT INTO `sellform_panel`(`username`, `meter` ,`ghymat`,`mobile`,`address`,`email`,`carpet_name`,`id`,`idk`,`totalprice`) VALUES ('$username','$meter','$ghymat','$mobile','$address','$email','$name','$id','$idk','$totalprice')");
mysqli_close($a);
?>

 <script>
 location.replace("header4.php");
</script>   

<?php
include("footer2.html");
?>




