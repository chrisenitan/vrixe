<?php
$email = "vrixeapp@gmail.com";
$password ="jsjhjhj2";
$username = "crisdeven";
$subject = 'Your Vrixe account is ready';
$feed = 'feedback@vrixe.com';
$from = 'events@vrixe.com';//or could be a name

$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";

$headers .= 'From: Vrixe '.$from."\r\n".
      'Reply-To: '.$feed."\r\n" .
      'X-Mailer: PHP/' . phpversion();

$message = "<html><body style='font-family:Titillium Web, Roboto, sans serif'>";

$message .= "<br><div style='font-family: Roboto;background-color:#2b3445;width:100%;height:auto;padding-top:10%;padding-bottom:5%;color:#9ba9c5;text-align:center'>
<p style='color:#000000;font-size:30px;margin-left:10px;text-align:center'><img alt='Vrixe' src='https://www.vrixe.com/images/vlogie.png' style='width:60px;height:70px'></p>

<br><div style='height:1px;background-color:#a9a9a9;width:80%;margin-left:10%'></div>

<img alt='tag' src='https://vrixe.com/mail/perez/worship.jpeg' style='border-radius:6px;height:300px;width:96%;margin-left:2%'>

<p style='color:#b2c0dc;font-size:30px;margin-left:10px;text-align:center'>For $organiser.<br>Your Vrixe account has been created.</p>


<div style='background-color:#f2f2f3;width:90%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:1%;padding-right:1%;margin-left:4%;color:#16253f;font-size:17px'>
Your Username: $username <br>
Your Password: $password
</div>
<br><br>

<div style='background-color:#f2f2f3;width:90%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:1%;padding-right:1%;margin-left:4%;color:#16253f'>

<p style='font-size:17px'>got feedbacks? find us online</p><br>


<div style='text-align:center;width:auto;word-spacing:15px'>

<a href='https://twitter.com/vrixeapp'><img alt='twitter' src='https://www.vrixe.com/mail/mtweet.png' style='width:25px;height:25px;display:inline-block'></a>

<a href='https://plus.google.com/b/104974081981652839346/104974081981652839346?hl=en'><img alt='g+' src='https://www.vrixe.com/mail/mplus.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://instagram.com/vrixe'><img alt='instagram' src='https://www.vrixe.com/mail/mgram.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://https://youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ'><img alt='youtube' src='https://www.vrixe.com/mail/mtube.png' style='width:25px;height:25px;display:inline-block'></a> 

<a href='https://facebook.com/vrixe'><img alt='facebook' src='https://www.vrixe.com/mail/mface.png' style='width:25px;height:25px;display:inline-block'></a> 

</div>

<br><p style='font-size:17px'>...and try out our PWA at<br><a href='https://vrixe.com/app/pwa'><span style='color:#9ba9c5'>www.vrixe.com/app/pwa</span></a></p>

</div><br><br>

<div style='background-color:#f2f2f3;width:90%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:1%;padding-right:1%;margin-left:4%;color:#16253f;font-size:11px'>
You got this email because your email address was used in creating an event on vrixe.com. The information in this mail is confidential and meant solely for the user who uploaded the event with the reference code above. If you have recieved this email without having created any event on Vrixe, we apologise for the error, please destroy and ignore this message or reply to Vrixe using the mail in the Reply To address. Thank You.</div>

<p style='width:90%;margin-left:5%;font-size:14px'>
<a href='https://www.vrixe.com/app/terms.html' style='text-decoration:none'>Terms and Privacy Policy</a>
</p><br>

</div>";
$message .= "</body></html>";
if(mail($email, $subject, $message, $headers)){
echo "mail sent to $email";
} else{
echo "<div id='oalert' style='display:block'><span id='vtext'>Email could not be sent</span> </div>";
}








?>