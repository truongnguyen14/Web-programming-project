
const email = document.forms['form']['email']
var password = document.forms['form']['password']

var email_error = document.getElementById('error_email')
var password_error = document.getElementById('error_password')


email.addEventListener('textInput', email_validate);
password.addEventListener('textInput', password_validate);

function validation() {
    var mail_format = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if (!(email.value.match(mail_format))) {
        email.style.border = "1px solid red";
        email_error.style.display="block";
        email.focus();
        alert("Invalid email/password provided.");
        return false;
    }
    if (password.value !== "password") {
        password.style.border = "1px solid red";
        password_error.style.display="block";
        password.focus();
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
    if (passwordl.value.length >=7) {
        passwordl.style.border = "1px solid silver";
        password_error.style.display = "none";
        return true;
    }
}

/* update profile email */

function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, '\\$&');
    var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, ' '));
}

var emailUpdated = getParameterByName('input_email');

document.getElementById("emails").innerHTML = emailUpdated;
