<?php require("garage/passport.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Event Updates - Vrixe</title>
<link rel="manifest" href="manifest.json">
<meta name="description" content="Update Event on vrixe">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("garage/resources.php"); ?>
<style> body{ background-color: #f5f5f5; } </style>
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

<?php
 $postRefCode = mysqli_real_escape_string($conne, $_POST['refs']); //event reference code
$rate = mysqli_real_escape_string($conne, $_POST['rate']); //form validation must be empty
?>
<br><br>

<div class="postcen">
<div class="pef">

<?php 
//get old imagename so we dontreupload image
if ($postRefCode > ""){
$checkoldimg= mysqli_query($conne,"SELECT * FROM events WHERE refs = '$postRefCode' LIMIT 1"); 
   while($img = mysqli_fetch_array($checkoldimg))
 {
  $imgold = $img['imgname'];
  $imgoldthumb = $img['imgthumb'];
  $poster = $img['hype'];
  $cua = $img['cua'];
  $cub = $img['cub'];
  $cuc = $img['cuc'];
  $cud = $img['cud'];
  $cue = $img['cue'];
  $cuf = $img['cuf'];

  //get position to store users task
    if ($username == $poster){$bringpos = 'ringo';}
     else if ($username == $cua){$bringpos = 'ringa';}
     else if ($username == $cub){$bringpos = 'ringb';}
     else if ($username == $cuc){$bringpos = 'ringc';}
     else if ($username == $cud){$bringpos = 'ringd';}
     else if ($username == $cue){$bringpos = 'ringe';}
     else if ($username == $cuf){$bringpos = 'ringf';}
     else {$dbid = 'cua';} //catastrophic error

  }}

//get event status
    $eventStatus = mysqli_real_escape_string($conne, $_POST['status']);
    if ($eventStatus == "false"){$status = 'plan';}
      else if ($eventStatus == "true"){$status = 'approved';}
    else if ($eventStatus == "invite"){$status = 'invite';}
        else{$status = 'plan';}

//reverse pprivacy
$privacystat = mysqli_real_escape_string($conne, $_POST['pupr']);
   if ($privacystat == "false"){$pupr = 'public';}
        else{$pupr = 'private';}

  //if user selected to notify teammates from desk
$notificationstat = mysqli_real_escape_string($conne, $_POST['notifstat']);

//savesimple value but echo protected value
 $rawprobeevent = mysqli_real_escape_string($conne, $_POST['event']); $probeevent = strtoupper($rawprobeevent);
 $event = htmlspecialchars($probeevent, ENT_QUOTES);
 $description = mysqli_real_escape_string($conne, $_POST['description']);
 $type = mysqli_real_escape_string($conne, $_POST['type']);
 $dates = mysqli_real_escape_string($conne, $_POST['dates']);
 $edates = mysqli_real_escape_string($conne, $_POST['edates']);
 $timing = mysqli_real_escape_string($conne, $_POST['timing']);
 $lastedit = mysqli_real_escape_string($conne, $_POST['lastedit']);
 $variant = mysqli_real_escape_string($conne, $_POST['etiming']);
 $venue = mysqli_real_escape_string($conne, $_POST['venue']);
 $bvenue = mysqli_real_escape_string($conne, $_POST['bvenue']);
 $cost = mysqli_real_escape_string($conne, $_POST['cost']);
 $costpur = mysqli_real_escape_string($conne, $_POST['costpur']);
 $landmark = mysqli_real_escape_string($conne, $_POST['landmark']);
 $keynote = mysqli_real_escape_string($conne, $_POST['keynote']);
 $dresscode = mysqli_real_escape_string($conne, $_POST['dresscode']);
 $hype = mysqli_real_escape_string($conne, $_POST['hype']);
 $organiser = mysqli_real_escape_string($conne, $_POST['organiser']);
 $wapweb = mysqli_real_escape_string($conne, $_POST['wapweb']);
 $authkey = mysqli_real_escape_string($conne, $_POST['authkey']);
 $phone = mysqli_real_escape_string($conne, $_POST['phone']);
 $rsvpmail = mysqli_real_escape_string($conne, $_POST['rsvpmail']);
 $class = mysqli_real_escape_string($conne, $_POST['class']);
 $zipi = mysqli_real_escape_string($conne, $_POST['zipi']);
 $state = mysqli_real_escape_string($conne, $_POST['state']);
 $customnotifmsg = mysqli_real_escape_string($conne, $_POST['customnotifmsg']);
  if($customnotifmsg > ""){$customusermessage = $customnotifmsg;}else{$customusermessage = "Some changes to your plan were made, so important we've been asked to notify you, please check to see.";}
   $dateposted = mysqli_real_escape_string($conne, $_POST['dateposted']);
   $hypeEmail = mysqli_real_escape_string($conne, $_POST['email']);//email of the hype
  $iniy = substr($dates, 0,4); //event year
 $inimot = substr($dates, 5,2); //event month
 $inid = substr($dates, 8,2); //event day
 $year = "$iniy.$inimot$inid"; //year.month.day to calculate picks 
 $week = date("l",gmmktime(0,0,0,$inimot,$inid,$iniy));
 $bringing = mysqli_real_escape_string($conne, $_POST['bringing']);
  $emaillist = mysqli_real_escape_string($conne, $_POST['emaillist']);//mailinglist for newly added users
$pushlist = mysqli_real_escape_string($conne, $_POST['pushlist']);//pushmessagelist for newly added users

  $cua = mysqli_real_escape_string($conne, $_POST['cua']);
  $cub = mysqli_real_escape_string($conne, $_POST['cub']);
  $cuc = mysqli_real_escape_string($conne, $_POST['cuc']);
    $cud = mysqli_real_escape_string($conne, $_POST['cud']);
    $cue = mysqli_real_escape_string($conne, $_POST['cue']);
    $cuf = mysqli_real_escape_string($conne, $_POST['cuf']);
  
 //image upload
  $postedimage = $_FILES['banner']['name'];
   $postEventImageName = mysqli_real_escape_string($conne, $_POST['ii']);

  //set event image to default if it was and stll is default
  if ($postEventImageName == "default.jpg" or $postEventImageName == "default.png" or $postEventImageName == $imgold){ 
    $eventImage = $imgold;
    $eventImagethumb = $imgoldthumb;
  }
  
  // user uploaded new image
  else{
    $imageFileType = pathinfo($postedimage,PATHINFO_EXTENSION); //substr($postedimage, -4);
    $imageDirectory = "images/events/"; //where to store
    $eventImageWithType = $postRefCode . "." . $imageFileType;//rename image to event code.type
    $imageDirectoryWithType = $imageDirectory . $eventImageWithType;//eg 567gdtf87.png or jpg etc
    $imageThumbDirectoryWithType = "images/eventnails/" . $eventImageWithType;
    $uploadOk = 1;
    
    $eventImage = $eventImageWithType;

    $eventImagethumb = $eventImageWithType;

 //CHECK IMAGE SPECIFICATIONS
  //check image size 900kb
 if ($_FILES["banner"]["size"] > 900000) { $uploadOk = 0;}
    
// Allow certain file formats
elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "PNG" && $imageFileType != "jpeg" && $imageFileType != "gif" ){ $uploadOk = 0; } 
    
 //check if image is an attack. if ther is a > in $eventImageWithType
else if(strpos($eventImageWithType,'>') != "" or strpos($eventImageWithType,'<') != ""){ $uploadOk = 0; }
    
//all is good with image
else{$uploadOk = 1;}
    
    
 //TO UPLOAD OR NOT THE NEW IMAGE
    
 //Upload should not be done
if ($uploadOk == 0) {
      $eventImage = "default.jpg";
      $eventImagethumb = "default.png";
    unlink("images/events/$eventImageWithType");
    unlink("images/eventnails/$eventImageWithType");
  echo "<div id='valert' onclick='closealert()'>Please use smaller image</div>";
}

    //Upload can start
else { 
       //quallity control
       if($_FILES["banner"]["size"] >= 500000){$mainqualitycontrol = 90; $thumbqualitycontrol = 80;}
       else{$mainqualitycontrol = 20; $thumbqualitycontrol = 10;}
  
          //crop image code here
       $uploadImageSize = getimagesize($_FILES["banner"]["tmp_name"]); $tempImageWidths = $uploadImageSize[0];  $tempImageHeights = $uploadImageSize[1]; 
       
  //convert image to jpg
          $extension = substr($imageDirectoryWithType,-3);     
          if ($extension == 'peg'){
            $tempCanvasImage = imagecreatefromjpeg($_FILES["banner"]["tmp_name"]);
            }
            else if ($extension == 'jpg'){
            $tempCanvasImage = imagecreatefromjpeg($_FILES["banner"]["tmp_name"]);
          }
           else if ($extension == 'gif'){
             $tempCanvasImage = imagecreatefromgif($_FILES["banner"]["tmp_name"]);
          }
           else if ($extension == 'png'){
           $tempCanvasImage = imagecreatefrompng($_FILES["banner"]["tmp_name"]);
          }
        else if ($extension == 'PNG'){
           $tempCanvasImage = imagecreatefrompng($_FILES["banner"]["tmp_name"]);
          }
       
          //compress image
          imagejpeg($tempCanvasImage, $imageDirectoryWithType, $mainqualitycontrol); $thumbpass = "true";
          imagejpeg($tempCanvasImage, $imageThumbDirectoryWithType, $thumbqualitycontrol);
  
       
        
        
    if ($thumbpass == 'true') {
   //everything passed 
    } 
  //compress and crop failed. revert to default
  else {
     $eventImage = "default.jpg";
     $eventImagethumb = "default.png";
      unlink("../images/events/$eventImageWithType");
      unlink("../images/eventnails/$eventImageWithType");
       echo "<div id='valert' onclick='closealert()'>Error with image format.</div>";
    }
       
  }
  }// end of trying to upload new image

  //stringfy numeric month
 if ($inimot ==  "01"){$mot = "January";} else if($inimot == "02"){$mot = "February";} else if($inimot == "03"){$mot = "March";} else if($inimot == "04"){$mot = "April";} else if($inimot == "05"){$mot = "May";} else if($inimot == "06"){$mot = "June";} else if($inimot == "07"){$mot = "July";} else if($inimot == "08"){$mot = "August";} else if($inimot == "09"){$mot = "September";} else if($inimot == "10"){$mot = "October";} else if($inimot == "11"){$mot = "November";} else if($inimot == "12"){$mot = "December";} else {$mot = "nil";}

 $pa = mysqli_real_escape_string($conne, $_POST['pa']);
 $pat = mysqli_real_escape_string($conne, $_POST['pat']);
 $pb = mysqli_real_escape_string($conne, $_POST['pb']);
 $pbt = mysqli_real_escape_string($conne, $_POST['pbt']);
 $pc = mysqli_real_escape_string($conne, $_POST['pc']);
 $pct = mysqli_real_escape_string($conne, $_POST['pct']);
 $pd = mysqli_real_escape_string($conne, $_POST['pd']);
 $pdt = mysqli_real_escape_string($conne, $_POST['pdt']);
 $pe = mysqli_real_escape_string($conne, $_POST['pe']);
 $pet = mysqli_real_escape_string($conne, $_POST['pet']);
 $pf = mysqli_real_escape_string($conne, $_POST['pf']);
 $pft = mysqli_real_escape_string($conne, $_POST['pft']);
 $pg = mysqli_real_escape_string($conne, $_POST['pg']);
 $pgt = mysqli_real_escape_string($conne, $_POST['pgt']);
 $ph = mysqli_real_escape_string($conne, $_POST['ph']);
 $pht = mysqli_real_escape_string($conne, $_POST['pht']);
 $pi = mysqli_real_escape_string($conne, $_POST['pi']);
 $pit = mysqli_real_escape_string($conne, $_POST['pit']);
 $pj = mysqli_real_escape_string($conne, $_POST['pj']);
 $pjt = mysqli_real_escape_string($conne, $_POST['pjt']);
 $pk = mysqli_real_escape_string($conne, $_POST['pk']);
 $pkt = mysqli_real_escape_string($conne, $_POST['pkt']);
 $pl = mysqli_real_escape_string($conne, $_POST['pl']);
 $plt = mysqli_real_escape_string($conne, $_POST['plt']);
  
  

  $pollquestion = mysqli_real_escape_string($conne, $_POST['pollquestion']);
  $pollanswerone = mysqli_real_escape_string($conne, $_POST['pollanswerone']);
  $pollanswertwo = mysqli_real_escape_string($conne, $_POST['pollanswertwo']);
  $pollanswerthree = mysqli_real_escape_string($conne, $_POST['pollanswerthree']);
  $pollanswerfour = mysqli_real_escape_string($conne, $_POST['pollanswerfour']);
  $pollanswerfive = mysqli_real_escape_string($conne, $_POST['pollanswerfive']);
   $popr = mysqli_real_escape_string($conne, $_POST['popr']);
    $pollcomments = mysqli_real_escape_string($conne, $_POST['pollcomments']);
  
   //chek if poll was actually active, if not revert pollcheck to false
   $pollcheckvalue = mysqli_real_escape_string($conne, $_POST['pollcheck']);
if($pollquestion > "" and $pollanswerone > ""){
  $pollcheck = $pollcheckvalue;
}else{
  $pollcheck = "";
}
  
//same above for program check  
  $programcheckvalue = mysqli_real_escape_string($conne, $_POST['programcheck']);
if($pat > ""){
  $programcheck = $programcheckvalue;
}else{
  $programcheck = "";
}
  

$whoaddressline = mysqli_real_escape_string($conne, $_POST['whoaddressline']);
$whotag = mysqli_real_escape_string($conne, $_POST['whotag']);
$whodates = mysqli_real_escape_string($conne, $_POST['whodates']);
$whoedate = mysqli_real_escape_string($conne, $_POST['whoedate']);
$whotiming = mysqli_real_escape_string($conne, $_POST['whotiming']);
$whoetime = mysqli_real_escape_string($conne, $_POST['whoetime']);
$whoprice = mysqli_real_escape_string($conne, $_POST['whoprice']);
$whopayment = mysqli_real_escape_string($conne, $_POST['whopayment']);
$wholandmark = mysqli_real_escape_string($conne, $_POST['wholandmark']);
$whodresscode = mysqli_real_escape_string($conne, $_POST['whodresscode']);
$whocoord = mysqli_real_escape_string($conne, $_POST['whocoord']);
$whoorganised = mysqli_real_escape_string($conne, $_POST['whoorganiser']);
$whowapweb = mysqli_real_escape_string($conne, $_POST['whowebsite']);
$whophone = mysqli_real_escape_string($conne, $_POST['whophone']);
$whorsvpmail = mysqli_real_escape_string($conne, $_POST['whorsvpmail']);
$whokeynote = mysqli_real_escape_string($conne, $_POST['whokeynote']);
 

 if ($_POST['rate'] > '' or $postRefCode == '') {
    echo "<div class='blfhead'>...you seem lost</div><br><br>

  <img alt='missing' src='images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>Usually this is where we process all your event details you provided but it seems we got none from you.</h> <br><br>
   <a href='/me'><button class='copele'>GO HOME</button></a><br><br>

   <h class='miniss'>More?</h><br>

<i class='material-icons' style='color:#065cff;'>add_to_home_screen</i></i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> INSTALL WEB APP</button></a></h><br><br>

  <div class='blfheadalt'></div>
<br><br>";
	
	return false;
 }
 else{
$sql = "UPDATE events SET status='$status', type='$type', datep='$day', event='$probeevent', organiser='$organiser', description='$description', keynote='$keynote', dates='$dates', edates='$edates', timing='$timing', variant='$variant', venue='$venue', bvenue='$bvenue', cost='$cost', costpur='$costpur', landmark='$landmark', dresscode='$dresscode', wapweb='$wapweb', authkey='$authkey', phone='$phone', rsvpmail='$rsvpmail', hype='$hype', class='$pupr', zip='$zipi', year='$year', month='$mot', day='$week', state='$state', datep='$dateposted', programcheck='$programcheck', pollcheck='$pollcheck', imgname='$eventImage', imgthumb='$eventImagethumb', cua='$cua', cub='$cub', cuc='$cuc', cud='$cud', cue='$cue', cuf='$cuf', lastedit='$lastedit', $bringpos='$bringing' WHERE refs='$postRefCode'";

$pon = "UPDATE programs SET pa='$pa', pb='$pb', pc='$pc', pd='$pd', pe='$pe', pf='$pf', pg='$pg', ph='$ph', pi='$pi', pj='$pj', pk='$pk', pl='$pl', pat='$pat', pbt='$pbt', pct='$pct', pdt='$pdt', pet='$pet', pft='$pft', pgt='$pgt', pht='$pht', pit='$pit', pjt='$pjt', pkt='$pkt', plt='$plt' WHERE refs='$postRefCode'";

$acting = "UPDATE actors SET tag='$whotag', dates='$whodates', edate='$whoedate', timing='$whotiming', etime='$whoetime', coord='$whocoord', landmark='$wholandmark', dresscode='$whodresscode', price='$whoprice', payment='$whopayment', address='$whoaddressline', organiser='$whoorganised', wapweb='$whowapweb', phone='$whophone', rsvpmail='$whorsvpmail', keynote='$whokeynote' WHERE refs='$postRefCode'";
   
$polling = "UPDATE poll SET question='$pollquestion', answerone='$pollanswerone', answertwo='$pollanswertwo', answerthree='$pollanswerthree', answerfour='$pollanswerfour', answerfive='$pollanswerfive', pollpri='$popr', comments='$pollcomments' WHERE refs='$postRefCode'";

echo"<p id='valert' onclick='closealert()'>Event's link copied to clipboard<button id='vbutton'>CLOSE</button></p>";
echo "<div class='blfhead'>Updates Saved</div><br><br>";

//send email
if($status == "approved" or $notificationstat == "true"){
  //get free subscibers 
  $sqlsubs= mysqli_query($conne,"SELECT * FROM contributors WHERE code = '$postRefCode' LIMIT 1"); $defaultpushsubs = 0;
  while($arraysubs = mysqli_fetch_array($sqlsubs)){ $defaultpushsubs = 1; 
     //allsubscribers who are not contributors                                              
    $pushsubscribers = $arraysubs['pushid'];}  
  
  if ($defaultpushsubs == 0){
    $pushsubscribers = '66666666-36f0-432b-9f5d-4bfeec61fa81,';
  }
  //get push id and email of each contributor
 require("garage/getAllContributorToken.php");

if($status == "approved"){ 
  
 //send to all only approved email, no need for notif
 $customMailSubject = "Signed, sealed, go deliver";
 $customMailHeader = "...plan approved";
 $customMailsectionHeader = "Too Soon?";
 $customMailsectionMessage = "Event approved by @$hype. If you still need to make changes, you can move events back to <b>PLAN</b>. Just open the event menu and click on <b>Revert To Plan</b>";
 $customMailsuccessMessage = "<div id='galert'>You'll get an email from us shortly.</div><br>";
 $customMailfailedMessage = "<div id='oalert' >We tried to mail you but Email could not be sent<br>Please retry and if this happens again.<br>Please write us.</div><br>";
 $customMailcta = "VIEW EVENT";
 $customMailctaLink = "https://vrixe.com/event/$postRefCode";
 $customMailctaNudge = "We wish you a great time";
 $customMailBanner = "https://vrixe.com/mail/banners/eventupdated.jpg";   
 $Mailemail = $allmail;
   
  require("mail/genericMailer.php"); 

  //SEND PUSH $allpushes
  $requestPushAs = "approvedEvent";
  require("garage/genericPush.php"); 
}//end of if status is approved

else{//status is either approved or not but notification must have been selected
  
  //send mail for event changes updates
 $customMailSubject = "New update on event";
 $customMailHeader = "...event updated";
 $customMailsectionHeader = "From $username";
 $customMailsectionMessage = "$customusermessage";
 $customMailsuccessMessage = "";
 $customMailfailedMessage = "<div id='oalert' >We tried to update your team but the Emails could not be sent<br>Please retry and if this happens again.<br>Please write us.</div><br>";
 $customMailcta = "VIEW EVENT";
 $customMailctaLink = "https://vrixe.com/event/$postRefCode";
 $customMailctaNudge = "Take a peek and make your own changes.";
 $customMailBanner = "https://vrixe.com/mail/banners/eventupdated.jpg";   
 $Mailemail = $allmail;
   
  require("mail/genericMailer.php"); 
  
  //SEND PUSH $allpushes recent cahnes
  $requestPushAs = "updatedEvent";
  require("garage/genericPush.php"); 
}
  
}//end of email

 //ONLY FOR INVITE DESK PUSH AND MAIL FOR NEWLY ADDED USERS
  if($phpurl == 'vrixe-enn'){
     //do nothing this code only check if we are on developement server
   }else{
      //send email list 
if($emaillist > ""){
    //send email invitees
 $customMailSubject = "You have a new invite";
 $customMailHeader = "From @$hype";
 $customMailsectionHeader = "Hi There";
 $customMailsectionMessage = "We want to let you know that <b>@$hype</b> has added you to <b>'$event'</b>. Interested? Edit and complete this plan together on Vrixe.";
 $customMailsuccessMessage = "";
 $customMailfailedMessage = "<div id='oalert' >We tried to update your team but the Emails could not be sent<br>Not a big deal, we already have a fix for this.<br>Carry On!</div><br>";
 $customMailcta = "VIEW INVITE";
 $customMailctaLink = "https://vrixe.com/invitation.php?iv=$postRefCode";
 $customMailctaNudge = "Go on, edit what's new with your team.";
 $customMailBanner = "https://vrixe.com/mail/banners/eventsaved.jpg";   
   $Mailemail = chop($emaillist,", ");
   
  require("mail/genericMailer.php"); 
   }else{
  //do nothing
   }} 
 
  if($pushlist > ""){
    $requestPushAs = "createdInvite";
  require("garage/genericPush.php");  
   }else{
     //do not push
   }
   
   
//continue print
if ($eventImage == "default.png" or $eventImage == "default.jpg"){
    echo "<div class='eventimage'>$event</div><br>";
}
else {
  echo "<h id='string'>$event</h><br>
  <img alt='$eventImage' src='images/events/$eventImage' class='thisimage'><br><br>";
}
   
echo "<a href='event/$postRefCode'><button class='copele'><i class='material-icons' style='vertical-align:text-top;font-size:18px'>event</i> View Event</button></a><br>

<br><h class='minis' style='color:#778899' id='clonetext'>vrixe.com/event/$postRefCode</h><br><br>
<h class='sword' style='color:#778899'>Share your recent changes</h><br><br>

<button class='control' onclick='prcshare()' title='Share Link'><i class='material-icons' style='font-size: 18px;vertical-align: bottom;'> share</i> share event</button><br>

<script>
var cst;
var csl;
function prcshare(){
    var cst = 'Checkout my recent changes to the event on Vrixe';
    var csl = 'event/$postRefCode';
customshare(cst, csl);
}
</script>";


if (!mysqli_query($conne,$sql) or !mysqli_query($conne,$pon)  or !mysqli_query($conne,$acting) or !mysqli_query($conne,$polling))
  {
  die('Error: ' . mysqli_error($conne));
  }}

mysqli_close($conne);

?>
<br>


<div class="blfheadalt"></div>
</div><br><br><br>

<?php require("garage/networkStatus.php"); ?>
</body>
</html>