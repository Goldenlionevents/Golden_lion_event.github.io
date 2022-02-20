
var account=0;
function validatepassword(_counter) {
  var psw= document.forms["form"]["password"].value;
  var pswcheck= document.forms["form"]["confirmpassword"].value;
  if (psw.length<8 |psw.length>20) {
    document.getElementById("msg").innerHTML="password should be between 8-20 characters";
    return false;
  }
  else if(!(psw === pswcheck))
  {
    document.getElementById("msg").innerHTML="passwords dont match";
    return false;
  }
  else
  {
    
    storeuser();
  } 
}

function storeuser()
{
let username= document.forms["form"]["name"].value;
let email= document.forms["form"]["email"].value;
let password= document.forms["form"]["password"].value;

let user={
Name:username,
Email:email,
Password:password
}

account++;

localStorage.setItem("account",account);
let userinfo= JSON.stringify(user);
localStorage.setItem("user",userinfo);
return;
}


