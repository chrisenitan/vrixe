<?php
//do not require user account
$defaultAllowNoUser = true;
require("garage/passport.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <script> window.addEventListener("wheel", {passive: true} );</script>
  <?php
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=06bfc66ceaf02708dafb98bf50c15cbb49e2532ba69fedf6f7da78a1805ad281&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
 $z = $url->countryName;
  
  if($z == "-" or $z == "ZERO_RESULTS"){$z = "United States";}else{$z = $z;}
 
$event = mysqli_real_escape_string($conne, $_POST['event']);
  $deviceid = mysqli_real_escape_string($conne, $_POST['deviceid']);

$eig = substr($event,0,4);

if($eig == 'TRIP'){$evimg = 'trip.jpeg';}
else if($eig == 'HANG'){$evimg = 'hang.jpeg';}
else if($eig == 'REUN'){$evimg = 'reun.jpeg';}
else if($eig == 'EVEN'){$evimg = 'even.jpeg';}
else if($eig == 'DINN'){$evimg = 'dinn.jpeg';}
else if($eig == 'MEET'){$evimg = 'meet.jpeg';}
else{$evimg = 'default.png';}

echo"<title>$event ON VRIXE</title>";

?>
<meta name='description' content='Create group plans with Vrixe.'>

<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>

  <style>
  .copele{
    box-shadow:none;
    background-color: #f8f8ff;
    color: #252b38;
  }
    body{
      background-color: #f5f5f5;
    }
    #write:hover{
        background-color: #016f90;
  margin-left: 84%;
    }
    #evin{
      font-size: 16px;
    }
    .bring{
      width: 20%;
    }
    #expl{
    width: 95%;
    margin: auto;
    max-width: 850px;
    border-radius: 4px;
    padding-top: 5px;
    padding-bottom: 5px;
    height: auto;
    color: #f8f8f8;
    text-align: center;
    background-position: right;
     background-image: url(images/pf.jpeg);
    background-blend-mode: overlay;
    background-color: rgb(35, 37, 43);
}
.ground{
  height: auto;
    background-color: white;
    padding: 1%;
    padding-left: 2%;
    padding-right: 2%;
    border-radius: 15px;
    margin: auto;
    width: 80%;
    font-weight: bold;
    border-style: solid;
    border-color: #afa3a3;
    border-width: 1px;
}
@media screen and (min-width: 980px){/*responsive*/
#menia{
  margin-top: 190px;
}}
  </style>
</head>
<body>
<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>

<div id="gtr" onclick="closeclose()"></div>

<button id="write" onclick="pmenu()"><i class='material-icons'>more_vert</i></button>

<?php require("garage/mobilehead.php"); ?>
<?php require("garage/subhead.php");?>
<?php require("garage/thesearch.php"); ?>




<span >
<?php


$date = mysqli_real_escape_string($conne, $_POST['date']);

 $time = mysqli_real_escape_string($conne, $_POST['time']);

  $venue =  htmlspecialchars($_POST['venue'], ENT_COMPAT);

$hype = "user";

$todayd = date("Y - m - d");

$tpreview = "INSERT INTO store (searchquery,sqy,profile,sc) VALUES('$eig','$z','$todayd','$deviceid')"; 
 

 echo"
<script>
 function pmenu(){
  document.getElementById('menia').style.height='385px';
  document.getElementById('gtr').style.display='block';
 }
 function closeclose(){
  document.getElementById('menia').style.height='0';
     document.getElementById('searchboxes').style.height='0';
      document.getElementById('gtr').style.display='none';
 document.getElementById('sbut').style.display='inline-block';
 var program = document.getElementById('program');
 if (program){
  program.style.display='none';
 }
 }
</script>

<div id='menia'>
<div id='meniab'><span class='mnb'>Countdown</span> to $date</div>

<div id='meniac' style='text-align:center;'>
<div id='menias'>
<img src='https://vrixe.com/images/profiles/profilethumbs/user.png' id='eventprofilephoto'><br><span style='font-size:12px'>Created by you</span>
</div>

<button id='meniass'><span style='text-transform:capitalize'>Private Event in</span> $venue</button><br>

<button id='meniassss'>54 Views</button>

<button title='Edit' type='button' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>edit</i> Edit</button>

<button formaction='/invitation.php' title='Analytics'  class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>timeline</i> Analytics</button>

<button title='Copy Link' type='button' id='clonebtn' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>link</i> Copy</button>

<button class='meniabtn' title='Feedback for this Event'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>report</i> Report</button>

<button title='Share' id='sharealt' type='button' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>share</i> Share</button>

<button title='Get Calendar' type='button' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>event</i> Get Calendar</button>

<button title='Print' type='button' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>print</i> Print</button></div>


</div>
</div>
";


 echo "<div id='eventpost'> <br>
 <h id='type'>CREATED: $todayd</h>";


echo "<h id='datep'>ADD UP TO 7 CONTRIBUTORS";
echo "</h>";
echo "</h><br>";

echo "$newtheme";

echo "<div class='o' style='background-color:#5bc2ec;'>continous editing</div>
<div class='o' style='background-color:#ec5b76'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>notifications</i> get timely notifications</div>

<div class='o'><b style='color:#fbb8b8'>Current Task:</b> add quick notes on event news</div>";

echo "<br><br><h id='event' style='font-size:20px;display:inline-block;width:95%'>$event";
echo "</h><br>";


echo "<img src='/images/essentials/preview/$evimg' class='thisimage' alt='Vrixe Events'><br>";


echo "<div id='evina' style='max-height:300px;'><h class='bottoms' id='evin'>Add more details to your event, keep things organised and do all that with your team.<br> ...sign up for a free account.</h></div>";


echo "<div class='dategnt'>";


  echo "<div class='gntleft'><b class='gnttops'>Date</b><br>
<h>$date</h></h><br></div>";


echo "<div class='gntright'><b class='gnttops'>Time</b><br>
<h>$time</h></div>";


echo "</div>";


echo "<div class='venuegnt'>";


echo "<div class='gntleft'><b class='gnttops'>Venue</b><br>";
echo "<h>$venue</h></div>";


  echo "<div class='gntright'>";

echo"
  <button class='gntbtnalt'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>directions</i> Directions </button><br><br>";

echo "</div>";

echo "</div><br>";


echo"
<h class='bottoms'><b>Choose who handles what.</b></h><br>
<div class='bring'><div class='jalw'>admin<br>contact</div><br><img src='images/essentials/admin.png' class='fiwb'><div class='jalw'>you</div><br></div>

<div class='bring'><div class='jalw'>leisure<br>contact</div><br><img src='images/essentials/leisure.png' class='fiwb'><div class='jalw'>friend</div><br></div>

<div class='bring'><div class='jalw'>media<br>contact</div><br><img src='images/essentials/d_images.png' class='fiwb'><div class='jalw'>teammate</div><br></div>

<div class='bring'><div class='jalw'>venues<br>contact</div><br><img src='images/essentials/venues.png' class='fiwb'><div class='jalw'>workmate</div><br></div><br><br>";


echo "<div class='markgnt'>
<div class='gntleft'>";


echo "<b class='gnttops'>Dress Code</b><br>";
echo "<h>Casual</h><br>";

echo "<b class='gnttops'>Landmark</b><br>";
echo "<h>Behind...</h><br><br></div>";


echo "<div class='gntright'><button class='gntbtnalt'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>message</i> Connect to Chat</button><br><br>";



echo "<button class='gntbtnalt' id='clean'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>event_note</i> Add an agenda</button><br><br>
<button class='gntbtnalt' id='clean'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>poll</i> Take a poll</button>";


echo "</div></div>";


echo "<div id='botblue' style='font-family:Nunito;'><br>...create detailed events together from your browser.<br><br>";

if($username > ""){
 echo"
  <a href='me'> <button class='copele'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>person</i> My account</button></a>
";
}
else{
  echo " <a href='index.php?q=profile_required#signup'> <button class='copele'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>person_add</i> Get Started</button></a>
  ";
}

echo"<br><br></div>
</div>";
  echo "</div><div id='mapbox'>
    
</div>";


if(!mysqli_query($conne,$tpreview)){
  die('Error: ' . mysqli_error($conne));
}

?></span>

  <?php

echo "<p id='gpscoord' class='rates'>$z</p>";

echo "<p id='alltxt' class='rates'>$zz</p>";
  
?>

 <script>
  //get the gps saved
   var allgps = document.getElementById("gpscoord").innerHTML;
    var alltxt = document.getElementById("alltxt").innerHTML;
   
   var address;
if(allgps > "" && alltxt == ""){
  address = allgps;
}
else if(allgps == "" && alltxt > ""){
  address = alltxt;
}
else if(allgps > "" && alltxt > ""){
  address = allgps;
}
else {
  address = "California";
}

    function initMap() {
        var map = new google.maps.Map(document.getElementById('mapbox'), {
          zoom: 10
        });
        var geocoder = new google.maps.Geocoder();
        geocodeAddress(geocoder, map);
      }

      function geocodeAddress(geocoder, resultsMap) {
        geocoder.geocode({'address': address}, function(results, status) {
          if (status === 'OK') {
            resultsMap.setCenter(results[0].geometry.location);
            var marker = new google.maps.Marker({
              map: resultsMap,
              position: results[0].geometry.location
            });
          } else {
            console.log('Geocode was not successful for the following reason: ' + status);
          }
        });
      }

  </script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCr1pOvW2cHlHyjtLhR1Hoqr7QnvH2DZIg&callback=initMap">

  </script>
</body>
</html>