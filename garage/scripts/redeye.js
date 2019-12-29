//show and hide password fields
document.getElementById("recindy").addEventListener('click', function(){
	var cindy = document.getElementById('cindy');
	cindy.setAttribute("type", "text");
	document.getElementById('recindy').style.display="none";
	document.getElementById('recindo').style.display="inline-block";
});

document.getElementById("recindo").addEventListener('click', function()
{
	var cindy = document.getElementById('cindy');
	cindy.setAttribute("type", "password");
	document.getElementById('recindo').style.display="none";
	document.getElementById('recindy').style.display="inline-block";
});

//check for and reject @ in handle
    function checkhandle(){
  var inputusername = document.getElementById("inputusername").value;
  var exitusername = document.getElementById("exitusername");
 if (inputusername == "@"){
      exitusername.innerHTML="let's not include the '@'";
      exitusername.style.color="red";
  }else{
    exitusername.innerHTML="";
    exitusername.style.color="transparent";
   checknameava(inputusername);
  }}