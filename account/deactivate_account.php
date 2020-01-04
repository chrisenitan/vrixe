<?php
  require("../garage/visa.php"); 
  $rate = mysqli_real_escape_string($conne, $_POST['rate']);
  $email = mysqli_real_escape_string($conne, $_POST['deactemail']);

  if (isset($_COOKIE['user'])){
  $cookie = $_COOKIE['user'];
} else {$cookie = "";}

  $candeactivate = false; //just a control

if($rate != '' or $email == '' or $cookie == ""){ header("Location: /index"); }

else{
   //delete profile
   $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); //find user as profiler
while($founduser = mysqli_fetch_array($cooked)){

   $username = $founduser['username'];
   $cookieemail = $founduser['email'];
   $propic = $founduser['picture'];
     
    $pwrfLenght = strlen($propic); //get full url lenght    
    $pwrcutback = $pwrfLenght - strlen($serverAndImageUrl);//remove lenght of server image url from full picture lenght
    $pictureWithoutUrl = substr($propic,-$pwrcutback);//cut out that text leghnt from the full text

     //if request is for logged in user
    if ($cookieemail == $email){
    $candeactivate = true; 
    $deleteprocont = mysqli_query($conne,"DELETE FROM contributors WHERE owner = '$username' "); 

    $deleteprofile = mysqli_query($conne,"DELETE FROM profiles WHERE cookie = '$cookie' "); 

    if($pictureWithoutUrl != "user.png"){
     unlink("../images/profiles/$pictureWithoutUrl");
     unlink("../images/profiles/profilethumbs/$pictureWithoutUrl");
    }else {}

    setcookie("user", "", time() - 3600, "/");
    setcookie("formail", "", time() - 3600, "/");

   
    }else {$candeactivate = false;}

}//e of delete profile

//delete events
   $unhook = mysqli_query($conne,"SELECT * FROM events WHERE hype = '$username' "); //find user as eventer
 while($unhookarray = mysqli_fetch_array($unhook)){

    if ($candeactivate == true){

      $unhookref = $unhookarray['refs'];
      $unhookimg = $unhookarray['imgname'];
      $unhookimgthumb = $unhookarray['imgthumb'];

      $deleteevent = mysqli_query($conne,"DELETE FROM events WHERE hype = '$username' "); //do this here so we have event to select from query first

      $delhookprog = mysqli_query($conne,"DELETE FROM programs WHERE refs = '$unhookref' "); 

      $delactors = mysqli_query($conne,"DELETE FROM actors WHERE refs = '$unhookref' "); 
      
//code for deleting ics calendars here
      unlink("../garage/calendars/$unhookref.ics");

//remove user event image
      if($unhookimgthumb != "default.png"){
       unlink("../images/events/$unhookimg");
      unlink("../images/eventnails/$unhookimgthumb");
      }else {}

      }else {}
     
 } //e of delete events

      //set username to null to show login on mobile menu
      $username = "";
} //e of else rate was passed
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Deleting Account</title>
<link rel="manifest" href="/manifest.json">
<?php
  //remove user push if user logout out. actual code is below page becaus eof async script 
  if ($candeactivate == true){
    echo "<script src='https://cdn.onesignal.com/sdks/OneSignalSDK.js' async=''></script>";
    
   if($phpurl == 'vrixe-enn'){$appID = '527b2883-5dff-4a9b-88bd-5e2e3e74c9f4';}else{$appID = '151afe3d-500c-49f3-b682-dd9c5084a863';}
echo"
  <script defer>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: '$appID',
    });
  });

OneSignal.push(function() {
OneSignal.sendTag('nature', 'deleted');
       OneSignal.setSubscription(false);      
});

</script>";
}
?>  
<meta name="description" content="Delete your Vrixe account">
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" x-undefined=""/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<?php require("../garage/resources.php"); ?>
</head>
<body>
<div id="gtr" onclick="closecloseb()"></div>

<?php require("../garage/deskhead.php"); 
  require("../garage/desksearch.php"); 
  require("../garage/deskpop.php"); ?>

<?php require("../garage/mobilehead.php"); 
  require("../garage/subhead.php");
  require("../garage/thesearch.php"); ?>

<br>
<div class="pagecen">	
<?php 
 if ($candeactivate == false){ //somehow we didnt get what you said or we think your emails dont correspond
   echo "<div class='pef'>
   <div class='blfhead'>...almost caught</div><br>
   <img src='https://vrixe.com/images/essentials/nodata.svg' class='everybodyimg'><br>
   <div id='oalert'>Was that a mistake? We have not deleted anything yet...<br>The Email provided did not match your account.<br> You have to be logged into the account you want to delete.</div><br>
   <br><h class='miniss'>...keep getting this?</h><br>
   <a href='/help/feedbacks.php'><button class='copele'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>feedback</i> Feedback</button></a><br><br>
   <div class='blfheadalt'></div>
   </div>";
 }
 else{
  echo "<div class='pef'>
  <div class='blfhead'>Profile Deactivated</div><br>
  <img src='/images/vlogo.png' id='menuimg'><br>
  <div id='galert'> Your Vrixe account has been deleted </div>
  <br><img alt='Vrixe account deleted' src='/images/essentials/delete.png' class='everybodyimg'><br>
      <h class='miniss'>we really don't want you gone but if you could...</h><br><br>
       <a href='/help/feedbacks?ext=lvtw'><button class='copele'><i class='material-icons' style='vertical-align:bottom;font-size:17px'>feedback</i> Tell Us Why</button></a><br>
       
  <div class='yalert' >Your account has been deleted.<br>
  We have also deleted all events in your account.<br>
  All cookies have been deleted from your device<br>
  You have also been unsubscribed from Newsletters<br>
  </div>
 <br>";
   
    $customMailSubject = "Your account has been deleted";
    $customMailHeader = "...hey Vrixer, for the last time.";
    $customMailsectionHeader = "Acoount Deleted";
    $customMailsectionMessage = "You recently deleted you Vrixe profile, we are mailing to confirm this. Thank you for the experience you shared with us, you're always welcomed here.";
    $customMailcta = "FEEDBACK";
    $customMailsuccessMessage = "<div class='yalert'>You'll get an email from us shortly. One last email, just to confirm this action.</div><br><div class='blfheadalt'></div></div>";
    $customMailfailedMessage = "<div id='oalert' >We tried to mail you but Email could not be sent<br>Not a big deal, we already have a fix for this.<br>Carry On! We'll fix this</div><br><div class='blfheadalt'></div></div>";
    $customMailctaLink = "https://vrixe.com/help/feedbacks?ext=lvtw";
    $customMailctaNudge = "If this was not you or it was a mistake, please write us.";
    $customMailBanner = "https://vrixe.com/mail/updateimages/exit.jpg";
    
    require("../mail/genericMailer.php");   

}

?>
</div>
<br><br>

<?php require("../garage/networkStatus.php"); ?>
</body>
</html>