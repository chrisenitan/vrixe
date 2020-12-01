<?php

require("../garage/visa.php");

$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

echo "<style>

 #a0{
 background-color: #1aa070;
 
 }
  #a1{
 background-color: #a9a9a9;
 
 }
 #a2{
 background-color: #801313;
 
 }
 #a3{
 background-color: #a01a89;
 
 }
 #a4{
 background-color: #2f1aa0;
 
 }

</style>
";

echo"
<div style='float:left'>
<p>Rating 5 star:</p>
<p>Rating 4 star:</p>
<p>Rating 3 star:</p>
<p>Rating 2 star:</p>
<p>Rating 1 star:</p>
</div>
";



echo"
<div style='float:right'>

";

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  
  
    echo "<p id='a$x'>$numbers[$x]</p>";
    

}

echo"</div>";

?>