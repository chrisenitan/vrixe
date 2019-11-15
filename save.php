<?php
require("garage/visa.php"); 
if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $headcook = 0;
   while($founduser = mysqli_fetch_array($cooked)){
     $headcook = 1;
   $fullname = $founduser['fullname'];
   $username = $founduser['username'];
   $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
     $fullname = "relog";
   $username = "";
}}
else{
     $fullname = "";
   $username = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
 $rate = mysqli_real_escape_string($conne, $_POST['rate']);
 $email = mysqli_real_escape_string($conne, $_POST['email']);
if ($rate > "" or $email == ""){
  echo "<title>Error Saving Event - Vrixe</title>";
}
else {
  echo "<title>Saved Event - Vrixe</title>";
}

?>
<link rel="manifest" href="manifest.json">
<meta name="description" content="Vrixe Save Event">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>
  
  <style>
    body{
      background-color: #f5f5f5;
    }
  </style>
</head>
<body>
  <?php require("garage/absolunia.php"); ?>

<div id="gtr" onclick="closecloseb()"></div>

<?php require("garage/deskhead.php"); ?>
<?php require("garage/desksearch.php");  ?>
<?php require("garage/deskpop.php"); ?>

<?php require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");?>

<?php require("garage/thesearch.php"); ?>

<br><br>


<?php 
echo"<p id='valert' onclick='closealert()'>Event's link copied to clipboard <button id='vbutton'>CLOSE</button></p>";

$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=06bfc66ceaf02708dafb98bf50c15cbb49e2532ba69fedf6f7da78a1805ad281&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
 $z = $url->countryName;
 $state =  $url->cityName;
 $string = mysqli_real_escape_string($conne, $_POST['ranref']);
 if ($string == ''){//incase user has no js in browser
  $string = bin2hex(openssl_random_pseudo_bytes(5));
 }
 $editstring = mysqli_real_escape_string($conne, $_POST['ranedit']);
  if ($editstring == ''){//incase user has no js in browser
  $editstring = bin2hex(openssl_random_pseudo_bytes(10));
 }
  $authkey= substr($editstring, 0,6); //first 6 characters of editstring
 $day =date("d M Y");
 
 //reverse pprivacy
$privacystat = mysqli_real_escape_string($conne, $_POST['pupr']);
   if ($privacystat == "false"){$pupr = 'public';}
        else{$pupr = 'private';}

 $status = mysqli_real_escape_string($conne, $_POST['status']);
 $dates = mysqli_real_escape_string($conne, $_POST['dates']);
  $iniy = substr($dates, 0,4); //event year
 $inimot = substr($dates, 5,2); //event month
 $inid = substr($dates, 8,2); //event day
 $year = "$iniy.$inimot$inid"; //year.month.day to calculate picks recency
 $edates = mysqli_real_escape_string($conne, $_POST['edates']);
 $rawprobeevent = mysqli_real_escape_string($conne, $_POST['event']); $probeevent = strtoupper($rawprobeevent);
 $event = htmlspecialchars($probeevent, ENT_QUOTES); //review later

  $cua = mysqli_real_escape_string($conne, $_POST['cua']);
  $cub = mysqli_real_escape_string($conne, $_POST['cub']);
  
  $cuc = mysqli_real_escape_string($conne, $_POST['cuc']);

  $cud = mysqli_real_escape_string($conne, $_POST['cud']);
  
  $cue = mysqli_real_escape_string($conne, $_POST['cue']);
  
  $cuf = mysqli_real_escape_string($conne, $_POST['cuf']);
   $hype = mysqli_real_escape_string($conne, $_POST['hype']);

 $organiser = mysqli_real_escape_string($conne, $_POST['organiser']);

  $emaillist = mysqli_real_escape_string($conne, $_POST['emaillist']);//mailinglist
$pushlist = mysqli_real_escape_string($conne, $_POST['pushlist']);//pushmessagelist
 $description = mysqli_real_escape_string($conne, $_POST['description']);
 $timing = mysqli_real_escape_string($conne, $_POST['timing']);
 $variant = mysqli_real_escape_string($conne, $_POST['etiming']);
 $bvenue = mysqli_real_escape_string($conne, $_POST['bvenue']);
 $eventImage = "default.jpg";
 $eventImageThumb = "default.png";


 //etting weekda for search engine
 $week = date("l",gmmktime(0,0,0,$inimot,$inid,$iniy));

 
 //getting event month for search engine
 if ($inimot ==  "01"){$mot = "January";} else if($inimot == "02"){$mot = "February";} else if($inimot == "03"){$mot = "March";} else if($inimot == "04"){$mot = "April";} else if($inimot == "05"){$mot = "May";} else if($inimot == "06"){$mot = "June";} else if($inimot == "07"){$mot = "July";} else if($inimot == "08"){$mot = "August";} else if($inimot == "09"){$mot = "September";} else if($inimot == "10"){$mot = "October";} else if($inimot == "11"){$mot = "November";} else if($inimot == "12"){$mot = "December";} else {$mot = "nil";}


 if ($_POST['rate'] > '' or $email == ''){
  echo "
  <div class='pef'><div class='blfhead'>...you seem lost</div><br><br>

  <img alt='missing' src='images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>Usually this is where we process all your event details you provided but it seems we got none from you.</h> <br><br>
   <a href='/me'><button class='copele'>GO HOME</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>
  </div>
<br><br>";
  return false;
 }

 else if ($rate == '' and $email > "") {

$indras="INSERT INTO events (type, datep, event, organiser, description, dates, edates, timing, variant, bvenue, state, authkey, email, hype, refs, class, zip, year, month, day, edit, imgname, imgthumb, cua, cub, cuc, cud, cue, cuf, status)
VALUES
('','$day','$probeevent','$organiser','$description','$dates','$edates','$timing','$variant','$bvenue','$state','$authkey','$email','$hype','$string','$pupr','$z','$year','$mot','$week','$editstring','$eventImage','$eventImageThumb','$cua','$cub','$cuc','$cud','$cue','$cuf','$status')";

$incontown="INSERT INTO contributors (code, owner) VALUES ('$string','$hype')";

$inprogdef="INSERT INTO programs (refs) VALUES ('$string')";
$inpolls="INSERT INTO poll (refs) VALUES ('$string')";

$inactors="INSERT INTO actors (refs, tag, dates, edate, timing, etime, coord, address, landmark, dresscode, price, payment, organiser, wapweb, phone, keynote) VALUES ('$string','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype')";

  echo "
  <div class='pagecen'>
<div class='pef' >
<div class='blfhead'>Invite Created.</div><br>


<div class='eventimage'>$event</div><br>

  <h class='miniss'>Added anyone to edit with? See if the accepted or not<br>...and you can start planning together.</h><br><br>

  <form style='display:inline' action='invitation.php' method='post'>
<input type='text' class='rates' value='$string' name='iv'>
<input type='text' class='rates' value='owner' name='claim'>
<button class='copele' id='ga_vai'> VIEW AS INVITE </button>
</form> <a href='event/$string'><button class='control' id='ga_vae'> VIEW AS EVENT </button></a><br><br>
";



if ($pupr == "private"){
  $puprnotif = "that means it is protected with this code only you know:<b> $authkey </b>";
  echo"<h class='sword'>Your private access code is: </h><h id='string'>$authkey</h>

<br><br>";
}
else{
  $puprnotif = "that means you can share with anyone and anyone can view it on Vrixe";
}


#send draft email
$subject = 'Your invite has been created';
$feed = 'feedback@vrixe.com';
$from = 'events@vrixe.com';//or could be a name

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
Vrixed!</p>
<p style='margin-top:2px;font-size:14px;text-align:center'>Let's sync you with some details...</p><br>

<img alt='new features on vrixe' src='https://vrixe.com/mail/event/vrixed.jpg' style='height:auto;width:96%;margin-left:2%'>


<div style='background-color:#f7f8fa;width:92%;text-align:center;height:auto;padding-bottom:5%;padding-top:5%;padding-left:2%;padding-right:2%;margin-left:2%;color:#16253f;font-size:14px'>

<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/event/key.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>First! Your Privacy</h></b></br>
<h style='font-size:14px'>Your invite is $pupr and $puprnotif.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>


<div style='width:97%;margin:auto;height:auto;overflow:hidden;'>
<img src='https://vrixe.com/mail/event/friendship.png' style='float:left;width:50px;height:50px'>
<div style='float:right;width:80%;padding-right:1%;text-align:left'>
<b><h style='font-size:14px'>Move To Plan</h></b></br>
<h style='font-size:14px'>Enjoy more edit options when you move your <b>invite</b> to a <b>plan</b>. Choose goals, see analytics and... let's not spoil the fun for you.</h>
</div>
</div><br>

<div style='width:90%;margin:auto;height:1px;background-color:#a2a4a6;clear:both'></div><br>



<a href='https://vrixe.com/account/profile_analytics'><div style='width:44%;height: auto;font-size: 12px;outline:none;font-weight:bolder;padding: 5px;display: inline-block;color:#f7f8fa;background-color:#ec3832;border-style: solid;border-width: 1px;border-radius: 3px;border-color:#ec3832;cursor: pointer;overflow:hidden;font-family:Titillium Web, Roboto, sans serif;text-align: center;margin-bottom: 5px;'>VIEW STATUS</div></a><br>

<h style='font-size:12px'>Want to see how your invite is doing?</h>


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

 
     if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
   }else{
if(mail($email, $subject, $message, $headers)){
echo "<div id='galert'>We'll email you in details shortly.</div><br>";
} else{
echo "<div id='oalert' >We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Your Event A OK!</div><br>";
}}
   
       if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
   }else{
   //send email list 
   if($emaillist > ""){
     require("garage/invitelistmail.php"); 
   }else{
     //do not mailist
   }
    
       }
   
      if($pushlist > ""){
     require("garage/invitelistpush.php"); 
   }else{
     //do not push
   }  

echo "<h class='sword'>Share your invite</h>";
echo "<br><h class='minis' style='color:#778899' id='clonetext'>vrixe.com/event/$string</h><br><br>

<button class='control' onclick='prcshare()' title='Share Link'><i class='material-icons' style='font-size: 18px;vertical-align: bottom;'> share</i> share event</button><br>

<script>
var cst;
var csl;
function prcshare(){
    var cst = 'Here is an invite to our upcoming event.';
    var csl = 'event/$string';
  customshare(cst, csl);
}
</script>
<br>

<div class='blfheadalt'></div>
</div>


</div><br><br><br>";
   
   

if (!mysqli_query($conne,$indras) or !mysqli_query($conne,$incontown) or !mysqli_query($conne,$inprogdef)  or !mysqli_query($conne,$inactors) or !mysqli_query($conne,$inpolls))
  {
  die('Error: ' . mysqli_error($conne));
  }}


mysqli_close($conne);

?>

<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>

</body>
</html>