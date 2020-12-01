<?php
$getphpurl = $_SERVER['SERVER_NAME']; //get url
$phpurla = substr($getphpurl,0,9); //string url
error_reporting(E_ERROR | E_PARSE);//prevent all error report

if($phpurla == 'vrixe-enn'){
  $phpurl = 'vrixe-enn';//on dev server
  $serverAndImageUrl = "https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/";
  $serverUrl = "https://vrixe-ennycris1429888.codeanyapp.com";
  $oneSignalAppId = "527b2883-5dff-4a9b-88bd-5e2e3e74c9f4";
  
  //if on dev server, check for access cookie
  if(!isset($_COOKIE['codeanyapp'])){ 
  header('Location: https://vrixe.com/aboutvrixe');
//setcookie("codeanyapp", "truce", time() + (86400 * 366), "/; samesite=Lax", "", true, true); //newuser
}
  $conne=mysqli_connect("localhost","root","","vrixe"); #server, username, password, database
}

else{
  $phpurl = 'gib';//on live server
  $serverAndImageUrl = "https://vrixe.com/images/profiles/";
  $serverUrl = "https://vrixe.com";
  $oneSignalAppId = "151afe3d-500c-49f3-b682-dd9c5084a863";
  $conne=mysqli_connect("localhost","vrixe",".Nc4f4i94A*KNGA","vrixe"); #server, username, password, database
}

?>