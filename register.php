<?php
include("tag_a.php")
?> 
</br>
</br>
</br>
</br>
<form action="action_register.php" method="post">
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">نام کاربری</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="username">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">ایمیل</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="email">
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">رمز عبور</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="passw">
      <div id="passwordHelpBlock" class="form-text">
  پسور شما باید بین 8-20 کارکتر باشد , در پسورد از فضای خالی استفاده نکنید , بهتره ار حروف انگلیسی بزرگ استفاده کنید
</div>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">تکرار رمز عبور</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="repassw">
    </div>
  </div>
    <button class="button2"  class="button" type="submit">ثبت نام</button>
  </div>
</form>
<?php
include("footer2.html");
?>