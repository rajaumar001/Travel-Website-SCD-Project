var password=document.getElementById("password").value;


var email=document.getElementById("username").value;

function execute(){
  if(email.length>0 ||password.length>0  ){
    document.querySelector(".usernotfound").innerHTML="";
  }
}
setTimeout(execute,3000);


