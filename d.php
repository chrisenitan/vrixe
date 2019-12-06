
<?php

//create the sql query
$getusers = mysqli_query($connectToDb, "SELECT * FROM users WHERE dwp > '' ORDER BY id ASC");
while($usersArray = mysqli_fetch_array($getusers)){ 
  
//get the initial user values
$userName = $usersArray['name'];    
$dateOfBirth = $usersArray['dob'];//dob comes in as 2019 02 26 
  
//split the result into an array. Here we thankfully had and can use the empty space
$arrayDOB = (explode(" ",$dateOfBirth));
  
//create a new dob using format D-M-Y
$newDateOfBirth = $arrayDOB[2] . "-" . $arrayDOB[1] . "-" . $arrayDOB[0];//dob is now 26-02-2019
  
//just a bloody way to check our work so far
echo "$userName was $dateOfBirth and now is $newDateOfBirth <br>";
    
//now we update the dob of selected user, null its holder value to “disqualify” user 
$updateUser = "UPDATE profiles SET dob='$newDateOfBirth', dwp='' WHERE name = '$userName ";
//now the next time we run this code, it should pick the next user in order.
}

//remember to always check for errors and close connection
 if (!mysqli_query($connectToDb,$updateUser)){
  die('Error: ' . mysqli_error($connectToDb)); }
mysqli_close($connectToDb);

?>
