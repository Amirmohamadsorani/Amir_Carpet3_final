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
<div class="d-flex justify-content-center">
<div class="card shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 100%; width: 100%; max-width: 700px;">

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">نام موکت</label>
    <input type="text" class="form-control border border-dark" id="name"  value= <?php echo($row["name"]);?> name="name" readonly >
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">قیمت محصول (ریال)</label>
    <input type="text" class="form-control border border-dark" id="ghymat" value= <?php echo($row["ghymat"]);?> name="ghymat" readonly>  
  </div>
  <?php
  $row=mysqli_fetch_array($b);
}
?>
    <div class="col-md-4">
      <label for="inputState" class="form-label"  >متراژ موکت (متر مربع)</label>
      <input type="text" class="form-control border border-dark" id="meter" name="meter" oninput="TotalPrice()">
    </div>
    <div class="col-md-4">
      <label for="inputState" class="form-label">قیمت کل (ریال)</label>
      <input type="text" class="form-control border border-dark" id="totalPrice" name="totalprice" readonly>
    </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">نام و نام خانوادگی</label>
    <input type="text" class="form-control border border-dark" id="inputPassword4" name="username">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">شماره تماس</label>
    <input type="text" class="form-control border border-dark" id="inputCity" name="mobile">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">ادرس محل زندگی  </label>
    <input type="text" class="form-control border border-dark" id="inputAddress" name="address" placeholder="استان و شهر و خیابان و کوچه پلاک و طبقه">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">ایمیل</label>
    <input type="text" class="form-control border border-dark" id="inputEmail4" name="email">
  </div>
  <div class="col-12">
  </div>
</br>
<div class="col-12">
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">ثبت سفارش</button>
  </div>
  </div>

</form>
</div>
</div>
<script>
  function TotalPrice() {
    var price = parseFloat(document.getElementById("ghymat").value); 
    var meter = parseFloat(document.getElementById("meter").value);

    if (!isNaN(price) && !isNaN(meter)) {
      var total = price * meter;  
      document.getElementById("totalPrice").value = total.toFixed(0);  
    } else {
      document.getElementById("totalPrice").value = ''; 
    }
  }
</script>

<?php
include("footer2.html");
?>
