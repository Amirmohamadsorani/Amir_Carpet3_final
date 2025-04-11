
<?php
include("tag_a.php");
$id=$_POST["id"];
$name=$_POST["name"];
$ghymat=$_POST["ghymat"];
$explane=$_POST["explane"];
$image=$_FILES["image"]["name"];
$imageurl="picture/".$image;
move_uploaded_file($_FILES["image"]["tmp_name"],$imageurl);
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"UPDATE `mahsol` SET `name`='$name',`ghymat`='$ghymat',`imageurl`='$imageurl',`explane`='$explane',`id`='$id' WHERE `id`=$id;");
mysqli_close($a);
?>
<?php
 if($b===true)
 {
    
 ?>
 
    <script>
    location.replace("index2.php");
 </script>   
  
 <?php

}else
echo("خطا");
?>
<?php
include("footer2.html");
?>