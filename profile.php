<?php
require("./garage/visa.php"); 

if (isset($_GET['refs'])) #if ref is passed
{
  $ness = mysqli_real_escape_string($conne, $_GET['refs']); //make ref a var

if (isset($_COOKIE['user'])){ //find cookie and get current signed in user
 $rcookie = $_COOKIE['user'];
 $rcooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$rcookie' LIMIT 1"); 
 $headcook = 0;
   while($rfounduser = mysqli_fetch_array($rcooked)){
    $headcook = 1;
   
   $username = $rfounduser['username'];
   $fullname = $rfounduser['fullname'];
   $usercontacts = $rfounduser['contacts'];
   $userheadimg = $rfounduser['picture'];
}
//check if user found
if ($headcook == 0){
  echo "<script> document.location = 'index.php'; "; //please log in refs
}}
if ($ness == $username){ //check if user is same as ref requested if so send to profile page instead
   echo "<script>
 document.location = '/me'; 
 </script>";
}}

else{
 echo "";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!--every link on thispage is absolute cus of the htaccess redirect-->
<?php
if (isset($_GET['refs'])) #if ref is passed
{
  $nes = mysqli_real_escape_string($conne, $_GET['refs']);
  #GET USER BY REFS
     $findusercookie = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$nes' LIMIT 1"); 
 $confirmcookie = 0;
   while($gotuser = mysqli_fetch_array($findusercookie))
 {$confirmcookie = 1;
  $cookie = $gotuser['cookie'];
  $probepfullname =  $gotuser['fullname']; $pfullname = htmlspecialchars($probepfullname, ENT_QUOTES);
   //just to be safe, do username aswell. future update will cover everything
$probepusername =  $gotuser['username']; $pusername = htmlspecialchars($probepusername, ENT_QUOTES);
$pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>$pfullname</button>";
 }
 if ($confirmcookie == 0){
   $cookie = "nil"; #couldnt find user by name. doesnt exist
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
else {echo "<title>No User Found</title>";}#redirect would have hanled this
?>
<link rel="manifest" href="/manifest.json">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("./garage/resources.php"); ?>
    <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">
  
 <style>
    body{
      background-color: #f5f5f5;
    }
  </style>
</head>
<body>
    <?php require("./garage/absolunia.php"); ?>
<div id="gtr" onclick="closecloseb()"></div>

<?php 
 require("./garage/validuser.php"); 
 require("./garage/deskhead.php"); ?>
<?php require("./garage/desksearch.php");  ?>
<?php require("./garage/deskpop.php"); ?>

<?php require("./garage/mobilehead.php"); ?>

<?php require("./garage/subhead.php");?>

<?php require("./garage/thesearch.php"); ?>

<br>

<?php
if (isset($_GET['refs'])) #if ref is passed
{

   $start = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $confirm = 0;
   while($gotuser = mysqli_fetch_array($start))
 {$confirm = 1;

//just to be safe, do username aswell. future update will cover everything
$probepusername =  $gotuser['username']; $pusername = htmlspecialchars($probepusername, ENT_QUOTES);
$email = $gotuser['email'];
$probebio =  $gotuser['bio']; $bio = htmlspecialchars($probebio, ENT_QUOTES);
$probelink =  $gotuser['link']; $link = htmlspecialchars($probelink, ENT_QUOTES);
$probelocation =  $gotuser['location']; $location = htmlspecialchars($probelocation, ENT_QUOTES);

$picture = $gotuser['picture'];
$usercid = $gotuser['cid'];
$fines = "cid = " . $usercid;

//check if user is already following
$countoccur = substr_count($usercontacts, $fines);


echo "
<div class='postcen' style='margin-top:0px'>

<h id='evin' class='rates'>Check out Events from $pusername on Vrixe</h>

<div class='profilebox'>

<div id='profilespread'>
<button title='Share profile link' id='profilesettings' onclick='customshare(\"$pusername\", \"profile/$pusername\");' type='button'><i class='material-icons'>share</i></button>


<form action='/help/feedbacks.php' method='post' style='display:initial'>
<input type='text' value='$pusername' name='refs' class='rates'>
<input type='text' id='controllers' name='controllers' class='rates'>
<button title='Report Profile' aria-label='profile actions' id='editpencil'><i class='material-icons'>info</i></button><br><br>
</form>

<img src='/images/profiles/$picture' class='profilephoto' alt='$pusername'><br><br>
<div id='pwb'>
$pfullname <br><div id='cateuser'> @$pusername </div>
<p class='minis' style='width:98%;margin:auto'> $bio </p>

<a href='https://$link'><small class='profilemini'> $link </small></a>


<br><br><br>
<div id='locationfl'><i class='material-icons' style='font-size: 17px;vertical-align: sub;'>location_on</i> $location</div>
<div id='usernamefl'>@$pusername</div>
</div>
</div>
<br>

<div id='result'></div>";

if($countoccur >= 1 ){
  echo"
     <script>
var iv$usercid = 'or cid = $usercid ';
var cu$usercid = '$username';
var req$usercid = 'delete contact';
</script>
 <button aria-label='delete contact' title='Delete Contact' class='control' onclick='process(req$usercid, iv$usercid, cu$usercid)'><i class='material-icons' style='font-size: 17px;vertical-align: sub;'>person_add_disabled</i> Remove Contact</button>";
}else{
    echo"  
    <script>
var iv$usercid = 'or cid = $usercid ';
var cu$usercid = '$username';
var req$usercid = 'add contact';
var pjs$pusername = '$pusername';
</script>
<button aria-label='add contact' title='Add Contact' class='control' onclick='process(req$usercid, iv$usercid, cu$usercid, pjs$pusername)'><i class='material-icons' style='font-size: 17px;vertical-align: sub;'>person_add</i> Add To Contacts</button>";
}


echo"
<br><br>


</div>
</div>
</div>";




$year = date("Y.md");
$holder = mysqli_query($conne,"SELECT * FROM events WHERE hype = '$pusername' and class = 'public' or hype = '$pusername' and cua = '$username' and '$username' > '' or hype = '$pusername' and cub = '$username' and '$username' > '' or hype = '$pusername' and cuc = '$username' and '$username' > '' or hype = '$pusername' and cud = '$username' and '$username' > '' or hype = '$pusername' and cue = '$username' and '$username' > '' or hype = '$pusername' and cuf = '$username' and '$username' > '' ORDER BY year DESC LIMIT 15"); 
   $gotyourevents = 0;
   echo "<div class='postcen'>";
   while($row2 = mysqli_fetch_array($holder))
 {
  //funny enough, short text out from strlen is making evil cut off. but still we shall put here too hahahaah
$gotyourevents = 1;
$r = $row2['refs'];
$probedescription =  $row2['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$dlent = strlen($description);
$date = $row2['dates'];
$probeeem =  $row2['event']; $eem = htmlspecialchars($probeeem, ENT_QUOTES);
$status = $row2['status'];
$month = $row2['month'];
$imagename = $row2['imgthumb'];
$kilas = $row2['class'];
$views = $row2['views'];
$elent = strlen($eem);
     
        //image background set
     if($imagename == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"/images/eventnails/$imagename\")";
     }
       
   
    echo "<div class='cards' style='$cardBack'><br>
    <button class='cardsactions' onclick='share$r()' title='Share Event'><i class='material-icons'>share</i><br>share</button>
   
    ";    
    
    if ($elent > 21){
$newee = substr($eem, 0, 20);
$shortee = "$newee...";
}
else { $shortee = $eem;
}

echo "<a href='event/$r'>
<div class='cardtitle'>$shortee</div>
</a>
";
    

if ($dlent > 26){
$ndescri = substr($description, 0, 25);
$descr = "$ndescri...";
echo "<a href='event/$r'><h class='cardsdescription'>$descr</h></a><br> <a href='profile/$pusername'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$pusername. this $month</h></a>";
}
else {echo "<a href='event/$r'><h class='cardsdescription'>$description</h></a><br> <a href='profile/$pusername'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$pusername. this $month</h></a>";}
    

echo "<br><br></div>
<script>
function share$r(){
  var cst = \"$eem\";
    var csl = 'event/$r';
customshare(cst, csl);
}
</script>";
     

}
if($gotyourevents == 0){

}
echo"</div>";
}
if($confirm == 0){
  echo "<div class='pagecen'>
<br><div class='smallposts'>
<div class='blfhead'>No, bo, dy</div>
  <br>
  <h>We did not find any user from that.<br> Know a $ness you'd like here?</h><br><br> 
   <img alt='invite' src='/images/essentials/inviteuser.png' class='everybodyimg'>
   <br><br><button class='copele' onclick='customshare(\"Create and edit plans with me on Vrixe\", \"vrixe.com/aboutvrixe\");'>INVITE TO VRIXE</button><br>
 <br>

 <div class='blfheadalt'></div>
  </div><br>
  </div>
";
}

}


else {  
  echo "<div class='pagecen'>
<div class='pef'>
  
  <div class='blfhead'>Create an All Access account</div>
  <br>
    <img alt='Vrixe Profiles' src='images/essentials/profiles.png' class='everybodyimg'>
  <h class='miniss'>Co-edit and Plan your Events with friends on Vrixe<br>...add more fun to making plans.
 <br><br>
  <a href='/index.php'><button class='copele'>SIGN UP</button></a>
<br><br>

<div class='blfheadalt'></div>
  </div>
  </div>


";
 }

   
?>
<br>



<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>

</body>
</html>