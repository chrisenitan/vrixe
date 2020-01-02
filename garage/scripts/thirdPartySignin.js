//script for signup pages google
//prepar user for google sign up on index
function prepareUser(profile){
  document.getElementById("signuprates").value="signupwithgoogle";
  document.getElementById("googleuserFullName").value=profile.getName();
  document.getElementById("googleUserPicUrl").value=profile.getImageUrl();
  document.getElementById("authtoken").value=profile.token;
  document.getElementById("signupemail").value=profile.getEmail();
  //create a username
  if(document.getElementById("inputusername") > ""){
    //if username was given by user. allow users choice be sent
  }else{
  document.getElementById("inputusername").value= profile.getEmail().substring(0,5); //create a username
  }
  
  //check email availability via backend
  checkmailava(profile.getEmail());
  
  //fill login form 
  document.getElementById("usernamelogin").value=profile.getEmail();
  document.getElementById("loginrates").value="loginwithgoogle";
  
  //style the input fields
   document.getElementById("usernamelogin").style.color="#e0e8f9";//recolor loginusername field
   document.getElementById("cindy").style.color="#e0e8f9";//cleaningpassword field
   document.getElementById("inputusername").style.color="#e0e8f9";//recolor signp username field
   document.getElementById("signupemail").style.color="#e0e8f9";//recolor email field

  //submit form?
  if(profile.destination == ""){
    //wait for user action. page was loaded without any intentions
  }else{
   document.getElementById(profile.destination).submit();//submit form
  }


}

//on google signin
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

