<?php
require("versions.php");
echo"
<meta http-equiv='Cache-control: no-transform'>
<link type='text/css' rel='stylesheet' href='/css/powder.css?v=$vv'>
<link href='https://fonts.googleapis.com/css?family=Nunito|Sarpanch|Skranji|Titillium+Web' rel='stylesheet'>
<script type='text/javascript' async src='/main.js?v=$vv'></script>
<link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
<link rel='icon' type='png' href='/images/vogo.png'>
<meta name='theme-color' content='#f8f8ff'>
<link rel='apple-touch-icon' sizes='192x192' href='/app/vlogpwa.png'>
<link rel='apple-touch-startup-image' href='/app/vlogpwa.png'>
<link rel='apple-touch-icon' href='/app/vlog4x.png'>
<meta name='apple-mobile-web-app-title' content='Vrixe'>
<meta name='apple-mobile-web-app-capable' content='yes'>
<meta name='apple-mobile-web-app-status-bar-style' content='default'>
";

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

<script type='text/javascript' defer src='/ga_vrixe.js?v=$vv'></script>
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
