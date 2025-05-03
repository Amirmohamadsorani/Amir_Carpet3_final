
<?php
include("tag_a.php")
?>
<div class="bg-light text-dark pt-4 animate__animated animate__fadeInUp">
<?php
include("connect.php");
$b=mysqli_query($a,"SELECT * FROM `mahsol`");
mysqli_close($a);
?>
<table class="table" class=" animate__animated animate__fadeInLeft animate__delay-1s">
  <?php
  $counter = 0;
$row=mysqli_fetch_array($b);
            while($row)
            {
              $counter++; ?>
              
  <td class="td01" > 
    <a href="product_detail.php?id=<?php echo($row["id"]);?>">
      <img src="<?php echo($row["imageurl"]); ?>" class="img-fluid img-thumbnail">
    </a>
    <h4>  <?php echo($row["name"]);?></h4>
</td>
<?php
             $row=mysqli_fetch_array($b);           
             if($counter % 3 == 0)
             echo("</tr><tr>");
          }
          if($counter % 3 != 0)
          { echo("</br>");
  echo("</tr>");
 
}
            ?>
                   
                  </table>
                </div>
                    

                    <?php
include("footer2.html");
?>
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</body>
</html>