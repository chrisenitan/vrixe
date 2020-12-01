<?php

require("garage/visa.php");

echo"<div style='float:left'>";
   
$one = mysqli_query($conne, "SELECT * FROM poll WHERE refs > '' ");
while($arone = mysqli_fetch_array($one)){
  $refspoll = $arone['refs'];
  
  echo"
 
  <p>$refspoll</p>
  

  
  ";
  
}
echo"  </div>";



echo"<div style='float:right'>";
$two = mysqli_query($conne, "SELECT * FROM events WHERE refs > '' ");
while($artwo = mysqli_fetch_array($two)){
  $refsevent = $artwo['refs'];
  
  echo"
  <p>$refsevent</p>
  

  
  ";
}

echo"  </div>";



?>

//associative arrays
<?php
$person = array("name"=>"peter", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $person['name'] . " years old.";

echo"<br><br>";

$person = array("age"=>"35", "sex"=>"male", "job"=>"developer", "name"=>"Peter");
echo $person['name'] . " is " . $person['age'] . " years old and is a " . $person['sex'] . " " . $person['job'];
?>