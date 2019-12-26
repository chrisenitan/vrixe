<?php
//do not require user account
$defaultAllowNoUser = true;
require("garage/passport.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Product Tour | About Vrixe</title>
<link rel="manifest" href="manifest.json">
<meta http-equiv="Cache-control: no-transform">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta name="description" content="What is Vrixe, everything you want to know about Vrixe. Co-edit and Plan your Events with friends on Vrixe Desktop">
<meta property="og:image" content="https://vrixe.com/images/vlogie.png"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<link rel="icon" type="png" href="/images/vogo.png">
<?php
require("garage/vouchar.php"); 
require ("garage/versions.php");
echo "<link type='text/css' rel='stylesheet' href='css/production.css?v$vv'>";
?>
<link href="https://fonts.googleapis.com/css?family=Nunito|Skranji|Titillium+Web|Rubik+Mono+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script type="text/javascript">
if (screen.width <= 979) {
document.location = "aboutvrixe.php";
}
  window.addEventListener("wheel", {passive: true} );
      
      
      
function switchs(content, id){
	var content = content;

if( content == 'PREVIEW'){
  //document.getElementById("cardtext").innerHTML=""; //change card
                        var contentdesc = "Get a quick sample of what your event will look like.";}
  
else if( content == 'FEATURES'){
  //document.getElementById("cardtext").innerHTML=""; //change card
                              var contentdesc = "There are so many reasons to use Vrixe, especially these four.";}
  
else if( content == 'AS SEEN ON'){
  //document.getElementById("cardtext").innerHTML=""; //change card
                             var contentdesc = "Checkout what everyone thinks about us and our ratings.";}
else{
  //document.getElementById("cardtext").innerHTML=""; //change card
   var contentdesc = "Beyond calendars and chats and discover a new way to make group plans.";}


  document.getElementById("maintopic").innerHTML=content ; //change title
   document.getElementById("maindescription").innerHTML=contentdesc ; //change descritpion

	var callpc;
	var allpc = document.querySelectorAll(".cats_btn");//leftconstruct
 var rightcons = document.querySelectorAll(".rcb");
	for (callpc = 0; callpc < allpc.length; callpc++) {
    	allpc[callpc].style.background="transparent";
    	allpc[callpc].style.color="#fff";}
  document.getElementById(id).style.background="linear-gradient(to right,#46507b,#c32bbf)";
document.getElementById(id).style.color="#fff";

}
  </script>
</head>
<body>

  <div id="m_leftconstruct">
<div id="leftconstruct">
 <p id="maintopic">
   Features 
  </p>
  <p id="maindescription">Take your events beyond notes, calendars and chats and discover a new way to make group plans.</p><br>
  <a href="/index?q=profile_required" style='text-decoration:none'><div id="t_btn"><i class="material-icons" style="vertical-align:sub;font-size:20px">person_outline</i> Get Started</div></a>
 
  
   <div id="t_div">
  <p id="t_div_p">Why Vrixe?</p>
     <small id='cardtext'>Ask questions, take polls, be more detailed, share and plan it all with friends and make your nex event one to remember. It really is a new group planning experience.</small>
  </div>
    
        <div class="footer">
<a href="#features"><button onclick="switchs('FEATURES', 'FEATURES')" id="FEATURES" class="cats_btn"><i class="material-icons" style="vertical-align:sub;font-size:18px">art_track</i> Features</button></a>
<a href="#preview"><button onclick="switchs('PREVIEW', 'PREVIEW')" id="PREVIEW" class="cats_btn"><i class="material-icons" style="vertical-align:sub;font-size:18px">dvr</i> Preview</button></a>
<a href="#as_seen_on"><button onclick="switchs('AS SEEN ON', 'SEEN_ON')" id="SEEN_ON" class="cats_btn" style="display:none"><i class="material-icons" style="vertical-align:sub;font-size:18px">rate_review</i> As Seen On</button></a>
  
    
        <a href="https://instagram.com/vrixe" target="_blank"><button class="soc_btn"><img alt='Instagram' src='images/essentials/socials/t_instagram.png' style='width:25px;height:25px;display:inline-block'></button></a>
        <a href="https://twitter.com/vrixeapp" target="_blank"><button class="soc_btn"><img alt='Twitter' src='images/essentials/socials/t_twitter.png' style='width:25px;height:25px;display:inline-block'></button></a>
        <a href="https://www.youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ" target="_blank"><button class="soc_btn"><img alt='Youtube' src='images/essentials/socials/t_youtube.png' style='width:25px;height:25px;display:inline-block'></button></a>
        <a href="https://facebook.com/vrixe" target="_blank"><button class="soc_btn"><img alt='Facebook' src='images/essentials/socials/t_facebook.png' style='width:25px;height:25px;display:inline-block'></button></a>
        
  </div>
  
  
  <!--actual footer -->
          <div class="footer">
          
          <a href="help/feedbacks"><button class="foots_btn"><i class="material-icons" style="vertical-align:middle;font-size:13px">feedback</i> Feedbacks</button></a>
          
          <a href="help/faq"><button class="foots_btn"><i class="material-icons" style="vertical-align:middle;font-size:13px">question_answer</i> Help & Faq</button></a>
          
          <a href="index?q=recover_password"><button class="foots_btn"><i class="material-icons" style="vertical-align:middle;font-size:13px">vpn_key</i> Login Issues</button></a>
          
           <a href="mailto:contact@vrixe.com"><button class="foots_btn"><i class="material-icons" style="vertical-align:middle;font-size:13px">mail</i> Contact</button></a>
          
  <a href="index?q=profile_required"><button class="foots_btn"><i class="material-icons" style="vertical-align:middle;font-size:13px">person_add</i> Sign Up</button></a><br>
          
 
       
          
     <p class="cover_txt" style="clear:both">Find us everywhere online and look here for our <a href="app/terms.html">Terms</a>, <a href="app/terms.html#cookies">Cookies</a> and <a href="app/terms.html#prio">Privacy</a> policy. <i class="material-icons" style="vertical-align:middle;font-size:18px">copyright</i> 2019</p>
          
  </div>
  
  
    

  </div><!--e of leftconstruct -->


    
  </div><div id="rightconstruct">
  
    <div id='all_box' class="rcb" >
      
    <div class="cards_cover" id="features">
      <div class="cards" style="background-image: url(images/aboutvrixe/feature_poll.jpg);"><br>
    <p class="cover_txt"></p>
      </div>
      <a href="index?q=profile_required"><button class="cards_btn">TAKE SIMPLE POLLS</button></a>
      <p class="cover_txt">Take better event surveys with polls, get comments and keep it private or public.</p>
    </div>
    
    
      <div class="cards_cover">
      <div class="cards" style="background-image: url(images/aboutvrixe/feature_agenda.jpg);"><br>
   <p class="cover_txt"></p>
      </div>
        <a href="index?q=profile_required"><button class="cards_btn">ADD AN AGENDA</button></a>
       <p class="cover_txt">Give your team or guests more insight on how you plan the day with a schedule. </p>
    </div>
    
   
       <div class="cards_cover">
      <div class="cards" style="background-image: url(images/aboutvrixe/feature_collaborate.jpg);"><br>
   <p class="cover_txt"></p>
      </div>
         <a href="index?q=profile_required"><button class="cards_btn">COLLABORATE WITH FRIENDS</button></a>
       <p class="cover_txt">Add your team to your invite and plan the perfect event together.</p>
    </div>
    
    
       <div class="cards_cover">
      <div class="cards" style="background-image: url(images/aboutvrixe/feature_private.jpg);"><br>
   <p class="cover_txt"></p>
      </div>
         <a href="index?q=profile_required"><button class="cards_btn">SUPPORTS PRIVATE EVENTS</button></a>
       <p class="cover_txt">Creat an event with view & edit access just for you and your friends...
         &nbsp <a href="#">go up <i class="material-icons" style="vertical-align:bottom;font-size:18px">expand_less</i></a></p>
    </div>
    
  
  
  
  
  
    
    
    <div class="cards_cover" id="preview">
      <div class="cards" style="background-image: url(/images/aboutvrixe/t_meetup.jpg);"><br>
    <p class="alt_cover_txt">...a meetup on artworks tomorrow morning at your place</p>
      </div>
      <form method="post" action="preview.php" style="width:100%;display: inline;">
      <button class="cards_btn">PREVIEW A MEETUP <i class="material-icons" style="font-size:11px">send</i></button>
        <input class="rates" required id="evt" name="event" value="MEETUP">
        <input class="rates" required id="place" name="venue" type="hidden" value="My place">
        <input class="rates" required id="hap" name="date" value="Tomorrow">
        <input class="rates" required id="time" name="time" value="Morning">
        <input class="rates" required value="78" name="deviceid">
        </form>
      <p class="cover_txt">You'll never over-stress the theme, time, venue... with Vrixe, its always updated.</p>
    </div>
    
    
      <div class="cards_cover">
      <div class="cards" style="background-image: url(/images/aboutvrixe/t_reunion.jpg);"><br>
   <p class="alt_cover_txt">...a reunion next week afternoon for your old mates.</p>
      </div>
           <form method="post" action="preview.php" style="width:100%;display: inline;">
      <button class="cards_btn">PREVIEW A REUNION <i class="material-icons" style="font-size:11px">send</i></button>
          <input class="rates" required id="evt" name="event" value="REUNION">
        <input class="rates" required id="place" name="venue" type="hidden" value="Outdoors">
        <input class="rates" required id="hap" name="date" value="Next Week">
        <input class="rates" required id="time" name="time" value="Afternoon">
        <input class="rates" required value="78" name="deviceid">
        </form>
       <p class="cover_txt">See how adding landmarks and polls to your event can help reconnect with friends.</p>
    </div>
    
       <div class="cards_cover">
      <div class="cards" style="background-image: url(/images/aboutvrixe/t_trip.jpg);"><br>
   <p class="alt_cover_txt">...a road trip next month starting early through the day</p>
      </div>
          <form method="post" action="preview.php" style="width:100%;display: inline;">
      <button class="cards_btn">PREVIEW A TRIP <i class="material-icons" style="font-size:11px">send</i></button>
           <input class="rates" required id="evt" name="event" value="TRIP">
        <input class="rates" required id="place" name="venue" type="hidden" value="Outdoors">
        <input class="rates" required id="hap" name="date" value="Next Month">
        <input class="rates" required id="time" name="time" value="Morning">
        <input class="rates" required value="78" name="deviceid">
         </form>
       <p class="cover_txt">Add dual locations and links, export your plan to your calendar and have a great trip. </p>
    </div>
    
    
       <div class="cards_cover">
      <div class="cards" style="background-image: url(/images/aboutvrixe/t_hangout.jpg);background-position:bottom"><br>
   <p class="alt_cover_txt">...that dual birthday which also happens to be your anniversay?</p>
      </div>
          <form method="post" action="preview.php" style="width:100%;display: inline;">
      <button class="cards_btn">PREVIEW AN EVENT <i class="material-icons" style="font-size:11px">send</i></button>
            <input class="rates" required id="evt" name="event" value="EVENT">
        <input class="rates" required id="place" name="venue" type="hidden" value="My place">
        <input class="rates" required id="hap" name="date" value="Tomorrow">
        <input class="rates" required id="time" name="time" value="Night">
        <input class="rates" required value="78" name="deviceid">
         </form>
       <p class="cover_txt">Going big wit something soon? Make a memorable plan for it. 
         &nbsp <a href="#">go up <i class="material-icons" style="vertical-align:bottom;font-size:18px">expand_less</i></a></p>
    </div>
    
  
  
  
  
    

      <div class="cards_cover" id="as_seen_on" style="display:none">
      <div class="cards" style="background-image: url(/images/aboutvrixe/awards.png);"><br>
   <p class="cover_txt">...that dual birthday which also happens to be your anniversay?</p>
      </div>
          <form method="post" action="preview.php" style="width:100%;display: inline;">
            <a href="https://www.producthunt.com/posts/vrixe"><button class="cards_btn">AWAAARDS <i class="material-icons" style="font-size:11px">send</i></button></a>
            <input class="rates" required id="evt" name="event" value="EVENT">
        <input class="rates" required id="place" name="venue" type="hidden" value="My place">
        <input class="rates" required id="hap" name="date" value="Tomorrow">
        <input class="rates" required id="time" name="time" value="Night">
        <input class="rates" required value="78" name="deviceid">
         </form>
       <p class="cover_txt">Going big wit something soon? Whatever it is, create and share your plan on Vrixe</p>
    </div>
    
    
    
    
      <div class="cards_cover" style="display:none">
      <div class="cards" style="background-image: url(/images/aboutvrixe/awards.png);"><br>
   <p class="cover_txt">...that dual birthday which also happens to be your anniversay?</p>
      </div>
          <form method="post" action="preview.php" style="width:100%;display: inline;">
      <button class="cards_btn">EVENT <i class="material-icons" style="font-size:11px">send</i></button>
            <input class="rates" required id="evt" name="event" value="EVENT">
        <input class="rates" required id="place" name="venue" type="hidden" value="My place">
        <input class="rates" required id="hap" name="date" value="Tomorrow">
        <input class="rates" required id="time" name="time" value="Night">
        <input class="rates" required value="78" name="deviceid">
         </form>
       <p class="cover_txt">Going big wit something soon? Whatever it is, create and share your plan on Vrixe</p>
    </div>
    
    
    
    
      <div class="cards_cover" style="display:none">
      <div class="cards" style="background-image: url(/images/aboutvrixe/t_hangout.jpg);"><br>
   <p class="cover_txt">...that dual birthday which also happens to be your anniversay?</p>
      </div>
          <form method="post" action="preview.php" style="width:100%;display: inline;">
      <button class="cards_btn">EVENT <i class="material-icons" style="font-size:11px">send</i></button>
            <input class="rates" required id="evt" name="event" value="EVENT">
        <input class="rates" required id="place" name="venue" type="hidden" value="My place">
        <input class="rates" required id="hap" name="date" value="Tomorrow">
        <input class="rates" required id="time" name="time" value="Night">
        <input class="rates" required value="78" name="deviceid">
         </form>
       <p class="cover_txt">Going big wit something soon? Whatever it is, create and share your plan on Vrixe</p>
    </div>
    
    
    
    
      <div class="cards_cover" style="display:none">
      <div class="cards" style="background-image: url(/images/aboutvrixe/t_hangout.jpg);"><br>
   <p class="cover_txt">...that dual birthday which also happens to be your anniversay?</p>
      </div>
          <form method="post" action="preview.php" style="width:100%;display: inline;">
      <button class="cards_btn">EVENT <i class="material-icons" style="font-size:11px">send</i></button>
            <input class="rates" required id="evt" name="event" value="EVENT">
        <input class="rates" required id="place" name="venue" type="hidden" value="My place">
        <input class="rates" required id="hap" name="date" value="Tomorrow">
        <input class="rates" required id="time" name="time" value="Night">
        <input class="rates" required value="78" name="deviceid">
         </form>
       <p class="cover_txt">Going big wit something soon? Whatever it is, create and share your plan on Vrixe 
         &nbsp <a href="#">go up <i class="material-icons" style="vertical-align:bottom;font-size:18px">expand_less</i></a></p>
    </div>
    
    

  </div>
  
  
  
  
  </div>
</body>
</html>