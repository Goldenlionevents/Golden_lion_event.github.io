const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

var loader = setInterval(function () {
    if(document.readyState !== "complete") return;
    clearInterval(loader);
    let logintest= localStorage.getItem("logstatus");

    if(logintest !==null)
    {
        alert("login was succesful")
        window.localStorage.removeItem('logstatus'); 
        let logintest=1;
        localStorage.setItem("order_p",logintest);
        
    }
    
    ;}, 300);

function place_order()
{
    let orderp= localStorage.getItem("order_p");
  if(orderp!==null)
  {   
    document.getElementById("placeorder").innerHTML="order placed";
    document.getElementById("placeorder").style.backgroundColor="green";
   return false;
}
   else {
    document.getElementById("msg_order").style.display="block";
    return false;

   }
}
function logout()
{
    let orderp= localStorage.getItem("order_p");
    if(orderp!==null){
    window.localStorage.removeItem("order_p");
    }
    else
    document.getElementById("logout").style.display="none";
    
}

