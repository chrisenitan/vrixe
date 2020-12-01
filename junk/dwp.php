<?php

/*

$myfile = fopen("newfilex.txt", "a+") or die("Unable to open file!");
$txt = "John Doe\n something \n  fkfj fsfs \n sffs";
$newline = "kenny"
//fwrite($myfile, $txt);

$pure = fread($myfile,filesize("newfilex.txt"));

$repl = str_replace("Doe","June", $pure);

echo $pure;
echo"<br><br><br><br>";
echo $repl;

fclose($myfile);





//difference between dates
$datetime1 = date_create("2019-12-14");
  $datetime2 = date_create("2019-12-16");
$res = date_diff($datetime1, $datetime2);

echo $res->format("%a days");;

echo date("Y-m-d"); 
*/

echo"Break<br>";




//multipl update sql

require("../garage/visa.php");

$getusers = mysqli_query($conne, "SELECT * FROM profiles WHERE dwp > '' LIMIT 1");
  while($gotusers = mysqli_fetch_array($getusers)){
    $usern = true;
      $username = $gotusers['username'];
    
  $image = $gotusers['picture'];
    
   //$newimage = "https://vrixe.com/images/profiles/" . $image;//for live
    
    $pwrfLenght = strlen($image); 
    $pwrcutback = $pwrfLenght - 34;
    $pictureWithoutUrl = substr($image,-$pwrcutback);
    $newimage = "https://vrixe-ennycris1429888.codeanyapp.com/images/profiles/" . $pictureWithoutUrl;   //fordev server
   
      echo "$image has been cut to $pictureWithoutUrl and is now $newimage for $username <br>";
    
 //update the last user and remove its dwp so the next user will be the one above
 $updateuser = "UPDATE profiles SET picture='$newimage', dwp='' WHERE username = '$username' ";
       // $updateuser = "UPDATE profiles SET created='09 12 2019' WHERE username > '' ";
  
//reload page to enact the next update
    
   


  }
if($usern == false){
  echo"Job Done";
}
else{
  echo "
    <script>
    setTimeout(function(){
    location.reload();
    }, 3000);
    </script>
    ";
}

    if (!mysqli_query($conne,$updateuser))
  {
  die('Error: ' . mysqli_error($conne));
  }
mysqli_close($conne);











?>