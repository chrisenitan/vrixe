//script for vrixe pwa

//checks network status of every page
 window.addEventListener('load', function()
{
setInterval(function(){
if (navigator.onLine != true){
	document.getElementById('offline').style.display='block';
}
else{
	document.getElementById('offline').style.display='none';
}}, 3000);
});


//web share reusable
var csp;
var cst;
var csl;

function customshare(csp, cst, csl){ 
  if(navigator.share){
    navigator.share({
    title: csp,
    text: cst + '.',
    url: csl
  }).then(() => console.log('Successful share'))
  .catch(error => console.log('Error sharing:', error));
  }
  else{
    
    }
}



var deferredPrompt;
var installbtn = document.getElementById("save");


window.addEventListener('beforeinstallprompt', function(es) {
  console.log('beforeinstallprompt Event fired');
  es.preventDefault();

  deferredPrompt = es;

  return false;
}); 

if (installbtn){//if button exists, cus it will not on other pages
installbtn.addEventListener('click', function() {
  if(deferredPrompt !== undefined) {
    // The user has had a positive interaction with our app and Chrome
    // has tried to prompt previously, so let's show the prompt.
    deferredPrompt.prompt();

    // Follow what the user has done with the prompt.
    deferredPrompt.userChoice.then(function(choiceResult) {

      console.log(choiceResult.outcome);

      if(choiceResult.outcome == 'dismissed') {
        console.log('User cancelled home screen install');
      }
      else {
        console.log('User added to home screen');
        	installbtn.style.display="none";
      }
      // We no longer need the prompt.  Clear it up.
      deferredPrompt = null;
    });
  }
});
}

//show ios install path
function iospath(){
  document.getElementById("ios").style.display="block";
  document.getElementById("gtr").style.display="block";
}
function iospathalt(){
   document.getElementById("ios").style.display="none";
  document.getElementById("gtr").style.display="none";
}

