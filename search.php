<?php
//do not require user account
$defaultAllowNoUser = true;
require("garage/passport.php"); 
?>
<!DOCTYPE html>
<html lang="en">
<head>

<?php 
$probesech = mysqli_real_escape_string($conne, $_POST['refs']); 
$sech = htmlspecialchars($probesech, ENT_QUOTES);//form
  $probev = mysqli_real_escape_string($conne, $_GET['v']);
  $v = htmlspecialchars($probev, ENT_QUOTES); //url
  $fcharsech = substr($sech,0,1);
  $rcharsech = substr($sech,1);

if($sech > ""){echo "<title>$sech - Vrixe Search</title>";}
else if ($v > ""){echo "<title>$v - Vrixe Search</title>";}
else {echo "<title>Empty - Vrixe Search</title>";}
?>
<link rel="manifest" href="manifest.json">
<meta name="description" content="Search for events on Vrixe">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<link href="https://fonts.googleapis.com/css?family=Sarpanch|Skranji|Titillium+Web" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>

  <style>	body{background-color: #f5f5f5;} </style>
</head>
<body>
<?php require("garage/absolunia.php"); ?>

<div id="gtr" onclick="closecloseb()"></div>

<?php require("garage/deskhead.php"); 
  require("garage/desksearch.php"); 
  require("garage/deskpop.php"); ?>

<?php $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>Search</button>";
  require("garage/mobilehead.php"); ?>

<?php require("garage/subhead.php");
  require("garage/thesearch.php"); ?>

<br>

<!--WEEKEND KEYWORD SEARCH-->
<div class="postcen">
<?php
$url = json_decode(file_get_contents("http://api.ipinfodb.com/v3/ip-city/?key=06bfc66ceaf02708dafb98bf50c15cbb49e2532ba69fedf6f7da78a1805ad281&ip=".$_SERVER['REMOTE_ADDR']."&format=json"));
 $z = $url->countryName;

#HOW THIS WORKS UNTIL LINE 374
#check if query is weekend if so find query weekend in location, if you dontfind nything on weekend, report nothing code. 
#now move on and check if, onlyif search is not weekend, move to check if its month and reportmonth in location if nothing is found return empty code
#if sech is not weekend nor month, just go ahead and search the whateevr sech is. This makes sure we onlysearch random codes and text if the user is not trying to keyword us.
#after all of that, just go and search sech in around user, note that this wil never be weekend nor month but will be code, random texts
#then search for events anything 
#search for url sent code
  
if (isset($_GET['v'])){
   $year = date("Y.md");

 $result = mysqli_query($conne,"SELECT * FROM events WHERE event LIKE '%$v%' AND class = 'public' OR description LIKE '%$v%' AND class = 'public' ORDER BY year DESC LIMIT 16");
$found = 0;
     while($row = mysqli_fetch_array($result))
   {$found=1;
$r = $row['refs'];
$probevpe =  $row['event']; $ee = htmlspecialchars($probevpe, ENT_QUOTES);
$probedescription =  $row['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$dlent = strlen($description);
$month = $row['month'];
$elent = strlen($ee);
$imagenamerow = $row['imgthumb'];
$evorganiser = $row['organiser'];
$poster = $row['hype'];
    
      //image background set
     if($imagenamerow == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"images/eventnails/$imagename\")";
     }

    echo "<div class='cards' style='$cardBack'><br>
    <button class='cardsactions' onclick='share$r()' title='Share Event'><i class='material-icons'>share</i><br>share</button>
    ";    
    
    if ($elent > 18){
$newee = substr($ee, 0, 17);
$shortee = "$newee...";
}
else { $shortee = $ee;
}

echo "<a href='event/$r'>
<div class='cardtitle'>$shortee</div>
</a>
";
    

if ($dlent > 26){
$ndescri = substr($description, 0, 25);
$descr = "$ndescri...";
echo "<a href='event/$r'><h class='cardsdescription'>$descr</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster in $month</h></a>";
}
else {echo "<a href='event/$r'><h class='cardsdescription'>$description</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster in $month</h></a>";}
    

echo "<br><br></div>
<script>
function share$r(){
  var cst = \"$ee\";
    var csl = 'event/$r';
customshare(cst, csl);
}
</script>";
}
if ($found == 0) {
  echo "<br><div class='smallposts'>$v?<br><h class='miniss'>Whoops! Empty Bucket.<br>...nothing in the public folders!</h><br><br>
 <img alt='Nothing Found' src='/images/essentials/nodata.svg' class='everybodyimg'><br><br>
  <h class='minis'>sure you should find something here?<br><br><a href='help/feedbacks'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>report</i> Report It </button></a></h><br><br>
  <h class='minis'>or you can:</h><br>
  <h class='miniss'>Try searching a Word or Code</h><br>
  <h class='miniss'>Try something more relative</h><br><br>
  </div><br>";
}
echo "<br>";

}#END OF IF V WAS PASSED


  else{# V WAS NOT PASSED start normal search

if ($sech == "Weekend" or $sech == "weekend" or $sech == "the weekend" or $sech == "weekends" or $sech == "The Weekend" or $sech == "WEEKEND"){

  echo "<div class='yalert'>Showing results for '$sech'</div><br>";

  $locala = mysqli_query($conne,"SELECT * FROM events WHERE day = 'Friday' AND class = 'public' AND zip = '$z' OR day = 'Saturday' AND class = 'public' AND zip = '$z' OR day = 'Sunday' AND class = 'public' AND zip = '$z' ORDER BY dates ASC  LIMIT 10");

  #<!--  "SELECT * FROM events WHERE day = 'Friday' AND zip = '$z' OR day = 'Tuesday' AND zip = '$z' ORDER BY dates ASC  LIMIT 10" 

  #"SELECT * FROM events WHERE day = 'Friday' OR day = 'Tuesday' ORDER BY dates ASC  LIMIT 10" -->

$founda = 0;

  while($lowa = mysqli_fetch_array($locala))
   {$founda=1;
$rla = $lowa['refs'];
$statein = $lowa['zip'];
$weekday = $lowa['day'];
$year = substr($lowa['year'], 0,4);
$rla = $lowa['refs'];
$imagenamea = $lowa['imgthumb'];
$probevpe =  $lowa['event']; $eew = htmlspecialchars($probevpe, ENT_QUOTES);
$probedescription =  $lowa['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$elent = strlen($eew);
$dlent = strlen($description);
$evorganiser = $lowa['organiser'];
$poster = $lowa['hype'];
    
         //image background set
     if($imagenamea == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"images/eventnails/$imagename\")";
     }
 
    
        echo "<div class='cards' style='$cardBack'><br>
    <button class='cardsactions' onclick='share$rla()' title='Share Event'><i class='material-icons'>share</i><br>share</button>
    ";    
       
    if($username > "" and $username == $poster){
      echo"<a href='desk?code=$rla'><button class='cardsactions'><i class='material-icons'>edit</i><br>edit</button></a>";
    }
    
    if ($elent > 18){
$newee = substr($eew, 0, 17);
$shortee = "$newee...";
}
else { $shortee = $eew;
}

echo "<a href='event/$rla'>
<div class='cardtitle'>$shortee <i class='material-icons' style='font-size:17px;vertical-align:sub;color:#00f2a2'>arrow_forward</i></div>
</a>
";
    

if ($dlent > 26){
$ndescri = substr($description, 0, 25);
$descr = "$ndescri...";
echo "<a href='event/$rla'><h class='cardsdescription'>$descr</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster | $weekday $year</h></a>";
}
else {echo "<a href='event/$rla'><h class='cardsdescription'>$description</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster | $weekday $year</h></a>";}
    

echo "<br><br></div>
<script>
function share$rla(){
  var cst = \"$eew\";
    var csl = 'event/$rla';
customshare(cst, csl);
}
</script>";
    
    
    
    
    
    
    
}

if ($founda == 0) {
  echo "<br><div class='smallposts'>
  <br>
  <h>No public event this weekend.</h><br><br> <i class='material-icons' style='vertical-align:bottom;font-size:17px;color:#1fade4'>search</i><br><br><a href='invite'><button class='copele'>CREATE</button></a> <br> <h class='miniss'>OR TELL SOMEONE ABOUT US </h><br>
 <br>
  </div><br>";
}
}
   
   #if query is not weekend check if query is username

elseif ($fcharsech == '@'){
 require("garage/validuser.php"); 

    echo "<div id='result'></div>
    <div class='yalert'>PEOPLE</div><br>";

  $userfetch = mysqli_query($conne,"SELECT * FROM profiles WHERE username LIKE '%$rcharsech%' AND confirm > '' AND username != '$username' LIMIT 30");

$foundmo = 0;
  while($mowa = mysqli_fetch_array($userfetch))
   {$foundmo = 1;

$probefusername =  $mowa['username']; $fusername = htmlspecialchars($probefusername, ENT_QUOTES);
$probefname =  $mowa['fullname']; $fname = htmlspecialchars($probefname, ENT_QUOTES);

$usercid = $mowa['cid'];
$ufimg = $mowa['picture'];
$fines = "cid = " . $usercid;

//check if user is already following
$countoccur = substr_count($mycontacts, $fines);

if($countoccur >= 1){
    echo "
    <script>
var iv$usercid = 'or cid = $usercid ';
var cu$usercid = '$username';
var req$usercid = 'delete contact';
</script>

<div id='id$user' class='cards' style='background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,rgb(49, 212, 235) 67%, rgb(49, 212, 235) 100%);'>
<button id='alt$user' class='cardsCornerActions' title='Delete Contact' onclick='process(req$usercid, iv$usercid, cu$usercid)'><i class='material-icons'>delete</i></button>


<a href='/profile/$probefusername'><img src='$ufimg' class='contactphoto'></a>
<b>$probefname</b><br>
<span style='font-size:13px'>@$probefusername</span><br><br>
</div>
";
}else{
    echo "
    <script>
var iv$usercid = 'or cid = $usercid ';
var cu$usercid = '$username';
var req$usercid = 'add contact';
</script>

<div id='id$user' class='cards' style='background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,rgb(49, 212, 235) 67%, rgb(49, 212, 235) 100%);'>
<button id='alt$user' class='cardsCornerActions' title='Delete Contact' onclick='process(req$usercid, iv$usercid, cu$usercid)'><i class='material-icons'>person_add</i></button>


<a href='/profile/$probefusername'><img src='$ufimg' class='contactphoto'></a>
<b>$probefname</b><br>
<span style='font-size:13px'>@$probefusername</span><br><br>
</div>";
}

}

if ($foundmo == 0) {
  echo "<br><div class='smallposts'>
  <br>
  <h>We did not find any user from that.<br> Know a $rcharsech you'd like here?</h><br><br> 
   <img alt='invite' src='images/essentials/inviteuser.png' class='everybodyimg'>
   <br><br><button class='copele' onclick='customshare();'>INVITE TO VRIXE</button><br>
 <br>
  </div><br>";
}
} 


   #if query is not weekend check if query is month parameters and find month in that location

elseif ($sech == "january" or $sech == "february" or $sech == "march" or $sech == "april" or $sech == "may" or $sech == "june" or $sech == "july" or $sech == "august" or $sech == "september" or $sech == "october" or $sech == "november" or $sech == "december"){

    echo "<div class='yalert'>Showing results for '$sech'</div><br>";

  $localm = mysqli_query($conne,"SELECT * FROM events WHERE month = '$sech' AND class = 'public' AND zip = '$z' OR month = '$sech' AND class = 'public' AND zip != '$z' ORDER BY dates ASC  LIMIT 10");

$foundmo = 0;

  while($mowa = mysqli_fetch_array($localm))
   {$foundmo = 1;

  $rla = $mowa['refs'];
$month = $mowa['month'];
$year = substr($rowa['year'], 0,4);
$rla = $mowa['refs'];
$imagenamemowa = $mowa['imgthumb'];
$probevpe =  $mowa['event']; $eew = htmlspecialchars($probevpe, ENT_QUOTES);
$probedescription =  $mowa['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$status = $mowa['status'];
$elent = strlen($eew);
$dlent = strlen($description);
$evorganiser = $mowa['organiser'];
$poster = $mowa['hype'];
    
          //image background set
     if($imagenamemowa == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"images/eventnails/$imagename\")";
     }
    
            echo "<div class='cards' style='$cardBack'><br>
    <button class='cardsactions' onclick='share$rla()' title='Share Event'><i class='material-icons'>share</i><br>share</button>
    ";    
       
    if($username > "" and $username == $poster){
      echo"<a href='desk?code=$rla'><button class='cardsactions'><i class='material-icons'>edit</i><br>edit</button></a>";
    }
    
    if ($elent > 18){
$newee = substr($eew, 0, 17);
$shortee = "$newee...";
}
else { $shortee = $eew;
}

echo "<a href='event/$rla'>
<div class='cardtitle'>$shortee <i class='material-icons' style='font-size:17px;vertical-align:sub;color:#00f2a2'>arrow_forward</i></div>
</a>
";
    

if ($dlent > 26){
$ndescri = substr($description, 0, 25);
$descr = "$ndescri...";
echo "<a href='event/$rla'><h class='cardsdescription'>$descr</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster | $month $year</h></a>";
}
else {echo "<a href='event/$rla'><h class='cardsdescription'>$description</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster | $month $year</h></a>";}
    

echo "<br><br></div>
<script>
function share$rla(){
  var cst = \"$eew\";
    var csl = 'event/$rla';
customshare(cst, csl);
}
</script>";
    
}

if ($foundmo == 0) {
  echo "<br><div class='smallposts'><h class='miniss'>We did not find anything for $sech.<br>...want to try next month?</h><br><br>
  <img alt='Nothing Found' src='/images/essentials/nodata.svg' class='everybodyimg'><br><br>
  <h class='minis'>sure you should find something here?<br><br><a href='help/feedbacks'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>report</i> Report It </button></a></h><br><br>
  <h class='minis'>or you can:</h><br>
  <h class='miniss'>Check the Search Query or Code</h><br>
  <h class='miniss'>Try something more relative</h><br>
  <h class='miniss'>Retry without any special character</h><br>
  </div><br>";
}
}  #if query is not month search query with normal parameters
else {
      echo "<div class='yalert'>Showing results for '$sech'</div><br>";
      
$result = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$sech' OR event LIKE '%$sech%' AND class = 'public' OR landmark LIKE '%$sech%' AND class = 'public' OR state LIKE '%$sech%' AND class = 'public' OR description LIKE '%$sech%' AND class = 'public' OR organiser LIKE '%$sech%' AND class = 'public' OR datep LIKE '%$sech%' AND class = 'public' OR dates LIKE '%$sech%' AND class = 'public' OR venue LIKE '%$sech%' AND class = 'public' OR bvenue LIKE '%$sech%' AND class = 'public' OR zip LIKE '%$sech%' AND class = 'public' OR hype LIKE '%$sech%' AND class = 'public' OR day LIKE '%$sech%' AND class = 'public' ORDER BY year DESC LIMIT 6");
$found = 0;
     while($row = mysqli_fetch_array($result))
   {$found=1;
$r = $row['refs'];
$statein = $row['zip'];
$probevpe =  $row['event']; $ee = htmlspecialchars($probevpe, ENT_QUOTES);
$probedescription =  $row['description']; $description = htmlspecialchars($probedescription, ENT_QUOTES);
$dlent = strlen($description);
$date = $row['dates'];
$month = $row['month'];
$year = substr($row['year'], 0,4);
$status = $row['status'];
$elent = strlen($ee);
$time = $row['timing'];
$imagenamerow = $row['imgthumb'];
$evorganiser = $row['organiser'];
$poster = $row['hype'];
    
     //image background set
     if($imagenamerow == "default.png"){
       $cardBack = "background: linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
     }else{
       $cardBack = "background-image:url(\"images/eventnails/$imagenamerow\")";
     }
        
    echo "<div class='cards' style='$cardBack'><br>
    <button class='cardsactions' onclick='share$r()' title='Share Event'><i class='material-icons'>share</i><br>share</button>
    ";    
       
    if($username > "" and $username == $poster){
      echo"<a href='desk?code=$r'><button class='cardsactions'><i class='material-icons'>edit</i><br>edit</button></a>";
    }
    
    if ($elent > 18){
$newee = substr($ee, 0, 17);
$shortee = "$newee...";
}
else { $shortee = $ee;
}

echo "<a href='event/$r'>
<div class='cardtitle'>$shortee <i class='material-icons' style='font-size:17px;vertical-align:sub;color:#00f2a2'>arrow_forward</i></div>
</a>
";
    

if ($dlent > 26){
$ndescri = substr($description, 0, 25);
$descr = "$ndescri...";
echo "<a href='event/$r'><h class='cardsdescription'>$descr</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster | $month $year</h></a>";
}
else {echo "<a href='event/$r'><h class='cardsdescription'>$description</h></a><br> <a href='profile/$poster'><h class='cardsdescription' style='text-decoration:underline;text-underline-position: under;'>by @$poster | $month $year</h></a>";}
    

echo "<br><br></div>
<script>
function share$r(){
  var cst = \"$ee\";
    var csl = 'event/$r';
customshare(cst, csl);
}
</script>";    
    
}
if ($found == 0) {
  echo "<br><div class='smallposts'>$sech?<br><h class='miniss'>We did not find anything on that.<br>...nothing in the public folders!</h><br><br>
  <img alt='Nothing Found' src='/images/essentials/nodata.svg' class='everybodyimg'><br><br>
  <h class='minis'>sure you should find something here?<br><br><a href='help/feedbacks'><button class='copele'><i class='material-icons' style='font-size:17px;vertical-align:text-top'>report</i> Report It </button></a></h><br><br>
  <h class='minis'>or you can:</h><br>
  <h class='miniss'>Check the Search Query or Code</h><br>
  <h class='miniss'>Try something more relative</h><br>
  <h class='miniss'>Retry without any special character</h><br>
  </div><br>";
}
echo "<br>";
}
echo "<br>";
}#end of if v was pased/. v being the data from picks custome searches
?></span>



<br>

<?php

$free = mysqli_query($conne,"SELECT * FROM events WHERE class = 'public' ORDER BY RAND() LIMIT 5"); 
   while($data = mysqli_fetch_array($free))
 {
  $probeevent =  $data['event']; $event = htmlspecialchars($probeevent, ENT_QUOTES);
  $probedescricri =  $data['description']; $descricri = htmlspecialchars($probedescricri, ENT_QUOTES);
  $dlent = strlen($descricri);
$cp = $data['refs'];

echo "<a href='event/$cp'><div class='smallposts'>";
echo "<h id='event'>$event";
echo "</h><br>";

if ($dlent > 40){
$ndescri = substr($descricri, 0, 40);
$descr = "$ndescri...";
echo "<h class='bottoms' id='evin'>$descr";
echo "</h></div></a><br>";}
else {echo "<h class='bottoms' id='evin'>$descricri";
echo "</h></div></a><br>";}



echo "";
 }
 ?></div><br>


<div id="offline" onclick="document.getElementById('offline').style.display='none';">Offline!<br><span id="smoff">Some features will not be available</span></div>
</body>
</html>