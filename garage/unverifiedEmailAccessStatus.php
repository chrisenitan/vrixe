<?php
//get cutcok
$cutcok = substr($accountVerificationCutcok, 0,6);

$dateCreated=date_create($accountCreationDate);
$dateToday=date_create(date("Y-m-d"));
$diff=date_diff($dateCreated,$dateToday);
$accountAge = $diff->format("%a days");

if($accountAge >= 8){
  //send user email to verify
  $subject = 'Your vrixe account verification button';
$feed = 'feedback@vrixe.com';
$from = 'contact@vrixe.com';//or could be a name

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
Hey Vrixer!</p>
<p style='margin-top:2px;font-size:14px;text-align:center'>...we heard you want a verification mail...</p><br>

<img alt='new features on vrixe' src='https://vrixe.com/mail/updateimages/newuser.jpg' style='height:auto;width:96%;margin-left:2%'>


<div style='background-color:#f7f8fa;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:14px'>

<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/at.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;;text-align:left'>
<b><h style='font-size:14px'>Why Verify?</h></b></br>
<h style='font-size:14px'>Get access to create, edit, poll and use other vrixe features without making anyone doubt you're real.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<a href='https://vrixe.com/account/confirm?refs=$cutcok'><div style='width:44%;height: auto;font-size: 12px;outline:none;font-weight:bolder;padding: 5px;display: inline-block;color:#f7f8fa;background-color:#ec3832;border-style: solid;border-width: 1px;border-radius: 3px;border-color:#ec3832;cursor: pointer;overflow:hidden;font-family:Titillium Web, Roboto, sans serif;text-align: center;margin-bottom: 5px;'>VERIFY EMAIL</div></a><br>

<h style='font-size:12px'>One step away from getting back.</h>


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
if(mail($email, $subject, $message, $headers)){
echo "<div id='galert'>We've sent you a verification mail.</div><br>";
} else{
echo "<div id='oalert' >We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Carry On! We'll fix this</div><br>";
}}
  
 //show user prompt to verify
 echo "<script> document.location = '/help/blue.php'; </script>";
}
else{//users account is still in trial period
  $daysRemaining = 8 - $accountAge;  
echo "<div id='oalert'>Please verify your account's email within $daysRemaining days.<br>
  <a href='help/faq#spamfilter'>Issues with email verification? <i class='material-icons' style='font-size:16px;vertical-align:text-top'>arrow_forward</i></a></div>
<br>";
}


?>