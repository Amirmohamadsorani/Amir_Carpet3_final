<?php
include("tag_a.php")
?> 
</br>
</br>
</br>
</br>
<form action="action_register.php" method="post">
  <div class="mb-3 row">
    <label for="inputPassword"  class="p3" class="col-sm-2 col-form-label">نام کاربری</label>
    <div class="d-flex justify-content-center">
    <div class="col-sm-8">
      <input type="text" class="form-control" id="formGroupExampleInput" name="username">
    </div>
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword"  class="p3" class="col-sm-2 col-form-label">ایمیل</label>
    <div class="d-flex justify-content-center">
    <div class="col-sm-8">
      <input type="text" class="form-control" id="formGroupExampleInput" name="email">
    </div>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword"  class="p3" class="col-sm-2 col-form-label">رمز عبور</label>
    <div class="d-flex justify-content-center">
    <div class="col-sm-8">
      <input type="password"  class="form-control" id="inputPassword" name="passw">
    </div>
    </div>
  </div>

  <div class="mb-3 row">
    <label for="inputPassword" class="p3" class="col-sm-2 col-form-label">تکرار رمز عبور</label>
    <div class="d-flex justify-content-center">
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="repassw">
    </br>
  <div class="d-flex justify-content-center">
    <p><a class="link-offset-2 link-underline link-underline-opacity-0" href="login.php">اگر از قبل حساب کاربری دارید کلیک کنید</a></p>
  </div>
  <button class="button2"  class="button" type="submit">ثبت نام</button>
</div>
</div>
  </div>
  </div>
</form>
<?php
include("footer2.html");
?>