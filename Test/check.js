var owner = document.getElementById('owner')
owner.addEventListener("click", function(e){
    document.getElementById('rad').style.display = "block";
});

var owner = document.getElementById('shopper')
owner.addEventListener("click", function(e){
    document.getElementById('rad').style.display = "none";
});

var password = document.getElementById('psw').value;
function check(){
    var check = /^(?=.*\d)(?=.*[a-z])(?=.*[!@#$%^&*])(?=.*[A-Z])(?!.*\s).{8,20}$/;
    if(document.getElementById("psw").value.match(check)){
        document.getElementById('submit').disabled = false;
    } else{
        alert('Please enter at least 1 lowercase and uppercase, 1 digit, no space, and a special key')
        document.getElementById('submit').disabled = true;
    }
}

function check_phone(){
    if(document.getElementById('phone').value.length < 10){
        alert('Phone need at least 10 digits');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_email(){
    var checkmail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    if(document.getElementById('email').value.match(checkmail)){
        alert('Please enter the correct format for email');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_bn(){
    if(document.getElementById('first').value.length < 3){
        alert('Business name need at least 3 characters');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_sn(){
    if(document.getElementById('first').value.length < 3){
        alert('Store name need at least 3 characters');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_first(){
    if(document.getElementById('first').value.length < 3){
        alert('First name need at least 3 characters');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_last(){
    if(document.getElementById('last').value.length < 3){
        alert('Last name need at least 3 characters');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_address(){
    if(document.getElementById('address').value.length < 3){
        alert('Address need at least 3 characters');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_city(){
    if(document.getElementById('city').value.length < 3){
        alert('City name need at least 3 characters');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_zip(){
    if(document.getElementById('zip').value.length < 4 || document.getElementById('zip').value.length > 6){
        alert('Zip code need 4 to 6 digits');
        document.getElementById('submit').disabled = true;
    }
    else{
        document.getElementById('submit').disabled = false;
    }
}

function check_pass() {
    if (document.getElementById('psw').value == document.getElementById('retypepassword').value) {
        document.getElementById('submit').disabled = false;
    } else {
        alert('Retype password need to be same to the password');
        document.getElementById('submit').disabled = true;
    }
}

function myFunction() {
        var x = document.getElementById("psw");
        if (x.type === "password") {
            x.type = "text";
        } 
        else {
            x.type = "password";
        }

        var y = document.getElementById("retypepassword");
        if (y.type === "password") {
            y.type = "text";
        } 
        else {
            y.type = "password";
        }
    }