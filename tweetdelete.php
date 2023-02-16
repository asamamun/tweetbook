<?php
require __DIR__ . '/vendor/autoload.php';
use App\classes\Database;
use App\classes\Session;

if(!Session::getSessionData("loggedin")){
    exit;
    die();
}
$conn = new Database();
$conn->table_name = "tweets";
//get form values start
if(isset($_GET['tid'])){
    $id = $conn->escape($_GET['tid']);
    $uid = Session::getSessionData("userid");
// $deleteQ = "delete from tweets where id='".$id."' and uid='$uid' limit 1";
$deleteQ = "update tweets set deleted=CURRENT_TIMESTAMP where id='".$id."' and uid='$uid' limit 1";
$conn->db->query($deleteQ);
if($conn->db->affected_rows == 1){
    Session::setSessionData('message',"Tweet Deleted");
    header("Location:tweetall.php");
}
else{
    Session::setSessionData('message',"ERROR!!! Contact with Admin!!!!");
    header("Location:tweetall.php");
}
}

//end

?>