//script for signup page vrixe 
//check if username exists
function checknameava(str){
	if (str == ""){
		document.getElementById("username").innerHTML = "try a planet's name";singup
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
document.getElementById("username").innerHTML =
this.responseText;
}
};

xmlhttp.open("GET","/garage/checkuser.php?q="+str,true);
xmlhttp.send();
}

}


//check if email already exists
function checkmailava(em){
 var ifnoat = em.search("@");
	if (em == ""){
		document.getElementById("email").innerHTML = "email";
		return;
	}
  else if(ifnoat < 0){ 
     var theemail = document.getElementById("email");
       theemail.innerHTML = "please use a valid email address"; theemail.style.color="red";
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
document.getElementById("email").innerHTML =
this.responseText;
}
};

xmlhttp.open("GET","/garage/checkmail.php?e="+em,true);
xmlhttp.send();
}

}


//fetch names from db for suggestion
function sugprocess(){
  	document.getElementById("ajaxuser").style.width="69%";
	document.getElementById("result").style.display="inline-block";
  
	var req = "SUGGEST";
	var iv = document.getElementById('cualt').value;
	var cu = document.getElementById('loguser').value;
	//check for spec chars
	if(iv == "@"){
		document.getElementById("result").innerHTML="Please remove '@' ";
		document.getElementById("result").style.color="#293445";
	}else{
	process(req,iv,cu);}
  
  //check sugbtn. returned text from mover if user was foundor not
  var sugusername = document.getElementById("sugusername");
  if(sugusername){
    var sugusernameval = document.getElementById("sugusername").value;
    if(sugusernameval == "error"){document.getElementById("sugbtn").innerHTML="<i class='material-icons' style='vertical-align:sub;font-size:17px'>share</i>"; }
    else{ document.getElementById("sugbtn").innerHTML="<i class='material-icons' style='vertical-align:sub;font-size:17px'>person_add</i>";}
  }
}


//move to plan OR DELETE sending request,  user,  ref, code,  position of user in db used for accept and ignore invites
function process(req, iv, cu, dbid){
	if (req == ""){
		document.getElementById("result").innerHTML = "error";
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
document.getElementById("result").innerHTML =
this.responseText;
}
};

xmlhttp.open("GET","/garage/mover.php?k="+req+"&i="+iv+"&c="+cu+"&dbid="+dbid,true);
xmlhttp.send(); 
}  
}


//comment on poll ajax
function commentonpoll(){
   var iv = document.getElementById("usernameforvote").value;
  var req = "commentvote";
  var cu = document.getElementById("refsforvote").value; 
  var dbid = document.getElementById("indivcomm").value; 
  if(iv == "" || dbid == ""){ 
    if(iv > ""){var title = "Comment Required"; var text = "Please check that you have typed in your comment.<br> Still having issues? Try refreshing the page.";}
    else {var title = "Comment & Username Required"; var text = "Please check that you have a username and you have typed in your comment.<br> Or why not sign up.<a href='/aboutvrixe' style='text-decoration:underline'> Learn more <i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_forward</i></a>";}
  var closer = 'close this';
  var button = 'ADD COMMENT';
  var buttonlink = '#indivcomm';
  callabsolunia(title, text, button, buttonlink, closer);
  
  }
  else{
   document.getElementById("commentonpoll").setAttribute('disabled',''); //disable btn if the comment sent was okay
  process(req, iv, cu, dbid);
  }
}

//make a vote
function votein(id){
   var dbid = document.getElementById("usernameforvote").value;
   var iv = id; //
  var req = "votein";
  var cu = document.getElementById("refsforvote").value;
  if(dbid != "" && dbid != "unverifieduser"){
     process(req, iv, cu, dbid);
  //animations
  var el = "v"; var elem = id + el; 
document.getElementById(elem).style.width="98%";
 document.getElementById(elem).style.backgroundColor="#8755bd";
  }
  else if(dbid == "unverifieduser"){
    var closer = 'close this';
  var button = "<i class='material-icons' style='font-size:14px;vertical-align:middle'>help</i> How To Verify";
  var buttonlink = '/help/faq#privatepoll';
  var title = 'Please verify your account';
  var text = "Private polls need a verified account<br>Having issues verifying your account? <a href='/help/feedbacks' style='text-decoration:underline'> Send us a feedback <i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_forward</i></a>";
  callabsolunia(title, text, button, buttonlink, closer);
    return false;
  }
  else{
   var closer = 'close this';
  var button = "<i class='material-icons' style='font-size:14px;vertical-align:middle'>person_add</i> Add Username";
  var buttonlink = '#usernameforvote';
  var title = 'Username Required';
  var text = "Please choose a username and write your comment.<br>Even better! Create a Vrixe profile and have this saved specially for you. <a href='/index?q=profile_required#signup' style='text-decoration:underline'> Start here <i class='material-icons' style='font-size:14px;vertical-align:middle'>arrow_forward</i></a>";
  callabsolunia(title, text, button, buttonlink, closer);
    return false;
  }
 
}

//delete poll
function deletepoll(id){
   var iv = id; 
  var req = "deletepoll";
     process(req, iv);
}


//call absolonia with moveto plan
let movetoplan = (elid, iv) => {
  var closer = "not yet";
  var button = "<i class='material-icons' style='font-size:14px;vertical-align:middle'>swap_horiz</i> Move To Plan";
  var buttonlink = "#absolunia_button";
  var title = "Make this invite a plan?";
  var text = "This will automatically lock out friends yet to accept your invite. Please check with everyone or do you want to proceed now?";
  callabsolunia(title, text, button, buttonlink, closer);
    document.getElementById('absolunia_button').addEventListener('click', function(){
      revabsolunia();//hide absolunia box
      //remove the initial button
      document.getElementById("polishmtp").style.display="none";      
process(elid, iv);//send request to backend
  });
}

//call absolunia for ignore recieved invitation
let ignoreInvite = (iv, cu, dbid) =>{
  var closer = "abort";
  var button = "<i class='material-icons' style='font-size:16px;vertical-align:middle'>person_add_disabled</i> Ignore";
  var buttonlink = "#";
  var title = "Not interested?";
  var text = "This will remove you from the invite list. Your actions are kept private. Have spam issues? <a style='text-decoration:underline;text-underline-position:under' href='help/feedbacks'>Please send a feedback</a>";
  callabsolunia(title, text, button, buttonlink, closer);
    document.getElementById('absolunia_button').addEventListener('click', function(){
process("IGNORE", iv, cu, dbid);
      revabsolunia();//to ensure display of result alert
  });
}

//call absolunia for delete sent invitation
let deleteSentInvite = (iv) =>{
    var closer = "abort";
  var button = "<i class='material-icons' style='font-size:16px;vertical-align:middle'>delete</i> Delete";
  var buttonlink = "#d_pull";
  var title = "Are you sure?";
  var text = "Are you sure you want to get rid of this invite?<br> Tried invite recycling? Just change the details and boom! its another invite";
  callabsolunia(title, text, button, buttonlink, closer);
    document.getElementById('absolunia_button').addEventListener('click', function(){
process("DELETE", iv);
  });
}

//call absolunia to delete contact
let deleteContact = (cu, dbid) =>{
    var closer = "abort";
  var button = "<i class='material-icons' style='font-size:16px;vertical-align:middle'>delete</i> Delete";
  var buttonlink = "#";
  var title = "Delete Contact?";
  var text = "Are you sure you want to remove this contact<br> Your actions are kept private. Want to send a report? <a style='text-decoration:underline;text-underline-position:under' href='/help/feedbacks' target='_blank'>Click here</a>";
  callabsolunia(title, text, button, buttonlink, closer);
    document.getElementById('absolunia_button').addEventListener('click', function(){
process("delete contact", cu, dbid);
  });
}