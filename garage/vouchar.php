<?php

if(isset($_GET['vouchar'])){
	 $day =date("d M Y");
 $vouchar = mysqli_real_escape_string($conne, $_GET['vouchar']);
	$stat = 0;
	
	$getsourcevalue = mysqli_query($conne, "SELECT * FROM store WHERE searchquery = '$vouchar' LIMIT 1 "); 
	while($adval = mysqli_fetch_array($getsourcevalue)){
$stat = 1;
		$oldno = $adval['sc'];
		$newno = $oldno + 1;

	$regsource = "UPDATE store SET sc = '$newno' WHERE searchquery = '$vouchar' ";
	$regday = "UPDATE store SET sqy = '$day' WHERE searchquery = '$vouchar' ";


	if (!mysqli_query($conne,$regsource) or !mysqli_query($conne,$regday)) { #after doing all that then close connection
  die('Error: ' . mysqli_error($conne));
	}
	else{
  			echo "";
			}


}
if($stat == 0){ #donoting 
}

}


else{
#do nothing
}






?>