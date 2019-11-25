<?php

$dateCreated=date_create($accountCreationDate);
$dateToday=date_create(date("Y-m-d"));
$diff=date_diff($dateCreated,$dateToday);
$accountAge = $diff->format("%a days");

if($accountAge >= 8){
  //show user prompt to verify
    echo "<script> document.location = '/help/blue.php'; </script>";
}
else{
  $daysRemaining = 8 - $accountAge;
  
echo "<div id='oalert'>Please verify your accounts email within $daysRemaining days.<br>
  <a href='help/faq#spamfilter'>Having troubles verifying? <i class='material-icons' style='font-size:16px;vertical-align:text-top'>arrow_forward</i></a></div>
<br>";
}





?>