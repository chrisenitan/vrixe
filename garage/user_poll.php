<?php
//actual poll page for users
echo"<div class='pef' style='padding:0px'> 
 <div class='pollimage' alt='$pollref' style='background-image:url(\"/images/events/$eventimage\")'>";


   echo"
 </div>
 <br>
 <h id='event' style='font-size:20px;display:inline-block'>$pollquestion</h><br><br>
 ";

//wip if user is given but not verified. ask for verification. today minus freq
 if($username > "" and $cut > ""){ //verified
   echo"<p class='petd' style='width:96%;margin:auto'>You are polling as @$username. Tap any choice to cast vote<br>or logout to poll anonymously</p><br>
    <input type='text' class='rates' required placeholder='... .... ...'  id='usernameforvote' value='@$username'>";
 }
else if($username > "" and $cut == ""){ //not verified but valid days
     echo"<p class='petd' style='width:96%;margin:auto'>Please verify account to poll as @$username<br>or logout to poll anonymously</p><br>
    <input type='text' class='rates' required placeholder='... .... ...'  id='usernameforvote' value='unverifieduser'>";
}
else{
  echo"
  <h class='petd'>Choose a username and tap any choice to cast vote.</h>
  <input type='text' class='privinput' required placeholder='... .... ...'  id='usernameforvote'><br><br>
";
}
 if($answerone > ""){
   if($av < 10){$avlevel = $av * 2;} 
   else{$avlevel = $av;}
   echo"
   <h class='miniss' style='float:left;margin-left:10%;'>$answerone. <b>$av $avven</b></h><br>
   <div class='mainvoteholder' id='av' onclick='votein(this.id)'>
<div class='votefiller' style='width:$avlevel%' id='avv'></div>
</div><br><br>
   ";
 }else{
   echo"";
 }


 if($answertwo > ""){
     if($bv < 10){$bvlevel = $bv * 2;}
   else{$bvlevel = $bv;}
   echo"
   <h class='miniss' style='float:left;margin-left:10%;'>$answertwo. <b>$bv $bvven</b></h><br>
    <div class='mainvoteholder' id='bv' onclick='votein(this.id)'>
<div class='votefiller' style='width:$bvlevel%' id='bvv'></div>
</div><br><br>
   ";
 }else{
   echo"";
 }


 if($answerthree > ""){
     if($cv < 10){$cvlevel = $cv * 2;}
   else{$cvlevel = $cv;}
   echo"
   <h class='miniss' style='float:left;margin-left:10%;'>$answerthree. <b>$cv $cvven</b></h><br>
    <div class='mainvoteholder' id='cv' onclick='votein(this.id)'>
<div class='votefiller' style='width:$cvlevel%' id='cvv'></div>
</div><br><br>
   ";
 }else{
   echo"";
 }


 if($answerfour > ""){
     if($dv < 10){$dvlevel = $dv * 2;}
   else{$dvlevel = $dv;}
   echo"
   <h class='miniss' style='float:left;margin-left:10%;'>$answerfour. <b>$dv $dvven</b></h><br>
    <div class='mainvoteholder' id='dv' onclick='votein(this.id)'>
<div class='votefiller' style='width:$dvlevel%' id='dvv'></div>
</div><br><br>
   ";
 }else{
   echo"";
 }


 if($answerfive > ""){
     if($ev < 10){$evlevel = $ev * 2;}
   else{$evlevel = $ev;}
   echo"
   <h class='miniss' style='float:left;margin-left:10%;'>$answerfive. <b>$ev $evven</b></h><br>
    <div class='mainvoteholder' id='ev' onclick='votein(this.id)'>
<div class='votefiller' style='width:$evlevel%' id='evv'></div>
</div><br><br>
   ";
 }else{
   echo"";
 }



echo"
<h class='petd' style='float:left;margin-left:5%;'>Want to comment or ask a question?</h>
<input type='text' class='rates' id='refsforvote' value='$pollref'><br>
<input type='text' id='indivcomm' class='privinput' name='pollcomments' placeholder='... .... ...'><br><br>
<button class='copele' type='button' onclick='commentonpoll()' id='commentonpoll'><i class='material-icons' style='font-size: 16px;vertical-align: sub;'>add_comment</i> Add Comment</button>
<br><br>
 <br>";

 if($username == $hype){
      echo"
  <button class='triocontrol' id='$pollref' onclick='abdlp(this.id)'><i class='material-icons' style='font-size: 18px;vertical-align: bottom;
'> delete</i> delete</button> 
 ";
  }else{}
  


echo"
<button class='triocontrol' onclick='customshare(\"$pollquestion\", \"poll/$pollref\")'><i class='material-icons' style='font-size: 18px;vertical-align: bottom;
'>share</i> share</button>
 <a href='/event/$pollref'><button class='triocontrol'><i class='material-icons' style='font-size: 18px;vertical-align: bottom;
'>event</i> event</button></a>
   <br><br>
<a href='/help/feedbacks'><h class='petd'>report this Poll <i class='material-icons' style='font-size: 18px;vertical-align: bottom;
'> flag</i> </h></a><br>

<br>
<div class='blfheadalt'></div>
<br>
</div>

<script>
function abdlp(pollid){
    var closer = 'nope';
  var button = '<i class=\"material-icons\" style=\"font-size: 18px;vertical-align:sub;\"> delete</i> Delete';
  var buttonlink = '#cateuser';
  var title = 'Sure to delete?';
  var text = 'How it works<br>This removes the current polls question, votes and comments and let\'s you create a new event poll';
  callabsolunia(title, text, button, buttonlink, closer);
  document.getElementById('absolunia_button').addEventListener('click', function(){

deletepoll(pollid);
  });
  
  }
</script>
";

  if($pollcomments == null){
        echo"
 <div class='pef' style='display:inline-block;padding:0px'>
    <div class='blfhead'>...no comments. Yet!</div><br><br>

  <img alt='$pollref' src='/images/essentials/chat.svg' class='everybodyimg'><br>
  <h class='miniss'>Listen and Reply</h>
  <p style='width:95%;margin:auto' class='disl'>This poll supports comments so you can add quick tips, ask questions, reply and keep your poll interactive.</p> <br><br>

   <h class='miniss'>Having issues with comments?</h><br>

<i class='material-icons' style='font-size:16px;vertical-align:middle;color:#065cff'>contact_support</i><br>
<h class='miniss'>Let us know <br><a href='/help/feedbacks'><button class='control'><i class='material-icons' style='font-size:16px;vertical-align:middle;'>feedback</i> Feedback</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div>";
  }else{
    $arrayComment = explode("&=", $pollcomments);
    echo"
     <div class='pef' style='padding:0px'><br>
 <div class='blfhead'>Comments</div><br>
  <div style='width:100%;height:auto;overflow:scroll;max-height:400px;text-align:left'>
";
foreach ($arrayComment as $comment){
  if($comment != "commentRemoved"){
    $boldAt = str_replace("@", "<b>", $comment);
    $finalComment = str_replace(":", "</b><br>", $boldAt);
  echo "<div class='pollcomments'>$finalComment</b></div>";
}}
echo"
 </div>
 <br>
 <div class='blfheadalt'></div>
 <br>
</div>
";
  }
  

if($governoronpage == true){   
  if($pollusers == null){
    
    echo"<div class='pef' style='display:inline-block;padding:0px'>
    <div class='blfhead'>...no participants. Yet!</div><br><br>

  <img alt='$pollref' src='/images/essentials/loading.svg' class='everybodyimg'><br>
  <h class='miniss'>Still waiting?</h>
  <p style='width:97%;margin:auto' class='disl'>No worries, share your poll and once you have people voting, we'll make a list here for you</p> <br><br>

   <h class='miniss'>We have a Progressive Web App</h><br>

<i class='material-icons' style='font-size:16px;vertical-align:middle;color:#065cff'>add_to_home_screen</i><br>
<h class='miniss'>Keep Vrixe with you <br><a href='/app/pwa.html'><button class='control'> Install Web App</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div><br>";
    
  }else{
   $arrayVoters = explode(",", $pollusers);
    echo"
     <div class='pef' style='padding:0px'><br>
 <div class='blfhead'>Voters</div><br>
  <div style='width:100%;height:auto;overflow:scroll;max-height:400px;text-align:center'>
";
foreach ($arrayVoters as $poller){
  if($poller != "pollerRemoved"){
    $supPoller = str_replace("#", "<sup style='text-transform:uppercase;color:#f58989'>", $poller);
    $finalPoller = str_replace("!", "</sup>", $supPoller);
  echo "<div class='pollusers'>$finalPoller</div>";
}}
echo"
 </div>
 <br>
 <div class='blfheadalt'></div>
 <br>
</div>
";
  }

}//eof if gove on page
else{

}



?>