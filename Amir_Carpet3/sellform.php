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
<form action="sellform_actoin.php" method="POST" enctype="multipart/form-data"></br>
</br>
</br>
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نام موکت</label>
    <input type="text" class="form-control" id="inputPassword4" name="carpet_name" value= <?php echo($row["name"]);?> disabled >
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">قیمت محصول</label>
    <input type="text" class="form-control" id="inputCity" name="ghymat" value= <?php echo($row["ghymat"]);?> disabled>  
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
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        انتخاب من را به خاطر بسپار
      </label>
    </div>
  </div>
</br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">ثبت سفارش</button>
  </div>
</form>

<?php
include("footer2.html");
?>