<?php
//poll for desk page
if ($pollcheck > ""){

  
$polls = mysqli_query($conne,"SELECT * FROM poll WHERE refs = '$code' LIMIT 1"); 
$foundpoll = 0;
  while($rowpoll = mysqli_fetch_array($polls)){
$foundpoll = 1;
$pollquestion = $rowpoll['question'];
$answerone = $rowpoll['answerone'];
$answertwo = $rowpoll['answertwo'];
$answerthree = $rowpoll['answerthree'];
$answerfour = $rowpoll['answerfour'];
$answerfive = $rowpoll['answerfive'];
$pollcomments = $rowpoll['comments'];
 $popr = $rowpoll['pollpri'];
    
 
  if ($popr == 'true'){
   echo "<style>
   #pollprivateclassbtn{
   background-color: #ffffff;
   border-color: #2b3445;
   border-width: 4px;
 }
   </style>";
  } else{
   echo "<style>
   #pollprivateclassbtn{
      background-color: transparent;
   border-color: #2b3445;
   border-width: 2px;
 }
   </style>";
  } //preset class css
    
echo"
<div id='poll' class='pef'>

 <div class='blfhead'>Edit your Poll</div><br>
 <h id='event' style='font-size:20px;display:inline-block'>$pollquestion</h><br><br>
 
 <input type='text' id='pollquestion' class='rates' value='$pollquestion' name='pollquestion'>
 
<input type='text' value='$answerone'  class='rates' name='pollanswerone'>

<input type='text' value='$answertwo'  class='rates' name='pollanswertwo'>

<input type='text' value='$answerthree'  class='rates' name='pollanswerthree'>

<input type='text' value='$answerfour'  class='rates' name='pollanswerfour'>

<input type='text' value='$answerfive'  class='rates' name='pollanswerfive'>


  <h class='miniss'>What is happening here?</h><br>
 <img alt='$pollref' src='/images/essentials/vote.svg' class='everybodyimg'>
<br><h class='disl'>No changes to live polls but you can delete it and make a new one.</h><br><br>

<a href='/poll/$code#event'><button type='button' class='control'><i class='material-icons' style='vertical-align:bottom;font-size:21px'>delete_forever</i> Delete Poll</button></a><br><br>


  <h class='miniss'>your poll's access code is <b>'$authkey'</b></h><br><br>
<input type='text' name='pollcomments' value='$pollcomments' class='rates'>
<div class='classholder'>
 <input type='text' id='pollprivateid' value='$popr' required class='rates' name='popr'>
<div class='classholdertext'><i class='material-icons' style='vertical-align:sub;font-size:17px'>lock</i> PRIVATE</div><div class='classholderdiv'></div><button class='classholdertick' type='button' id='pollprivateclassbtn' onclick='var chjs=\"pollprivate\";allclass(chjs)'><i class='material-icons' style='vertical-align:bottom;font-size:16px'>lock</i></button> 
 </div><br><br>";
    
 if($governoOnPage == true){
   echo" <button type='button' class='textButton' onclick='deskChangePollCode()'><i class='material-icons' style='font-size:17px;vertical-align:sub'>vpn_key</i> Change Secure Code</button>";
 }
 
 echo"<br>
<div class='blfheadalt'></div>
</div>
";

  }
  if($foundpoll == 0){
  echo "
<div id='poll' class='pef'>
    <div class='blfhead'>Poll's missing...</div><br><br>

  <img alt='missing polls' src='/images/essentials/bug.png' class='everybodyimg'><br>
  <h class='miniss'>What is happening here?</h><br><h class='disl'>Somehow, someway we could not find you poll. This happens rarely so don't worry, we're already being screamed at for this.</h> <br><br>

   <h class='tops'>What can I do for now?</h><br>

<i class='material-icons' style='vertical-align:bottom;font-size:16px'>contact_support</i><br>
<h class='miniss'>Send us a report and we'll cook a custom solution for you asap.<br><a href='/help/feedbacks'><button type='button' class='control'> FEEDBACK</button></a></h><br><br>

  <div class='blfheadalt'></div>

  </div>";

  }
  
}

else{
echo"
<div id='poll' class='pef'>

 <div class='blfhead'>Add a poll</div><br>
 
 <input name='pollquestion' id='pollquestion' type='text' class='grivinput' placeholder='your poll question here...' autocapitalize='characters'>
 <br><br>
 
 <button class='sobox' type='button' onclick='addoninput(thirteen)' style='border-top-left-radius: 50px;border-bottom-left-radius: 50px;'><h>1</h></button>
 
 <button class='sobox' type='button' onclick='addoninput(fourteen)'><h>2</h></button>
  
 <button class='sobox' type='button' onclick='addoninput(fifthteen)'><h>3</h></button>
   
 <button class='sobox' type='button' onclick='addoninput(sixteen)'><h>4</h></button>
    
  <button class='sobox' type='button' onclick='addoninput(seventeen)' style='border-top-right-radius: 50px;border-bottom-right-radius: 50px;'><h>5</h></button><br>

<h class='petd'>add up to 5 choice options</h><br><br>
 
 
<div class='proginput' id='thirteen'>
<button class='po'>1</button>

<input type='text' value='' class='privinput' name='pollanswerone' placeholder='... .... ...' onchange='pollretext(this.value,13)'></div>

<div class='proginput' id='fourteen'>
<button class='po'>2</button>

<input type='text' value='' class='privinput' name='pollanswertwo' placeholder='... .... ...' onchange='pollretext(this.value,14)'></div>

<div class='proginput' id='fifthteen'>
<button class='po'>3</button>

<input type='text' value='' class='privinput' name='pollanswerthree' placeholder='... .... ...' onchange='pollretext(this.value,15)'></div>

<div class='proginput' id='sixteen'>
<button class='po'>4</button>

<input type='text' value='' class='privinput' name='pollanswerfour' placeholder='... .... ...' onchange='pollretext(this.value,16)'></div>

<div class='proginput' id='seventeen'>
<button class='po'>5</button>

<input type='text' value='' class='privinput' name='pollanswerfive' placeholder='... .... ...' oninput='pollretext(this.value,17)'></div>


<div class='pollretext' id='13'></div>
<div class='pollretext' id='14'></div>
<div class='pollretext' id='15'></div>
<div class='pollretext' id='16'></div>
<div class='pollretext' id='17'></div>

<br>
<div class='classholder'>
 <input type='text' id='pollprivateid' value='false' required class='rates' name='popr'>
<div class='classholdertext'><i class='material-icons' style='vertical-align:sub;font-size:17px'>lock</i> PRIVATE</div><div class='classholderdiv'></div><button class='classholdertick' type='button' id='pollprivateclassbtn' onclick='var chjs=\"pollprivate\";allclass(chjs)'><i class='material-icons' style='vertical-align:bottom;font-size:16px'>lock</i></button> 
 </div><br>
 <h class='petd' style='color: #379e65;'>your poll's secure code is </h> <h class='minis'><b>'$authkey'</b></h><br>";
  
   if($governoOnPage == true){
   echo"<button type='button' class='textButton' onclick='deskChangePollCode()'><i class='material-icons' style='font-size:17px;vertical-align:sub'>vpn_key</i> Change Secure Code</button>";
 }
 
  echo"<br><br>  
 <a href='help/faq?q=accounts_on_polls' target='_blank'><h class='petd'>learn more about private polls<i class='material-icons' style='vertical-align:middle;font-size:14px'>arrow_forward</i></h></a><br><br>
 
 
 <div class='blfheadalt'></div>

</div>

";



}



?>