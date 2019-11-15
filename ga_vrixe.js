//script for ga events listener

var act = document.getElementById("act");
if(act){
act.addEventListener('click', function(){
  ga('send', 'event', 'Button', 'Click', 'What is Vrixe');
});}

//login and sign up has div opener here cus we think event listerner is cros fring for inline js
var singup = document.getElementById("singup");
if(singup){
  singup.addEventListener('click', function(){
 ga('send', 'event', 'Button', 'Click', 'SignUp Div');
});}

var longin = document.getElementById("longin");
if(longin){
  longin.addEventListener('click', function(){
 ga('send', 'event', 'Button', 'Click', 'Login Button');
});}

var ga_vai = document.getElementById("ga_vai");
if(ga_vai){
  ga_vai.addEventListener('click', function(){
 ga('send', 'event', 'Button', 'Click', 'On save view as Invite');
});}

var ga_vae = document.getElementById("ga_vae");
if(ga_vae){
  ga_vae.addEventListener('click', function(){
ga('send', 'event', 'Button', 'Click', 'On save view as Event');
});}

var ga_ep = document.getElementById("ga_ep");
if(ga_ep){
  ga_ep.addEventListener('click', function(){
ga('send', 'event', 'Button', 'Click', 'User edits profile via onboarding');
});}

var ga_mc = document.getElementById("ga_mc");
if(ga_mc){
  ga_mc.addEventListener('click', function(){
ga('send', 'event', 'Button', 'Click', 'User check contacts via onboarding');
});}

var ga_ci = document.getElementById("ga_ci");
if(ga_ci){
  ga_ci.addEventListener('click', function(){
ga('send', 'event', 'Button', 'Click', 'User creates invite via onboarding');
});}

var ga_pmi = document.getElementById("ga_pmi");
if(ga_pmi){
  ga_pmi.addEventListener('click', function(){
ga('send', 'event', 'Button', 'Click', 'User views invitation via profile onboarding');
});}

var ga_pmc = document.getElementById("ga_pmc");
if(ga_pmc){
  ga_pmc.addEventListener('click', function(){
ga('send', 'event', 'Button', 'Click', 'User check contacts via profile onboarding');
});}

var ga_pci = document.getElementById("ga_pci");
if(ga_pci){
  ga_pci.addEventListener('click', function(){
ga('send', 'event', 'Button', 'Click', 'User creates invite via profile onboarding');
});}







