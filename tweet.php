<?php
require __DIR__ . '/vendor/autoload.php';
use App\classes\Database;
use App\classes\Session;
use App\classes\Config;


$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// if(!Session::getSessionData("loggedin")){
//     header("Location:login.php");
// }
$message = Session::getFlashData("message");
$conn = new Database();
//post comment start
if(isset($_POST['userCommentBtn'])){
  $tid = $_POST['tid'];
  $uid = Session::getSessionData("userid");
  $c = $conn->escape(strip_tags($_POST['userComment']));
  $insertQ = "insert into comments values(NULL,'".$tid."','".$uid."','".$c."',NULL,NULL)";
  $conn->db->query($insertQ);
  if($conn->db->affected_rows == 1){
    Session::setSessionData('message',"Comment Added");
  header("Location:tweet.php?tid=".$tid);
  }
}
//post comment end

//get form values start
if(isset($_GET['tid'])){    
    $tid = $conn->escape($_GET['tid']); 
    $info = $conn->getRecord("tweets",$tid);  
}
if(isset($tid)){
  $info = $conn->getRecord("tweets",$tid); 
}
//end



?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title><?php echo $info['title'] ?></title>
<meta property="og:url"           content="<?php echo $url; ?>" />
<meta property="og:type"          content="website" />
<meta property="og:title"         content="<?php echo $info['title']; ?>" />
<meta property="og:description"   content="<?php echo $info['details']; ?>" />
<meta property="og:image"         content="<?php echo Config::siteinfo()['baseurl'] ?>assets/tweetimage/<?php echo $info['image'];?>" />

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/starter-template/"> -->

    

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">


    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.0/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3">


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
    <link href="assets/css/starter-template.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
  </head>
  <body>

<!-- navbar start -->
<?php require "partials/navbar.php"; ?>
<!-- navbar end -->



  <div class="starter-template text-center py-5 px-3">
    <h1>welcome <?php echo Session::getSessionData("username") ?> : <?php echo Session::getSessionData("userid") ?></h1>
    <!-- flash message start -->
    <?php
if(isset($message) && $message){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Message: </strong> <?php echo $message; ?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php
}
?>
    <!-- flash message end -->

    <div class="card mb-3">
      <div class="card-header">
      <h3><a href="tweetform.php" class="text-decoration-none shadow btn btn-info text-dark fw-bold">Add New</a></h3>
      </div>
    </div>
    <?php 
    if($info){
    ?>
    <div class="card mb-3 w-75 mx-auto shadow">
  <img src="assets/tweetimage/<?php echo $info['image'] ?>" class="card-img-top img-fluid" alt="<?php echo $info['title'] ?>">
  <div class="card-body">
    <h5 class="card-title"><?php echo $info['title'] ?></h5>
    <p class="card-text">
    <?php echo $info['details'] ?>
    </p>
    <!-- 
1 = like
2 = dislike
3 = Smail
4 = heart
5 = Angry
6 = cry
7 = Care
8= flushed
9= Grin
10 = tired
11= surprise
 -->
   

<p class="card-text font-des shadow text-start">
 
 <a class="text-decoration-none btn btn-sm btn-outline-primary" href="#" title="like"><i class="fas fa-thumbs-up text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-sm btn-outline-dark" href="#" title="dislike"><i class="fas fa-thumbs-down text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-outline-primary" href="#" title="smile"><i class="fas fa-smile text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn  btn-outline-primary" href="#" title="heart"><i class="fas fa-heart text-danger fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-outline-primary" href="#" title="angry"><i class="fas fa-angry text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-outline-primary" href="#" title="cry"><i class="fas fa-sad-cry text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-outline-primary" href="#" title="Care"><i class="far fa-kiss-wink-heart text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-outline-primary" href="#" title="Flushed"><i class="far fa-flushed text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 
 <a class="text-decoration-none btn btn-outline-primary" href="#" title="Grin"><i class="far fa-grin-tongue text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-outline-primary" href="#" title="tired"><i class="far fa-tired text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;

 <a class="text-decoration-none btn btn-outline-primary" href="#" title="surprise"><i class="fas fa-surprise text-warning fs-6"></i> <span class="fs-6">20</span></a> &nbsp;



 </p>
 <div class="date_share d-flex flex-row justify-content-between">
 <p class="card-text text-start"><small class="text-muted">Last updated <?php echo $info['created'] ?></small></p>
 <p class="text-end shadow"><a class="text-decoration-none btn btn-outline-info" href="<?php echo $_GET['tid']; ?>">Share &nbsp;<i class="fas fa-share-square "></i></a></p>
 </div>
 <div class="fb-share-button" data-href="<?php echo $url; ?>" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" class="fb-xfbml-parse-ignore">Share</a></div>
</div>
</div>

 <?php
 }
 ?>

 <hr>
 <!-- comment start -->
 <?php
 if(Session::getSessionData("loggedin")){
 ?>
<h3>Comment</h3>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
<div class="mb-3 text-start">
<input type="hidden" name="tid" value="<?php echo $tid;  ?>">
<label for="userComment" class="form-label text-start">Write Your Comment</label>
<textarea class="form-control" name="userComment" id="userComment" rows="5" required maxlength="1000"></textarea>
</div>
<div class="col-12">
 <button type="submit" name="userCommentBtn" class="btn btn-primary">Post Comment</button>
</div>
</form>
 <?php
}
else{
?>
Please 
<a href="login.php">Login</a> or
<a href="registration.php">Register</a>
to Write Comment
<?php
}
?>
    <!-- comment end -->

    <!-- All Comments start -->
    <h3>All Comments</h3>
    <?php
$comments = 'SELECT comments.*,users.username  FROM `comments` 
inner join users on comments.uid=users.id
WHERE comments.tid = '.$tid.' order by comments.created desc';
$commentsResult = $conn->db->query($comments);
$allc = "";
if($commentsResult->num_rows > 0){
  while($comment = $commentsResult->fetch_assoc()){
$allc .= '<div class="card border-success mb-3 text-start">
<div class="card-header bg-transparent border-success">'.$comment['username'].' on '.$comment['created'].'</div>
<div class="card-body text-success">  
  <p class="card-text">'.$comment['comment'].'</p>
</div>
</div>';
  }
  echo $allc;
}
    ?>
    
    <!-- All Comments end -->
    
  </div>
<!-- footer start -->
<?php require "partials/footer.php"; ?>
<!-- footer end -->
<!--  -->




<!--  -->


<script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/ef16f745ed.js" crossorigin="anonymous"></script>

      
  </body>
</html>

