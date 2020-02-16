<?php
 //do not require user account
$defaultAllowNoUser = true;
require("./garage/passport.php"); 

if (isset($_GET['refs'])){
$visitedProfile = mysqli_real_escape_string($conne, $_GET['refs']); //make ref a var

//check if user is same as ref requested if so send to profile page instead
if ($visitedProfile == $username){
header('Location: /me');
}}
else{}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--every link on thispage is absolute cus of the htaccess redirect-->
<?php
//get profileof user being viewed
if (isset($_GET['refs'])){
  $findusercookie = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$visitedProfile' LIMIT 1"); 
 $confirmcookie = 0;
 while($gotuser = mysqli_fetch_array($findusercookie))
 {$confirmcookie = 1;
  $visitedProfilecookie = $gotuser['cookie'];
  $probepfullname =  $gotuser['fullname']; $pfullname = htmlspecialchars($probepfullname, ENT_QUOTES);
   //just to be safe, do username aswell. future update will cover everything
$probepusername =  $gotuser['username']; $pusername = htmlspecialchars($probepusername, ENT_QUOTES);
 }
 if ($confirmcookie == 0){
   $visitedProfilecookie = "nil"; #couldnt find user by name. doesnt exist
       $pfullname = "Vrixe Profile";
      $pusername = "username";
 }
echo "<title> $pfullname - @$pusername | Vrixe</title>
<meta name='description' content='Connect with $pfullname on Vrixe.'>
<meta property='og:description' content=' Connect with $pfullname on Vrixe. ' />
<meta property='og:title' content='$pfullname - @$pusername | Vrixe ' />
<meta property='og:url' content='https://www.vrixe.com/profile/$pusername' />
<meta property='og:image' content='https://vrixe.com/images/vogo.png' />" ;
}
else {echo "<title>Profile</title>";
       $pfullname = "Vrixe Profile";}#redirect would have hanled this
?>
<link rel="manifest" href="/manifest.json">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("./garage/resources.php"); ?>
<meta name="robots" content="noindex">
<meta name="googlebot" content="noindex">  
<style> body{background-color: #f5f5f5;} </style>
</head>
<body>
<?php require("./garage/absolunia.php"); ?>
<div id="gtr" onclick="closecloseb()"></div>

<?php 
require("./garage/validuser.php"); 
require("./garage/deskhead.php"); 
require("./garage/desksearch.php");  
require("./garage/deskpop.php"); 
?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>$pfullname</button>";
require("./garage/mobilehead.php");
require("./garage/subhead.php");
require("./garage/thesearch.php"); ?>

<br>

<?php
  //get visited profiles info
if (isset($_GET['refs'])){
$start = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$visitedProfilecookie' LIMIT 1"); 
$confirm = 0;
   while($gotuser = mysqli_fetch_array($start)){
 $confirm = 1;

//just to be safe, do username aswell. future update will cover everything
$probepusername =  $gotuser['username']; $pusername = htmlspecialchars($probepusername, ENT_QUOTES);
$$visitedProfileemail = $gotuser['email'];
$probebio =  $gotuser['bio']; $bio = htmlspecialchars($probebio, ENT_QUOTES);
$probelink =  $gotuser['link']; $link = htmlspecialchars($probelink, ENT_QUOTES);
$probelocation =  $gotuser['location']; $location = htmlspecialchars($probelocation, ENT_QUOTES);
$picture = $gotuser['picture'];
$usercid = $gotuser['cid'];
$fines = "cid = " . $usercid;

//check if user is already following
$foundUserInContactList = substr_count($mycontacts, $fines);

echo "<div class='postcen' style='margin-top:0px'>

<h id='evin' class='rates'>Check out Events from $pusername on Vrixe</h>

<div class='profilebox'>

<div id='profilespread'>
<button title='Share profile link' id='profilesettings' onclick='customshare(\"$pusername\", \"profile/$pusername\");' type='button'><i class='material-icons'>share</i></button>


<form action='/help/feedbacks.php' method='post' style='display:initial'>
<input type='text' value='$pusername' name='refs' class='rates'>
<input type='text' id='controllers' name='controllers' class='rates'>
<button title='Report Profile' aria-label='profile actions' id='editpencil'><i class='material-icons'>info</i></button><br><br>
</form>

<img src='$picture' class='profilephoto' alt='$pusername'><br><br>
<div id='pwb'>
$pfullname <br><div id='cateuser'> @$pusername </div>
<p class='minis' style='width:98%;margin:auto'> $bio<br> 

<a href='https://$link' class='underlink'> $link </a>
</p>


<br><br>
<div id='locationfl'><i class='material-icons' style='font-size: 17px;vertical-align: sub;'>location_on</i> $location</div>
<div id='usernamefl'>@$pusername</div>
</div>
</div>
<br>

<div id='result'></div>";

if($foundUserInContactList >= 1 ){
  echo"<script>
var iv$usercid = 'or cid = $usercid ';
var cu$usercid = '$username';
var req$usercid = 'delete contact';
</script>
 <button aria-label='delete contact' title='Delete Contact' class='control' onclick='process(req$usercid, iv$usercid, cu$usercid)'><i class='material-icons' style='font-size: 17px;vertical-align: sub;'>person_add_disabled</i> Remove Contact</button>";
}else{
 echo"<script>
var iv$usercid = 'or cid = $usercid ';
var cu$usercid = '$username';
var req$usercid = 'add contact';
var pjs$pusername = '$pusername';
</script>
<button aria-label='add contact' title='Add Contact' class='control' onclick='process(req$usercid, iv$usercid, cu$usercid, pjs$pusername)'><i class='material-icons' style='font-size: 17px;vertical-align: sub;'>person_add</i> Add To Contacts</button>";
}


echo"<br><br>
</div>
</div>
</div>";

//get visited profiles events
$year = date("Y.md");
$holder = mysqli_query($conne,"SELECT * FROM events WHERE hype = '$pusername' and class = 'public' or hype = '$pusername' and cua = '$username' and '$username' > '' or hype = '$pusername' and cub = '$username' and '$username' > '' or hype = '$pusername' and cuc = '$username' and '$username' > '' or hype = '$pusername' and cud = '$username' and '$username' > '' or hype = '$pusername' and cue = '$username' and '$username' > '' or hype = '$pusername' and cuf = '$username' and '$username' > '' ORDER BY year DESC LIMIT 15"); 
   $gotyourevents = 0;
 echo "<div class='postcen'>";
 while($row2 = mysqli_fetch_array($holder)){
  //funny enough, short text out from strlen is making evil cut off. but still we shall put here too hahahaah
$gotyourevents = 1;
$r = $row2['refs'];
$probedescription =  $row2['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$dlent = strlen($description);
$date = $row2['dates'];
$probeeem =  $row2['event']; $eem = htmlspecialchars($probeeem, ENT_QUOTES);
$status = $row2['status'];
$month = $row2['month'];
$year = substr($row2['year'], 0,4);
$imagename = $row2['imgthumb'];
$kilas = $row2['class'];
$views = $row2['views'];
   $cua = $row2['cua'];
   $cub = $row2['cub'];
   $cuc = $row2['cuc'];
   $cud = $row2['cud'];
   $cue = $row2['cue'];
   $cuf = $row2['cuf'];
$elent = strlen($eem);
   
     //get user position
    //set update position to where who uploaded what are you in cahrge of
      if ($username == $cua){$userposition = "cua";}
     else if ($username == $cub){$userposition = "cub";}
     else if ($username == $cuc){$userposition = "cuc";}
     else if ($username == $cud){$userposition = "cud";}
     else if ($username == $cue){$userposition = "cue";}
     else if ($username == $cuf){$userposition = "cuf";}
     
//image background set
if($imagename == "default.png"){
  $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
 }else{
       $cardBack = "background-image:url(\"/images/eventnails/$imagename\")";
 }
   
echo "<div class='cards' style='$cardBack'><br>
    <button class='cardsactions' onclick='share$r()' title='Share Event'><i class='material-icons'>share</i><br>share</button>";  
   
   //if user has edit access
 if($username == $cua or $username == $cub or $username == $cud or $username == $cue or $username == $cuf){
   echo"<a href='/desk.php?code=$r'><button class='cardsactions' title='Edit Event'><i class='material-icons'>edit</i><br>edit</button></a>";
     
echo"<button class='cardsactions' id='$r' onclick='leavePlan(\"$r\", \"$username\", \"$userposition\")' title='Remove yourself from an event. Your last changes will still apply'><i class='material-icons'>indeterminate_check_box</i><br>Leave</button>";
 } 
if ($elent > 18){
$newee = substr($eem, 0, 17);
$shortee = "$newee...";
}
else { $shortee = $eem; }

echo "<a href='event/$r'>
<div class='cardtitle'>$shortee <i class='material-icons' style='font-size:17px;vertical-align:sub;color:#00f2a2'>arrow_forward</i></div>
</a>";

if ($dlent > 26){
$ndescri = substr($description, 0, 25);
$descr = "$ndescri...";
echo "<a href='event/$r'><h class='cardsdescription'>$descr</h></a><br> <a href='profile/$pusername'><h class='cardsdescription underlink'>by @$pusername | $month $year</h></a>";
}
else {echo "<a href='event/$r'><h class='cardsdescription'>$description</h></a><br> <a href='profile/$pusername'><h class='cardsdescription underlink'>by @$pusername | $month $year</h></a>";}
    

echo "<br><br></div>
<script>
function share$r(){
  var cst = \"$eem\";
    var csl = 'event/$r';
customshare(cst, csl);
}
</script>";
}
if($gotyourevents == 0){//user has no events
  echo "<div class='pef' style='display:inline-block'>
    <div class='blfhead'>...No public events</div><br><br>

  <img alt='No public events' src='/images/essentials/create.svg' class='everybodyimg'><br>
  <h class='miniss'>@$pusername has no public events</h><br><h class='disl'>...wonder what $pusername is planning? No more! send an invite and make something happen</h> <br><br>
   <a href='/invite'><button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>add_circle</i> Create Invite</button></a><br><br>

   <h class='miniss'>More</h><br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Tried the Vriexe PWA?<br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br>";
}
echo"</div>";
}
if($confirm == 0){
echo "<div class='pagecen'>
<br><div class='smallposts'>
<div class='blfhead'>No, bo, dy</div><br>
<img alt='invite' src='/images/essentials/contacts.svg' class='everybodyimg'><br>
<h class='miniss'>Find your plan mate</h><br>
<br><h>We did not find any user from that.<br> Know a <b>$visitedProfile</b> you'd like here?</h><br><br> 
<br><br><button class='copele' onclick='customshare(\"Create and edit plans with me on Vrixe\", \"vrixe.com/aboutvrixe\");'><i class='material-icons' style='font-size:17px;vertical-align:sub'>person_add</i> Invite To Vrixe</button><br><br>

<div class='blfheadalt'></div>
</div><br>
</div>
";
}}


else {  
echo "<div class='postcen'> <br>
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>...a place for all</div><br><br>

  <img alt='SIgn up for Vrixe' src='images/essentials/contacts.svg' class='everybodyimg'><br>
  <h class='miniss'>One place, all events for all teams</h><br><h class='disl'>Create, manage and edit events with friends.<br>Create polls, take agenda... right from your phone.</h> <br><br>";
  
  if(isset($username) and $username > ""){
    echo"<a href='/account/contacts'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:sub'>perm_contact_calendar</i> My Contacts</button></a><br><br>";
  }else{
    echo"<a href='/index.php?q=profile_required'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:sub'>person_add</i> Sign me up</button></a><br><br>";
  }

echo"<br><h class='miniss'>Before you jump in<br><a href='./aboutvrixe'><button class='control'> Learn More</button></a></h><br><br>

<div class='blfheadalt'></div>
</div><br><br><br></div>";
 }

?>
<br>



<?php require("garage/networkStatus.php"); ?>

</body>
</html>