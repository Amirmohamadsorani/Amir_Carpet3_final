<?php
include("tag_a.php")
?>

<div class="bg-light text-dark pt-4 animate__animated animate__fadeInUp" class="form-floating mb-3">
                          <?php
                          if (isset($_GET['msg'])): 
                          ?>
                          <div class="alert alert-<?php echo ($_GET['msg'] == 'success' ? 'success' : 'danger'  );?> text-center" role="alert" class="animate__animated animate__fadeInLeft animate__delay-0.5s">
                         
                          </br>
                          </br>


                          
                          
                          <?php 
                          echo ($_GET['msg'] == 'success' ?  'ورود موفقیت‌آمیز بود' : 'نام کاربری یا رمز عبور اشتباه است'); 
                          ?>
                        </div>
            </div>
            <?php 
                 endif; 
                 ?>
                                  <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <hr class="divider" />
                        <a class="btn btn-primary btn-xl" href="index2.php">بازگشت به صفحه اصلی</a>
                    </div>
                </div>
            </div>
<?php
include("footer2.html");
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">