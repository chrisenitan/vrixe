//handles minor sign in process for pages that really reuire it. eg settings. other pages use the database please

 
  //move to plan OR DELETE sending request,  user,  ref, code,  position of user in db used for accept and ignore invites
function authBackend(req, iv, cu, dbid){
	if (req == ""){
		document.getElementById("valert").innerHTML = "error";
		return;
	}
	else {
if (window.XMLHttpRequest) {
// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp = new XMLHttpRequest();
} else {
// code for IE6, IE5
xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
document.getElementById("valert").innerHTML =
this.responseText;
}
};

xmlhttp.open("GET","/garage/mover.php?k="+req+"&i="+iv+"&c="+cu+"&dbid="+dbid,true);
xmlhttp.send(); 
if(req == "removeAuth"){
    document.getElementById("valert").style.display="block";//show resul only when removing token
    }
}  
}
  


  function signOut(email) {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
 //remove token from backend
 authBackend("removeAuth", email);
    });
  }

  function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
 document.getElementById('googleauthemail').value=profile.getEmail();
 var id_token = googleUser.getAuthResponse().id_token;
 //send token to backend.
 authBackend("addAuth", profile.getEmail(), id_token);
}

  //sign user out from settings
 function set(){
   //change text to sign out and enact signout on click
   if(document.getElementById("googleauthemail").value > ""){//if googleauth.php fetched a user
    document.getElementById("settingsGoogleAuth").innerHTML="<i class='material-icons' style='vertical-align:sub;font-size:17px;'>person_add_disabled</i> Sign Out";//seta signout button
     
  document.getElementById("settingsGoogleAuth").addEventListener("click", function(){//onclick the signout button
    signOut(document.getElementById("googleauthemail").value);
    //removeauth from backend
    
    //update button text
    document.getElementById("settingsGoogleAuth").innerHTML="<i class='material-icons' style='vertical-align:sub;font-size:17px;'>person_add_disabled</i> Signed Out";
  });
}
else{
  //hide the signout button and let gauth handle the users auth status
    document.getElementById("settingsGoogleAuth").style.display="none";
} }

//for settings page only
if(document.getElementById("auth")){
setTimeout(set, 2000);//timeout to allow google return a user
}

