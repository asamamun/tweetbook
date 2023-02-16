<?php
require __DIR__ . '/vendor/autoload.php';
use App\classes\Session;
use App\classes\Database;
$conn = new Database;
if(Session::getSessionData("id")){
   $Q= 'DELETE * FROM users WHERE id="'.Session::getSessionData("id").'"';
   $conn->db->query($Q);
   Session::getSessionData("msg","Deleted");
   header("location:admin");
   
}




?>