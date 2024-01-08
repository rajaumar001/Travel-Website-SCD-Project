var password;
var confirmPassword;

var email=document.getElementById("username").value;
function check() {
   password = document.getElementById("password").value;
   confirmPassword = document.getElementById("confirm_password").value;

  if (confirmPassword.length > 0) {
    if (confirmPassword != password) {
      document.getElementById("confirm").innerHTML = "Password does not match";
    }  else {
      document.getElementById("confirm").innerHTML = "";
    }
    
  }
  else if (confirmPassword.length === 0) {
    document.getElementById("confirm").innerHTML = "";
  }
 
}
function execute(){
  if(email.length==0 ||password.length==0|| confirmPassword.length === 0  ){
    document.querySelector(".fail").innerHTML="";
  }
}
setTimeout(execute,3000);

setTimeout(function(){
  document.querySelector(".sucess").innerHTML="";
}
,3000)

document.addEventListener("keyup", check);
