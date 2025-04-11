
<?php
include("tag_a.php")
?>
<?php
$id=$_GET["id"];
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `mahsol` WHERE `id`=$id;");
mysqli_close($a);
$row=mysqli_fetch_array($b);
            while($row)
            {
            ?>
            </br>
    </br>
    </br>
    <b> <?php echo($row["name"]);?></b>
    <a href="product_detail.php?id=<?php echo($row["id"]);?>">
      <img src="<?php echo($row["imageurl"]); ?>" class="figure-img img-fluid rounded" class="rounded mx-auto d-block"   >
    </a>
            </br>
 <span class="p"> قیمت : <?php echo($row["ghymat"]);?> &nbsp;ریال</span>
<p class="p">توضیحات : <?php echo($row["explane"]);?></p class="p">
<a href="sellform.php?id=<?php echo($row["id"]);?>" class="cta-button">برای خرید محصول کلیک کنید</a></br>
</br>
</br>
  <?php
             $row=mysqli_fetch_array($b);   

            }
            include("footer2.html");
?>