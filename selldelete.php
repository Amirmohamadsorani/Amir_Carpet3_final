<?php
include("tag_a.php")
?>
<?php
$id=$_GET["id"];
include("connect.php");
$b=mysqli_query($a,"DELETE FROM `sellform_panel` WHERE `id`=$id");
mysqli_close($a);
?>
<?php

if($b===true)
{
    
 ?>
 
    <script>
    location.replace("sellform_panel.php");
 </script>   
  
 <?php

}

include("footer2.html");
?>
