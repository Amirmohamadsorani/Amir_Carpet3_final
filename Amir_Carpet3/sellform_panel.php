<?php
include("tag_a.php")
?>
<div class="row">
<div class="container px-4 px-lg-5">
<div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center"></br>
                        <h2 class='alert alert-success'  role='alert'>لیست خریداران </h2>
                        <hr class="divider"/>
                        </div>


<?php
$a=mysqli_connect("localhost","root","","amir");
$b=mysqli_query($a,"SELECT * FROM `sellform_panel`");
mysqli_close($a);
?>
<table class="table">
  <thead>
    <tr>
      <th scope="col">اسم محصول </th>
      <th scope="col">اسم خریدار</th>
      <th scope="col">متراژ</th>
      <th scope="col">قیمت </th>
      <th scope="col">موبایل </th>
      <th scope="col">ادرس خریدار </th>
      <th scope="col">پست الکترونیکی </th>
    </tr>
  </thead>

            <?php
            $row=mysqli_fetch_array($b);
            while($row)
            {
                ?>
                  <tbody>
           <div>         
    <tr>
      <th scope="row"><span> <?php echo($row["carpet_name"]);  ?> </span></th>
      <td><span>  <?php echo($row["username"]);  ?> </span></td>
      <td><span>  <?php echo($row["meter"]);  ?> </span></td>
      <td><span>  <?php echo($row["ghymat"]);  ?> </span></td>
      <td><span>  <?php echo($row["mobile"]);  ?> </span></td>
      <td><span>  <?php echo($row["address"]);  ?> </span></td>
      <td><span>  <?php echo($row["email"]);  ?> </span></td>
    </tr>
    </div>
            <?php
             $row=mysqli_fetch_array($b);
            }
            ?>
                    </tbody>
                    </table>
<div></div>
</br>
</br>

<?php
include("footer2.html");
?>