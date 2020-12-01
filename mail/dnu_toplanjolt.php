
<?php 
require("../garage/visa.php");

$fetchlist = mysqli_query($conne,"SELECT * FROM events WHERE status = 'invite' and datep LIKE '%2019' ");

while($list = mysqli_fetch_array($fetchlist))
{
$email = $list['email'];
$views = $list['views'];
$event = $list['event'];
$refs = $list['refs'];


 $subject = 'Explore Your Invite';
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
Hi Vrixer!</p>
<p style='margin-top:2px;font-size:14px;text-align:center'>
Your Invite <b>' $event '</b> got $views views. Want to start planning it?. Here's how you do that on Vrixe.
</p><br>

<img alt='$refs' src='https://vrixe.com/mail/event/vrixed.jpg' style='height:auto;width:96%;margin-left:2%'>


<div style='background-color:#f7f8fa;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:14px'>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/addpeople.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Add friends: </h></b></br>
<h style='font-size:14px'>Vrixe is better with friends. Know someone you want to edit this plan with? add them to your invite and send them your invite to start planning together. </h>
</div>
</div><br>
<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/info.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Move to plan: </h></b></br>
<h style='font-size:14px'>Edit and discover a lot more behind your invite, make it a plan by going to your profile page and selecting the <img alt='move to plan' src='https://vrixe.com/mail/event/exchange.png' style='width:14px;height:14px'> icon on your event card.</h>
</div>
</div><br>
<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/updateimages/polling.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Did you know?: </h></b></br>
<h style='font-size:14px'>The next version update for Vrixe will include a new polling feature. Allowing you ask questions on your events and bring your friends into the conversation.</h>
</div>
</div><br>
<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>



<a href='https://vrixe.com/invitation?iv=$refs'><div style='width:44%;height: auto;font-size: 12px;outline:none;font-weight:bolder;padding: 5px;display: inline-block;color:#000000;background-color: transparent;border-style: solid;border-width: 1px;border-radius: 3px;border-color:#000000;cursor: pointer;overflow:hidden;font-family:Titillium Web, Roboto, sans serif;text-align: center;margin-bottom: 5px;'>VIEW INVITE</div></a><br>

<h style='font-size:12px'>Explore more with your Invite.</h>


</div><br><br>



<div style='text-align:center;width:auto;word-spacing:15px'>

<a href='https://twitter.com/vrixeapp'><img alt='Twitter' src='https://vrixe.com/mail/mtweet.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://www.linkedin.com/company/vrixe'><img alt='LinkedIn' alt='linkedin' src='https://www.vrixe.com/mail/mlink.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://instagram.com/vrixe'><img alt='Instagram' src='https://vrixe.com/mail/mgram.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ'><img alt='Youtube' alt='youtube' src='https://www.vrixe.com/mail/mtube.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://facebook.com/vrixe'><img alt='Facebook' src='https://vrixe.com/mail/mface.png' style='width:25px;height:25px;display:inline-block'></a> 

</div>

<div style='background-color:transparent;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:11px'>This is a one time email.<br>
</div>
";
$message .= "</body></html>";
if(mail($email, $subject, $message, $headers)){
echo "Message: update sent<br>";
} else{
echo "Message: Not sent<br>";
}
}
?>