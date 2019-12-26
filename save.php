<?php
require("garage/passport.php");

//initial
$rate = mysqli_real_escape_string($conne, $_POST['rate']);
$email = mysqli_real_escape_string($conne, $_POST['email']);
$string = mysqli_real_escape_string($conne, $_POST['ranref']);
$foundOldRef = false;
$canUpload = true;

if ($string == ''){//incase string was not generated by js
  $string = bin2hex(openssl_random_pseudo_bytes(5));
 }
if($rate > '' or $email == ''){
 $canUpload = false;
}
$checkForOldRef = mysqli_query($conne, "SELECT * FROM events WHERE refs = '$string' LIMIT 1");
while ($checkForOldRefResult = mysqli_fetch_array($checkForOldRef)){
  $foundOldRef = true;
}

//save event
if($canUpload == true and $foundOldRef == false){
  
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=06bfc66ceaf02708dafb98bf50c15cbb49e2532ba69fedf6f7da78a1805ad281&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
 $z = $url->countryName;
 $state =  $url->cityName;
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



$indras="INSERT INTO events (type, datep, event, organiser, description, dates, edates, timing, variant, bvenue, state, authkey, email, hype, refs, class, zip, year, month, day, edit, imgname, imgthumb, cua, cub, cuc, cud, cue, cuf, status)
VALUES
('','$day','$probeevent','$organiser','$description','$dates','$edates','$timing','$variant','$bvenue','$state','$authkey','$email','$hype','$string','$pupr','$z','$year','$mot','$week','$editstring','$eventImage','$eventImageThumb','$cua','$cub','$cuc','$cud','$cue','$cuf','$status')";

$incontown="INSERT INTO contributors (code, owner) VALUES ('$string','$hype')";

$inprogdef="INSERT INTO programs (refs) VALUES ('$string')";
$inpolls="INSERT INTO poll (refs) VALUES ('$string')";

$inactors="INSERT INTO actors (refs, tag, dates, edate, timing, etime, coord, address, landmark, dresscode, price, payment, organiser, wapweb, phone, keynote) VALUES ('$string','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype','$hype')";


if (!mysqli_query($conne,$indras) or !mysqli_query($conne,$incontown) or !mysqli_query($conne,$inprogdef)  or !mysqli_query($conne,$inactors) or !mysqli_query($conne,$inpolls))
  {
  die('Error: ' . mysqli_error($conne));
  }

mysqli_close($conne);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
if ($canUpload == false){
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
<style> body{background-color: #f5f5f5;} </style>
</head>
<body>
<?php require("garage/absolunia.php"); ?>

<div id="gtr" onclick="closecloseb()"></div>

<?php require("garage/deskhead.php"); 
  require("garage/desksearch.php"); 
  require("garage/deskpop.php");
  require("garage/mobilehead.php"); 
  require("garage/subhead.php");
  require("garage/thesearch.php"); ?>

<br><br>


<?php 
  echo"<p id='valert' onclick='closealert()'>Event's link copied to clipboard <button id='vbutton'>CLOSE</button></p>
    <div class='pagecen'>";
  
 if ($canUpload == true){

 if($foundOldRef == false){   
      
     if ($pupr == "private"){  
  $puprnotif = "Your event is Private, that means it is protected with this code only you know:<b> $authkey </b>";
}else{
  $puprnotif = "Your event has been created, you can share it with anyone and anyone can now view it on Vrixe";
}
   
        $customMailSubject = "Your invite has been created";
        $customMailHeader = "Event Saved";
        $customMailsectionHeader = "Some quick bits";
        $customMailsectionMessage = $puprnotif;
        $customMailsuccessMessage = "<div id='galert'>We'll email you in details shortly.</div><br>";
        $customMailfailedMessage = "<div id='oalert' >We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Your Event A OK!</div><br>";

   
 echo "
<div class='pef' >
<div class='blfhead'>Invite Created.</div><br>
<div class='eventimage'>$event</div><br>

  <h class='miniss'>Added anyone to edit with? See if the accepted or not<br>...and you can start planning together.</h><br><br>

  <form style='display:inline' action='invitation.php' method='post'>
<input type='text' class='rates' value='$string' name='iv'>
<input type='text' class='rates' value='owner' name='claim'>
<button class='copele' id='ga_vai'><i class='material-icons' style='font-size:17px;vertical-align:sub'>mail</i> View As Invite </button>
</form> <a href='event/$string'><button class='control' id='ga_vae'><i class='material-icons' style='font-size:17px;vertical-align:sub'>event</i> View As Event </button></a><br><br>
";

   
//send email to creator
require("mail/genericMailer.php");


 //send email to mail-list 
if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
 }else{
 if($emaillist > ""){
     require("garage/invitelistmail.php"); 
   }else{ }
     }
  
   //send push to push list
 if($pushlist > ""){
     require("garage/invitelistpush.php"); 
   }else{
  //do not push
   }

echo"<h class='sword'>Your private access code is: </h><h id='string'>$authkey</h><br><br>
<h class='sword'>Share your invite</h>
<br><h class='minis' style='color:#778899' id='clonetext'>vrixe.com/event/$string</h><br><br>

<button class='control' onclick='prcshare()' title='Share Link'><i class='material-icons' style='font-size: 18px;vertical-align: bottom;'> share</i> Share Invite</button><br>

<script>
var cst;
var csl;
function prcshare(){
    var cst = 'Here is an invite for our upcoming event.';
    var csl = 'event/$string';
  customshare(cst, csl);
}
</script>
<br>

<div class='blfheadalt'></div>
</div>

<br><br><br>";
   
   
}//end of if old ref was not found
   
 else{//note we are still in if canUpload
     echo "
  <div class='pef'><div class='blfhead'>...duplicate found</div><br><br>

  <img alt='missing' src='images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>We already have an event with the same details you provided.</h> <br><br>
   
  <h class='miniss'>What can I do?</h><br><h class='disl'>You can search for the event and edit or delete it before making a new one.<br>If you keep getting this error, please send us a feedback.</h> <br><br>
    <a href='/event/$code'><button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>question_answer</i> Feedback</button></a><br><br>
 
   <h class='miniss'>More?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

  <div class='blfheadalt'></div>
  </div>
<br><br>";
  }
    
  }//eof can upload
  
  else{
      echo "<div class='pef'><div class='blfhead'>...you seem lost</div><br><br>

  <img alt='missing' src='images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>A few things might have gone wrong, looks like the details you sent us was incomplete or we lost connection halfway through saving it.</h> <br><br>
   <a href='invite'><button class='copele'><i class='material-icons' style='font-size: 18px;vertical-align:bottom;'>refresh</i> Start Over</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>
  </div>
<br><br>";
  }
  
echo"</div>";
  require("garage/networkStatus.php");
?>


</body>
</html>