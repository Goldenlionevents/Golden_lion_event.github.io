
var loginstat=0;
var loader = setInterval(function () {
    if(document.readyState !== "complete") return;
    clearInterval(loader);
    let getaccount= localStorage.getItem("account");

    if(getaccount!==null)
    {
        alert("signup successful");
        document.getElementById("logged").innerHTML="login to place orders"
        window.localStorage.removeItem('account'); 
    }
    ;}, 300);
function validateaccount()
{
    let inputemail= document.forms["loginform"]["email"].value;
    let password= document.forms["loginform"]["accountpassword"].value;
let getuser=localStorage.getItem("user")
let user=JSON.parse(getuser);

if(!(user.Email === inputemail) |(!(user.Password === password)))
{
    document.getElementById("msg").innerHTML="incorrect email or password";
    return false;
}
else
{
    loginstat=1;
localStorage.setItem("logstatus",loginstat);
}

}
