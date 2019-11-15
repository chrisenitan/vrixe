<?php 
require("../garage/visa.php");

$fetchlist = mysqli_query($conne,"SELECT * FROM newsletter WHERE day !='unsubscribed' ");

while($list = mysqli_fetch_array($fetchlist))
{

$email = $list['mail'];

 $subject = 'However You Start';
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
starting is step 1...</p>
<p style='margin-top:2px;font-size:14px;text-align:center'>Here are some ideas to get your plan started for this week</p><br>

<img alt='new features on vrixe' src='https://vrixe.com/mail/otherimg/monday.jpg' style='height:auto;width:96%;margin-left:2%'>


<div style='background-color:#f7f8fa;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:14px'>

<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img alt='lost in spambox' src='https://vrixe.com/mail/event/friendship.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>A Meetup with...</h></b></br>
<h style='font-size:14px'>Invite an old friend; we all have those or teammates for some pure fun this weekend.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img alt='multiple browser bug' src='https://vrixe.com/mail/event/qa.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Upcoming Seminar at...</h></b></br>
<h style='font-size:14px'>If you plan it, they'll come. Start a seminar somewhere and talk about anything you've always wanted to share.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img alt='login issues' src='https://vrixe.com/mail/otherimg/creativity.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Theme and Acts</h></b></br>
<h style='font-size:14px'>Sports, dance, music, pottery... bring people together and share some skills. Someone might want to learn...</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>



<a href='https://vrixe.com/me'><div style='width:44%;height: auto;font-size: 12px;outline:none;font-weight:bolder;padding: 5px;display: inline-block;color:#f7f8fa;background-color:#00bbce;border-style: solid;border-width: 1px;border-radius: 3px;border-color:#00bbce;cursor: pointer;overflow:hidden;font-family:Titillium Web, Roboto, sans serif;text-align: center;margin-bottom: 5px;'>JOIN IN</div></a><br>


<h style='font-size:12px'>Create something to remember.</h>


</div><br><br>



<div style='text-align:center;width:auto;word-spacing:15px'>


<a href='https://twitter.com/vrixeapp'><img alt='Twitter' src='https://vrixe.com/mail/mtweet.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://www.linkedin.com/company/vrixe'><img alt='LinkedIn' alt='linkedin' src='https://www.vrixe.com/mail/mlink.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://instagram.com/vrixe'><img alt='Instagram' src='https://vrixe.com/mail/mgram.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ'><img alt='Youtube' alt='youtube' src='https://www.vrixe.com/mail/mtube.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://facebook.com/vrixe'><img alt='Facebook' src='https://vrixe.com/mail/mface.png' style='width:25px;height:25px;display:inline-block'></a> 

</div>

<div style='background-color:transparent;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:11px'>Eww, this email is really not cool! <a href='https://vrixe.com/help/feedbacks?mails=$email'>Unsubscribe.</a><br>
</div>
";
$message .= "</body></html>";
if(mail($email, $subject, $message, $headers)){
echo "Message: update sent to $email <br>";
} else{
echo "Message not sent to $email <br>";
}
}
?>