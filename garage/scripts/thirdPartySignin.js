//script for signup pages google
//prepar user for sign up on index
function prepareUser(profile){
   document.getElementById("signuprates").value="signupwithgoogle";
   document.getElementById("googleuserFullName").value=profile.getName();
   document.getElementById("googleUserPicUrl").value=profile.getImageUrl();
  document.getElementById("inputusername").value= profile.getEmail().substring(0,5); //create a username
   document.getElementById("authtoken").value=profile.token;
   document.getElementById("signupemail").value=profile.getEmail();
   checkmailava(profile.getEmail());//check email availability 
  
  //fill login form 
   document.getElementById("usernamelogin").value=profile.getEmail();
  document.getElementById("loginrates").value="loginwithgoogle";
  
  //submitform?
  if(profile.destination == ""){
    //wait for user action
  }else{
    document.getElementById(profile.destination).submit();//submit form
  }


}

function onSignIn(googleUser){
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
  var id_token = googleUser.getAuthResponse().id_token;
  profile.token = id_token;
  profile.destination = document.getElementById("formDestination").value;//set where to send form
  document.getElementById("returningText").innerHTML="Welcome back <b>" + profile.getName() + "</b> do you want to continue with your Google account?";//if user was logged in 
  prepareUser(profile);
}

