
/*
var email = document.forms['form']['email']
var password = document.forms['form']['password']

*/

var email = document.querySelector('#input_email');
var password = document.querySelector('#input_password');

var email_error = document.getElementById('error_email')
var password_error = document.getElementById('error_password')


function validation() {
    if (password.value !== "password") {
        alert("Invalid email/password provided.");
        return false;
    }
}

function email_validate() {
    if (email.value.length >= 8) {
        email.style.border = "1px solid silver";
        email_error.style.display = "none";
        return true;
    }
}

function password_validate(){
    if (password.value.length >=7) {
        password.style.border = "1px solid silver";
        password_error.style.display = "none";
        return true;
    }
}

email.addEventListener('keyup', function() {
    var mail_format = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!(email.value.match(mail_format))) {
        email.style.border = "1px solid red";
        email_error.style.display="block";
        email.focus();
    }
})

email.addEventListener('textInput', email_validate);
password.addEventListener('textInput', password_validate);

//Email update

function getEmail() {
    let email = document.getElementById('input_email').value;
    localStorage.setItem('Email',email);
}



