//script for vrixe 
window.addEventListener("wheel", {passive: true} );

//same as process but used on main
function mainsprocess(outputId,req, iv, cu, dbid){
	if (req == ""){
		document.getElementById(outputId).innerHTML = "error";
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
document.getElementById(outputId).innerHTML = this.responseText;
}
};

xmlhttp.open("GET","../garage/mover.php?k="+req+"&i="+iv+"&c="+cu+"&dbid="+dbid,true);
xmlhttp.send(); 
}  
}

let search = () =>{ 
 document.getElementById('searchboxes').style.height="395px";
   document.getElementById('gtr').style.display='block';
}
//top right page menu
function pagemenu(){
	var pagem =  document.getElementById('menuboxes');
	pagem.style.height="400px";
 	pagem.style.paddingBottom="4%"; pagem.style.paddingTop="2%";
  pagem.style.boxShadow='0 5px 5px -3px rgba(0,0,0,0.2), 0 8px 10px 1px rgba(0,0,0,0.14), 0 3px 14px 2px rgba(0,0,0,0.12)';
}
function revpagemenu(){
	var pagem =  document.getElementById('menuboxes');
	pagem.style.height="0px";
 	pagem.style.paddingBottom="0%"; pagem.style.paddingTop="0%";
  pagem.style.boxShadow='none';
}
function createprogram(){
 document.getElementById('createprogram').style.display="inline-block"; 
 document.getElementById('procheck').value='present';
}
function hidesearch(){
	 document.getElementById('searchboxes').style.height="0";
   document.getElementById('gtr').style.display='none';
}
function closecloseb(){
  document.getElementById('gtr').style.display='none';
  document.getElementById('searchboxes').style.height="0";
  document.getElementById('sbut').style.display="inline-block";
 }
//show deskmenu
function deskpop(){
	document.getElementById('deskpop').style.height="85px";
	document.getElementById('uboy').style.display="inline-block";
	document.getElementById('deskpop').style.boxShadow=" 14px 16px 67px -31px rgb(48, 48, 48)";
	document.getElementById('dboy').style.display="none";
 }
 //hide deskmenu
 function deskpops(){
	document.getElementById('deskpop').style.height="0px";
	document.getElementById('uboy').style.display="none";
	document.getElementById('dboy').style.display="inline-block";
 }
 function desksearch(){
	document.getElementById('desksearch').style.height="260px";
	document.getElementById('desksearch').style.padding="2%";
	document.getElementById('sh').style.display="inline-block";
	document.getElementById('desksearch').style.boxShadow=" 14px 16px 67px -31px rgb(48, 48, 48)";
	document.getElementById('dhss').style.display="none";
 }
 function desksearchs(){
	document.getElementById('desksearch').style.height="0px";
	document.getElementById('desksearch').style.padding="0%";
	document.getElementById('sh').style.display="none";
	document.getElementById('dhss').style.display="inline-block";
 }
 function closealert(){
document.getElementById('valert').style.display="none";
 }
//set all date and time input to default values onload page. invite only sofar
 function presettime(){
   var d = new Date();
   var rawyear = d.getFullYear();
   var rawmonth = d.getMonth() + 1;
   var rawday = d.getDate(); 
   if(rawmonth <= 9){var month = `0${rawmonth}`;}else{var month = rawmonth;}
   if(rawday <= 9){var day = `0${rawday}`}else{var day = rawday;} 
 	document.getElementById('timeone').value="13:00:00";
 	document.getElementById('timetwo').value="14:00:00";
 	document.getElementById('begdate').value=`${rawyear}-${month}-${day}`; 
 	document.getElementById('enddate').value=`${rawyear}-${month}-${day}`; 
  document.getElementById("bdtxt").innerHTML=day; //write date 
 }
 //set min end date to startdate on adding events used mainly on desk plan where we have two date inputs
 function setlowattr(){
 	var nim = document.getElementById('begdate').value;
 	document.getElementById('enddate').setAttribute("min", nim);
 	document.getElementById('enddate').value=nim;
 }
//lOCATION FETCHING
function showPosition(position) {
   document.getElementById("lalo").value = position.coords.latitude + "," +
  position.coords.longitude;
 document.getElementById("err").innerHTML="Click again to calibrate GPS accuracy";
}
function showError(error) {
	var x = document.getElementById("err");
    switch(error.code) {
        case error.PERMISSION_DENIED:
            x.innerHTML = "User denied request for Geolocation."
            break;
        case error.POSITION_UNAVAILABLE:
            x.innerHTML = "Location information is unavailable."
            break;
        case error.TIMEOUT:
            x.innerHTML = "The request to get user location timed out."
            break;
        case error.UNKNOWN_ERROR:
            x.innerHTML = "An unknown error occurred."
            break;
}}
function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showPosition, showError);
    } else { 
    document.getElementById("err").innerHTML = "Geolocation is not supported by this browser.";
    }
}

//checks network status of every page every 5 seconds
window.addEventListener('load', function(){
setInterval(function(){
if (navigator.onLine != true){
	document.getElementById('offline').style.display='block';
}
else{
	document.getElementById('offline').style.display='none';
}}, 5000);
});

//show more description on event pages
 function showm(){
 		document.getElementById("evina").style.maxHeight= "1000px";
 		document.getElementById("evina").style.height= "auto";
 		document.getElementById("showmore").style.display= "none";
 		document.getElementById("hidemore").style.display= "block";
 	}
 function hidem(){
 		document.getElementById("evina").style.maxHeight= "70px";
 		document.getElementById("showmore").style.display= "block";
 		document.getElementById("hidemore").style.display= "none";
 		
 	}

//make sure program button doesnt work on desktop event and private event.php
 function showprogram(){ 
 	if (screen.width > 980){
 		return false;
 	}else{
 		document.getElementById("program").style.display= "block";
 		document.getElementById('gtr').style.display='block';
}
 }
   function passreset() {//auto show password rest div on index page
 	document.getElementById("passreset").style.height="200px";	
 	document.getElementById("login").style.height="0px"; 	
 }
 /*fetch image name in form*/
 function editimgename(){
 	var un = document.getElementById("imgfree").value;
	var sed = un.substr(12);
	document.getElementById("ii").value="user";
	esi.src = URL.createObjectURL(event.target.files[0]);
 	document.getElementById("uit").innerHTML=sed;
 }
function updatename(){
 		var un = document.getElementById("imgfree").value;
	var sed = un.substr(12);
	document.getElementById("ii").value="user";
	esi.src = URL.createObjectURL(event.target.files[0]);
 	document.getElementById("uit").innerHTML=sed;
 	document.getElementById('bcde').style.color='#28e828';
 }

function showdeact() {//shows the account deactivation div editprofile.php
 	document.getElementById("deact").style.height="290px";	
 	document.getElementById("deactshower").style.display="none"; 	
 }

//count character length of input fields
function countkeys(){
	var words = document.getElementById('source').value;
	var plicate = document.getElementById('plicate');
  var limit = document.getElementById('source').getAttribute("maxLength");
	var nums = words.length;
	plicate.innerHTML= nums + " of " + limit;
	if (nums < 160){
		 document.getElementById('plicate').style.color="#16b31c";
	}
	else{
		document.getElementById('plicate').style.color="crimson";
	}
}

//now we can make alert boxes disappear
window.addEventListener('load', function()
{
var timebox = document.getElementById("valert");
function disap(){
	var timebox = document.getElementById("valert");
	timebox.style.display="none";
}
if (timebox){
	setTimeout(disap, 2000);
}
});

//hide all other but show clicked event desk pef
function eventbox(val){
	var box = document.querySelectorAll(".pef");
	 for (i = 0; i < box.length; i++) {
        box[i].style.display = "none";
    }
	val.style.display="inline-block";
}
//hide or show input for each program item
function addoninput(number){
	var x = document.querySelectorAll(".proginput");
	 for (i = 0; i < x.length; i++) {
        x[i].style.height = "0px";
     	x[i].style.paddingTop="0px";
	x[i].style.paddingBottom="0px";
    }
	number.style.height="100px";
  	number.style.paddingTop="10px";
	number.style.paddingBottom="15px";
}

//set task for desk page
function setbring(pr){
	var bringing = document.getElementById("bringing");
	var all = document.querySelectorAll(".bring");
	bringing.value = pr;
	var prid = document.getElementById(pr);
	var allb;
	for (allb = 0; allb < all.length; allb++) {
    all[allb].style.color = "#504a77";
    all[allb].style.fontWeight = "unset";
	}
  if(prid){
	prid.style.color='#16ba16';
	prid.style.fontWeight = "bold";
  }
  if(pr == ""){//setting it back to lack incase user cleans input and does not select anything
    bringing.value = "slack";
  }
}

//tickboxes selection 
function allclass(chjs){
	var chjsin = chjs + "id"; //eg privateid
	var chjscbtn = document.getElementById(chjs + "classbtn");//eg privateclasbtn
	var chjstat = document.getElementById(chjsin).value; //by name on date at

	if(chjstat == "true"){ //if value was already true
    if ("vibrate" in navigator){window.navigator.vibrate(10); }
	document.getElementById(chjsin).value= "false";
	chjscbtn.style.backgroundColor= "transparent"; //set id value
	chjscbtn.style.borderColor= "#ffffff";
	chjscbtn.style.borderWidth= "2px"; 
	if(chjs == 'approve'){
    if ("vibrate" in navigator){window.navigator.vibrate(10); }
		document.getElementById("formerror").innerHTML="Select 'Notify' to update everyone on your changes.<br><b><a href='account/settings'>Notification settings <i class='material-icons' style='vertical-align:text-top;font-size:17px'>arrow_forward</i></a></b>";
	}
  //show custom messanger
    if(document.getElementById(chjsin).id == "notifyid"){
      document.getElementById("usercnotif").style.display="block";
    }}

	else{
     if ("vibrate" in navigator){window.navigator.vibrate(10); }
	document.getElementById(chjsin).value= "true"; 
	chjscbtn.style.backgroundColor= "#ffffff"; 
	chjscbtn.style.borderColor= "#2b3445";
	chjscbtn.style.borderWidth= "4px"; 
	if(chjs == 'approve'){
     if ("vibrate" in navigator){window.navigator.vibrate(10); }
		document.getElementById("formerror").innerHTML="<b>Save your changes and prevent further edits.<b>";
	}
    //show custom messanger
  if(document.getElementById(chjsin).id == "notifyid"){
      document.getElementById("usercnotif").style.display="block";
    }}	

}

//add to invite
function toin(des, pes, ces, push){
	var userName = document.getElementById("ua").value; //name
	var upic = document.getElementById("pa").value;//image
  var umail = document.getElementById("ma").value;//email
  var pushid = document.getElementById("os").value;//push
	//find if value exists and stop readding
	var fr = userName.search(des);
	if(fr == -1){} else{return false;}

	//count list
	var counts = document.getElementById("ua").value;
	var count = (counts.split(",").length - 1);
	var ct = count + 1;
  //if users added are more than 5, user must be 6
   if(count > 5){return false;}
   else{
     //write number of users added
   	document.getElementById("invitelist").innerHTML=ct;
   }
	//add the comma behind the firstname
	if(userName == ""){var newUserName = des + ","; var newUserPic = pes + ","; var newUserMail = ces + ","; var newPushid = push + ",";}
  
  //add the old contentthen a comma and later details
	else{var newUserName = userName + des + ","; var newUserPic = upic + pes + ","; var newUserMail = umail + ces + ","; var newPushid = pushid + push + ",";}
	document.getElementById("ua").value=newUserName; //set names
	document.getElementById("pa").value=newUserPic; //set pics	
  document.getElementById("ma").value=newUserMail; //set mail	
  document.getElementById("os").value=newPushid; //set push id
  
  //style the adding div
	var clist = document.getElementById("clist");
	clist.style.width="40%";
	clist.style.height="auto";
  clist.style.boxShadow="0px 0px 3px 1px #a9a9a9";
	
  //style the selected user
	var iddes = document.getElementById(`id${des}`);
  	iddes.style.background="none";
	iddes.style.backgroundColor="#372538";
}

//clear invite list/contact
function refreshtoin(){
	document.getElementById("ua").value="";
	document.getElementById("pa").value="";
	document.getElementById("invitelist").innerHTML="";
  document.getElementById("ma").value="";
  document.getElementById("os").value="";
	var clist = document.getElementById("clist");
	clist.style.width="0px";
	clist.style.height="0px";
    clist.style.boxShadow="none";
	var callpc;
	var allpc = document.querySelectorAll(".cards");
	for (callpc = 0; callpc < allpc.length; callpc++) {
    allpc[callpc].style.background="linear-gradient(45deg, #252b38 0%, #252b38 44%,rgb(43, 52, 67) 44%, rgb(43, 52, 67) 45%,rgb(43, 52, 67) 61%, rgb(43, 52, 67) 67%,#0298ad 67%, #0298ad 100%)";
}
}

//remove user form invite desk
function junkuser(user, box){
	document.getElementById(user).value="";
	document.getElementById(box).style.display="none";
}

//add to calendar ajax cod. this is seprate cus we need it to output to meniassss
function ajaxmenia(req, iv, cu, dbid){
	if (req == ""){
		document.getElementById("meniassss").innerHTML = "error";
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
document.getElementById("meniassss").innerHTML =
this.responseText;
}
};
xmlhttp.open("GET","/garage/mover.php?k="+req+"&i="+iv+"&c="+cu+"&dbid="+dbid,true);
xmlhttp.send(); 
} 
}

//show and hide faq sections
function hideshow(all, one){
  var i;
  if(document.getElementById(one)){
   var allSections = document.querySelectorAll(".all"); 	var section = document.getElementById(one);
	 for (i = 0; i < allSections.length; i++) {
        allSections[i].style.height="0px"; 
    }
	section.style.height="auto";
  }
  //id given is not in dom
  else{
   //consider adding fallback for bug report.
  }}

//suggest users on search bar. seperate because we have to show result in searh bar
function checkforuser(search){ 
  var searchinput = document.getElementById(search); 
  var alllent = searchinput.value.length;
  if(alllent > 1){
  var wihinput = searchinput.value.charAt(0);
  if(wihinput == '@'){
     var req = 'fetchforusers';
    var removeat = searchinput.value.substr(1, alllent);
    var id = removeat; 
    fetchusers(req, id, search); 
  }}
}
function fetchusers(req, id, search){
	if (req == "" && search == "hinput"){ 
		document.getElementById("searchatprofile").innerHTML = "error";
		return;
	}
 else if (req == "" && search == "deser"){
		document.getElementById("searchatprofiledesk").innerHTML = "error";
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
if (this.readyState == 4 && this.status == 200 && search == "hinput") { 
document.getElementById("searchatprofile").innerHTML =
this.responseText;
}
else if (this.readyState == 4 && this.status == 200 && search == "deser") {
document.getElementById("searchatprofiledesk").innerHTML =
this.responseText;
}
};
xmlhttp.open("GET","/garage/mover.php?k="+req+"&i="+id+"&c="+search,true);
xmlhttp.send(); 
}}


//add user to push subscribers. special ajax cus we have to output to chesubpushbtn
function ajaxsubtoevt(req, iv, cu, dbid){
	if (req == ""){
		document.getElementById("chesubpushbtn").innerHTML = "error";
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
document.getElementById("chesubpushbtn").innerHTML =
this.responseText;
}
};

xmlhttp.open("GET","/garage/mover.php?k="+req+"&i="+iv+"&c="+cu+"&dbid="+dbid,true);
xmlhttp.send(); 
} 
}


//universal prompt from bottom
function callabsolunia(title, text, button, buttonlink, closer){
  document.getElementById("absolunia_button").innerHTML=button;
  document.getElementById("buttonlink").setAttribute("href", buttonlink); 
  document.getElementById("absolunia_title").innerHTML=title;
  document.getElementById("absolunia_text").innerHTML=text;
  //check if the close buton should be custominsed
  if (typeof closer === "undefined"){document.getElementById("absolunia_closer").innerHTML="close";} else{document.getElementById("absolunia_closer").innerHTML=closer;}
  //show the div
    document.getElementById("absolunia").style.height="225px"; document.getElementById("absolunia").style.paddingTop="2%"; document.getElementById("absolunia").style.paddingBottom="2%"; document.getElementById("absolunia").style.boxShadow="rgb(204, 201, 201) 0px 20px 20px 2px";
}

//hide universal prompt
function revabsolunia(){
 document.getElementById("absolunia").style.height="0px"; document.getElementById("absolunia").style.paddingTop="0px"; document.getElementById("absolunia").style.paddingBottom="0px"; document.getElementById("absolunia").style.boxShadow="none";
}

//web share reusable
var cst;
var csl;
function customshare(cst, csl){
//Set absolute link
if(window.location.href.substr(0, 16) == "https://vrixe-en"){
  var sharedUrl = `https://vrixe-ennycris1429888.codeanyapp.com/${csl}`;
}else{
    var sharedUrl = `https://vrixe.com/${csl}`;
}
if(navigator.share){
    navigator.share({
    title: document.title,
    text: cst,
    url: sharedUrl
     }).then(() => console.log('Successful share'))
.catch(error => console.log('Error sharing:', error));
  }
  //fallback call absolunia
  else{
  var closer = 'close this';
  var button = '<i class=\"material-icons\" style=\"font-size: 18px;vertical-align:sub;\"> file_copy</i> Copy Link';
  var buttonlink = '#cateuser';
  var title = 'Copy item link';
  var text = `Looks like your browser does not support web share. But you can still copy the link below. <br> <span id='copyab' style='color:#21d88c'>${sharedUrl}</span>`;
  callabsolunia(title, text, button, buttonlink, closer);
  document.getElementById('absolunia_button').onclick= function(){
  
  //copy link
  var link = document.getElementById('copyab');
  var range = document.createRange();
  range.selectNode(link);
  window.getSelection().addRange(range);
  try{
    var successful = document.execCommand('copy');
    document.getElementById('copyab').innerHTML='Link Copied';
  } catch(err) {
  document.getElementById('copyab').innerHTML='Error Copying. Please Reload Page';
  }
  window.getSelection().removeAllRanges();
    }
}}


//tell user to sign up to sub to push notifs
function subtoabsolunia(){
  var closer = "no thanks";
  var button = "<i class='material-icons' style='font-size: 18px;vertical-align: bottom;'>person_add</i> Sign Up";
  var buttonlink = "/index";
  var title = "Want some Push?";
  var text = "For us to send you notifications, we need to know your device. Why don't you sign up and explore other features at once. ";
  callabsolunia(title, text, button, buttonlink, closer);
}

//ask for users permission push
function pushtoabsolunia(){
  var closer = "no thanks";
  var button = "<i class='material-icons' style='font-size: 18px;vertical-align: bottom;'>tune</i> Settings";
  var buttonlink = "/account/settings#pushn";
  var title = "We need your permission";
  var text = "For us to send you push notifications, we need push permission from this device. Please activate that in settings and we are all set. ";
  callabsolunia(title, text, button, buttonlink, closer);
}

//user does not have push in borwser
function nopushinbrowser(){
  var closer = "no thanks";
  var button = "<i class='material-icons' style='font-size: 18px;vertical-align: bottom;'>filter_list</i> Support List";
  var buttonlink = "https://developer.mozilla.org/en-US/docs/Web/API/notification#Browser_compatibility";
  var title = "Get the upgrade!";
  var text = "Seems we don't have support for web push notifications here. Checkout the list for browsers with push notifications support";
  callabsolunia(title, text, button, buttonlink, closer);
}

//checking what push should look like on eventbox
function chesubpush(){
  var chesubpushbtn = document.getElementById("chesubpushbtn"); //only do this if the user is given
  if (chesubpushbtn){
    if (('PushManager' in window)) {
if (Notification.permission == "granted") {  //subscriibe user to this event
 document.getElementById('chesubpushbtn').onclick= function(){
   var suborunsub = document.getElementById("suborunsub").value;
   if (suborunsub == "subing"){
     document.getElementById("suborunsub").value = 'unsubing';
   var req = 'eventpushsubs'; var dbid = 'subing'; var eventcode = document.getElementById("requestingevent").value;
   var requestinguser = document.getElementById("requestinguser").value;   if ("vibrate" in navigator){window.navigator.vibrate(10); }
   ajaxsubtoevt(req, eventcode, requestinguser, dbid);
   }
   else{
     document.getElementById("suborunsub").value = 'subing';
     var req = 'eventpushsubs'; var dbid = 'unsubing'; var eventcode = document.getElementById("requestingevent").value;
   var requestinguser = document.getElementById("requestinguser").value;  if ("vibrate" in navigator){window.navigator.vibrate(10); }
   ajaxsubtoevt(req, eventcode, requestinguser, dbid);
   }
 }
}
else{//permission not granted ask for it
 document.getElementById('chesubpushbtn').onclick= function(){
   pushtoabsolunia();
 }
} }
  else{  //push is not here
     document.getElementById('chesubpushbtn').onclick= function(){
   nopushinbrowser();
 }}
  }
}

//clikced on desk poll, scroll to rsvp section
let deskChangePollCode = () =>{
document.getElementById("accessCode").style.backgroundColor="#92ffc0";
  eventbox(fourth);//run show pef code
  document.location = '#scrollAccessCode';
}

//list of contributors
window.addEventListener("load", function(){
   if(document.getElementById("viewEditors")){
     document.getElementById("viewEditors").addEventListener("click", function(){
      //get code and 
     var req = "getContributors";
     var refs = document.getElementById("contributorsListCode").value;       
      //send request
      mainsprocess("contributorsList",req, refs);      
      //hide menia for event pageXOffset
      if(document.getElementById('menia')){
         document.getElementById('menia').style.height='0';
      }
    //display section
      document.getElementById("contributorsListSection").style.display="block";
      document.getElementById("gtr").style.display="block";
      document.getElementById("contributorsListSection").style.top='15%';
    });
      //close list
      document.getElementById("closeEditors").addEventListener("click", function(){
      document.getElementById("gtr").style.display="none";
      document.getElementById("contributorsListSection").style.top='100%';
    });
      
  }
});



