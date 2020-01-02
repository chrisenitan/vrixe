<?php
require("garage/visa.php");  
require ("garage/vouchar.php");
require("garage/versions.php");
  $signout = mysqli_real_escape_string($conne, $_POST['signout']);
if (isset($_COOKIE['user']) and $signout == 'signout'){
setcookie("user", "", time() - 3600, "/");
}
elseif(isset($_COOKIE['user']) and $signout == ''){
  header('Location: me');
}
else{//new user, create pass
 $cult = bin2hex(openssl_random_pseudo_bytes(3));
}

$getphpurl = $_SERVER['SERVER_NAME']; //get urlyou
$phpurla = substr($getphpurl,0,9); //string url
if($phpurla == 'vrixe-enn'){$phpurl = 'vrixe-enn';}else{$phpurl = 'gib';} //validate testing vs live pltform

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="manifest" href="manifest.json" type="application/json">

<?php
  //remove user push if user logout out. actual code is below page becaus eof async script 
 if ($signout > "" and $signout == "signout"){
 echo "<script type='application/javascript' src='https://cdn.onesignal.com/sdks/OneSignalSDK.js' async></script>";
    
   if($phpurl == 'vrixe-enn'){$appID = '527b2883-5dff-4a9b-88bd-5e2e3e74c9f4';}else{$appID = '151afe3d-500c-49f3-b682-dd9c5084a863';}
echo"
  <script defer>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: '$appID',
    });
  });

OneSignal.push(function() {
       OneSignal.setSubscription(false);      
});

</script>
";
  }
  ?>
  
<?php //Google Tracking
 echo"<link type='text/css' rel='stylesheet' href='/css/lipstick.css?v=$vv'>
<script type='text/javascript' async src='/main.js?v=$vv'></script>";
  
if($phpurl == 'gib'){
  echo"
  <script async src='https://www.googletagmanager.com/gtag/js?id=UA-87975308-1'></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-87975308-1');
</script>

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-57FS937');</script>

<script type='text/javascript' async src='/ga_vrixe.js?v=$vv'></script>
";
}
else{
  echo"<script>
  function ga(a, b, c, d, e){
  console.log('GA deactivated for development server');
  console.log('Trip: ' + c + ', ' + d + ', ' + e);
  }
  </script>
<script type='text/javascript' defer src='/ga_vrixe.js?v=$vv'></script>";
}

?>  
  <!--SEO-->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Vrixe",
  "url": "https://www.vrixe.com",
  "logo": "http://www.vrixe.com/images/vlogie.png",
  "sameAs": [
    "https://www.facebook.com/vrixe",
    "https://instagram.com/vrixe",
    "https://www.linkedin.com/company/vrixe",
    "https://www.twitter.com/vrixeapp",
    "https://www.youtube.com/channel/UCNDZP6M3t_L7Fxxc-a9rYWQ"
  ]
}
</script>
  
<title>Vrixe | For every team event</title>
<meta name="robots" content="index, follow">
<meta name="description" content="Create, edit and plan event projects with your team. Vrixe keeps all your group plan details in one web app that helps you connect with your team and get details to guests faster in a continuous and more engaging way.                ">
<meta property="og:type" content="website" />
<meta property="og:site_name" content="Vrixe" />
<meta property="og:title" content="Vrixe | Edit and plan events with your team."/>
<meta property="og:description" content="Create, share and plan the special moments together. Vrixe keeps all your group plans in one web-app with features to enhance your experience in puttng together your next event.                "/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>
<meta property="og:image" content="https://vrixe.com/images/vlogie.png"/>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type"/>
<meta http-equiv='Cache-control: no-transform'>
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel='icon' type='png' href='/images/vogo.png'>
<meta name='theme-color' content='#f8f8ff'>
<link rel='apple-touch-icon' sizes='192x192' href='/app/vlogpwa.png'>
<link rel='apple-touch-startup-image' href='/app/vlogpwa.png'>
<link rel='apple-touch-icon' href='/app/vlog4x.png'>
<meta name='apple-mobile-web-app-title' content='Vrixe'>
<meta name='apple-mobile-web-app-capable' content='yes'>
<meta name='apple-mobile-web-app-status-bar-style' content='black'>
<?php require("garage/validuser.php"); 
  require("garage/thirdPartySignin.php"); 
  echo"<script type='text/javascript' defer src='garage/scripts/redeye.js?v=$vv'></script>";
  ?>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="550611812237-mt2280d8j767c5u4o6rqkodv36te9727.apps.googleusercontent.com">
</head>
<body>
<br>
<header><nav id="indexhead">

<a href="aboutvrixe" class="indexlink" title="Explore">about</a>
<a href="app/pwa.html" class="indexlink" title="Try Vrixe as a Progressive Web App">pwa</a>
<a href="help/faq" class="indexlink" title="Help Center & Faq">faq</a>
<a href="app/terms.html" class="indexlink" title="Usage Policy and protection">privacy</a>
<a href="jobs" class="indexlink" title="We fix stuff">jobs</a>

</nav></header>

<main>
<div class="pagecen">

<?php
if (isset($_GET['q'])){
  $reason = mysqli_real_escape_string($conne, $_GET['q']); 

  if($reason == "b"){#from me.php
  echo "<div class='yalert'>The account you tried to access has been temporarily deactivated. We are working on activating it.</div>";
  }
  else if ($reason == "account_needed"){#from basic
      echo "<a href='#signup'><div class='yalert'>Create or join a plan. Sign up for Vrixe to begin.</div></a>";
  }
   else if ($reason == "profile"){#from basic
      echo "<a href='#signup'><div class='yalert'>Create or join a plan. Sign up for Vrixe to begin.</div></a>";
  }
   else if ($reason == "recover_password"){#from me.php
      echo "<script defer> setTimeout(function (){document.getElementById('toreset').click();document.getElementById('recv').scrollIntoView();} , 1000); </script>";
  }
else if ($reason == "login"){#from me.php
      echo "<script defer> setTimeout(function (){document.getElementById('longin').click();document.getElementById('toreset').scrollIntoView();} , 1000); </script>";
  }
  else if ($reason == "profile_required"){#from me.php
      echo "<script defer> setTimeout(function (){document.getElementById('singup').click();document.getElementById('longin').scrollIntoView();} , 1000); </script>";
  }
else{echo"";}
}
else{echo"";}

?><br>

<div class="adbox">
  <img id="dsvg" src="https://vrixe.com/images/aboutvrixe/detailed.svg" alt="Collective plans with Vrixe"><br>
  <h class="intx">Create and edit events with your team.</h><br>
  <h style="color:#173652"><i>...discover a new way to collaborate on vrixe</i></h><br><br>

 <a href='aboutvrixe.php'><div id="act" title="See how Vrixe works">Features</div></a><br><br>
<input class="rates" name="formDestination" id="formDestination">
  
<div class="pef"><br>
 <a href="#singup" title="Sign Up For A Vrixe Account"><div class="evtyhe" id="singup" style="background-position: center;">Sign Up<br><small class="loginsmall">create better group plans</small></div></a>
  
  
<div id="signup">
  <img class="menuimg" src="images/vlogie.png" alt="vrixe"><br>
  <h class="bugdes">Vrixe. All Access</h><br>
  <h class="miniss">Simple | Collective | Detailed plans</h><br><br>
<form autocomplete="off" style="display:block;" action="welcome.php" method="post" id="welcome">

  <input onchange="checkmailava(this.value)" type="email"  class="privinput" name="mail" required placeholder="email" id="signupemail"><br>
<label for="signupemail" class="petd" id="email">start with your email</label><br><br>

<h class="petd" id="exitusername"></h>
<input oninput="checkhandle();" type="text" pattern="[^'@.#, \x22]+" title="username cannot contain any spaces or '@' '.' ',' ''' " class="privinput" name="username" required placeholder="username" autocomplete="username" autocapitalize="none" style="width:85%;padding-right:2%" id="inputusername" minlength="4"><br>
<label for="inputusername" class="petd" id="username">pick the perfect username</label><br><br>

<input class="rates" name="signup" value="signup" id="signuprates">
<input type="text" name="userFullName" class="rates" id="googleuserFullName">
<input type="text" name="pictureUrl" class="rates" id="googleUserPicUrl">
<input type="text" name="token" class="rates" id="authtoken">
<input type="text" name="rate" class="rates">
<?php echo"<input class='rates' name='password' required value='wug$cult'>"; ?>

<button class="copele">Sign Up</button><br></form><br>
<h class="bugdes">Or sign in with your Google account</h><br>
<div class="g-signin2" data-onsuccess="onSignIn" id="signin"></div><br>
   
  <h class="petd">these topics below do apply<br> <a href="app/terms.html"><h class="miniss">Terms</h></a>, <a href="app/terms.html#prio"><h class="miniss">Privacy</h></a> and <a href="app/terms.html#cookies"><h class="miniss">Cookie</h></a> Policy.</h><br>
</div><!--eo sign up-->

  
  
 <a href="#longin" title="Log Into Your Account"><div class="evtyhe" id="longin" style="background-position: bottom;">Log In<br><small class="loginsmall">access your vrixe profile</small></div></a>
<div id="login">
  <img class="menuimg" src="images/vlogie.png" alt="vrixe"><br>
  <h class="bugdes">Log In</h><br>
  <h class="miniss">Manage your Vrixe Profile on any device</h><br>
<br>
<form autocomplete="on" style="display:block;" action="me.php" method="post"  id="me">
<input style="text-align:left;" type="text" autocomplete="username" class="privinput" name="username" required placeholder="... .... ..." autocapitalize="none" minlength="4" id="usernamelogin"><br>
<label for="usernamelogin" class="petd">your username or email</label><br><br>

<input class="rates" name="lcheck" value="valid" id="loginrates">
<input type="text" name="rate" class="rates">
<input id="cindy" type="password" name="password" required placeholder="... .... ..." autocomplete="on"><button class="therecins" type="button" id="recindy" title="Show Password">show</button><button class="therecins" type="button" id="recindo" title="Hide Password">hide</button><br>
<label for="cindy" class="petd" style='width:50%;text-align:left;float:left;margin-left:23px;'>password</label><br><br><br><br>

<button class="copele" style="margin-bottom:10px" id="submitLogin">Log In</button><br></form><br>
<h id="toreset" class="miniss" onclick="passreset()" style="cursor:pointer;">Forgot Password?</h><br><br>
  
<h class="bugdes" id="returningText">Or log in with your Google account</h><br>
<div class="g-signin2" data-onsuccess="onSignIn"></div><br><br>
</div><!--eo login-->


<div id="passreset" title="Recover Vrixe Password" >
   <h class="bugdes">Recover your password</h><br>
   <h class="miniss">Password no remember? it happens. Just give us your email and we'll help you recover it.</h><br><br>

  <form style="display: block;" action="account/recovery.php" method="post">
  <input type="text" name="rate" class="rates">
  <input type='email' name='recmail' class='privinput' placeholder='...Registered Email...' title='Email' required><br><br>

<button class='copele' title='Request Delete' id="recv"> Recover </button>
</form>
</div>

</div><!--eo recover-->

  </div><br>
</div>
</main><br>

<?php require("garage/networkStatus.php");?>
  
  <script defer>
    //login and sign up has div opener here cus we think event listerner is cros fring for inline js
     document.getElementById("singup").addEventListener('click', function(){
     document.getElementById("formDestination").value="welcome";
     document.getElementById("singup").style.marginBottom="0px";
 	   document.getElementById("signup").style.height="480px"; 	
 	   document.getElementById("login").style.height="0px"; 	
 	   document.getElementById("longin").style.marginBottom="45px";
 	   document.getElementById("passreset").style.height="0px";
});
//login pef
     document.getElementById("longin").addEventListener('click', function(){
     document.getElementById("formDestination").value="me";
     document.getElementById("singup").style.marginBottom="45px";
 	   document.getElementById("longin").style.marginBottom="0px";
 	   document.getElementById("signup").style.height="0px";
 	   document.getElementById("login").style.height="500px";
 	   document.getElementById("passreset").style.height="0px";
});  
  </script>
</body>
</html>