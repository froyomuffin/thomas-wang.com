function Login(form) {
var username = form.username.value;
var date = form.date.value;
var server = "www.thomas-wang.com/clients";
if (username && date && server) {
var htsite = "http://" + server + "/" + username.toLowerCase() + "/" + date + ".zip";
window.location = htsite;
}
else {
alert("Please enter your username and photoshoot date.");
   }
}
