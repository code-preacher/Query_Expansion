<?php
ob_start();
require_once 'library/lib.php';
require_once 'classes/crud.php';

$lib=new Lib;
$crud=new Crud;

?>
<?php
if(isset($_POST['submit'])){
$crud->insertNewUser($_POST);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>QUERY EXPANSION ON SEARCH ENGINE</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
  <link rel="icon" type="image/png" href="login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/login/vendor/animate/animate.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
  <link rel="stylesheet" type="text/css" href="login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="login/css/util.css">
  <link rel="stylesheet" type="text/css" href="login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
  
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(login/images/bg-01.jpg);">
          <span class="login100-form-title-1">
           Create Account
          </span>
        </div>

        <form class="login100-form validate-form" action="reg.php" method="post">
          <?php $lib->msg();?>
          <div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
            <span class="label-input100">Fullname</span>
            <input class="input100" type="text" name="name" placeholder="Enter Fullname" required="required">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
            <span class="label-input100">Email</span>
            <input class="input100" type="email" name="email" placeholder="Enter Email" required="required">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
            <span class="label-input100">Password</span>
            <input class="input100" type="password" name="password" placeholder="Enter password" required="required">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Phone Number is required">
            <span class="label-input100">Phone Number</span>
            <input class="input100" type="text" name="phone" placeholder="Enter Phone Number" required="required">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Address is required">
          <span class="label-input100">Address</span>
            <input class="input100" type="text" name="address" placeholder="Enter Address" required="required">
            <span class="focus-input100"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-26" data-validate="Gender is required">
          <span class="label-input100">Gender</span>
             <select class="input100" required="required" name="gender">
                                      <option value="">--Select your gender--</option>
                                      <option value="male">MALE</option>
                                      <option value="female">FEMALE</option>
                                    </select>
            <span class="focus-input100"></span>
          </div>


          <div class="wrap-input100 validate-input m-b-26" data-validate="Category is required">
          <span class="label-input100">Category</span>
             <select class="input100" required="required" name="category_id">
                                       <?php
                      $qt=$crud->displayAllWithOrder('category','id','desc');
                      if ($qt) {

                       foreach($qt as $dy){
                         ?>
                         <option value="<?php echo $dy['id']; ?>"><?php echo strtoupper($dy['name']); ?></option>

                         <?php
                       }
                       
                     } else {
                      echo "<option><center>No Category at the moment</center></option>";
                    }
                    ?>
                                    </select>
            <span class="focus-input100"></span>
          </div>

          <br><br>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" name="submit">
              Create Account
            </button>
          </div>
          <br><br>
          <div class="flex-sb-m w-full p-b-30">
            
            <div>
              <a href="index.html" class="txt1">
                Back to Home 
              </a>&nbsp;&nbsp;
              |
            &nbsp;&nbsp;  <a href="login.php" class="txt1">
                Login
              </a>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
  
<!--===============================================================================================-->
  <script src="login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/bootstrap/js/popper.js"></script>
  <script src="login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/daterangepicker/moment.min.js"></script>
  <script src="login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
  <script src="login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
  <script src="login/js/main.js"></script>

</body>
</html>