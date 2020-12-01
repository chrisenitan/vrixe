<?php
//3rd party or self user auth
require("../garage/visa.php");

class Api {
  //select new users
  function select($conne){
if (isset($_COOKIE['user'])){
       $cookie = $_COOKIE['user'];
       $cooked = mysqli_query($conne,"SELECT * FROM profiles WHERE cookie = '$cookie' LIMIT 1"); 
  $user = array();
  $user['name'] = "user";
         while($founduser = mysqli_fetch_array($cooked)){

         extract($founduser);
  
       $user = array(
         "status"=>"success",
       $user['name'] => array(
            "fullname" => $fullname,
            "username" => $username,
            "userBio" => html_entity_decode($bio),
            "location" => $location,
            "email" => $email,
            "confirm" => $confirm,
            "created" => $created,
            "cookie" => $cookie,
            "link" => $link,
            "freq" => $freq,
            "cid" => $cid,
            "pushid" => $pushid,
            "contacts" => $contacts,
            "picture" => $picture,
            "password" => $password,
         "token" => $authtoken
          )
    );
             return json_encode($user);
        }
       
      }else{
  return json_encode(array("status"=>"error","message"=>"No user Found"));
}
    }
}


?>

