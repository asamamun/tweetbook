<?php
require __DIR__ . '/vendor/autoload.php';
use App\classes\Database;
use App\classes\Session;
if(Session::getSessionData("loggedin")){
  header("Location:dashboard.php");
}

if(isset($_POST['register'])){
    $conn = new Database();//$conn->db
    
    $fullname = $_POST['inputName'];
    $email = $_POST['inputEmail'];
    $pass = $_POST['inputPassword'];
    $repass = $_POST['inputRePassword'];
    if($pass === $repass){
        $hash = password_hash($pass,PASSWORD_DEFAULT);
        $insertQuery = "insert into users values(NULL,'".$fullname."','".$email."','".$hash."',NULL,'1','1',NULL,NULL,NULL)";
        // echo $insertQuery;
        $conn->db->query($insertQuery);
        if($conn->db->affected_rows == 1){
            Session::setSessionData('message',"Registration Successful!! You can login");
            header("Location:login.php");
        }
    }

}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Starter Template · Bootstrap v5.0</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- Favicons -->
<!-- <link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3"> -->


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>
    
<!-- navbar start -->
<?php require "partials/navbar.php"; ?>
<!-- navbar end -->


<div class="container-fluid mt-5 pt-5">
<div class="form-signin">
  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <img  class="mb-4 img-fluid" src="assets/img/logo.png" alt="logo" >
    <h1 class="h3 mb-3 fw-normal">Please Register</h1>
    <label for="inputName" class="visually-hidden">Full Name</label>
    <input type="text" id="inputName" name="inputName" class="form-control" placeholder="User Full Name" required autofocus>
    <label for="inputEmail" class="visually-hidden">Email address</label>
    <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required>
    <label for="inputPassword" class="visually-hidden">Password</label>
    <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password" required>
    <label for="inputRePassword" class="visually-hidden">Confirm Password</label>
    <input type="password" id="inputRePassword" name="inputRePassword" class="form-control" placeholder="Confirm Password" required>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="register">Register</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2021</p>
  </form>
</div>
  

<!-- footer start -->
<?php require "partials/footer.php"; ?>
<!-- footer end -->
</div><!-- /.container -->


<script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ef16f745ed.js" crossorigin="anonymous"></script>

      
  </body>
</html>

