<?php
require __DIR__ . '/../vendor/autoload.php';
use App\classes\Database;
use App\classes\Session;
if(Session::getSessionData("adminloggedin")){
    header("Location:index.php");
}


// $message = Session::getFlashData("message");
if(isset($_POST['adminLoginBtn'])){
    $conn = new Database();
    $email = $_POST['useremail'];
    $pass = $_POST['userpass'];
    $query = "select * from admin where email = '".$email."' limit 1";
    echo $query;
    $queryResult = $conn->db->query($query);
    if($queryResult->num_rows == 1){
        $record = $queryResult->fetch_assoc();
        
        if(password_verify($pass,$record['password'])){
            //var_dump($record); 
            Session::setSessionData("adminloggedin",TRUE);
            Session::setSessionData("adminname",$record['username']);
            Session::setSessionData("adminemail",$record['email']);
            Session::setSessionData("adminid",$record['id']);
            header("Location:index.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <div class="container">
<div class="sidenav">
         <div class="login-main-text">
            <h2>Application<br> Login Page</h2>
            <p>Login or register from here to access.</p>
         </div>
      </div>
      <div class="main">
         <div class="col-md-6 col-sm-12">
            <div class="login-form">
               <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                  <div class="form-group">
                     <label for="useremail">Email</label>
                     <input type="email" id="useremail" name="useremail" class="form-control" placeholder="admin@domain.com" value="admin@gmail.com">
                  </div>
                  <div class="form-group">
                     <label for="userpass">Password</label>
                     <input type="password" id="userpass" name="userpass" class="form-control" placeholder="Password" value="admin">
                  </div>
                  <button type="submit" name="adminLoginBtn" class="btn btn-black">Login</button>                  
               </form>
            </div>
         </div>
      </div>
      </div>
<!-- 
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ----------> 
</body>
</html>


