<?php
include("tag_a.php")
?>
<?php
if(isset($_SESSION["login"]) && $_SESSION["login"]==true){ 
}else{
  header("Location: login.php");
  exit(); 
}
$id=$_GET["id"];
include("connect.php");

$b=mysqli_query($a,"SELECT * FROM `mahsol` WHERE `id`=$id;");
mysqli_close($a);
$row=mysqli_fetch_array($b);
            while($row)
            {
            ?>
<form action="sellform_actoin.php" method="POST" enctype="multipart/form-data"></br>
</br>
</br>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نام موکت</label>
    <input type="text" class="form-control" id="inputPassword4"  value= <?php echo($row["name"]);?> name="name" readonly >
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">قیمت محصول</label>
    <input type="text" class="form-control" id="inputCity" value= <?php echo($row["ghymat"]);?> name="ghymat"  readonly>  
  </div>
  <?php
  $row=mysqli_fetch_array($b);
}
?>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">نام و نام خانوادگی</label>
    <input type="text" class="form-control" id="inputPassword4" name="username">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">متراژ موکت (متر مربع)</label>
    <input type="text" class="form-control" id="inputCity" name="meter">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">شماره تماس</label>
    <input type="text" class="form-control" id="inputCity" name="mobile">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">ادرس محل زندگی  </label>
    <input type="text" class="form-control" id="inputAddress" name="address" placeholder="استان و شهر و خیابان و کوچه پلاک و طبقه">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ایمیل</label>
    <input type="text" class="form-control" id="inputEmail4" name="email">
  </div>
  <div class="col-12">
  </div>
</br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">ثبت سفارش</button>
  </div>
</form>

<?php
include("footer2.html");
?>