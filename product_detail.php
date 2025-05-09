<?php
include("tag_a.php")
?>
<?php
$id=$_GET["id"];
include("connect.php");

$b=mysqli_query($a,"SELECT * FROM `mahsol` WHERE `id`=$id;");
mysqli_close($a);
$row=mysqli_fetch_array($b);
            while($row)
            {
            ?>
            </br>
</br>
</br>
<div class="container">
  <div class="d-flex justify-content-center">
    <div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 100%; width: 100%; max-width: 700px;" >
      <img src="<?php echo($row["imageurl"]); ?>" class="card-img-top img-fluid rounded mx-auto d-block" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?php echo($row["name"]);?></h5>
        <p class="card-text"><?php echo($row["explane"]);?></p>
        <p class="card-text"> قیمت : <?php echo($row["ghymat"]);?></p>
        <div class="d-flex justify-content-center">
          <a href="sellform.php?id=<?php echo($row["id"]);?>" class="cta-button btn btn-primary">برای خرید محصول کلیک کنید</a></br>
        </div>
      </div>
    </div>
  </div>
</div>
            <?php
             $row=mysqli_fetch_array($b);   
            }
            include("footer2.html");
?>

