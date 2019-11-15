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
    $useremail = $founduser['email'];
    $cut = $founduser['confirm'];
     $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Edit Plans</button>";
   $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
     $fullname = "relog";
   $username = "";
}
if($cut == ""){//user has not verified account
  echo "<script> document.location = 'me.php'; </script>";
}
}
else{ 
 echo "<script>
 document.location = 'index.php?q=account_needed';
 </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head> 
  <title>Edit Events</title>
  <link rel="manifest" href="manifest.json">
<meta name="description" content="Co-edit and Plan your Events with friends on Vrixe ...add more fun to making plans">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>
<?php require("garage/atlantis.php"); ?>
  <style>
  	.pef{
  		z-index: 300;
  	}
    .blf{font-family: Nunito;color:#5a5a5a;}
    #result{
  margin-top: 0px;
  margin-bottom: 0px;
  display: none;
}
 .tinytsltxt{
  color: #37383a;
}
  </style>
  <?php

  if(isset($_GET['code'])){
  $code = mysqli_real_escape_string($conne, $_GET['code']); 

$findevent = mysqli_query($conne,"SELECT * FROM contributors WHERE code = '$code' LIMIT 1"); 
$found = 0;
   while($id = mysqli_fetch_array($findevent))
 {
  $found = 1;
    $hype = $id['owner'];//finds the promoter
    $cua = $id['cua'];
    $cub = $id['cub'];
    $cuc = $id['cuc'];
    $cud = $id['cud'];
    $cue = $id['cue'];
    $cuf = $id['cuf'];
} if ($found == 0){
    $event ="no show";
}}
else{ 
 echo "<script>
      document.location ='index';
 </script>";//dont be visiting us if you dont have a code please, too much is already happening here
}
  ?>

  <script async>
  //drag image upload control 
  window.addEventListener('dragover', function(dd){
    document.getElementById('fifth').style.backgroundColor = "#9ba9c5";
  dd.preventDefault();
 });
window.addEventListener('drop', function(dd){
  document.getElementById('imgfree').files = dd.dataTransfer.files;
  document.getElementById('fifth').style.backgroundColor = "#f8f8ff";
  dd.preventDefault();
 });
</script>
</head>
<body>



<div id="gtr" onclick="closecloseb()"></div>


<?php require("garage/deskhead.php"); ?>
<?php require("garage/desksearch.php");  ?>
<?php require("garage/deskpop.php"); ?>


<?php require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");?>

<?php require("garage/thesearch.php"); ?>



<?php
//if user has some kind of access
if ($username == $hype or $username == $cua or $username == $cub or $username == $cuc or $username == $cud or $username == $cue or $username == $cuf){


$result = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$code' LIMIT 1"); 
$founds = 0;
   while($row = mysqli_fetch_array($result))
 {
  $founds = 1;
  $tag = $row['type'];

//reverse class
  $class = $row['class']; 
  if ($class == 'private'){
   echo "<style>
   #privateclassbtn{
   background-color: #ffffff;
   border-color: #2b3445;
   border-width: 4px;
 }
   </style>";
  $privacystat = "true";
  } else{
   echo "<style>
   #privateclassbtn{
      background-color: transparent;
   border-color: #2b3445;
   border-width: 2px;
 }
   </style>";
  $privacystat = "false";
  } //preset class css

//reverse status
  $status = $row['status'];
 if ($status == 'plan'){
     echo "<style>
   #approveclassbtn{
      background-color: transparent;
   border-color: #2b3445;
   border-width: 2px;
 }
   </style>";
  $statval = "false";
  } else{
       echo "<style>
   #approveclassbtn{
   background-color: #ffffff;
   border-color: #2b3445;
   border-width: 4px;
 }
   </style>";
  $statval = "true";
}

$programcheck = $row['programcheck'];
$pollcheck = $row['pollcheck'];
$code = $row['refs'];
$editcode = $row['edit'];
$event = $row['event'];
$descri = $row['description'];
$keynote = $row['keynote'];
$date = $row['dates'];
$edate = $row['edates'];
$coord = $row['venue'];
$bvenue = $row['bvenue'];
$time = $row['timing'];
$variant = $row['variant'];
$cost = $row['cost'];
$costpur = $row['costpur'];
$landmark = $row['landmark'];
$dress = $row['dresscode'];
$poster = $row['hype'];
$mail = $row['email'];
$organiser = $row['organiser'];
$phone = $row['phone'];
$wapweb = $row['wapweb'];
$month = $row['month'];
$authkey = $row['authkey'];
$dateposted = $row['datep'];
$zipi = $row['zip'];
$state = $row['state'];
$imgname = $row['imgname'];
$imgthumb = $row['imgthumb'];
$year = $row['year']; 
$npdate = substr($year, 7); 

$probecua =  $row['cua']; $cua = htmlspecialchars($probecua, ENT_QUOTES);
$probecub =  $row['cub']; $cub = htmlspecialchars($probecub, ENT_QUOTES);
$probecuc =  $row['cuc']; $cuc = htmlspecialchars($probecuc, ENT_QUOTES);
$probecud =  $row['cud']; $cud = htmlspecialchars($probecud, ENT_QUOTES);
$probecue =  $row['cue']; $cue = htmlspecialchars($probecue, ENT_QUOTES);
$probecuf =  $row['cuf']; $cuf = htmlspecialchars($probecuf, ENT_QUOTES);



$ringo = $row['ringo'];
$ringa = $row['ringa'];
$ringb = $row['ringb'];
$ringc = $row['ringc'];
$ringd = $row['ringd'];
$ringe = $row['ringe'];
$ringf = $row['ringf'];

  //set update position to where who uploaded what are you in cahrge of
      if ($username == $poster){$bringval = $ringo;}
     elseif ($username == $cua){$bringval = $ringa;}
     else if ($username == $cub){$bringval = $ringb;}
     else if ($username == $cuc){$bringval = $ringc;}
     else if ($username == $cud){$bringval = $ringd;}
     else if ($username == $cue){$bringval = $ringe;}
     else if ($username == $cuf){$bringval = $ringf;}
     else {$dbid = 'cua';} //catastrophic error



 if ($status == "plan"){ #check if event is not instant event

  $fetchactors = mysqli_query($conne,"SELECT * FROM actors WHERE refs = '$code' LIMIT 1"); 
   while($actorsare = mysqli_fetch_array($fetchactors))
 {
  //why arewe resetting it to hype, because php fails
  $whoaddressline = $actorsare['address'];if($whoaddressline == ""){$whoaddressline = $poster;}
  $whotag = $actorsare['tag'];if($whotag == ""){$whotag = $poster;}
  $whodates = $actorsare['dates'];if($whodates == ""){$whodates = $poster;}
  $whoedate = $actorsare['edate'];if($whoedate == ""){$whoedate = $poster;}
  $whotiming = $actorsare['timing'];if($whotiming == ""){$whotiming = $poster;}
  $whoetime = $actorsare['etime'];if($whoetime == ""){$whoetime = $poster;}
  $whoprice = $actorsare['price'];if($whoprice == ""){$whoprice = $poster;}
  $whopayment = $actorsare['payment'];if($whopayment == ""){$whopayment = $poster;}
  $wholandmark = $actorsare['landmark'];if($wholandmark == ""){$wholandmark = $poster;}
  $whodresscode = $actorsare['dresscode'];if($whodresscode == ""){$whodresscode = $poster;}
  $whocoord = $actorsare['coord'];if($whocoord == ""){$whocoord = $poster;}
  $whoorganiser = $actorsare['organiser'];if($whoorganiser == ""){$whoorganiser = $poster;}
  $whowapweb = $actorsare['wapweb'];if($whowapweb == ""){$whowapweb = $poster;}
  $whophone = $actorsare['phone'];if($whophone == ""){$whophone = $poster;}
  $whokeynote = $actorsare['keynote'];if($whokeynote == ""){$whokeynote = $poster;}
$whodayedit =date("d - M - Y");
}
  require('garage/validatebasic.php');

echo "
<script>
  var meals = 'meals';
   var fun = 'leisure';
   var admin = 'admin';
   var transport = 'transport';
   var venues = 'venues';
   var media = 'media';
    var nothing = 'slack';
  
</script>
<style>.pef{display:none;vertical-align:top}.analytxt{font-size:15px;font-weight:bold;}
 #it$class{
  background-color: $ccolor;
  color: #ffffff;
}
  @media screen and (min-width: 980px){/*responsive*/
.cards{
width:45%;
}}
</style>

<form style='width:100%' action='update_event.php' method='post' autocomplete='off' enctype='multipart/form-data'>
<div style='text-align: center;'> 


<div class='pef' style='clear:both;display:none;' id='zero'>
<div class='blfhead'>Titles</div><br>
<h class='petd' style='color: #379e65;'>...what and what about</h><br>

<input style='display:none' type='text' id='code' class='grivinput' name='refs' required value='$code'>
<input style='display:none' type='text' id='whoeditid' value='$username on $whodayedit at '>
<input style='display:none' type='text' id='miniwhoeditid' value='$username'>

<br><h class='blf'>Event Title</h><br>
<input type='text'  class='grivinput' name='event' required placeholder='Give it a title...' title='Title your Event' value=\"$event\" id='theevent'><br><br>


<h class='blf'>Details</h><br>

<textarea id='trivinput' name='description' maxlength='1800' required placeholder='give it a description...' title='Event description'>$descri</textarea><br><br>

<div class='blfheadalt'></div>
</div>










<div class='pef' id='first'>
<div class='blfhead'>Dates</div><br>
<h class='petd' style='color: #379e65;'>starting with the basics</h><br><br>
<h class='blf'>Team's next task for the event<span class='asterik'>*</span></h><br>
<input type='text'  id='evtyp' class='privinput' name='type' title='club, fashion show, seminar...' maxlength='58' placeholder='Looking for a venue...' value='$tag' onchange='var weidalt=\"whotag\";allwho(weidalt)' required><br>
<input type='text' id='whotag' value='$whotag' class='rates' name='whotag' required>
<div class='whoedit'>$whotag</div><br>

<div class='newpickers'>
<div id='dpicimg'>Date</div>
<span class='stopaend'>Starts</span><input onchange='var weidalt=\"whodates\";allwho(weidalt);setlowattr()' type='date' name='dates' class='randstyle' id='begdate' value='$date' required>
<div class='whoedit' style='margin-left:0px;max-width:100%;text-align:center;clear:both;'>$whodates</div><br>
<span class='stopaend'>Ends</span><input onchange='var weidalt=\"whoedate\";allwho(weidalt)' type='date' class='randstyle' id='enddate' name='edates' value='$edate'>
<div class='whoedit' style='margin-left:0px;max-width:100%;text-align:center;clear:both;'>$whoedate</div>
<br>
<input type='text' id='whodates' value='$whodates' class='rates' name='whodates' required>
<input type='text' id='whoedate' value='$whoedate' class='rates' name='whoedate' required>

</div>


<div class='newpickers'>
<div id='tpicimg'>Time</div>
<span class='stopaend'>Starts</span><input onchange='var weidalt=\"whotiming\";allwho(weidalt)' type='time' name='timing' class='randstyle' id='timeone' value='$time' required>
<div class='whoedit' style='margin-left:0px;max-width:100%;text-align:center;clear:both;'>$whotiming</div><br>
<span class='stopaend'>Ends</span><input onchange='var weidalt=\"whoetime\";allwho(weidalt)' type='time' class='randstyle' id='timetwo' name='etiming' value='$variant'>
<div class='whoedit' style='margin-left:0px;max-width:100%;text-align:center;clear:both;'>$whoetime</div>
<br>

<input type='text' id='whotiming' value='$whotiming' class='rates' name='whotiming' required>
<input type='text' id='whoetime' value='$whoetime' class='rates' name='whoetime' required>

</div><br><br>


<div class='blfheadalt'></div>
</div>

<div class='pef' style='clear:both;display:none;' id='second'>
<div class='blfhead'>Venue</div><br>
<h class='petd' style='color: #379e65;'>...on not getting lost</h><br><br>

<br><h class='blf'>Venue<span class='asterik'>*</span></h><br>
<h id='err' style='display:block' class='petd'></h>
<input title='Textual Address' type='text'  class='privinput' name='bvenue' required placeholder='... .... ...' id='lalo' value=\"$bvenue\" autocomplete='shipping street-address' id='addressline' onchange='var weidalt=\"whoaddressline\";allwho(weidalt)'><br>
<input type='text' id='whoaddressline' value='$whoaddressline' class='rates' name='whoaddressline' required>
<div class='whoedit'>$whoaddressline</div>
<div class='mainbutton' onclick='getLocation();var weidalt=\"whocoord\";allwho(weidalt)'><i class='material-icons' style='font-size: 18px;vertical-align:sub;'>gps_fixed</i> use my GPS</div><br><br>


<h class='blf'>Destination. <small>(For hikes and trips...)</small></h><br>

<input onchange='var weidalt=\"whocoord\";allwho(weidalt)' type='text' value='$coord' class='privinput' id='dest_lalo' name='venue' placeholder='... .... ...'><br>
<input type='text' id='whocoord' value='$whocoord' class='rates' name='whocoord' required>
<div class='whoedit'>$whocoord</div>
<br>

<h class='blf'>Landmark<span class='asterik'>*</span></h><br>
<input onchange='var weidalt=\"wholandmark\";allwho(weidalt)' type='text' value=\"$landmark\" class='privinput' id='evldm' name='landmark' required placeholder='... .... ...'><br>
<input type='text' id='wholandmark' value='$wholandmark' class='rates' name='wholandmark' required>
<div class='whoedit'>$wholandmark</div><br><br>

<div class='blfheadalt'></div>
</div>

<div class='pef' id='third' style='display:none;'>
<div class='blfhead'>Actions</div><br>
<h class='petd' style='color: #379e65;'>getting to it...</h><br><br>

<h class='blf'>Event Keynote</h><br>
<input type='text' value=\"$keynote\" class='privinput' name='keynote' placeholder='Its our 4th reunion...' onchange='var weidalt=\"whokeynote\";allwho(weidalt)'><br>
<input type='text' id='whokeynote' value='$whokeynote' class='rates' name='whokeynote'>
<div class='whoedit'>$whokeynote</div><br><br>

<h class='blf'>Dress Code</h><br>
<input onchange='var weidalt=\"whodresscode\";allwho(weidalt)' type='text' value=\"$dress\" class='privinput' id='evdrc' name='dresscode' placeholder='... .... ...'><br>
<input type='text' id='whodresscode' value='$whodresscode' class='rates' name='whodresscode' required>
<div class='whoedit'>$whodresscode</div><br><br>


<h class='blf'>Will there be any cost</h><br><br>
<input style='width:22%' type='text' value=\"$cost\" class='privinput' name='cost' placeholder='price' onchange='ldprice()'>&nbsp &nbsp
<input style='width:54%' type='text'  class='privinput' name='costpur' placeholder='purpose of payment...' value='$costpur' onchange='var weidalt=\"whopayment\";allwho(weidalt)'><br>

<input type='text' id='whoprice' value=\"$whoprice\" class='rates' name='whoprice' required>
<div class='whoedit' style='float:left;width:22%;margin-left:6%'>$whoprice</div>&nbsp &nbsp
<input type='text' id='whopayment' value='$whopayment' class='rates' name='whopayment' required>
<div class='whoedit' style='float:right;margin-right:6%;text-align:right'>$whopayment</div><br><br>

<h class='blf'>What are you in charge of?</h>
<input type='text' id='bringing' class='rates' value='$bringval' name='bringing'><br>
<div class='bring' id='meals' onclick='setbring(meals)'><br><img src='images/essentials/meals.png' class='fiwb'><br>meals<div class='jal'></div></div>

<div class='bring' id='leisure' onclick='setbring(fun)'><br><img src='images/essentials/leisure.png' class='fiwb'><br>leisure<div class='jal'></div></div>

<div class='bring' id='admin' onclick='setbring(admin)'><br><img src='images/essentials/admin.png' class='fiwb'><br>admin<div class='jal'></div></div>

<div class='bring' id='transport' onclick='setbring(transport)'><br><img src='images/essentials/transport.png' class='fiwb'><br>transport<div class='jal'></div></div>

<div class='bring' id='venues' onclick='setbring(venues)'><br><img src='images/essentials/venues.png' class='fiwb'><br>venues<div class='jal'></div></div>

<div class='bring' id='media' onclick='setbring(media)'><br><img src='images/essentials/d_images.png' class='fiwb'><br>media<div class='jal'></div></div>

<br><br><h class='blf'>Or add your custom task</h><br>
<input type='text' value='' class='privinput' name='othertask' maxlength='16' placeholder='... .... ...' onchange='setbring(this.value)'>
<div class='whoedit'>a default image will be used</div>

<div class='bring' id='slack' style='display:none;' onclick='setbring(nothing)'><br><img src='images/essentials/general.png' class='fiwb'><br>general<div class='jal'></div></div>




<br><br>

<div class='blfheadalt'></div>
</div>


<div class='pef' style='display:none' >
<div class='blfhead'>Profile</div><br>
<h class='petd' style='color: #379e65;'>usually your details so they know its you</h><br><br>
<input id='evlink' class='rates' value='$link'>
<h class='blf'>Uploaded By * </h><br>
<input type='text' id='steal' class='privinput' name='hype' required placeholder='... .... ...' value='$poster'><br>
<h class='petd'>you</h><br><br>

<h class='blf'>E-mail * </h><br>
<input type='email'  class='privinput' name='email' value='$mail' required><br>
<h class='petd' id='your'>this email will not be displayed on the event</h><br><br>

<div class='blfheadalt'></div>
</div>



<div class='pef' id='fourth' style='display:none' >
  
  <div class='blfhead'>Contact</div><br>
<h class='petd' style='color: #379e65;'>for feedbacks and questions</h><br><br>

<h class='blf'>Organised By<span class='asterik'>*</span></h><br>
<input type='text' value=\"$organiser\" class='privinput' id='evorg' name='organiser' required placeholder='... .... ...' onchange='var weidalt=\"whoorganiser\";allwho(weidalt)'><br>
<input type='text' id='whoorganiser' value='$whoorganiser' class='rates' name='whoorganiser' required>
<div class='whoedit'>$whoorganiser</div><br><br>

<h class='blf'>Whatsapp Group Link</h><br>
<input type='url' value='$wapweb' id='evweb' class='privinput' name='wapweb' placeholder='... .... ...' onchange='var weidalt=\"whowapweb\";allwho(weidalt)'><br>
<input type='text' id='whowapweb' value='$whowapweb' class='rates' name='whowapweb' required>
<div class='whoedit'>$whowapweb</div><br><br>


<h class='blf'>Your RSVP Mail</h><br>
<input type='email' value='$phone' class='privinput' name='phone' placeholder='... .... ...' autocomplete='tel' onchange='var weidalt=\"whophone\";allwho(weidalt)'><br>
<input type='text' id='whophone' value='$whophone' class='rates' name='whophone' required>
<div class='whoedit'>$whophone</div><br><br>";

 //jus a way to change auth key

if ($username == $hype){
  echo " <h class='blf'>Access Code</h><br>
<input type='text' value='$authkey' class='privinput' name='authkey' placeholder='... .... ...'><br>
<h class='petd'>password to lock private events. only you can see this</h><br><br>";
}

else{
echo "<input type='text' value='$authkey' class='rates' name='authkey'>";
}


echo"
<div class='blfheadalt'></div>
</div>


<div class='pef' id='fifth'>
<div class='blfhead'>Media</div><br>
<h style='color: #708090;font-size: 13px;' class='deskonlyitems'><i class='material-icons' style='font-size:16px;vertical-align:sub;'>open_with</i> drag image here</h><br>

  <img oncontextmenu='return false;' accept='image/*' id='esi' class='thisimage' src='images/eventnails/$imgthumb'><br>
<input type='text' value='$imgname' class='frates' name='ii' id='ii' required>


  <div id='imageadd' style='margin-top:25px'>
<button id='uit' type='button'>Upload Image</button>
<input onchange='updatename()' type='file' type='button' id='imgfree' name='banner' accept='image/*'>
<label title='Select file' for='imgfree'><i class='material-icons' style='vertical-align:sub'>add_photo_alternate</i></label>
  </div>
<br><br>

<div class='blfheadalt'></div>
</div>";


require("garage/program.php");
require("garage/poll.php");


echo"
<div class='pef' id='sixth' style='min-height:40px'>
  <div class='blfhead'>Finishing Up...</div><br><br>

<div class='lds-ripple'><div></div><div></div></div>

<br><br>
<h class='petd'>this should only take a few seconds...<br>...uploading and compressing your image</h><br><br>

<br><div id='botblue'>  </div>
</div>


<div id='dnewsub'>
<div class='blfhead'>Choose what to edit</div><br><br>

        <a href='#zero'><div class='bring' onclick='eventbox(zero)'><br><img src='images/essentials/d_title.png' class='fiwb'><br>titles<div class='jal'></div><button type='button' class='basicconfirmdot' id='bcdo' style='color:#5c9ced'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>fiber_manual_record</i></button></div></a>

    <a href='#first'><div class='bring' onclick='eventbox(first)'><br><img src='images/essentials/d_dates.png' class='fiwb'><br>dates<div class='jal'></div>
     <button type='button' class='basicconfirmdot' id='bcda'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>fiber_manual_record</i></button></div></a>
    
    <a href='#second'><div class='bring' id='altbcdb' onclick='eventbox(second)'><br><img src='images/essentials/venues.png' class='fiwb'><br>venues<div class='jal'></div><button type='button' class='basicconfirmdot' id='bcdb'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>fiber_manual_record</i></button></div></a>
     
        <a href='#third'><div class='bring' id='altbcdc' onclick='eventbox(third)'><br><img src='images/essentials/d_actions.png' class='fiwb'><br>actions<div class='jal'></div><button type='button' class='basicconfirmdot' style='color:#5c9ced'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>fiber_manual_record</i></button></div></a>
        
         <a href='#fourth'><div class='bring' id='altbcdc' onclick='eventbox(fourth)'><br><img src='images/essentials/d_rsvp.png' class='fiwb'><br>rsvp<div class='jal'></div><button type='button' class='basicconfirmdot' id='bcdd'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>fiber_manual_record</i></button></div></a>
         
         <a href='#fifth'><div class='bring' id='altbcde' onclick='eventbox(fifth)'><br><img src='images/essentials/d_images.png' class='fiwb'><br>image<div class='jal'></div><button type='button' class='basicconfirmdot' id='bcde'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>fiber_manual_record</i></button></div></a>
         
         
         <a href='#createprogram'><div title='Event agenda' class='bring' onclick='createprogram()'><br><img src='images/essentials/d_agenda.png' class='fiwb'><br>agenda<div class='jal'></div><button type='button' class='basicconfirmdot' style='color:#32a060'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>extension</i></button></div></a>
         
          <a href='#poll'><div title='Event poll' class='bring' onclick='createpoll()'><br><img src='images/essentials/d_poll.png' class='fiwb'><br>poll<div class='jal'></div><button type='button' class='basicconfirmdot' style='color:#32a060'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>extension</i></button></div></a>
          
          <div title='Event poll' class='bring' id='register'><br><img src='images/essentials/d_register.png' class='fiwb'><br>register<div class='jal'></div><button type='button' class='basicconfirmdot' style='color:#76a98b'><i class='material-icons' style='font-size: 14px;vertical-align:sub;'>extension</i></button></div><br><br><br>
         
         
<div class='classholder' style='float:left'>
 <input type='text' id='privateid' value='$privacystat' required class='rates' name='pupr'>
<div class='classholdertext'><i class='material-icons' style='vertical-align:sub;font-size:17px'>lock</i> PRIVATE</div><div class='classholderdiv'></div><button class='classholdertick' type='button' id='privateclassbtn' onclick='var chjs=\"private\";allclass(chjs)'><i class='material-icons' style='vertical-align:bottom;font-size:16px'>lock</i></button> 

 </div>
";

  //just a way to control who moves to approved

if ($username == $hype){
  echo "<div class='classholder' style='float:right;margin-right:2%;'>
      <input type='text' name='status' value='$statval' id='approveid' class='rates'>

      <div class='classholdertext'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>check</i> APPROVE</div><div class='classholderdiv'></div><button class='classholdertick' type='button' id='approveclassbtn' onclick='var chjs=\"approve\";allclass(chjs)'><i class='material-icons' style='vertical-align:sub;font-size:16px'>check</i></button>

 </div>";

}

else{
}

echo"
<div class='classholder' style='float:left;clear:both'>
      <input type='text' name='notifstat' value='false' id='notifyid' class='rates'>

      <div class='classholdertext'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>notifications</i> NOTIFY</div><div class='classholderdiv'></div><button class='classholdertick' type='button' id='notifyclassbtn' onclick='var chjs=\"notify\";allclass(chjs)'><i class='material-icons' style='vertical-align:sub;font-size:16px'>notifications</i></button>

 </div>
<p id='formerror'>Select 'Notify' to update everyone on your changes.<br><b><a href='account/settings' target='_blank'>Notification settings <i class='material-icons' style='vertical-align:text-top;font-size:17px'>arrow_forward</i></a></b></p>

<span id='usercnotif' style='display:none'>
<textarea style='height:70px' id='source' oninput='countkeys()' type='text' class='privinput' name='customnotifmsg' placeholder='Edited the address...' maxlength='105' autocomplete='nope'></textarea><br>
<h class='petd' id='plicate'>notify your team with a custom message</h><br><br>
</span>

  <br><button id='createbtn' title='Save Event' onclick='window.scroll(0, -600)'><i class='material-icons' style='vertical-align: bottom;'>done_all</i>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; save changes</button><br><br>  


<br><br>
  <a href='app/terms.html'><small class='miniss'>It's your data, your privacy, your terms. Know more</small></a>
<br><br>
  </div>";
   
   
   
   echo"
  </div>

<div id='peff' style='display:none;'>
<input type='text' name='ranref' class='rates' value='$code' id='ranref'>
<input type='text' name='ranedit' class='rates' value='$editcode' id='ranedit'>
<input type='text' name='lastedit' id='lastedit' class='rates' value='$username on $whodayedit'>
<input type='text' name='dateposted' value='$dateposted' class='rates'>
<input type='text' name='state' value='$state' class='rates'>
<input type='text' name='zipi' value='$zipi' class='rates'>
<input type='text' id='procheck' name='programcheck' value='$programcheck' class='rates'>
<input type='text' id='pollcheck' name='pollcheck' value='$pollcheck' class='rates'>

<input type='text' name='cua' value='$cua' class='rates'>
<input type='text' name='cub' value='$cub' class='rates'>
<input type='text' name='cuc' value='$cuc' class='rates'>
<input type='text' name='cud' value='$cud' class='rates'>
<input type='text' name='cue' value='$cue' class='rates'>
<input type='text' name='cuf' value='$cuf' class='rates'>


<input type='text' name='rate' class='rates'>

<div id='submitbox'>    
</div>
</div><!--end of peff-->
<br>
";


  
  echo"
  
</div><!--closing all form divs-->


</form>";


} //end of it is planning


else if ($status == 'invite'){ //it is invite show invite form

  if($username == $hype){ //if it is owner open
require('garage/validuser.php'); //call mover script

      echo"
        <script>
  var iv = '$code';
</script>

<style>.mainbutton{margin-bottom:20px;}form{margin-bottom: 0px;}
 #it$class{
  background-color: $ccolor;
  color: #ffffff;
}
@media screen and (min-width: 980px){/*responsive*/
#fres{
    height: 850px;
}}
#bc$npdate{
 color: #ffffff;
    border-color: #173652;
    background-color: #173652;
}
/*omg so much hacking, display ios only if ios blah*/
#begdate{
  width: 100%;
  border: none;
  color: #21d88c;
  font-weight: bold;
  font-family: Nunito;
  font-size: 20px;
  text-align: center;
  background-color: transparent;
  outline: none;
}#timeone{
    width: 100%;
  border: none;
  color: #21d88c;
  font-weight: bold;
  font-family: Nunito;
  font-size: 20px;
  text-align: center;
  background-color: transparent;
  outline: none;
}
 .privinput{
    background-color: transparent;
  }
</style>
<div class='respef'>

<form method='post' action='update_event.php' style='width:100%' autocomplete='off'>
<div class='respbox' id='fres'>
  <div class='blfhead' style='color:#c3c5cc;border-bottom:1px solid#'>Edit your Invite</div><br><br>
<input type='text' value=\"$event\" class='grivinput' name='event' placeholder='... .... ...' required><br>
<h class='petd'>your event</h>

<br><br>
<textarea type='text' name='description' class='privinput' placeholder='... .... ... ... .... ...' style='max-height:140px;height:140px;max-width:80%;color:#f8f8ff;box-shadow:none' required>$descri</textarea><br>
<h class='petd'>its short description</h><br><br>

<input type='text' style='color:#f8f8ff;box-shadow:none;text-align:center' value='$authkey' class='privinput' name='authkey' placeholder='access code' required><br>
<h class='petd' id='calibrate'>your invite's access code</h><br><br>

<h id='err' style='display:block' class='petd'></h>
<input type='text' id='lalo' style='color:#f8f8ff;box-shadow:none' value='$bvenue' class='privinput' name='bvenue' placeholder='... .... ...' required><br>
<h class='petd' id='calibrate'>venue</h><br>
<div type='button' onclick='getLocation()' class='mainbutton'><i class='material-icons' style='vertical-align:sub;font-size:18px'>gps_fixed</i> use my GPS</div><br>

<img src='https://vrixe.com/images/essentials/invitespace.svg' id='invitespace'>
  <br>
</div>

<div id='fresalt'>


  <div id='dthv'>
  <div class='newpickers'>
    <div id='dpicimg'>Date</div>
    
    <div class='pickerapi' onclick='callmobcal();'>
      <span id='bdtxt'>$npdate</span>
      <p class='pickerminitxt' id='bmtxt'>$month</p>
      <input class='newpickersinput' type='date' value='$date' id='begdate' name='dates' onchange='processbdate();'>
    <input class='newpickersinput' type='date' value='$edate' id='enddate' name='edates'>
    </div>
    
    
    
    
    
    
     <div class='pickerapidesk' onclick='callmobcal();'>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='01';ddprocess(dd);\" id='bc01'>1</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='02';ddprocess(dd);\" id='bc02'>2</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='03';ddprocess(dd);\" id='bc03'>3</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='04';ddprocess(dd);\" id='bc04'>4</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='05';ddprocess(dd);\" id='bc05'>5</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='06';ddprocess(dd);\" id='bc06'>6</button>
       
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='07';ddprocess(dd);\" id='bc07'>7</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='08';ddprocess(dd);\" id='bc08'>8</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='09';ddprocess(dd);\" id='bc09'>9</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='10';ddprocess(dd);\" id='bc10'>10</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='11';ddprocess(dd);\" id='bc11'>11</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='12';ddprocess(dd);\" id='bc12'>12</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='13';ddprocess(dd);\" id='bc13'>13</button>
       
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='14';ddprocess(dd);\" id='bc14'>14</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='15';ddprocess(dd);\" id='bc15'>15</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='16';ddprocess(dd);\" id='bc16'>16</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='17';ddprocess(dd);\" id='bc17'>17</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='18';ddprocess(dd);\" id='bc18'>18</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='19';ddprocess(dd);\" id='bc19'>19</button>
       
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='20';ddprocess(dd);\" id='bc20'>20</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='21';ddprocess(dd);\" id='bc21'>21</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='22';ddprocess(dd);\" id='bc22'>22</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='23';ddprocess(dd);\" id='bc23'>23</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='24';ddprocess(dd);\" id='bc24'>24</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='25';ddprocess(dd);\" id='bc25'>25</button>
       
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='26';ddprocess(dd);\" id='bc26'>26</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='27';ddprocess(dd);\" id='bc27'>27</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='28';ddprocess(dd);\" id='bc28'>28</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='29';ddprocess(dd);\" id='bc29'>29</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='30';ddprocess(dd);\" id='bc30'>30</button>
       <button type='button' class='pickerdeskbtn' onclick=\"var dd='31';ddprocess(dd);\" id='bc31'>31</button>
       
      <button class='pickerminitxt' id='deskbmtxt' type='button' onclick='switchmonth(this.innerHTML);'>$month</button>
       <input type='text' class='rates' id='deskmholder' value='02'>
    </div>
    
    </div>    
    
    
    
    
    
    
    
     <div class='newpickers'>
        <div id='tpicimg'>Time</div>
       <div class='pickerapi' onclick='callmobtime();'>
      <span id='bttxt'>$time</span>
         <p class='pickerminitxt' id='btvtxt'>your local time</p>
           <input class='newpickersinput' value='$time' type='time' name='timing' id='timeone' onchange='processtimeone();'>
       <input class='newpickersinput' type='time' value='$variant' name='etiming' id='timetwo'>
       </div>
       
       
       
       
       
       
        <div class='pickerapidesk' onclick='callmobtime();'>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='04:00';dtprocess(dt);\">4am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='05:00';dtprocess(dt);\">5am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='06:00';dtprocess(dt);\">6am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='07:00';dtprocess(dt);\">7am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='08:00';dtprocess(dt);\">8am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='09:00';dtprocess(dt);\">9am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='10:00';dtprocess(dt);\">10am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='11:00';dtprocess(dt);\">11am</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='12:00';dtprocess(dt);\">12noon</button>
          
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='13:00';dtprocess(dt);\">1pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='14:00';dtprocess(dt);\">2pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='15:00';dtprocess(dt);\">3pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='16:00';dtprocess(dt);\">4pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='17:00';dtprocess(dt);\">5pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='18:00';dtprocess(dt);\">6pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='19:00';dtprocess(dt);\">7pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='20:00';dtprocess(dt);\">8pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='21:00';dtprocess(dt);\">9pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='22:00';dtprocess(dt);\">10pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='23:00';dtprocess(dt);\">11pm</button>
          <button type='button' class='pickerdeskbtn' onclick=\"var dt='00:00';dtprocess(dt);\">12mid</button>
          
         <p class='pickerminitxt' id='btvtxt'>$time</p>
       </div>
     

</div>

<br>";

//getting names of added contributrs or empty contributor spaces
if($cua > ""){
  $idcua = mysqli_query($conne, "SELECT * FROM profiles WHERE username = '$cua' LIMIT 1");
  $gotuserimgcuaimg = 0;
  while($rowcua = mysqli_fetch_array($idcua)){
    $gotuserimgcuaimg = 1;
    $cuaimg = $rowcua['picture'];
  }
  if($gotuserimgcuaimg == 0){$cuaimg = "user.png";}
  echo "
  <script>
   var cu$cua = '$cua';
   var dbid$cua = 'cua';
   var box$cua = 'boxcua';
</script>


<div class='lilput' id='boxcua'><img src='images/profiles/profilethumbs/$cuaimg' class='lilprofilephoto'><div class='jal'></div>@$cua <div class='remlilput'   onclick='process(this.innerHTML, iv, cu$cua, dbid$cua);junkuser(dbid$cua, box$cua)'>remove</div></div>
<input type='text' id='cua' name='cua' value='$cua' class='rates' placeholder='... .... ...'>
 <div id='boxaa' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynoa'><div class='jal'></div><h id='boxa'></h> 
    </div>
";
}
  else{
    echo "
    <div id='boxaa' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynoa'><div class='jal'></div><h id='boxa'></h> 
    </div>
<input type='text' id='cua' name='cua' class='rates'>";
  }


if($cub > ""){
  $idcub = mysqli_query($conne, "SELECT * FROM profiles WHERE username = '$cub' LIMIT 1");
  $gotuserimgcubimg = 0;
  while($rowcub = mysqli_fetch_array($idcub)){
    $gotuserimgcubimg = 1;
    $cubimg = $rowcub['picture'];
  }
  if($gotuserimgcubimg == 0){$cubimg = "user.png";}
  echo "

   <script>
   var cu$cub = '$cub';
   var dbid$cub = 'cub';
    var box$cub = 'boxcub';
</script>

<div class='lilput' id='boxcub'><img src='images/profiles/profilethumbs/$cubimg' class='lilprofilephoto'><div class='jal'></div>@$cub <div class='remlilput'   onclick='process(this.innerHTML, iv, cu$cub, dbid$cub);junkuser(dbid$cub, box$cub)'>remove</div></div>
<input type='text' id='cub' name='cub' value='$cub' class='rates'>
   <div id='boxba' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynob'><div class='jal'></div><h id='boxb'></h> 
    </div>
";
}
  else{
    echo "
    <div id='boxba' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynob'><div class='jal'></div><h id='boxb'></h> 
    </div>
<input type='text' id='cub' name='cub' class='rates'>";
  }


if($cuc > ""){
  $idcuc = mysqli_query($conne, "SELECT * FROM profiles WHERE username = '$cuc' LIMIT 1");
  $gotuserimgcucimg = 0;
  while($rowcuc = mysqli_fetch_array($idcuc)){
    $gotuserimgcucimg = 1;
    $cucimg = $rowcuc['picture'];
  }
  if($gotuserimgcucimg == 0){$cucimg = "user.png";}
  echo "
   <script>
   var cu$cuc = '$cuc';
   var dbid$cuc = 'cuc';
    var box$cuc = 'boxcuc';
</script>

<div class='lilput' id='boxcuc'><img src='images/profiles/profilethumbs/$cucimg' class='lilprofilephoto'><div class='jal'></div>@$cuc <div class='remlilput'   onclick='process(this.innerHTML, iv, cu$cuc, dbid$cuc);junkuser(dbid$cuc, box$cuc)'>remove</div></div>
<input type='text' id='cuc' name='cuc' value='$cuc' class='rates'>
    <div id='boxca' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynoc'><div class='jal'></div><h id='boxc'></h> 
    </div>
";
}
  else{
    echo "
    <div id='boxca' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynoc'><div class='jal'></div><h id='boxc'></h> 
    </div>
<input type='text' id='cuc' name='cuc' class='rates'>";
  }


if($cud > ""){
  $idcud = mysqli_query($conne, "SELECT * FROM profiles WHERE username = '$cud' LIMIT 1");
  $gotuserimgcudimg = 0;
  while($rowcud = mysqli_fetch_array($idcud)){
    $gotuserimgcudimg = 1;
    $cudimg = $rowcud['picture'];
  }
  if($gotuserimgcudimg == 0){$cudimg = "user.png";}
  echo "
   <script>
   var cu$cud = '$cud';
   var dbid$cud = 'cud';
    var box$cud = 'boxcud';
</script>

<div class='lilput' id='boxcud'><img src='images/profiles/profilethumbs/$cudimg' class='lilprofilephoto'><div class='jal'></div>@$cud <div class='remlilput'   onclick='process(this.innerHTML, iv, cu$cud, dbid$cud);junkuser(dbid$cud, box$cud)'>remove</div></div>
<input type='text' id='cud' name='cud' value='$cud' class='rates'>
    <div id='boxda' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynod'><div class='jal'></div><h id='boxd'></h> 
    </div>
    ";
}
  else{
    echo "
    <div id='boxda' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynod'><div class='jal'></div><h id='boxd'></h> 
    </div>
<input type='text' id='cud' name='cud' class='rates'>";
  }


if($cue > ""){
  $idcue = mysqli_query($conne, "SELECT * FROM profiles WHERE username = '$cue' LIMIT 1");
  $gotuserimgcueimg = 0;
  while($rowcue = mysqli_fetch_array($idcue)){
    $gotuserimgcueimg = 1;
    $cueimg = $rowcue['picture'];
  }
  if($gotuserimgcueimg == 0){$cueimg = "user.png";}
  echo "
   <script>
   var cu$cue = '$cue';
   var dbid$cue = 'cue';
    var box$cue = 'boxcue';
</script>

<div class='lilput' id='boxcue'><img src='images/profiles/profilethumbs/$cueimg' class='lilprofilephoto'><div class='jal'></div>@$cue <div class='remlilput'   onclick='process(this.innerHTML, iv, cu$cue, dbid$cue);junkuser(dbid$cue, box$cue)'>remove</div></div>
<input type='text' id='cue' name='cue' value='$cue' class='rates'>
   <div id='boxea' class='lilput' style='display:none;'>
     <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynoe'><div class='jal'></div><h id='boxe'></h> 
     </div>
     ";
}
  else{
    echo "
    <div id='boxea' class='lilput' style='display:none;'>
     <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynoe'><div class='jal'></div><h id='boxe'></h> 
     </div>
<input type='text' id='cue' name='cue' class='rates'>";
  }


if($cuf > ""){
  $idcuf = mysqli_query($conne, "SELECT * FROM profiles WHERE username = '$cuf' LIMIT 1");
  $gotuserimgcufimg = 0;
  while($rowcuf = mysqli_fetch_array($idcuf)){
    $gotuserimgcufimg = 1;
    $cufimg = $rowcuf['picture'];
  }
  if($gotuserimgcufimg == 0){$cufimg = "user.png";}
  echo "
   <script>
   var cu$cuf = '$cuf';
   var dbid$cuf = 'cuf';
    var box$cuf = 'boxcuf';
</script>

<div class='lilput' id='boxcuf'><img src='images/profiles/profilethumbs/$cufimg' class='lilprofilephoto'><div class='jal'></div>@$cuf <div class='remlilput'   onclick='process(this.innerHTML, iv, cu$cuf, dbid$cuf);junkuser(dbid$cuf, box$cuf)'>remove</div></div>
<input type='text' id='cuf' name='cuf' value='$cuf' class='rates'>
    <div id='boxfa' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynof'><div class='jal'></div><h id='boxf'></h> 
    </div>
    ";
}
  else{
    echo "
    <div id='boxfa' class='lilput' style='display:none;'>
    <img src='images/profiles/profilethumbs/user.png' class='lilprofilephoto' id='dynof'><div class='jal'></div><h id='boxf'></h> 
    </div>
<input type='text' id='cuf' name='cuf' class='rates'>";
  }
  //a reason to show input field for username
if($cua == "" or $cub == "" or $cuc == "" or $cud == "" or $cue == "" or $cuf == ""){
  echo"
  <div id='ajaxuser'>
<div id='result' style='display:inline-block;float:left;'></div>

<button type='button' id='sugbtn' onclick='loopusers();'><i class='material-icons' style='vertical-align: sub;font-size:17px'>search</i></button>
  </div>
    <br><div class='respbox' id='cubx'>
<h class='petd' id='cuaexit' style='color: #379e65;'>add friends on vrixe</h><br>
<input type='text' value='$username' class='rates' id='loguser'>
<input oninput='sugprocess();' type='text' id='cualt' placeholder='Search username or email to edit with' autocapitalize='none' autocomplete='nope'>
</div>

  ";
}
echo"

<input type='text' value='$username' class='rates' name='hype'>
<input type='text' value='$username' class='rates' name='organiser' placeholder='... .... ...' required autocomplete='name'>


<input style='display:none' id='usemymail' type='email' value='$mail' class='privinput' name='email' required placeholder='... .... ...' autocomplete='email'>


<input type='text' name='emaillist' class='rates' id='emaillist'>
<input type='text' name='pushlist' class='rates' id='pushlist'>
<input class='rates' type='text' name='status' value='invite'>
<input type='text' name='ranref' class='rates' value='$code' id='ranref'>
<input type='text' name='ranedit' class='rates' value='$editcode' id='ranedit'>
<input type='text' name='rate' value='' class='rates'>
<input type='text' id='bringing' class='rates' value='$bringval' name='bringing'>

<input type='text' name='dateposted' value='$dateposted' class='rates'>
<input value='default.jpg' type='text' style='display:none;' name='ii'>
<input type='text' name='state' value='$state' class='rates'>
<input type='text' name='zipi' value='$zipi' class='rates'>
<input style='display:none' type='text' id='code' class='grivinput' name='refs' required value='$code'>
<br>
<div id='peff'>


<div class='classholder'>
 <input type='text' id='privateid' value='$privacystat' required class='rates' name='pupr'>
<div class='classholdertext'><i class='material-icons' style='vertical-align: bottom;font-size:17px'>lock</i> PRIVATE</div><div class='classholderdiv'></div><button class='classholdertick' type='button' id='privateclassbtn' onclick='var chjs=\"private\";allclass(chjs)'><i class='material-icons' style='vertical-align:sub;font-size:16px'>lock</i></button> 

 </div>
<br>

 <h class='miniss' id='classdetails'></h><br><br>

<!--check analytics-->
 <form style='width:100%' action='/invitation.php' method='post'>
<input type='text' class='rates' value='$code' name='iv'>
<input type='text' class='rates' value='owner' name='claim'>
 <button formaction='/invitation.php#result' class='triocopele' style='background-color:#f8f8ff;width:auto;color:#dd4b54'><i class='material-icons' style='vertical-align:middle'>swap_horiz</i> move to plan</button>
</form>

<button class='triocopele' title='Create Event'><i class='material-icons' style='vertical-align:middle'>done_all</i> save</button>


</div>

<br>
<div class='blfheadalt' style='padding-bottom:3.5px;padding-top:3.5px;margin-bottom:20px'></div>

</div>
</form>



</div>
";
  } //end of if it is owner of invite


  else { //it is invite but status name is not hype so you are not the owner cant edit
      echo "<div class='postcen'> <br><br>
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>...we're almost there</div><br><br>

  <img alt='$code' src='images/essentials/loading.svg' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'><a href='profile/$hype'>@$hype</a> has not moved this invite to a group plan.<br>You'll be able to edit after this.</h> <br><br>
   <a href='/event/$code'><button class='copele'>VIEW EVENT</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br></div>";

  }


}  //end of if it is invite

//else if is approved eventalredy cant edit anymore
  else if ($status == 'approved'){ //it is an approved and uneditable event

      echo "<div class='postcen'> <br><br>
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>Signed & Sealed</div><br>
    <a href='/event/$code'><h class='game'>$event</h><br>

  <img alt='$code' src='images/events/$imgname' class='thisimage'></a>
  <h class='miniss'>This plan has been approved by $hype</h><br><br>
   <a href='/event/$code'><button class='copele'>VIEW EVENT</button></a><br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
Keep Vrixe with you <br><a href='/app/pwa.html'></h>
<button class='control'> INSTALL WEB APP</button></a><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br></div>";

  }

//catastropihc eror

else {  //its not plan nor invite nor approved. weird cus its not lanning, not invite not approved duno
  echo "<div class='postcen'> <br><br>
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>Access Denied</div><br>

  <img alt='$code' src='images/essentials/error.png' class='everybodyimg'>
  <h class='miniss'>What is happening here?<br>We couldn't verify your ID for this event. Sure you are in the right place?<br><br>
   <a href='/event/$code'><button class='copele'>CHECK EVENT</button></a><br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='copele'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br></div>";
}

}//end of while usier is authorised

}//end of if user is authorised

else { //user is not autorised but we can check if is contributor before we dismiss him

//go check if contributor
  $checkifcont = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$code' LIMIT 1"); 
   while($ifcont = mysqli_fetch_array($checkifcont))
 {

$ifcontcua =  $ifcont['cua']; $ifcontricua = htmlspecialchars($ifcontcua, ENT_QUOTES);
$ifcontcub =  $ifcont['cub']; $ifcontricub = htmlspecialchars($ifcontcub, ENT_QUOTES);
$ifcontcuc =  $ifcont['cuc']; $ifcontricuc = htmlspecialchars($ifcontcuc, ENT_QUOTES);
$ifcontcud =  $ifcont['cud']; $ifcontricud = htmlspecialchars($ifcontcud, ENT_QUOTES);
$ifcontcue =  $ifcont['cue']; $ifcontricue = htmlspecialchars($ifcontcue, ENT_QUOTES);
$ifcontcuf =  $ifcont['cuf']; $ifcontricuf = htmlspecialchars($ifcontcuf, ENT_QUOTES);

}
//else if user is autorised but has not accepted. 
  if ($username == $ifcontricua and $username != $cua or $username == $ifcontricub and $username != $cub or $username == $ifcontricuc and $username != $cuc or $username == $ifcontricud and $username != $cud or $username == $ifcontricue and $username != $cue or $username == $ifcontricuf and $username != $cuf){

  $founds = 1;
echo "<div class='postcen'> <br><br>
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>Decision required</div><br><br>

  <img alt='$code' src='images/essentials/confirm.svg' class='everybodyimg'><br><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>...you need to accept the invitation before you can edit this plan.</h><br><br>
  <form style='width:auto;display:inline' action='/invitation.php' method='post'>
<input type='text' class='rates' value='$code' name='iv'>
<input type='text' class='rates' value='contributor' name='claim'>
  <button class='copele'>VIEW INVITATION</button>
  </form> <br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br></div>";

  }
   //else you are not auhtorised in anyway and we really are tired of helping you
  else {

//same as below

  }
}

if ($founds == 0) { //we checked the db for the event with your access but we did not find. 
  echo "<div class='postcen'> <br><br>
  <div class='pef' style='display:inline-block'>
    <div class='blfhead'>Event Unavailable</div><br>

  <img alt='$code' src='images/essentials/error.png' class='everybodyimg'>
  <h class='miniss'>What is happening here?<br>Event seems to have been deleted, we could not find it.<br>If you're a contributor, your access may have been revoked, please contact <a href='profile/$hype'>$hype</a><br><br>
   <a href='/event/$code'><button class='copele'>CHECK EVENT</button></a><br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='copele'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br><br><br></div>";
}

?>

<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
  
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr1pOvW2cHlHyjtLhR1Hoqr7QnvH2DZIg&libraries=places&callback=initAutocomplete"
        async defer></script>
</body>
</html>