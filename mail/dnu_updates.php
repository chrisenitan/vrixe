
<?php 
require("../garage/visa.php");

$fetchlist = mysqli_query($conne,"SELECT * FROM newsletter WHERE day !='unsubscribed' ");

$reqpage = "updates";

while($list = mysqli_fetch_array($fetchlist))
{

$email = $list['mail'];

  require("letter.php");
  
if(mail($email, $subject, $message, $headers)){
echo "Message: update sent $email <br>";
} else{
echo "Message: Not sent $email <br>";
}
}
?>