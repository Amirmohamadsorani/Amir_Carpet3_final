<?php
include("tag_a.php")
?> 
</br>
</br>
</br>
</br>
<form action="login_action.php" method="post">
<div class="mb-3 row">
    <label  class="col-sm-2 col-form-label">نام کاربری</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="username">
    </div>
  </div>
    <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">رمز عبور</label>
    <div class="col-sm-8">
      <input type="password" class="form-control" id="inputPassword" name="passw">
  </div>
  </div>
    <button class="button2" type="submit" >ورود</button>
  </div>

</form>
<?php
include("footer2.html");
?>