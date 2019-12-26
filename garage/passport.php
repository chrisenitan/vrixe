<?php
//3rd party or self user auth
require("visa.php");
if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $headcook = false;
   while($founduser = mysqli_fetch_array($cooked)){
   $headcook = true;
   $fullname = $founduser['fullname'];
   $username = $founduser['username'];
   $email = $founduser['email'];
   $cut = $founduser['confirm'];
   $accountCreationDate = $founduser['created'];
   $cutcok = $founduser['cookie'];
   $link = $founduser['link'];
   $freq = $founduser['freq'];
   $sqlcid = $founduser['cid'];
   $pushid = $founduser['pushid'];
   $mycontacts = $founduser['contacts'];
   $userheadimg = $founduser['picture'];
   $checkpasswordsecurity = $founduser['password'];
}
if ($headcook == false){
  //deleting user cookie here
 setcookie("user", "", time() - 3600, "/");
 header('Location: /index');
}
if (substr($checkpasswordsecurity, -14) == "blockedbyvrixe"){
    setcookie("user", "", time() - 3600, "/"); //delete user login
    header('Location: /index?q=b');
 }}
else{
  //check if user should beleft alone for pages that dont need user account
  if(isset($defaultAllowNoUser) and $defaultAllowNoUser == true){
  $cookie = "";
  $fullname = "";
  $username = "";
  $email = "";
  }
  else{
     echo "<script>
 document.location = '/index.php';
 </script>";
}}



?>