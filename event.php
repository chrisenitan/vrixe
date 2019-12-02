<?php
require("./garage/visa.php");  
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

//collect authkey from form if available
$authkey = mysqli_real_escape_string($conne, $_POST['authkey']);


#CHECK FOR COOKIE
if (isset($_COOKIE['user'])){
 $cookie = $_COOKIE['user'];
 $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
 $headcook = 0;
   while($founduser = mysqli_fetch_array($cooked)){
    $headcook = 1;
   $fullname = $founduser['fullname'];
   $username = $founduser['username'];//finds the promoter
   $email = $founduser['email'];
   $pushid = $founduser['pushid'];
   $userheadimg = $founduser['picture'];
}
if ($headcook == 0){
  $cookie = "";
  $fullname = "relog";
   $username = "";
   $email = "";
}
}
else{
$cookie = "";
  $fullname = "";
   $username = "";
   $email = "";
}

?>
<!DOCTYPE html>

<html lang="en">
<head>


<?php 
  //every link on thispage is absolute cus of the htaccess redirect
if (isset($_GET['refs'])){
$pureEventRef = mysqli_real_escape_string($conne, $_GET['refs']); #turn ref into ordinary text

$resulta = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$pureEventRef' AND class = 'public' or refs = '$pureEventRef' AND class = 'private' LIMIT 1"); 
$title = 0;
   while($rowi = mysqli_fetch_array($resulta))
 {
  $title = 1;
 $probeevent =  $rowi['event']; $eventTitleCleaned = htmlspecialchars($probeevent, ENT_QUOTES); 
$probedescription= $rowi['description'];$eventDescriptionCleaned = htmlspecialchars($probedescription, ENT_QUOTES);
$authkeyFromServer = $rowi['authkey'];
$eventImagethumb = $rowi['imgthumb'];
     
//create navigation button
 $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i>" . substr($eventTitleCleaned, 0, 20) . "...</button>";


echo "<title> $eventTitleCleaned </title>"; 
echo "<meta name='description' content=' $eventTitleCleaned '>";
echo "<meta property='og:description' content=' $eventDescriptionCleaned ' />";
echo "<meta property='og:title' content='$eventTitleCleaned ' />";
echo "<meta property='og:url' content='https://www.vrixe.com/event?refs=$pureEventRef' />";
echo "<meta property='og:image' content='https://vrixe.com/images/eventnails/$eventImagethumb' />" ;
}
if($title == 0){   
  echo "<title> Plan on Vrixe </title>";   
}}
else {
 $pagename = "<button class='hbut' id='mbut' aria-label='vrixe' onclick='window.history.back()'><i class='material-icons' style='vertical-align: top;'>keyboard_arrow_left</i> Events on Vrixe</button>";
  echo "<title>Plan on Vrixe </title>"; #direct url entry
}
?>
<link rel="manifest" href="/manifest.json">
<meta content="text/html; charset=UTF-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("./garage/resources.php"); ?>
  <meta name="robots" content="noindex">
  <meta name="googlebot" content="noindex">

  <style>
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
  </style>
</head>
<body onload='chesubpush();'>

<?php require("./garage/absolunia.php"); ?>
  
<div id="gtr" onclick="closeclose()"></div>

<?php require("./garage/deskhead.php"); ?>
<?php require("./garage/desksearch.php");  ?>
<?php require("./garage/deskpop.php"); ?>

<button id="write" onclick="pmenu()"><i class="material-icons">more_vert</i></button>

<?php require("./garage/mobilehead.php"); ?>

<?php require("./garage/subhead.php");?>

<?php require("./garage/thesearch.php"); ?>



<?php
ini_set('display_startup_errors',1);
ini_set('display_errors',1);
error_reporting(-1);

//begin code
if (isset($_GET['refs']))
{
  $refcheck = 1;
  
$result = mysqli_query($conne,"SELECT * FROM events WHERE refs = '$pureEventRef' AND class = 'public' or refs = '$pureEventRef' AND class = 'private'  LIMIT 1");
$gave = 0;
   while($row = mysqli_fetch_array($result)){
$gave = 1;  
   $probeevorganiser = $row['organiser']; $evorganiser = htmlspecialchars($probeevorganiser, ENT_QUOTES);
     
  $poster = $row['hype'];


     //authorise each user
    $autoauthuser = $row['hype']; 
    $autoauthcua = $row['cua'];
    $autoauthcub = $row['cub'];
    $autoauthcuc = $row['cuc'];
    $autoauthcud = $row['cud'];
    $autoauthcue = $row['cue'];
    $autoauthcuf = $row['cuf'];

     
 #check if event is private
if ($row['class'] == "private"){
  //try to ...
  if($username > "" and $username == $autoauthuser or $username > "" and $username == $autoauthcua or $username > "" and $username == $autoauthcub or $username > "" and $username == $autoauthcuc or $username > "" and $username == $autoauthcud or $username > "" and $username == $autoauthcue or $username > "" and $username == $autoauthcuf or $authkey > "" and $authkey == $authkeyFromServer){
    //user has right to view his event
    $showUserEvent = true;
  }
 else{  $showUserEvent = false;  }
}     
else{ //else its public
  $showUserEvent = true;
}
     
  
     
//get all normal arrays var
$date = $row['dates'];
$edate = $row['edates'];
if ($edate == ""){
  $edate = $date;
}
$probeevent =  $row['event']; $ee = htmlspecialchars($probeevent, ENT_QUOTES);
$programcheck = $row['programcheck'];
$pollcheck = $row['pollcheck'];
$probedresscode = $row['dresscode']; $dresscode = htmlspecialchars($probedresscode, ENT_QUOTES);
$time = $row['timing'];
$entime = $row['variant']; 
$probevenue = $row['venue']; $venue = htmlspecialchars($probevenue, ENT_QUOTES);
$probebvenue = $row['bvenue']; $bvenue = htmlspecialchars($probebvenue, ENT_QUOTES);
$day = $row['day'];
$probekeynote =  $row['keynote']; $keynote = htmlspecialchars($probekeynote, ENT_QUOTES);
$month = $row['month'];
$eventImage = $row['imgname'];
$eventImagethumb = $row['imgthumb'];
$state = $row['state'];
$hype = $row['hype'];
$probelandmark = $row['landmark']; $landmark = htmlspecialchars($probelandmark, ENT_QUOTES);
$probephone = $row['phone']; $phone = htmlspecialchars($probephone, ENT_QUOTES);

$theplace = $row['zip'];
$kilas = $row['class'];
$probewapweb = $row['wapweb']; $wapweb = htmlspecialchars($probewapweb, ENT_QUOTES);
$viewsCount = $row['views'];
$lastedit = $row['lastedit'];
$probetheme = $row['type']; $theme = htmlspecialchars($probetheme, ENT_QUOTES);
$probecost = $row['cost']; $cost = htmlspecialchars($probecost, ENT_QUOTES);
$probecostpur = $row['costpur']; $costpur = htmlspecialchars($probecostpur, ENT_QUOTES);
$status = $row['status'];  


$contributora = $row['cua'];
$contributorb = $row['cub'];
$contributorc = $row['cuc'];
$contributord = $row['cud'];
$contributore = $row['cue'];
$contributorf = $row['cuf']; 
   
//count contributor for menia name, get contributor image
 if ($contributora > ""){$countcua = 1;
 $allContributoraImg = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$contributora' LIMIT 1"); 
 while($gotcontributoraImage = mysqli_fetch_array($allContributoraImg)){
$imageContributora = $gotcontributoraImage['picture'];
}}else {$countcua = 0;}
     
 if ($contributorb > ""){$countcub = 1;
 $allContributorbImg = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$contributorb' LIMIT 1"); 
 while($gotcontributorbImage = mysqli_fetch_array($allContributorbImg)){
$imageContributorb = $gotcontributorbImage['picture'];
}}else {$countcub = 0;}
     
  if ($contributorc > ""){$countcuc = 1;
 $allContributorcImg = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$contributorc' LIMIT 1"); 
   while($gotcontributorcImage = mysqli_fetch_array($allContributorcImg)){
$imageContributorc = $gotcontributorcImage['picture'];
}}else {$countcuc = 0;}
     
  if ($contributord > ""){$countcud = 1;
 $allContributordImg = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$contributord' LIMIT 1"); 
 while($gotcontributordImage = mysqli_fetch_array($allContributordImg)){
$imageContributord = $gotcontributordImage['picture'];
}}else {$countcud = 0;}
     
 if ($contributore > ""){$countcue = 1;
 $allContributoreImg = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$contributore' LIMIT 1"); 
   while($gotcontributoreImage = mysqli_fetch_array($allContributoreImg)){
$imageContributore = $gotcontributoreImage['picture'];
}}else {$countcue = 0;}
     
 if ($contributorf > ""){$countcuf = 1;
 $allContributorfImg = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$contributorf' LIMIT 1"); 
   while($gotcontributorfImage = mysqli_fetch_array($allContributorfImg)){
$imageContributorf = $gotcontributorfImage['picture'];
}}else {$countcuf = 0;}
     
 $totalContributorCount = 1 + $countcua + $countcub + $countcuc + $countcud + $countcue + $countcuf;
 $contributorMinusOwnerCount = $totalContributorCount - 1;

   
     
//contributor tasks
$ringo = $row['ringo'];
$ringa = $row['ringa'];
$ringb = $row['ringb'];
$ringc = $row['ringc'];
$ringd = $row['ringd'];
$ringe = $row['ringe'];
$ringf = $row['ringf'];

 



//get hype profile image
$start = mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$poster' LIMIT 1"); 
 $confirm = 0;
   while($gotuser = mysqli_fetch_array($start))
 {$confirm = 1;
$picture = $gotuser['picture'];//profile image base.format
}if($confirm == 0){$picture = "";}
     
     
     
     
if ($programcheck > ""){
$checkreg = mysqli_query($conne,"SELECT * FROM programs WHERE refs = '$pureEventRef' LIMIT 1"); #get current event as of refs
$regcont = 0;
   while($foundreg = mysqli_fetch_array($checkreg)){ 
$regcont = 1;
$pa = $foundreg['pa'];
$pat = $foundreg['pat'];
$pb = $foundreg['pb'];
$pbt = $foundreg['pbt'];
$pc = $foundreg['pc'];
$pct = $foundreg['pct'];
$pd = $foundreg['pd'];
$pdt = $foundreg['pdt'];
$pe = $foundreg['pe'];
$pet = $foundreg['pet'];
$pf = $foundreg['pf'];
$pft = $foundreg['pft'];
$pg = $foundreg['pg'];
$pgt = $foundreg['pgt'];
$ph = $foundreg['ph'];
$pht = $foundreg['pht'];
$pi = $foundreg['pi'];
$pit = $foundreg['pit'];
$pj = $foundreg['pj'];
$pjt = $foundreg['pjt'];
$pk = $foundreg['pk'];
$pkt = $foundreg['pkt'];
$pl = $foundreg['pl'];
$plt = $foundreg['plt'];

$showProgramBox = true;

   }
  if ($regcont == 0){
    $showProgramBox = false;
   }}
   else {$showProgramBox = false;}
     

//countdown engine v2
$onth ="Months";
$ays = "Days";
$ears = "Years";
$todayd = date("Y-m-d");
 
 if ($todayd < $date){ $in = "In ";
  $todayds = date_create($todayd);
  $datew = date_create($date);
      $countd = date_diff($todayds, $datew);
      $ml = $countd->format('%m');
      if ($ml == 1){$onth = "Month";}
      else if($ml == 0){$ml = ""; $onth = "";$ears = "";}   #English correction
      $dl = $countd->format('%d');
      if ($dl == 1){$ays = "Day";}   #English correction
      $yl = $countd->format('%y');
      if ($yl == 1){$ears = "Year";}   #English correction
      if ($yl == 0){$yl = "";$ears = "";}
 }
 else if ($todayd == $date){$in = "";
  $ml = "Today ";
  $onth = "till ";
  $dl = "";
  //text is o say tll either date or time. but first try tosay till time
  if ($entime == "" ){$ays = $date;} else { $ays = "$entime";}
 
  $yl = "";
  $ears ="";
}
//if starting has passed and ending is coming OR start date is today and end day is coming. Overides the above cus the above will only work if it starts and ends in one day.[no need to say if it ends in one day above]
else if ($todayd > $date and $todayd < $edate or $todayd == $date and $todayd < $edate){ $in = "";
  $ml = "Ongoing ";
  $onth = "till ";
  $dl = "";
  $ays = "$edate";
  $yl = "";
  $ears ="";
}
else if($todayd == $edate){$in = "";
  if ($entime == ""){$entime = $edate;}
  $ml = "Ends Today ";
  $onth = "";
  $dl = "";
  $ays = "$entime";
  $yl = "";
  $ears ="";
}
else {$in = "";
    $ml = "Event Ended ";
  $onth = "";
  $dl = "";
  $ays = "$edate";
  $yl = "";
  $ears ="";
 }

    
}//end of while every var must have been set here
  
if ($gave == 0){ #but if ref was posted and you didnt find anything like it
  //set $showUserEvent = false;
  $showUserEvent = false; 
  echo "<br>
  <style>#write{display:none}</style>
<div class='pagecen'>
<div class='pef'>
    <div class='blfhead'>Event Unavailable</div><br>

  <img alt='Unknown Event' src='/images/essentials/nodata.svg' class='everybodyimg'><br>
  <h class='miniss'>Seems the link is broken or the Event you are trying to view no longer exists. Please contact the Promoter for details<br><br>
   <a href='/help/feedbacks'><button class='copele'>FEEDBACK</button></a><br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='vertical-align:sub;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div>
  </div>
  <br>
<script>
 function closeclose(){
     document.getElementById('searchboxes').style.height='0';
      document.getElementById('gtr').style.display='none';
 var program = document.getElementById('program');
 }
</script>
  ";
}

  //show event if right to
 if($showUserEvent == true){
   
    //increment views
$newViewsCount = $viewsCount + 1;  
    //do not count owners view
  if ($username == $poster or $username > "" and $username == $contributora or $username > "" and $username == $contributorb or $username > "" and $username == $contributorc or $username > "" and $username == $contributord or $username > "" and $username == $contributore or $username > "" and $username == $contributorf ){ #count promoters views
  $governoronpage = true;//control some edit access on event
}
  else{
  $governoronpage = false;
  $sqly="UPDATE events SET views='$newViewsCount' WHERE refs = '$pureEventRef' "; #tell the db to change the cuurent count to new value
    if (!mysqli_query($conne,$sqly)) { #after doing all that then close connection
  die('Error: ' . mysqli_error($conne));
  }
}
    
    
//START EVENT DISPLAY  
 echo "
<div id='menia'>
<div id='meniab'>$in<span class='mnb'>$yl</span>$ears <span class='mnb'>$ml</span>$onth <span class='mnb'>$dl</span>$ays </div>";
   
 if($totalContributorCount > 1){//if there are more people
   //show the contributor div
echo "<div id='contributorList'>
<button type='button' class='o' onclick='hideContributorList()' style='background-color:#fff;color:#2b3445;float:none;display:block;margin-bottom:5px;'><i class='material-icons' style='font-size:13px;vertical-align:sub'>close</i> Close</button>";
   //start checking for each person
if($contributora > ""){
 echo"<a class='poslik' href='/profile/$contributora'>
<div class='lilput' style='display: inline-block;'>
<img src='/images/profiles/profilethumbs/$imageContributora' class='lilprofilephoto'><h style='display: inline-block;'>@$contributora</h></div>";}
          
          
 if($contributorb > ""){
         echo"<a class='poslik' href='/profile/$contributorb'>
<div class='lilput' style='display: inline-block;'>
    <img src='/images/profiles/profilethumbs/$imageContributorb' class='lilprofilephoto'><h style='display: inline-block;'>@$contributorb</h></div></a>";}
   
 if($contributorc > ""){
         echo"<a class='poslik' href='/profile/$contributorc'>
<div class='lilput' style='display: inline-block;'>
    <img src='/images/profiles/profilethumbs/$imageContributorc' class='lilprofilephoto'><h style='display: inline-block;'>@$contributorc</h></div></a>";}
   
 if($contributord > ""){
         echo"<a class='poslik' href='/profile/$contributord'>
<div class='lilput' style='display: inline-block;'>
    <img src='/images/profiles/profilethumbs/$imageContributord' class='lilprofilephoto'><h style='display: inline-block;'>@$contributord</h></div></a>";}
   
  if($contributore > ""){
         echo"<a class='poslik' href='/profile/$contributore'>
<div class='lilput' style='display: inline-block;'>
    <img src='/images/profiles/profilethumbs/$imageContributore' class='lilprofilephoto'><h style='display: inline-block;'>@$contributore</h></div></a>";}
   
  if($contributorf > ""){
echo"<a class='poslik' href='/profile/$contributorf'>
<div class='lilput' style='display: inline-block;'>
    <img src='/images/profiles/profilethumbs/$imageContributorf' class='lilprofilephoto'><h style='display: inline-block;'>@$contributorf</h></div></a>";}
   
 echo "</div>"; }
 else{ }
   
echo "<div id='meniac'>
<div id='menias'><a class='poslik' href='/profile/$poster'><img src='/images/profiles/profilethumbs/$picture' id='eventprofilephoto'><br><span style='font-size:12px'><span style='color:white'>Created by</span> @$poster</a>";
 
     if($totalContributorCount > 1){
       if($contributorMinusOwnerCount == 1){
         $other = "Other User";
       }else{
         $other = "Other Users";
       }
       echo"<h class='miniss' onclick='displayContributorList()'> <span style='color:white'>and</span> $contributorMinusOwnerCount $other <i class='material-icons' style='font-size:17px;vertical-align:sub;color:#00f2a2'>arrow_forward</i></h></div>";
     }
     else{ echo"</div>";}

echo"<button id='meniass'><span style='text-transform:capitalize'>$kilas Event in</span> $theplace</button><br>";

if ($viewsCount == 0){
echo "
<button id='meniassss'>No Views</button>";}

else if ($viewsCount == 1){
echo "
<button id='meniassss'>$viewsCount View</button>";}

else if ($viewsCount > 1000000){
  echo "<button id='meniassss'>1M+ Views</button>";
}

else if ($viewsCount > 2000000){
  echo "<button id='meniassss'>2M+ Views</button>";
}
else {
  echo "<button id='meniassss'>$viewsCount Views</button>";
}


echo "
<div id='ade'>";
 
 //block public user from edit and analysis
if($status == 'plan' and $governoronpage == true or $status == 'invite' and $governoronpage == true){
  echo"
<a href='/desk.php?code=$pureEventRef'><button title='Edit' type='button' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>edit</i> Edit</button></a>";
}
else if($status == 'approved' and $username > "" and $username == $hype){
     echo"<button onclick='replan();' title='Undo Approval' type='button' class='meniabtn' id='replan'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>swap_horiz</i> Return to Plan</button></a>
     <script>
  function replan(){
    var req = 'returntoplan';
    var ref = '$pureEventRef';
  ajaxmenia(req, ref); 
  document.getElementById('replan').setAttribute('disabled','');
  }  
  </script>";
 }
else{
       //event is neither plan nor invite nor approved. wtf moment
   }


echo"
<button title='Copy Link' type='button' id='clonebtn' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>link</i> Link</button>

<form action='/help/feedbacks.php' method='post'>
<input type='text' value='$pureEventRef' name='refs' style='display:none'><button class='meniabtn' title='Feedback for this Event'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>report</i> Report</button></form>
";
   if($kilas == "private"){
     echo"<button title='Share' id='sharealt' onclick='customshare(\"$eventTitleCleaned. Acces with code: $authkeyFromServer\", \"event/$pureEventRef\");closeclose()' type='button' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>share</i> Share</button>
";
   }else{
     echo"<button title='Share' id='sharealt' onclick='customshare(\"$eventTitleCleaned\", \"event/$pureEventRef\");closeclose()' type='button' class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>share</i> Share</button>
";
   }

     
 //show sugest to move to plan    
if($hype == $username and $username > "" and $status == 'invite'){
echo"
<form action='/invitation.php' method='post'>
<input type='text' class='rates' value='$pureEventRef' name='iv'>
<input type='text' class='rates' value='owner' name='claim'>
<button formaction='/invitation.php' title='Analytics'  class='meniabtn'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>swap_horiz</i> Move to plan</button></form>

";}

//show getcalendar if a user is logged in somehow
if($username > ""){
  echo"<button onclick='adcal();' title='add to calendar' type='button' class='meniabtn' id='adcal'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>event</i> Get Calendar</button></div>
  
  <script>
  function adcal(){
    var calmail = '$email';
    var calevent = '$pureEventRef';
    var req = 'sendcalendar';
  ajaxmenia(req, calmail, calevent); 
  document.getElementById('adcal').setAttribute('disabled','');
  }  
  </script>";
}

   echo"
     </div>
</div>
</div>
<div id='valert' onclick='closealert()'><span id='vtext'>text</span> <button id='vbutton'>CLOSE</button></div>";

echo "<script>
 function pmenu(){
  document.getElementById('menia').style.height='400px';
  document.getElementById('gtr').style.display='block';
 }
 function closeclose(){
  document.getElementById('menia').style.height='0';
     document.getElementById('searchboxes').style.height='0';
      document.getElementById('gtr').style.display='none';
 var program = document.getElementById('program');
 if (program){
  program.style.display='none';
 }
 }
 
 var copyBtn = document.getElementById('clonebtn');
copyBtn.addEventListener('click', function(event) {
  var link = document.getElementById('botblue');
  var range = document.createRange();
  range.selectNode(link);
  window.getSelection().addRange(range);

  try{
    var successful = document.execCommand('copy');
    var msg = successful ? 'successful' : 'unsuccessful';
    console.log('Link copy was ' + msg);
    document.getElementById('vtext').innerHTML = 'Link copied to clipboard';
    document.getElementById('valert').style.display='block';
  } catch(err) {
    console.log('Link was not copied');
  }
  window.getSelection().removeAllRanges();
});
</script>";

   
if ($showProgramBox == true){
  require("./garage/displayprograms.php");
   }
   else {echo "<span id='program'></span>";}
   

 echo "<div id='eventpost'> <br>";
if ($status == "plan"){
echo "<h id='type'>UPDATED BY $lastedit</h><br>";
 if($theme > ""){
echo "<div class='o'><b style='color:#fbb8b8'>Current Task:</b> $theme</div>";
    }}
else {echo "";}
   
   

//notifs. if status is in plan and its not a owner
if($status != 'approved' and $governoronpage == false){
echo "<div class='o' style='background-color:#5bc2ec'>event $status may change</div>";
 
  //do only if there is user
  if($username > ""){
 $findsubscribedpusid = mysqli_query($conne,"SELECT * FROM contributors WHERE code = '$pureEventRef' ");
$gotsubscribedpushid = 0;
$findifuserissub = "nil";
while($rowsubsribedpushid = mysqli_fetch_array($findsubscribedpusid)) {
 $gotsubscribedpushid = 1;
  $allexistingids = $rowsubsribedpushid['pushid'];
   $findifuserissub = strstr($allexistingids, $pushid);
}
    //user is not subscribed. ask user
    if($findifuserissub == "nil"){
       echo "<input type='text' value='$pushid' class='rates' id='requestinguser'>
 <input type='text' value='$pureEventRef' class='rates' id='requestingevent'> <input type='text' value='subing' class='rates' id='suborunsub'>
 <div class='o' style='background-color:#ec5b76' id='chesubpushbtn'><i class='material-icons' style='font-size: 13px;vertical-align: sub;'>notifications</i> get updates notification</div>
 ";}
    
    else{
 echo "<input type='text' value='$pushid' class='rates' id='requestinguser'>
 <input type='text' value='$pureEventRef' class='rates' id='requestingevent'> 
 <input type='text' value='unsubing' class='rates' id='suborunsub'>
 <div class='o' style='background-color:#ec5b76' id='chesubpushbtn'><i class='material-icons' style='font-size: 13px;vertical-align: sub;'>notifications_off</i> unsubscribe</div>
 ";}

  }
  else{
     echo "<div class='o' style='background-color:#ec5b76' onclick='subtoabsolunia()'><i class='material-icons' style='font-size: 13px;vertical-align: sub;'>notifications</i> get updates notification</div>
 ";}
  
}
else if ($status == 'approved'){
echo "<div class='o' style='background-color:#5cb839'>event $status</div>";
}
   

//show move to plan button?
if($hype == $username and $username > "" and $status == 'invite'){
echo "
<form style='display:inline' action='/invitation.php#result' method='post'>
<input type='text' class='rates' value='$pureEventRef' name='iv'>
<input type='text' class='rates' value='owner' name='claim'>
<button class='control' style='float:left'><i class='material-icons' style='font-size:13px;vertical-align: sub;'>swap_horiz</i> move invite to plan</button>
</form>";
}

if ($eventImage == "default.png" or $eventImage == "default.jpg"){
    echo "<br><br><div class='eventimage'>$ee</div>";
}
else {
  echo "<br><br><h id='event' style='font-size:20px;display:inline-block;width:95%'>$ee</h><br>
  <img src='/images/events/$eventImage' class='thisimage' alt='$ee'><br>";
}

if ($eventDescriptionCleaned > ""){
echo "<div id='evina'><h class='bottoms' id='evin'>";
$dlent = strlen($eventDescriptionCleaned);
echo nl2br("$eventDescriptionCleaned");

echo "</h><br></div>";
if ($dlent > 160){
echo "<span onclick='showm()' title='Show more' id='showmore'><i class='material-icons' style='font-size:21px;vertical-align: sub;'>arrow_downward</i></span>";
echo "<span onclick='hidem()' title='Hide' style='display:none;cursor:pointer;color:#016f90' id='hidemore'><i class='material-icons' style='font-size:21px;vertical-align: sub;'>arrow_upward</i></span>";
}}
else {echo "";}


if ($evorganiser > ""){
echo "<h class='tops'> Organised by </h>";
echo "<a href='/profile/$hype'><b>$evorganiser";
echo "</b></a><br>";}
else {echo "<br>";}


if ($keynote > ""){
echo "<p class='ground'>$keynote</p>";}
else {echo "";}


if ($time > ""){$time;}
else {$time = "Dawn";}

if ($entime > ""){ $entime;}
else {$entime = "Dawn";}

if ($edate == $date){ //set edate to empt if same day with date so we dont say follosh things like stating today ebding today
  $edate = "";
}
$da = substr($date, -2); 
$caleng = "<span>$day, $month $da</span>";

echo "<div class='dategnt'>";

if ($date > ""){
  echo "<div class='gntleft'><b class='gnttops'>Date</b><br>
<h>$caleng";

if ($edate > ""){
echo "<br>To: $edate</h>";
echo "</h><br></div>";
}
else {echo "</h><br></div>";}
}
else {echo "<div class='gntleft'></div>";}


if ($time > ""){
echo "<div class='gntright'><b class='gnttops'>Time</b><br>
<h>$time";
}
if ($entime > ""){
  echo "<br>To: $entime</h></div>";
}else {echo "</h></div>";}


echo "</div>";


echo "<div class='venuegnt'>"; 

if ($bvenue > ""){
echo "<div class='gntleft'><b class='gnttops'>Venue</b><br>";
echo "<h><span id='gMapApiFullVenue'>$bvenue</span>";

if ($landmark >""){
echo "<br>$landmark </h></div>";}
else {echo "</h></div>";}
}
else {echo "<div class='gntleft'><b>Venue</b></div><br>";}

  echo "<div class='gntright'>";

if ($bvenue > ""){

echo"
  <a href='http://maps.google.com/?saddr=&daddr=$bvenue'><button class='gntbtnalt'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>location_on</i> Show on Map </button></a><br><br>";
}
if ($venue > ""){
echo "<a href='http://maps.google.com/?saddr=$bvenue&daddr=$venue'><button class='gntbtnalt'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>directions</i> Get Directions </button></a>
";}
echo "</div>";

echo "</div><br>";


if($ringo > "" and $ringo != "slack"){
  if ($ringo == "meals" or $ringo == "leisure" or $ringo == "admin" or $ringo == "transport" or $ringo == "venues" or $ringo == "media"){
echo "<a href='/profile/$poster'><div class='bring'><div class='jalw'>$ringo<br>contact</div><br><img src='/images/essentials/$ringo.png' class='fiwb'><div class='jalw'>@$poster</div><br></div></a>";
}else{
    echo "<a href='/profile/$poster'><div class='bring'><div class='jalw'>$ringo<br>contact</div><br><img src='/images/essentials/othertask.png' class='fiwb'><div class='jalw'>@$poster</div><br></div></a>";
  }}
else {echo "";}

if($ringa > "" and $ringa != "slack"){
  if ($ringa == "meals" or $ringa == "leisure" or $ringa == "admin" or $ringa == "transport" or $ringa == "venues" or $ringa == "media"){
echo "<a href='/profile/$contributora'><div class='bring'><div class='jalw'>$ringa<br>contact</div><br><img src='/images/essentials/$ringa.png' class='fiwb'><div class='jalw'>@$contributora</div><br></div></a>";
}else{
    echo "<a href='/profile/$contributora'><div class='bring'><div class='jalw'>$ringa<br>contact</div><br><img src='/images/essentials/othertask.png' class='fiwb'><div class='jalw'>@$contributora</div><br></div></a>";
  }}
else {echo "";}

if($ringb > "" and $ringb != "slack"){
  if ($ringb == "meals" or $ringb == "leisure" or $ringb == "admin" or $ringb == "transport" or $ringb == "venues" or $ringb == "media"){
echo "<a href='/profile/$contributorb'><div class='bring'><div class='jalw'>$ringb<br>contact</div><br><img src='/images/essentials/$ringb.png' class='fiwb'><div class='jalw'>@$contributorb</div><br></div></a>";
}else{
    echo "<a href='/profile/$contributorb'><div class='bring'><div class='jalw'>$ringb<br>contact</div><br><img src='/images/essentials/othertask.png' class='fiwb'><div class='jalw'>@$contributorb</div><br></div></a>";
  }}
else {echo "";}

if($ringc > "" and $ringc != "slack"){
  if ($ringc == "meals" or $ringc == "leisure" or $ringc == "admin" or $ringc == "transport" or $ringc == "venues" or $ringc == "media"){
echo "<a href='/profile/$contributorc'><div class='bring'><div class='jalw'>$ringc<br>contact</div><br><img src='/images/essentials/$ringc.png' class='fiwb'><div class='jalw'>@$contributorc</div><br></div></a>";
}else{
    echo "<a href='/profile/$contributorc'><div class='bring'><div class='jalw'>$ringc<br>contact</div><br><img src='/images/essentials/othertask.png' class='fiwb'><div class='jalw'>@$contributorc</div><br></div></a>";
  }}
else {echo "";}

if($ringd > "" and $ringd != "slack"){
  if ($ringd == "meals" or $ringd == "leisure" or $ringd == "admin" or $ringd == "transport" or $ringd == "venues" or $ringd == "media"){
echo "<a href='/profile/$contributord'><div class='bring'><div class='jalw'>$ringd<br>contact</div><br><img src='/images/essentials/$ringd.png' class='fiwb'><div class='jalw'>@$contributord</div><br></div></a>";
}else{
    echo "<a href='/profile/$contributord'><div class='bring'><div class='jalw'>$ringd<br>contact</div><br><img src='/images/essentials/othertask.png' class='fiwb'><div class='jalw'>@$contributord</div><br></div></a>";
  }}
else {echo "";}

if($ringe > "" and $ringe != "slack"){
if ($ringe == "meals" or $ringe == "leisure" or $ringe == "admin" or $ringe == "transport" or $ringe == "venues" or $ringe == "media"){
echo "<a href='/profile/$contributore'><div class='bring'><div class='jalw'>$ringe<br>contact</div><br><img src='/images/essentials/$ringe.png' class='fiwb'><div class='jalw'>@$contributore</div><br></div></a>";
}else{
  echo "<a href='/profile/$contributore'><div class='bring'><div class='jalw'>$ringe<br>contact</div><br><img src='/images/essentials/othertask.png' class='fiwb'><div class='jalw'>@$contributore</div><br></div></a>";
}}
else {echo "";}

if($ringf > "" and $ringf != "slack"){
  if ($ringf == "meals" or $ringf == "leisure" or $ringf == "admin" or $ringf == "transport" or $ringf == "venues" or $ringf == "media"){
echo "<a href='/profile/$contributorf'><div class='bring'><div class='jalw'>$ringf<br>contact</div><br><img src='/images/essentials/$ringf.png' class='fiwb'><div class='jalw'>@$contributorf</div><br></div></a>";
}else{
    echo "<a href='/profile/$contributorf'><div class='bring'><div class='jalw'>$ringf<br>contact</div><br><img src='/images/essentials/othertask.png' class='fiwb'><div class='jalw'>@$contributorf</div><br></div></a>";
  }}
else {echo "";}

echo "<br><br>";

echo "<div class='markgnt'>
<div class='gntleft'>";

if ($dresscode > ""){
echo "<b class='gnttops'>Dress Code</b><br>";
echo "<h>$dresscode";
echo "</h><br><br>";}
else {echo "";}

if ($cost > ""){
  echo "<b class='gnttops'>$cost</b><br>"; 
}else {echo "";}

if ($costpur > ""){
  echo "<h>For $costpur</h><br>";
}else{echo "";}

echo "</div><div class='gntright'>";

if ($wapweb > ""){
    echo "<a href='$wapweb' target='_blank'><button class='gntbtnalt'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>group_work</i> Group Chat</button></a><br><br>";
}
else {echo "";}

if ($phone > ""){
echo "<a href='mailto:$phone'><button class='gntbtnalt'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>contact_mail</i> Email Team";
echo "</button></a><br><br>";}
else {echo "";}

if ($programcheck > ""){
echo "<a href='#program'><button class='gntbtnalt' id='clean' onclick='showprogram()'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>event_note</i> Agenda</button></a><br><br>";}
else {echo "";}
     
if ($pollcheck > ""){
echo "<a href='/poll/$pureEventRef'><button class='gntbtnalt'><i class='material-icons' style='font-size: 15px;vertical-align: sub;'>poll</i> Take the poll</button></a>";}
else {echo "";}

echo "</div></div>";
     

echo "<br><div id='botblue'> vrixe.com/event/$pureEventRef </div></div>
 <p class='rates' id='gMapApiFullDestination'>$venue</p>";
     echo "<div id='mapbox'>

</div>";


mysqli_close($conne);
 }//END OF IF SHOW EVENT WAS TRUE
  
  
  //$showUserEvent = false; so we show form
 else{
   //check if gave was found. even ref 
   if($gave == 0){
     
   }else{
       if($authkey > "" and $authkey != $authkeyFromServer){$privateBoxError = "We could not verify your access. Please retry";}else{$privateBoxError = "";}
  $privateref = $row['refs'];
 $pposter = "<a href='/profile/$poster'>$poster</a>";
    $sendformto = '/event/'.$pureEventRef;
     require("./garage/privatebox.php");  
       require("./garage/networkStatus.php");
  echo "
  <style>#write{display:none}</style>
 <script type='text/javascript' src='/garage/scripts/redeye.js?v=$vv'></script>
    <script>
 function closeclose(){
     document.getElementById('searchboxes').style.height='0';
      document.getElementById('gtr').style.display='none';
    var program = document.getElementById('program');
 }
</script>"; 
   }}
  

}//end of if ref was sent in url
  
  #if refs was not posted
else{
$refcheck = 0;
  echo "<br>
<div class='pagecen'>
<div class='pef'>
  <div class='blfhead'>...plans events together</div>
 <br>
  <img alt='Vrixe Events' src='images/essentials/vrixeevent.png' class='everybodyimg'>
  <h class='miniss'>Create your own event and make plans with friends on Vrixe<br><br>
   <a href='/invite'><button class='copele'><i class='material-icons' style='vertical-align:sub;font-size:17px'>add_circle</i> Start Here</button></a><br><br>

   <h class='miniss'>More?<br>

<i class='material-icons' style='vertical-align: sub;'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

<div class='blfheadalt'></div>
  </div>
  </div>
  <br>
<script>
 function closeclose(){
     document.getElementById('searchboxes').style.height='0';
      document.getElementById('gtr').style.display='none';
 var program = document.getElementById('program');
 }

</script>
  ";
}

?><br><br>
  <?php 
  if(isset($showUserEvent) and $showUserEvent == true){
   require("./garage/gMapsApi.php");
  }else{
    
  }
 
  
  require("./garage/networkStatus.php"); ?>
  <br><br>

</body>
</html>