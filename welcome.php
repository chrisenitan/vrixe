<?php #check cookie for registered users
require("garage/visa.php"); 
//check if therewas a cookie
if (isset($_COOKIE['user'])){
  header('Location: me');  
}

 $signup = mysqli_real_escape_string($conne, $_POST['signup']);
 $rate = mysqli_real_escape_string($conne, $_POST['rate']);
 $rawusername = mysqli_real_escape_string($conne, $_POST['username']); $username = strtolower($rawusername);
 $postEmail = mysqli_real_escape_string($conne, $_POST['mail']);
 $password = mysqli_real_escape_string($conne, $_POST['password']);
 $fullname = mysqli_real_escape_string($conne, $_POST['password']);
 $pictureUrl = mysqli_real_escape_string($conne, $_POST['pictureUrl']);

//if username is given.. or if google is given and sign up is given
if($username > "" and $signup > "" and $postEmail > "" and $rate == ""){
//use default values if needed
  if($signup == "signupwithgoogle"){
    
  }else{
    $fullname = "Profile Name";
    $pictureUrl =  "user.png";
  }
//start generating necessary data
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=06bfc66ceaf02708dafb98bf50c15cbb49e2532ba69fedf6f7da78a1805ad281&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
$z = $url->countryName;//location
  
$gencookie = bin2hex(openssl_random_pseudo_bytes(10));
$cutcok = substr($gencookie, 0,6);//for account verification page
$cok ="user";
$recognise ="formail"; //for mail

$day =date("Y-m-d"); //creation date
$pushid = "66666666-36f0-432b-9f5d-4bfeec61fa81";
$bio = "$username from $z";
$link = "vrixe.com/profile/$username";



 //check if user exists
 $checkusem = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$username' or email = '$postEmail' LIMIT 1"); 
 $checkIfUserExisted = false;
   while($checked = mysqli_fetch_array($checkusem))  
 {$checkIfUserExisted = true; }
  
  //if there was a user already
 if($checkIfUserExisted == true){
  $saveUserStatus = "duplicate";
}
 else{ //save user
   $saveUserStatus = "save";
   
 $create="INSERT INTO profiles (email, fullname, username, password, created, bio, location, picture, link, cookie, freq, pushid)
VALUES
('$postEmail','$fullname','$username','$password','$day','$bio','$z','$pictureUrl','$link','$gencookie','$cutcok','$pushid')";
   
//create cookies
setcookie($cok, $gencookie, time() + (86400 * 366), "/; samesite=Lax", "", true, true); //newuser
setcookie($recognise, $username, time() + (86400 * 366), "/; samesite=Lax", "", true, true); //for mail
   
 //close connection
 if (!mysqli_query($conne,$create))
  {die('Error: ' . mysqli_error($conne));}
     }

}

//criteria for making user is not found, yet there was no cooke redirect user whatsevr the case may be
else{
header('Location: index');  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
  $postEmail = mysqli_real_escape_string($conne, $_POST['mail']);
  if ($saveUserStatus == "duplicate"){echo "<title>Account Setup Incomplete</title>";}
  else {echo "<title>Account Created</title> <link rel='prefetch' href='me.php'>";}
?>
<link rel="manifest" href="manifest.json">
<meta name="description" content="Create a Vrixe account, monitor your Events and grow your audience.   ">
<meta property="og:image" content="https://vrixe.com/images/vlogie.png"/>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>
  <style>
  	body{	background-color: #ffffff;}
    .privinput{text-align:center;}
  </style>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>
<?php require("garage/deskhead.php");
  require("garage/desksearch.php");
  require("garage/deskpop.php"); 
  require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");
  require("garage/thesearch.php"); ?>
<br>
  
<?php
 if ($saveUserStatus == "duplicate"){
  echo"<div class='pagecen'>
<div class='pef'>
  <div class='blfhead'>...Don't be a stranger</div><br>
 
  <img alt='Bad Profile' src='images/essentials/warning.png' class='everybodyimg'><br>
  <h class='miniss'>Your Username or Email already exists<br>
  If you believe something is wrong, please send us feedback<br><br>
   <a href='index'><button class='copele'>TRY AGAIN</button></a><br><br>

 <a href='index.php?q=recover_password'>Forgot Password?</a></h>
  <br><br>

  <div class='blfheadalt'></div>
  </div>
  </div>
";}
  
else if ($saveUserStatus == "save"){
echo "<div class='pagecen'><div class='pef'>
<div class='blfhead'>Profile Created</div><br>
<div class='lifted' id='sdsfj' onclick='sdsfj()'><b>We added cookies!</b><br>...cookies help us know it's you and gives you seamless access to vrixe.<br><br><button class='copele'>Cookies Are Ok</button> <a href='app/terms.html#cookies'><button class='control'>Delete Cookies</button></a></div><br><br>

 <img alt='Account Created' src='images/essentials/contacts.svg' class='everybodyimg'><br><br>
<br><h class='sword'>Your account has been created and we emailed you for verification</h><br>
";

$subject = 'Welcome to Vrixe';
$feed = 'feedback@vrixe.com';
$from = 'contact@vrixe.com';

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= "Organization: Vrixe\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "Return-Path: $feed\r\n";

$headers .= 'From: Vrixe '.$from."\r\n".
      'Reply-To: '.$feed."\r\n" .
      'X-Mailer: PHP/' . phpversion();

$message = "<html><body style='margin:auto;max-width:500px;font-family:Titillium Web, Roboto, sans serif;padding:1%'>

<p style='padding-top:10px;padding-bottom:5px;margin-bottom:5px;font-size:30px;font-weight:bold;width:100%;text-align:center;color:#404141'><img src='https://vrixe.com/mail/vtrans.png' style='width:60px;height:50px;border-radius:50%;'><br>
Please verify your account</p>
<p style='margin-top:2px;font-size:14px;text-align:center'>...out the oven, here comes your account but before digging in.<br> Let's get you in sync with some account details...</p><br>

<img alt='new features on vrixe' src='https://vrixe.com/mail/banners/welcomenewuser.jpg' style='height:auto;width:96%;margin-left:2%'>


<div style='background-color:#f7f8fa;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:14px'>

<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/at.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;;text-align:left'>
<b><h style='font-size:14px'>Why Verify?</h></b></br>
<h style='font-size:14px'>Get access to create, edit, poll and use other vrixe features without making anyone doubt you're real.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/key.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;;text-align:left'>
<b><h style='font-size:14px'>Note On Password:</h></b></br>
<h style='font-size:14px'>To speed up your sign up, your Vrixe account was created with an auto-generated password. Please have a look under your <b><a href='https://vrixe.com/edit_profile'>Profile</a></b> just incase you feel like using something custom and more secure.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/updetails.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;;text-align:left'>
<b><h style='font-size:14px'>Update your Details:</h></b></br>
<h style='font-size:14px'>Help your friends find you easier, don't forget to update your account details.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<a href='https://vrixe.com/account/confirm?refs=$cutcok'><div style='width:44%;height: auto;font-size: 12px;outline:none;font-weight:bolder;padding: 5px;display: inline-block;color:#f7f8fa;background-color:#ec3832;border-style: solid;border-width: 1px;border-radius: 3px;border-color:#ec3832;cursor: pointer;overflow:hidden;font-family:Titillium Web, Roboto, sans serif;text-align: center;margin-bottom: 5px;'>VERIFY EMAIL</div></a><br>

<h style='font-size:12px'>One last thing is to verify your account's email.</h>


</div><br><br>



<div style='text-align:center;width:auto;word-spacing:15px'>

<a href='https://twitter.com/vrixeapp'><img alt='Twitter' src='https://vrixe.com/mail/mtweet.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://www.linkedin.com/company/vrixe'><img alt='LinkedIn' alt='linkedin' src='https://www.vrixe.com/mail/mlink.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://instagram.com/vrixe'><img alt='Instagram' src='https://vrixe.com/mail/mgram.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ'><img alt='Youtube' alt='youtube' src='https://www.vrixe.com/mail/mtube.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://facebook.com/vrixe'><img alt='Facebook' src='https://vrixe.com/mail/mface.png' style='width:25px;height:25px;display:inline-block'></a> 

</div>

<div style='background-color:transparent;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:11px'> This email was used to create a Vrixe account. Not you? please contact us at https://vrixe.com/help/feedbacks<br>
</div>
";
$message .= "</body></html>";

 if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
   }else{
if(mail($postEmail, $subject, $message, $headers)){
echo "<div id='galert'>We've sent you a verification mail.</div><br>";
} else{
echo "<div id='oalert'>We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Carry On! We'll fix this</div><br>";
}}

echo "<h class='miniss'>Your account was created with a secure password, but you can update it under your <a style='text-decoration:underline;text-underline-position:under;' href='edit_profile'>profile settings</a></h><br><br>

<a href='me'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:sub'>person</i> My Profile</button></a><br><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

<div class='blfheadalt'></div>
</div>
<br>

</div>";
  //hide cookie
echo "<script>
function sdsfj(){
document.getElementById('sdsfj').style.display='none';
}
</script>";

}
  else{
    //redundant
    
  }
?>
<br>

<?php require("garage/networkStatus.php"); ?>

</body>
</html>