<?php
//3rd party or self user auth
require("visa.php"); 
if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $headcook = 0;
   while($founduser = mysqli_fetch_array($cooked)){
   $headcook = 1;
   $fullname = $founduser['fullname'];
   $username = $founduser['username'];
   $mycontacts = $founduser['contacts'];
   $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
  echo "<script> document.location = 'index';</script>";
}}
else{
 echo "<script>
 document.location = 'index.php';
 </script>";
}



?>