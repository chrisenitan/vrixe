///junk files for junk scripts from edit page

//set who edits
function allwho(weidalt){
	var weid = document.getElementById('whoeditid').value; //by name on date at
	var dar = new Date(); //date
var t = dar.toTimeString(); //time
var all = t.slice(0, 5); //cut time to size
var atfw = weid + all; //name date time
	var newweid = weid +  all + "hrs"; //by name on date at time
	document.getElementById(weidalt).value= newweid; //set id value
	document.getElementById("lastedit").value= atfw; //set overall value
}



function ldprice(){
	var weid = document.getElementById('miniwhoeditid').value;
	document.getElementById('whoprice').value = weid;

}


//depretacet code please
//check for the @ in the username field. a version of this is already in loopuser() this is only handling first input check, might scrap later
	function checkhandle(){
	var cualt = document.getElementById("cualt").value;
	var cuaexit = document.getElementById("cuaexit");
	if (cualt == "@"){
			cuaexit.innerHTML="let's not include the '@'";
			cuaexit.style.color="red";
	}else{
		cuaexit.innerHTML="send invite to... or add later";
			cuaexit.style.color="#379e65";
	}
}

//finalstep of adding username. predefined
function insertusername(id, item, itempic, dynobox, itemmail, itempush){
	var link = 'images/profiles/profilethumbs/';
	document.getElementById(id).innerHTML= "@" + item;
	document.getElementById(dynobox).src = link + itempic;
	document.getElementById(id).style.display="inline-block";
	document.getElementById("cualt").focus();
	document.getElementById("cualt").value="";//clear cualt to prevent readding. safety check done by loopusers 	
	document.getElementById("sugusername").value="";	
  //enter email in email list
  var mailing = document.getElementById("emaillist").value + itemmail + ", ";
  document.getElementById("emaillist").value = mailing;
  //enter valid pushid
  var pushing = document.getElementById("pushlist").value + itempush + ",";
  document.getElementById("pushlist").value = pushing;
	//show lilput--the box of each user after selected 
	var cd = id + "a"; 
	document.getElementById(cd).style.display="inline-block";

}

//protocol to adding users to invite list
function loopusers(){
	//quick if cualt is not empty then check if its not error, then okay
		var cualtitem = document.getElementById("cualt").value;
	if (cualtitem > ""){ //if cualt is not empty
		var item = document.getElementById("sugusername").value;
		if(item == 'error'){ //if no user found, send user a share invite link
      var cst = 'Edit this event with me on Vrixe';
      var csl = 'aboutvrixe';
      customshare(cst, csl);
      return false 
    } //db returned error text, no user
	}else{//tell user to write first
		return false
	}

	
	var itemcheck; //just setting for later
	var itempic = document.getElementById("sugpic").value; //get pic retunrd by db
  var itemmail = document.getElementById("sugmail").value; //get mail returned by db
  var itempush = document.getElementById("sugpush").value; //get push returned by db
	var loguser = document.getElementById("loguser").value;//current use don do yourself


	var a = document.getElementById("cua").value; 
	var b = document.getElementById("cub").value;
	var c = document.getElementById("cuc").value;
	var d = document.getElementById("cud").value;
	var e = document.getElementById("cue").value;
	var f = document.getElementById("cuf").value;

//prevent readding ser by retyping user
	if (item == a || item == b || item == c || item == d || item == e || item == f){itemcheck = "faulty";}else{itemcheck = "safe";}

	if(a === "" && item != loguser && itemcheck != "faulty"){
		document.getElementById("cua").value=item;
		var id = "boxa"; var dynobox = "dynoa";
		insertusername(id, item, itempic, dynobox, itemmail, itempush);
	}
	else if(b === "" && item != loguser && itemcheck != "faulty"){
	document.getElementById("cub").value=item;
		var id = "boxb"; var dynobox = "dynob";
		insertusername(id, item, itempic, dynobox, itemmail, itempush);
	}

	else if(c === "" && item != loguser && itemcheck != "faulty"){
		document.getElementById("cuc").value=item;
		var id = "boxc"; var dynobox = "dynoc";
		insertusername(id, item, itempic, dynobox, itemmail, itempush);
	}

	else if(d === "" && item != loguser && itemcheck != "faulty"){
		document.getElementById("cud").value=item;
		var id = "boxd"; var dynobox = "dynod";
		insertusername(id, item, itempic, dynobox, itemmail, itempush);
	}

	else if(e === "" && item != loguser && itemcheck != "faulty"){
	document.getElementById("cue").value=item;
		var id = "boxe"; var dynobox = "dynoe";
		insertusername(id, item, itempic, dynobox, itemmail, itempush);
	}
	else if (f === "" && item != loguser && itemcheck != "faulty"){ 
		document.getElementById("cubx").style.display="none";
		document.getElementById("ajaxuser").style.display="none";
		document.getElementById("cuf").value=item;
		var id = "boxf"; var dynobox = "dynof";
		insertusername(id, item, itempic, dynobox, itemmail, itempush);
	}
	else if(itemcheck == "faulty"){ //check if no special char
		var cuaexit = document.getElementById("sugname");
			cuaexit.innerHTML="User Added";
			cuaexit.style.color="#293445";
	}

	else {//somethin else is really wrong here
				var cuaexit = document.getElementById("sugname");
			cuaexit.innerHTML="Please Reload";
			cuaexit.style.color="red";
			}

}

//new datepicker for all
/**
function callmobcal()
{
    var element = document.getElementById("begdate");
    if(element.click)
        element.click();
    else if(document.createEvent)
    {
        var eventObj = document.createEvent('MouseEvents');
        eventObj.initEvent('click',true,true);
        element.dispatchEvent(eventObj);
    }
}
**/
//temp please update this code. checking if device is ios to show better date picker is not 100% reliable
window.addEventListener('load', function(){
    var ifcualt = document.getElementById("cualt");
  if (ifcualt){
    var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
    if (iOS == true){
      document.getElementById("bdtxt").style.display="none";
      document.getElementById("bttxt").style.display="none";
      document.getElementById("begdate").style.display="block";
      document.getElementById("begdate").removeAttribute('class', 'newpickersinput');
      document.getElementById("timeone").style.display="block";
      document.getElementById("timeone").removeAttribute('class', 'newpickersinput');
    }
  }
});
function callmobcal(){
  document.getElementById("begdate").click();
}
function callmobtime(){
  document.getElementById("timeone").click();
}
//mobile writing the dates on screen
function processbdate(){
  var engd; var engm;
  var sos = document.getElementById("begdate").value;
  var dest = document.getElementById("bdtxt");
  var destmonth = document.getElementById("bmtxt"); 
  var day = sos.substr(8, 2); 
  var month = sos.substr(5, 2);
  //check if day is 1 2 3
  if (day == 1 || day == 21 || day == 31){engd = "st";}
  else if (day == 2 || day == 22){engd = "nd";}
  else if (day == 3 || day == 23){engd = "rd";}
  else {engd = "th";}
  
   if (month == 01){engm = "January";}
  else if (month == 02){engm = "February";}else if (month == 03){engm = "March";}else if (month ==04){engm = "April";}else if (month == 05){engm = "May";}else if (month == 06){engm = "June";}else if (month == 07){engm = "July";}else if (month == 08){engm = "August";}else if (month == 09){engm = "September";}else if (month == 10){engm = "October";}else if (month == 11){engm = "November";}
  else{engm = "December";}
  //export day
  dest.innerHTML=day + engd;
  destmonth.innerHTML= engm;
  //set endate sam value
   	var nim = document.getElementById('begdate').value;
 	document.getElementById('enddate').setAttribute("min", nim);
 	document.getElementById('enddate').value=nim;
}


function processtimeone(){
  var pmam; 
  var sos = document.getElementById("timeone").value;
  var dest = document.getElementById("bttxt");
  var desttv = document.getElementById("btvtxt"); 
  var times = sos.substr(0, 2); 
  //var tv = sos.substr(5, 2); alert(sos + " and " + tv);
  if(times > 12){pmam = "PM";}else{pmam = "AM";}
 
  //export time
  dest.innerHTML= sos;
  desttv.innerHTML= pmam;  
  //set endate sam value
   	var nim = document.getElementById('timeone').value;
 	document.getElementById('timetwo').value=nim;
}


//date and time picker for desktop
//month
function switchmonth(md){
   var deskmonth = document.getElementById("deskbmtxt");
   var month = document.getElementById("deskmholder");
  if (md == 'January'){deskmonth.innerHTML= 'February'; month.value='02';}
  else if (md == 'February'){deskmonth.innerHTML= 'March'; month.value='03';}
  else if (md == 'March'){deskmonth.innerHTML= 'April'; month.value='04';}
  else if (md == 'April'){deskmonth.innerHTML= 'May'; month.value='05';}
  else if (md == 'May'){deskmonth.innerHTML= 'June'; month.value='06';}
  else if (md == 'June'){deskmonth.innerHTML= 'July'; month.value='07';}
  else if (md == 'July'){deskmonth.innerHTML= 'August'; month.value='08';}
  else if (md == 'August'){deskmonth.innerHTML= 'September'; month.value='09';}
  else if (md == 'September'){deskmonth.innerHTML= 'October'; month.value='10';}
  else if (md == 'October'){deskmonth.innerHTML= 'November'; month.value='11';}
  else if (md == 'November'){deskmonth.innerHTML= 'December'; month.value='12';}
  else {deskmonth.innerHTML= 'January'; month.value='01';}
  //reset day on each month change so we can send 1 to day processor
  var dd = '1';
  var jsmd = month;
  ddprocess(dd, jsmd);
}

//days
function ddprocess(dd, jsmd){
  //get month
  var month = document.getElementById("deskmholder").value;
  //join year and month with date and export
  var deskdateholder = document.getElementById("begdate");
  begdate.value= "2019-" + month + "-" + dd;
  document.getElementById('enddate').value= "2019-" + month + "-" + dd;
  document.getElementById("dpicimg").innerHTML=dd;
}

//times
function dtprocess(dt){
  
  //join year and month with date and export
  var desktimeone = document.getElementById("detimeone");
  timeone.value= dt;
  document.getElementById("tpicimg").innerHTML=dt;
}


//places sugest from google maps api
function initAutocomplete() {
  autocomplete = new google.maps.places.Autocomplete(
      document.getElementById('lalo'), {types: ['geocode']});
  
  //for desk destination input
  if(document.getElementById("dest_lalo")){
    dest_autocompletes = new google.maps.places.Autocomplete(
      document.getElementById('dest_lalo'), {types: ['geocode']});
   
  dest_autocompletes.setFields(['formatted_address']);
  }
  
  autocomplete.setFields(['formatted_address']);

}
