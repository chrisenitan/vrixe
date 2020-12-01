
<?php 

$mail = $id;


 $subject = 'Your Calendar Event';
$feed = 'feedback@vrixe.com';
$from = 'contact@vrixe.com';//or could be a name

$headers .= "MIME-Version: 1.0\r\n"
  ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
 

$headers .= "Organization: Vrixe\r\n";
$headers .= "X-Priority: 3\r\n";
$headers .= "Return-Path: $feed\r\n";

$headers .= 'From: Vrixe '.$from."\r\n".
      'Reply-To: '.$feed."\r\n" .
      'X-Mailer: PHP/' . phpversion();

$file = file_get_contents("calendars/$filename");
 
$message .= "Content-Type: text/calendar; name=\"$filename\"\r\n"
  ."Content-Transfer-Encoding: base64\r\n"
  ."Content-disposition: attachment; file=\"$filename\"\r\n"
  ."\r\n"
  .chunk_split(base64_encode($file))
  ."--1a2a3a--";




if(mail($mail, $subject, $message, $headers)){

} else{
  
}

?>