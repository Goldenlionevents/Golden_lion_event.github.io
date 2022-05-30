const form = document.getElementById('form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const phone_number= document.getElementById('phone_number');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
var pass=false;
document.addEventListener('DOMContentLoaded', function () {
    form.addEventListener('submit', e => {
      if(pass==false)
        {e.preventDefault();}
    
        validateInputs();
    });
});




const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}
function phonenumber(inputtxt)
{
  var phoneno = /^\+?([2,5,1]{3})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{5})$/;
  if (inputtxt.value.match(phoneno))
        {
      return true;
        }
      else
        {
        
        return false;
        }
}

const validateInputs = () => {
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const password2Value = password2.value.trim();

    if(usernameValue === '') {
        setError(username, 'Username is required');
        pass=false;
    } else {
        setSuccess(username);
        pass=true;
       
    }

    if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
        pass=false;
    } else {
        setSuccess(email);
        pass=true;
       
    }
 if(phone_number === '') {
    setError(phone_number, 'phone number is required');
    pass=false;
}
else if(!phonenumber(phone_number))
{
    setError(phone_number,'provide a valid phone number')
    pass=false;
}
else{
    setSuccess(phone_number);
    pass=true;
   
}

     if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
        pass=false;
    } else {
        setSuccess(password);
        pass=true;
       
    }

    if(password2Value === '') {
        setError(password2, 'Please confirm your password');
        pass=false;
    } else if (password2Value !== passwordValue) {
        setError(password2, "Passwords doesn't match");
        pass=false;
    } else {
        setSuccess(password2);
        pass=true;
        
    }
    

};
