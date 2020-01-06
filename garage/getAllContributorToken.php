<?php  
//get other contributors emails and push ids. used on update event and mover for move to plan

  if($hype > "" and $hype != $username){
  $emailidhype= mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$hype' LIMIT 1"); 
  while($mailhype = mysqli_fetch_array($emailidhype)){ $pushhype = $mailhype['pushid'];}  
 $fpushhype = "$pushhype";
 }else {$fpushhype = "66666666-36f0-432b-9f5d-4bfeec61fa81";}
  
  
  if($cua > "" and $cua != $username){
  $emailidcua= mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cua' LIMIT 1"); 
  while($mailcua = mysqli_fetch_array($emailidcua)){ $ecua = $mailcua['email']; $pushcua = $mailcua['pushid'];}  
$fmailcua = "$ecua, "; $fpushcua = "$pushcua,";
 }else {$fmailcua = ""; $fpushcua = "66666666-36f0-432b-9f5d-4bfeec61fa81,";}


  if($cub > "" and $cub != $username){
  $emailidcub= mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cub' LIMIT 1"); 
   while($mailcub = mysqli_fetch_array($emailidcub)){ $ecub = $mailcub['email']; $pushcub = $mailcub['pushid'];}  
$fmailcub = "$ecub, "; $fpushcub = "$pushcub,";
 }else {$fmailcub = ""; $fpushcub = "66666666-36f0-432b-9f5d-4bfeec61fa81,";}


 if($cuc > "" and $cuc != $username){
     $emailidcuc= mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cuc' LIMIT 1"); 
   while($mailcuc = mysqli_fetch_array($emailidcuc)){ $ecuc = $mailcuc['email']; $pushcuc = $mailcuc['pushid']; } 
$fmailcuc = "$ecuc, "; $fpushcuc = "$pushcuc,";
 }else {$fmailcuc = ""; $fpushcuc = "66666666-36f0-432b-9f5d-4bfeec61fa81,";}


if($cud > "" and $cud != $username){
     $emailidcud= mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cud' LIMIT 1"); 
   while($mailcud = mysqli_fetch_array($emailidcud)){ $ecud = $mailcud['email']; $pushcud = $mailcud['pushid']; } 
$fmailcud = "$ecud, "; $fpushcud = "$pushcud,";
 }else {$fmailcud = ""; $fpushcud = "66666666-36f0-432b-9f5d-4bfeec61fa81,";}


if($cue > "" and $cue != $username){
     $emailidcue= mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cue' LIMIT 1"); 
   while($mailcue = mysqli_fetch_array($emailidcue)){ $ecue = $mailcue['email']; $pushcue = $mailcue['pushid']; } 
$fmailcue = "$ecue, "; $fpushcue = "$pushcue,";
 }else {$fmailcue = ""; $fpushcue = "66666666-36f0-432b-9f5d-4bfeec61fa81,";}



 if($cuf > "" and $cuf != $username){
     $emailidcuf= mysqli_query($conne,"SELECT * FROM profiles WHERE username = '$cuf' LIMIT 1"); 
   while($mailcuf = mysqli_fetch_array($emailidcuf)){ $ecuf = $mailcuf['email']; $pushcuf = $mailcuf['pushid']; } 
$fmailcuf = "$ecuf, "; $fpushcuf = "$pushcuf,";
 }else {$fmailcuf = ""; $fpushcuf = "66666666-36f0-432b-9f5d-4bfeec61fa81,";}
  

  //conc all mails
$rawallmail = $fmailcua . $fmailcub . $fmailcuc . $fmailcud . $fmailcue . $fmailcuf . $hypeEmail;
  if($email > "" and $email != $hypeEmail){
  $allmail = $rawallmail; //leave mailing list as is with hype
  }
  else{
    $initallmail = str_replace($hypeEmail, "", $rawallmail);
    $allmail = substr($initallmail, 0, -2); //remove hype and remove comma and last space. if editor is hype
  }
  //set all push and last push is owner
$allpushes = $pushsubscribers . $fpushcua . $fpushcub . $fpushcuc . $fpushcud . $fpushcue . $fpushcuf . $fpushhype;

  ?>
  