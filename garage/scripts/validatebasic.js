//script for validatingevent from basic.php
//generate random script for all invite pages. if not handle basic validation for desk pages. 
var ref = window.location.href; 
if (ref == "https://vrixe-ennycris1429888.codeanyapp.com/invite.php" || ref == "http://vrixe-ennycris1429888.codeanyapp.com/invite.php" || ref == "http://vrixe-ennycris1429888.codeanyapp.com/invite" || ref == "https://vrixe-ennycris1429888.codeanyapp.com/invite" || ref == "https://www.vrixe.com/invite.php" || ref == "https://www.vrixe.com/invite" || ref == "https://vrixe.com/invite.php" || ref == "https://vrixe.com/invite" || ref == "https://www.stack.vrixe.com/invite.php" || ref == "https://www.stack.vrixe.com/invite" || ref == "https://stack.vrixe.com/invite.php" || ref == "https://stack.vrixe.com/invite"){


//generate random string for events
var ranref = document.getElementById('ranref');
var ranedit = document.getElementById('ranedit');
if (ranref){
	var chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	var string_length = 10;
	var randomstring = '';
	for (var i=0; i<string_length; i++) {
		var rnum = Math.floor(Math.random() * chars.length);
		randomstring += chars.substring(rnum,rnum+1);
	}
	ranref.value = randomstring;
}

if (ranedit){
	var vals = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
	var edit_length = 20;
	var randomeditstr = '';
	for (var o=0; o<edit_length; o++) {
		var editnum = Math.floor(Math.random() * vals.length);
		randomeditstr += vals.substring(editnum,editnum+1);
	}
	ranedit.value = randomeditstr;
}


var formcontrol = 1;

var checkbegdate = true;
var checktimeone = true;
var checkevtyp = true;
  var checklandmack = true;
  var checkaddline = true;
  var checkevorg = true;

}
else{ //for plan events validation desk
//color who bring
	var bringinput = document.getElementById('bringing').value;
	var bring = document.getElementById(bringinput);
  if(bring){
	bring.style.color='#16ba16';
	bring.style.fontWeight='bold';
  }

//venue seg was clicked check everything in date
document.getElementById("altbcdb").addEventListener('click', function(){
var begdate = document.getElementById("begdate").value;
	var timeone = document.getElementById("timeone").value;
	var evtyp = document.getElementById("evtyp").value;
	if (begdate == ""){
		document.getElementById("bcda").style.color="#fc5151";
   document.getElementById("begdate").style.backgroundColor="#f9e0e0";
  checkbegdate = false;
	}else{
		document.getElementById("bcda").style.color="#28e828";
     document.getElementById("begdate").style.backgroundColor="#e0e8f9";

	}
  	if (timeone == ""){
		document.getElementById("bcda").style.color="#fc5151";
  document.getElementById("timeone").style.backgroundColor="#f9e0e0";
  checktimeone = false;
	}else{
		document.getElementById("bcda").style.color="#28e828";
     document.getElementById("timeone").style.backgroundColor="#e0e8f9";
	
	}
  	if (evtyp == ""){
		document.getElementById("bcda").style.color="#fc5151";
  document.getElementById("evtyp").style.backgroundColor="#f9e0e0";
  checkevtyp = false;
	}else{
		document.getElementById("bcda").style.color="#28e828";
	document.getElementById("evtyp").style.backgroundColor="#e0e8f9";
	}
});

//action segment was clicked, check everything in venue
document.getElementById("altbcdc").addEventListener('click', function(){
		var addline = document.getElementById("lalo").value;
	var landmack = document.getElementById("evldm").value;
	if (addline == ""){
	document.getElementById("bcdb").style.color="#fc5151";
  document.getElementById("lalo").style.backgroundColor="#f9e0e0";
	checkaddline = false;
	}else{
		document.getElementById("bcdb").style.color="#28e828";
    document.getElementById("lalo").style.backgroundColor="#e0e8f9";
  }
  	if (landmack == ""){
		document.getElementById("bcdb").style.color="#fc5151";
	 document.getElementById("evldm").style.backgroundColor="#f9e0e0";
	checklandmack = false;
	}else{
		document.getElementById("bcdb").style.color="#28e828";
    document.getElementById("evldm").style.backgroundColor="#e0e8f9";
	}
  
});


//image seg was clicked check everything in rsvp
document.getElementById("altbcde").addEventListener('click', function(){
var evorg = document.getElementById("evorg").value;
	if (evorg == ""){
		document.getElementById("bcdd").style.color="#fc5151";
     document.getElementById("evorg").style.backgroundColor="#f9e0e0";
	checkevorg = false;
	}
	else{
		document.getElementById("bcdd").style.color="#28e828";
    document.getElementById("evorg").style.backgroundColor="#e0e8f9";
	}
});


  
  
  
document.getElementById("createbtn").addEventListener('click', function(){

	var ii = document.getElementById("ii").value;//image
	var theevent = document.getElementById("theevent").value;//event name
	var trivinput = document.getElementById("trivinput").value;//event decription
	var privateid = document.getElementById("privateid").value;//if private was clicked or not

	var begdate = document.getElementById("begdate").value;//start date
	var timeone = document.getElementById("timeone").value;//starttime
	var evtyp = document.getElementById("evtyp").value;//currenttask
	var addline = document.getElementById("lalo").value;//main venue
	var landmack = document.getElementById("evldm").value;//landmark
		var evorg = document.getElementById("evorg").value;//organiser
	//split this code and made ii seperate to avoid false grouping of ii incase ii is actually correct on its own
	if (5 > 4){ //not necesary

	if (ii == ""){
		document.getElementById("bcde").style.color="#fc5151";
		var formcontrol = 1;
	} 
	else {//donothing
		formcontrol = 0;
	}

    
    
    
    if (begdate == ""){
		document.getElementById("bcda").style.color="#fc5151";
   document.getElementById("begdate").style.backgroundColor="#f9e0e0";
  checkbegdate = false;
	}else{
		document.getElementById("bcda").style.color="#28e828";
document.getElementById("begdate").style.backgroundColor="#e0e8f9";
	}
  	if (timeone == ""){
		document.getElementById("bcda").style.color="#fc5151";
  document.getElementById("timeone").style.backgroundColor="#f9e0e0";
  checktimeone = false;
	}else{
		document.getElementById("bcda").style.color="#28e828";
	document.getElementById("timeone").style.backgroundColor="#e0e8f9";
	}
  	if (evtyp == ""){
		document.getElementById("bcda").style.color="#fc5151";
  document.getElementById("evtyp").style.backgroundColor="#f9e0e0";
  checkevtyp = false;
	}else{
		document.getElementById("bcda").style.color="#28e828";
	document.getElementById("evtyp").style.backgroundColor="#e0e8f9";
	}
    
    
    
    
    	if (addline == ""){
		document.getElementById("bcdb").style.color="#fc5151";
  document.getElementById("lalo").style.backgroundColor="#f9e0e0";
	checkaddline = false;
	}else{
		document.getElementById("bcdb").style.color="#28e828";
    document.getElementById("lalo").style.backgroundColor="#e0e8f9";
  }
  	if (landmack == ""){
		document.getElementById("bcdb").style.color="#fc5151";
	 document.getElementById("evldm").style.backgroundColor="#f9e0e0";
	checklandmack = false;
	}else{
		document.getElementById("bcdb").style.color="#28e828";
    document.getElementById("evldm").style.backgroundColor="#e0e8f9";
	}
    
    
    
    	if (evorg == ""){
		document.getElementById("bcdd").style.color="#fc5151";
     document.getElementById("evorg").style.backgroundColor="#f9e0e0";
	checkevorg = false;
	}
	else{
		document.getElementById("bcdd").style.color="#28e828";
    document.getElementById("evorg").style.backgroundColor="#e0e8f9";
	}
    
    
    

}
  
if (theevent == "" || trivinput == "" || privateid == "" || formcontrol == 1 || checkbegdate == false || checktimeone == false || checkevtyp == false || checklandmack == false || checkaddline == false || checkevorg == false){
		var formcontrol = 1; //do something alert
		document.getElementById("formerror").style.color="#fc5151";
		document.getElementById("formerror").innerHTML="Please fill required fields in segments highlighted <i class='material-icons' style='font-size: 14px;vertical-align:sub;'>fiber_manual_record</i>";
  //segment error prompt
  if (checkbegdate == false || checktimeone == false || checkevtyp == false){
    document.getElementById("bcda").style.color="#fc5151";
  }
   if (checklandmack == false || checkaddline == false){
    	document.getElementById("bcdb").style.color="#fc5151";
  }
   if (checkevorg == false){
 		document.getElementById("bcdd").style.color="#fc5151";
  }
	}
	
	else{
		document.getElementById("formerror").style.color="#5c9ced";
		document.getElementById("formerror").innerHTML="";
		var randomstring = document.getElementById("code").value;
		document.getElementById("bcde").style.color="#28e828";
		document.getElementById("subhead").scrollIntoView();
		document.getElementById("botblue").innerHTML=`Event will be live at vrixe.com/event/${randomstring}`;
		eventbox(sixth);//actual function is in main.js
	}
});
  
}

//polls code
function createpoll(){
   document.getElementById('poll').style.display="inline-block"; 
   document.getElementById('pollcheck').value='present';
}

function pollretext(val, aoid){
  var raoid;
  if(aoid == 13){raoid = 1;}else if(aoid == 14){raoid = 2;}else if(aoid == 15){raoid = 3;}else if(aoid == 16){raoid = 4;}else if(aoid == 17){raoid = 5;}else{raoid = 1;}
  document.getElementById(aoid).innerHTML=val + "<button class='o'>" + raoid + "</button>";
     document.getElementById(aoid).style.height="40px";
   document.getElementById(aoid).style.marginTop="5px";
   document.getElementById(aoid).style.marginBottom="17px";
}
