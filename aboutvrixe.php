<?php 
header("Feature-Policy: geolocation 'none'");
error_reporting( error_reporting() & ~E_NOTICE ); //prevent error repr
require("garage/visa.php");
if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $headcook = 0;
   while($founduser = mysqli_fetch_array($cooked)){
    $headcook = 1;
   $fullname = $founduser['fullname'];
   $username = $founduser['username'];
   $email = $founduser['email'];
   $link = $founduser['link'];
   $mycontacts = $founduser['contacts'];
   $pagename = "Contacts";//not needed
   $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
  echo "<script> document.location = '/me.php';</script>";
}}
else{
	$username = "";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Product Tour | About Vrixe</title>
<link rel="manifest" href="manifest.json">
<meta http-equiv="Cache-control: no-transform">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="description" content="What is Vrixe, everything you want to know about Vrixe. Co-edit and Plan your Events with friends on Vrixe Mobile">
<meta property="og:image" content="https://vrixe.com/images/vlogie.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" type="png" href="/images/vogo.png">
<?php
require ("garage/vouchar.php");
require ("garage/versions.php");
echo "<link type='text/css' rel='stylesheet' href='css/makeup.css?$vv'>";
?>
<link href="https://fonts.googleapis.com/css?family=Nunito|Titillium+Web" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"rel="stylesheet">
<script>	
  window.addEventListener("wheel", {passive: true} );
function showdet(){
	document.getElementById("details").style.height="1223px";
	document.getElementById("showbtn").style.display="none";
	document.getElementById("hidebtn").style.display="block";
}

function hidedet(){
	document.getElementById("details").style.height="90px";
	document.getElementById("hidebtn").style.display="none";
	document.getElementById("showbtn").style.display="block";
}
function exp(vall){
	var v = vall; var evimg;
	document.getElementById("evt").value=v;
	 var link = 'images/essentials/preview/';

if( v == 'TRIP'){evimg = 'trip.jpeg';}
else if( v == 'HANGOUT'){evimg = 'hang.jpeg';}
else if( v == 'REUNION'){evimg = 'reun.jpeg';}
else if( v == 'EVENT'){evimg = 'even.jpeg';}
else if( v == 'DINNER'){evimg = 'dinn.jpeg';}
else if( v == 'MEETUP'){evimg = 'meet.jpeg';}
else{evimg = 'default.png';}

document.getElementById("dynoimg").src = link + evimg;

	var callpc;
	var allpc = document.querySelectorAll(".evetname");
	for (callpc = 0; callpc < allpc.length; callpc++) {
    	allpc[callpc].style.backgroundColor="#dcdcdc";
    	allpc[callpc].style.color="#2b3444";}
  document.getElementById(vall).style.backgroundColor="#2a3443";
document.getElementById(vall).style.color="#ffffff";
}
function exphap(hall){
	var h = hall; var hap = document.getElementById("hap");
	hap.value=h;
	
		var callpcb;
	var allpcb = document.querySelectorAll(".leftactbtn");
	for (callpcb = 0; callpcb < allpcb.length; callpcb++) {
    	allpcb[callpcb].style.backgroundColor="#dcdcdc";
    	allpcb[callpcb].style.color="#2b3444";}
	document.getElementById(hall).style.backgroundColor="#2a3443";
document.getElementById(hall).style.color="#ffffff";
}
function exptime(tall){
	var t = tall; var time = document.getElementById("time");
	time.value=t;
	
		var callpc;
	var allpc = document.querySelectorAll(".rightactbtn");
	for (callpc = 0; callpc < allpc.length; callpc++) {
    	allpc[callpc].style.backgroundColor="#dcdcdc";
    	allpc[callpc].style.color="#2b3444";}
	document.getElementById(tall).style.backgroundColor="#2a3443";
document.getElementById(tall).style.color="#ffffff";
}
function expplace(pall){
	var p = pall; var place = document.getElementById("place");
	place.value=p;
	
		var callpc;
	var allpc = document.querySelectorAll(".centeractbtn");
	for (callpc = 0; callpc < allpc.length; callpc++) {
    	allpc[callpc].style.backgroundColor="#dcdcdc";
    	allpc[callpc].style.color="#2b3444";}
document.getElementById(pall).style.backgroundColor="#2a3443";
document.getElementById(pall).style.color="#ffffff";
}
</script>
  <script type="text/javascript">
if (screen.width >= 980) {
document.location = "tour.php";
}
</script>
</head>
<body>
<div id="screenshotDiv">
  <img id="screenshot"><br>
  
  <h id="buffertxt">Please wait, loading image...</h> <button id="closeScreenshot" class="tramp"><i class="material-icons">close</i></button>
  </div>
<img src='https://vrixe.com/images/und.svg' id='himg'>

<div id="icontxt">
<img src="https://vrixe.com/images/vlogie.svg" id="icon" alt="Vrixe Logo">

	<div id="txt">
		<h><b>An event planning tool for teams.</b></h><br>

		<small style="color:#6c63ff"><b>Free - Requires Sign Up - Contains no Ad</b></small><br>
		<?php
    echo"<small>Vn $genAppVersion - Last Update $releaseDateToString</small>"; ?>
	</div>

</div>


<div id="ctas">
	<a href="app/pwa.html"><button class="cta" id="topwa">Install</button></a>
	<a href="#sample"><button class="cta" id="tovrixe">Explore A Demo</button></a>
</div>
<br>

<div id="details" onclick="showdet()">
  <br><p id="reviewhead">Features</p>
  
	<p style="text-align:center">Create and edit details on the go. Share and collaborate on your next plan with your team.<br></p>

<br>


<h class="cyansm"><i class="material-icons">group_work</i> Edit plans together</h><br>
		Edit and contribute details, see what others are adding, who changed what and collectively finalize decisions.
<br><br>
  
  <h class="cyansm"><i class="material-icons">subject</i> Add all the details you want</h><br>
	Plan and share the most thoughtful details on your events. From basic details like date, time and venue to adding agenda, updating guests on plan progress, dress code....
	<br><br>
  
  
<h class="cyansm"><i class="material-icons">add_location</i> Add dual locations</h><br>
	Vrixe is also your trip, hike or roadshow app. Let your friends know the start and finish of your event venue with an event map to show for it.
	<br><br>


<h class="cyansm"><i class="material-icons">view_agenda</i> Add an agenda</h><br>
	 Doing some time management? share the order of event with everyone and get more control on how and when they happen.
	<br><br>
  
 <h class="cyansm"><i class="material-icons">how_to_vote</i> Take better polls</h><br>
	Polls are best when they have a simple interface, can be private or public, are connected to your event and support comments and questions. That's what you get on Vrixe. 
	<br><br>
  
   <h class="cyansm"><i class="material-icons">notifications_active</i> Use push notifications</h><br>
	Never miss a change or update from your team with web push notifications and all the control is with you because we hate spams too. 
	<br><br>

<h class="cyansm"><i class="material-icons">insert_chart_outlined</i> View Analytics</h><br>
	Get some analytics on your invitations, plans and profile outlined in a simple layout.  
	<br><br>

<h class="cyansm"><i class="material-icons">lock</i> Privacy & Private Plans</h><br>
	Vrixe is progressively secure in all packages, the way we write our code and the flavour of the language we use. That's why we are small scale, we like to keep it that way just for you, us and your close friends. 
	<br><br>

<h class="cyansm"><i class="material-icons">code</i> Latest web APIs</h><br>
	 Built with more web sprinkles than ever. Share directly to any app, use Vrixe offline, on any device, try the maps integration, get push notifications and send direct feedbacks. Do it all in a browser tab.

	<br><br>


<b><a href="invite" style="color:#2b3444;">Go on, start a plan with someone...</a></b><br>


	<br><br>


<br>

</div>
<button id="showbtn" onclick="showdet()" class="tramp"><i class="material-icons">keyboard_arrow_down</i></button>
<a href="#ctas"><button id="hidebtn" onclick="hidedet()" class="tramp"><i class="material-icons">keyboard_arrow_up</i></button></a>

<br><br><br>

<a href="index.php"><button class="adss">Open Vrixe</button></a>

<a href="#reviews"><button class="adss">User Reviews</button></a>

<br><br>

<div id="sidescroll">
<div id="insidescroll">

<img src="images/aboutvrixe/invite-cv.jpg" class="scrollimg" alt="Send Invites" id="invite-cv">
<img src="images/aboutvrixe/event-cv.jpg" class="scrollimg" alt="Share Events" id="event-cv">
<img src="images/aboutvrixe/desk-cv.jpg" class="scrollimg" alt="Co plan and edit" id="desk-cv">
<img src="images/aboutvrixe/analytics-cv.jpg" class="scrollimg" alt="Get Reports" id="analytics-cv">
<img src="images/aboutvrixe/poll-cv.jpg" class="scrollimg" alt="Simple UX" id="poll-cv">
<img src="images/aboutvrixe/agenda-cv.jpg" class="scrollimg" alt="Add Programs" id="agenda-cv">
<img src="images/aboutvrixe/privacy-cv.jpg" class="scrollimg" alt="Built with privacy in mind" id="privacy-cv">
<img src="images/aboutvrixe/s1-cv.jpg" class="scrollimg" alt="Avalable as a PWA" id="s1-cv">
<img src="images/aboutvrixe/s2-cv.jpg" class="scrollimg" alt="Responsive Design Mobile" id="s2-cv">
<img src="images/aboutvrixe/s3-cv.jpg" class="scrollimg" alt="Responsive Design Desktop" id="s3-cv">

</div>
</div>

<br><br>
<div id="sample"><br><br>
	

<div class="newage">
	<form method="post" action="preview" style="display: inline;">
<img src="images/essentials/preview/hang.jpeg" class="evtimg" id="dynoimg" alt="Image preview">
<div class="evtdetails">

	<div id="eventnames">

		<div id="insideeventnames">		
		<div class="evetname" style="background-color:transparent;color: rgb(94, 94, 94);padding-right:1%;padding-left:1%;margin-left: 0px;margin-right:0px;">></div>

  <div id="MEETUP" class="evetname" onclick="exp(this.innerHTML);">MEETUP</div>
	<div id="HANGOUT" class="evetname" onclick="exp(this.innerHTML);">HANGOUT</div>
	<div id="REUNION" class="evetname" onclick="exp(this.innerHTML);">REUNION</div>
	<div id="EVENT" class="evetname" onclick="exp(this.innerHTML);">EVENT</div>
	<div id="DINNER" class="evetname" onclick="exp(this.innerHTML);">DINNER</div>
	<div id="TRIP" class="evetname" onclick="exp(this.innerHTML);">TRIP</div>
	

</div>	<input class="rates" required id="evt" name="event" value="HANGOUT">
</div>

	
<i class="material-icons" style="color:#df0d53">location_on</i><br>	

	<button id="My place" class="centeractbtn" type="button" onclick="expplace(this.innerHTML);">My place</button>
<button id="Friend's" class="centeractbtn" type="button" onclick="expplace(this.innerHTML);">Friend's</button>
<button id="Outdoors" class="centeractbtn" type="button" onclick="expplace(this.innerHTML);">Outdoors</button><br>
<input class="rates" required id="place" name="venue" type="hidden" value="My place">


<br>

<div class="flotl">
	<i class="material-icons" style="color:#df0d53;margin-left:10px">calendar_today</i><br>	
<button id="Tomorrow" class="leftactbtn" type="button" onclick="exphap(this.innerHTML)">Tomorrow</button><br>
<button id="Next Week" class="leftactbtn" type="button" onclick="exphap(this.innerHTML)">Next Week</button><br>
<button id="Next Month" class="leftactbtn" type="button" onclick="exphap(this.innerHTML)">Next Month</button><br>
<input class="rates" required id="hap" name="date" value="Tomorrow">
</div>

<div class="flotr">
<i class="material-icons" style="color:#df0d53;margin-right:3px">timelapse</i><br>
<button id="Morning" class="rightactbtn" type="button" onclick="exptime(this.innerHTML)">Morning</button><br>
<button id="Afternoon" class="rightactbtn" type="button" onclick="exptime(this.innerHTML)">Afternoon</button><br>
<button id="Night" class="rightactbtn" type="button" onclick="exptime(this.innerHTML)">Night</button>
<input class="rates" required id="time" name="time" value="Morning">
  
  <input class="rates" required value="78" name="deviceid">
</div>
<br>

<button class="actbtn">Preview Demo</button>
</form>
</div>

</div>
	</div>
<br>


<div id="reviews"><br>
	<i class="material-icons" style="font-size:16px;color:#576477">star</i>
	<i class="material-icons" style="font-size:19px;color:#3d495a">star</i>
	<i class="material-icons" style="font-size:22px;color:#232d3c">star</i>
	<i class="material-icons" style="font-size:19px;color:#3d495a">star</i>
	<i class="material-icons" style="font-size:16px;color:#576477">star</i>

<p id="reviewhead">Ratings & Reviews</p>
<div style="text-align:center;">
<button class="reviewheadbtn"><i class="material-icons" style="color: #379e65;font-size:16px;">style</i> <br>Design</button>
<button class="reviewheadbtn"><i class="material-icons" style="color: #379e65;font-size:16px;">recent_actors</i> <br>Experience</button>
<button class="reviewheadbtn"><i class="material-icons" style="color: #379e65;font-size:16px;">scatter_plot</i> <br>Features</button>
<button class="reviewheadbtn"><i class="material-icons" style="color: #379e65;font-size:16px;">feedback</i> <br>Support</button>
</div>

<div class="jal"></div>
<div id="icontxt">

	<?php
$coutd = mysqli_query($conne, "SELECT COUNT(design) AS nodes FROM reviews WHERE design > '' ");
   	  while($countd = mysqli_fetch_array($coutd)){
   	  		 $desno = $countd['nodes'];
   	  }

$couts = mysqli_query($conne, "SELECT SUM(design+ux+features+support) AS ts FROM reviews WHERE user > '' ");
   	  while($counts = mysqli_fetch_array($couts)){
   	  		 $rawscore = $counts['ts'];
   	  }

$allscore = $desno * 400; //highest possbile score.




echo "
<div id='alticon'>
<i class='material-icons' style='font-size:16px;color:#d6a500'>star</i><br>
  $rawscore 

  <div class='jal'></div>

  <h id='allscore'>$allscore</h>
</div>
";

	?>



	<div id="txt">

<?php

$getrevdes = mysqli_query($conne,"SELECT SUM(design) AS alldesign FROM reviews WHERE user > '' ");
   while($founddesign = mysqli_fetch_array($getrevdes)){
   
    $gotdesign = 1;
   $rawdesign = $founddesign['alldesign'];
 $design = $rawdesign / $desno;
 if($design >= 70){$barcl = '#54cb54';}
 else if ($design <= 69 and $design >= 50){$barcl = '#3fa9fe';}
 else {$barcl = '#eb5f19';}


 echo "
 <button class='reviewheadbtn' style='width:auto;'><i class='material-icons' style='font-size:16px;'>style</i></button> 
<div class='mainrevholder'>
<div class='revfiller' style='background-color:$barcl;width:$design%'></div>
</div><br>

 ";
}


$getrevux = mysqli_query($conne,"SELECT SUM(ux) AS allux FROM reviews WHERE user > '' ");
   while($foundux = mysqli_fetch_array($getrevux)){
    $gotux = 1;
   $rawux = $foundux['allux'];
 $ux = $rawux / $desno;
 if($ux >= 70){$barcl = '#54cb54';}
 else if ($ux <= 69 and $ux >= 50){$barcl = '#3fa9fe';}
 else {$barcl = '#eb5f19';}

 echo "
<button class='reviewheadbtn' style='width:auto;'><i class='material-icons' style='font-size:16px;'>recent_actors</i></button>
<div class='mainrevholder'>
<div class='revfiller' style='background-color:$barcl;width:$ux%'></div>
</div><br>
 ";
}




$getrevfeatures = mysqli_query($conne,"SELECT SUM(features) AS allfeatures FROM reviews WHERE user > '' ");
   while($foundfeatures = mysqli_fetch_array($getrevfeatures)){
    $gotfeatures = 1;
   $rawfeatures = $foundfeatures['allfeatures'];
 $features = $rawfeatures / $desno;
 if($features >= 70){$barcl = '#54cb54';}
 else if ($features <= 69 and $features >= 50){$barcl = '#3fa9fe';}
 else {$barcl = '#eb5f19';}

 echo "
<button class='reviewheadbtn' style='width:auto;'><i class='material-icons' style='font-size:16px;'>scatter_plot</i></small></button>
<div class='mainrevholder'>
<div class='revfiller' style='background-color:$barcl;width:$features%'></div>
</div><br>
 ";
}






$getrevsupport = mysqli_query($conne,"SELECT SUM(support) AS allsupport FROM reviews WHERE user > '' ");
   while($foundsupport = mysqli_fetch_array($getrevsupport)){
    $gotsupport = 1;
   $rawsupport = $foundsupport['allsupport'];
 $support = $rawsupport / $desno;
 if($support >= 70){$barcl = '#54cb54';}
 else if ($support <= 69 and $support >= 50){$barcl = '#3fa9fe';}
 else {$barcl = '#eb5f19';}

 echo "
<button class='reviewheadbtn' style='width:auto;'><i class='material-icons' style='font-size:16px;'>feedback</i></button>
<div class='mainrevholder'>
<div class='revfiller' style='background-color:$barcl;width:$support%'></div>
</div><br>
 ";
}

	

?>





	</div><!--end of float right image finishsed tself above-->
</div><!--end of float rating and image-->

<div class="jal" style="width:60%;"></div>


<div id="altsidescroll">
	<div id="altinsidescroll">
<?php

if($username > ""){ //user isset
$fetchreviews = mysqli_query($conne,"SELECT * FROM reviews WHERE user = '$username' ");
 $gotuserviews = 0;
   while($founduserviews = mysqli_fetch_array($fetchreviews)){
   
    $gotuserviews = 1;
   $revtext = $founduserviews['texts'];
   $revdesign = $founduserviews['design'];
   $revux = $founduserviews['ux'];
   $revfeatures = $founduserviews['features'];
   $revsupport = $founduserviews['support'];
     $puawco = $founduserviews['created'];

echo "
<div class='scrollrevs'>
<div class='revfl'>
<img src='images/profiles/profilethumbs/$userheadimg' class='revpi'><br>
<b>$fullname</b><br>

</div>

<div class='revfr'>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>style</i><br><b>$revdesign%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>recent_actors</i><br><b>$revux%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>scatter_plot</i><br><b>$revfeatures%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>feedback</i><br><b>$revsupport%</b></div>


<div class='finaltxt'>
$revtext
</div>
<a href='help/feedbacks.php?rate=o'><div class='altpellets'><i class='material-icons' style='font-size:16px;'>edit</i></div></a>

</div>


</div>



";
}

if ($gotuserviews == 0){
	echo"
	<div class='scrollrevs'>
<div class='revfl'>
<img src='images/profiles/profilethumbs/$userheadimg' class='revpi'><br>
<b>$fullname</b><br>
@$username
</div>

<div class='revfr'>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>style</i><br><b>0%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>recent_actors</i><br><b>0%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>scatter_plot</i><br><b>0%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>feedback</i><br><b>0%</b></div>


<div class='finaltxt'>
Rate Vrixe and help others know what to expect. 
</div>
<a href='help/feedbacks?rate=o'><div class='altpellets'><i class='material-icons' style='font-size:16px;'>edit</i></div></a>

</div>


</div>


";
}
}

else{
echo "
	<div class='scrollrevs'>
<div class='revfl'>
<img src='images/profiles/user.png' class='revpi'><br>
<b>Your Review</b><br>
@username
</div>

<div class='revfr'>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>style</i><br><b>0%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>recent_actors</i><br><b>0%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>scatter_plot</i><br><b>0%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>feedback</i><br><b>0%</b></div>


<div class='finaltxt'>
Create your account, explore Vrixe and tell us what you think.
</div>
<a href='index?q=profile_required'><div class='altpellets'><i class='material-icons' style='font-size:16px;'>person_add</i></div></a>

</div>


</div>
";
}




$fetchallreviews = mysqli_query($conne,"SELECT * FROM reviews WHERE user > '' and user != '$username' ORDER BY RAND() LIMIT 5");
 $gotalluserviews = 0;
   while($foundalluserviews = mysqli_fetch_array($fetchallreviews)){
   
    $gotalluserviews = 1;
       
     $allusername = $foundalluserviews['user'];
    $allfullname = $foundalluserviews['fullname'];
   $allrevtext = $foundalluserviews['texts'];
    $allrevdesign = $foundalluserviews['design'];
    $allrevux = $foundalluserviews['ux'];
    $allrevfeatures = $foundalluserviews['features'];
    $allrevsupport = $foundalluserviews['support'];
    
     $getusersimagedirect = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$allusername' ");
     while($founduserimagedirect = mysqli_fetch_array($getusersimagedirect)){
        $alluserpic = $founduserimagedirect['picture'];
       $uawco = $founduserimagedirect['created'];
     }
 
echo "
<div class='scrollrevs'>
<div class='revfl'>
<img src='images/profiles/profilethumbs/$alluserpic' class='revpi'><br>
<b>$allfullname</b><br>
$uawco
</div>

<div class='revfr'>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>style</i><br><b>$allrevdesign%</b> </div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>recent_actors</i><br><b>$allrevux%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>scatter_plot</i><br><b>$allrevfeatures%</b></div>
<div class='pellets'><i class='material-icons' style='font-size:16px;'>feedback</i><br><b>$allrevsupport%</b></div>


<div class='finaltxt'>
$allrevtext
</div>

<form method='post' action='help/feedbacks.php' style='width:100%;'>
<input type='text' value='review from $allusername' name='refs' style='display:none'>
<button class='altpellets'><i class='material-icons' style='font-size:16px;'>flag</i></button>
</form>
</div>



</div>



";
}

if ($gotuserviews == 0){
	//if no review is found
}





?>
</div>
</div>




</div><!--end of reviews-->
<br>






<div class="explain"><br>

  
  <?php
  if($username > ""){
 echo"
  <a href='me'> <button class='cta'><i class='material-icons' style='font-size:17px;vertical-align:sub'>person</i> My account</button></a><br>
";
}
else{
  echo " <a href='index.php?q=profile_required#signup'> <button class='cta'><i class='material-icons' style='font-size:17px;vertical-align:sub'>how_to_reg</i> Try Vrixe</button></a><br>
  ";
}

?>
<br><a href="app/terms.html" style="color:#43ade4">Privacy Policy</a> &nbsp &nbsp &nbsp &nbsp<a href="help/feedbacks"style="color:#43ade4">Support</a><br><br>

  <h>Not seeing something you want?<br> <a href='help/feedbacks?ext=uwc' style='color:#2b3443'>Tell us what feature you're looking for <i class="material-icons" style="vertical-align:sub;font-size:17px">arrow_forward</i></a></h><br><br>

<a href="https://www.twitter.com/vrixeapp"><button type="button" class="socs"> <img src="app/icons/twitter.png" style="width:16px;height:16px;"></button></a>

<a href="https://www.instagram.com/vrixe"><button type="button" class="socs"> <img src="app/icons/instagram.png" style="width:16px;height:16px;"></button></a>

<a href="https://youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ"><button type="button" class="socs"> <img src="app/icons/youtube.png" style="width:16px;height:16px;"></button></a>
  
<a href="https://www.linkedin.com/company/vrixe"><button type="button" class="socs"> <img src="app/icons/linkedin.png" style="width:16px;height:16px;"></button></a>

<a href="mailto:contact@vrixe.com"><button type="button" class="socs"> <img src="app/icons/mail.png" style="width:16px;height:16px;"></button></a>
<br><br>
  
  <div class='blfheadalt'></div>
</div>
<script>
  var scrollimg = document.querySelectorAll(".scrollimg");
  
 for (let i = 0; i < scrollimg.length; i++) {
     scrollimg[i].addEventListener("click", function() {
      var imgName = this.id; //get image name
       var screenshotDiv = document.getElementById("screenshotDiv"); //get image dispaly div
        document.getElementById("screenshot").setAttribute("src", `images/aboutvrixe/highres/${imgName}.jpg`); //set image in div to image clicked
       screenshotDiv.style.display="block"; //show the div
       document.location="#himg";//pull page back up for gallery scroll
       
       document.getElementById("buffertxt").style.display="inline-block";//show buffer text
       
       //hide buffer text
       setTimeout(function(){
         document.getElementById("buffertxt").style.display="none";
       },3000);
       
     });
 }
 
  //close the screenshot div
  document.getElementById("closeScreenshot").addEventListener("click", function(){
     document.getElementById("screenshotDiv").style.display="none"; //show the div
  })

  </script>
</body>
</html>