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