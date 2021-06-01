function validateName(){
	n = document.getElementById("Name");
	name= n.value;
	if(name.length>=3){
		return true;
		} 
	else {
		alert("Minimum character is 3");
		return false;
		}
}
function validate() {
	results = {
          'Name': validateName(),
          'phone': validatePhone(),
		  'mail': validateMail(),
		  
		
        };
        for (let i in results) {
          if (!results[i]) {
			  const form=document.getElementById("Submit");
			  if(form){
				form.addEventListener("submit", function(ev){
					ev.preventDefault();
				});
			  }
            return false;
          }
        }
        return true;
      }
	

function validateMail(){
	m = document.getElementById("mail");
	mail = m.value;
	var mailformat = /^[a-zA-Z0-9!#$%&'*+=?^_`{|}~-]+[a-zA-Z0-9.!#$%&'*+=?^_`{|}~-]+(@[a-zA-Z]{2,5})+(\.[a-zA-Z0-9-]+)+$/;
	if (mail.match(mailformat)){
		return true;
	}
	else{
		alert("You have entered an invalid email address!");
		return false;
		}
}
 function validatePhone() {
        p = document.getElementById("phone");
        phone = p.value;
        var phoneformat = /^\d{1}?[-.\s]?\d{1}?[.\s-]?\d{1}?[.\s-]?\d{1}?[.\s-]?\d{1}?[.\s-]?\d{1}?[.\s-]?\d{1}?[.\s-]?\d{1}?[.\s-]?\d{1}?[.\s-]?\d{0,1}?[.\s-]?\d{0,1}$/;
		if (phoneformat.test(phone)){
			return true;
		}
		else{
			alert("Invalid phone number");
			return false;
		}
      }
function validateMessage(){
		const message = document.getElementById('messen');				   
		if(message){
			message.addEventListener('input', function (event) {				
				if (message.validity.valid) {
					var msg= "";			
					var color= "";			
					if(message.value.length<50) {
						msg = "too short, need more letters."
						color= "red";
					} else if(message.value.length>50 && message.value.length<500) {
						msg = "enough, you could add more letters";
						color= "green";
					} else if(message.value.length>500) {
						msg = "too long, you should delete some letters";
						color = "red";
						}
						document.getElementById("notify").innerHTML=msg;
						document.getElementById("notify").style.color = color;
				}
			});
		}								 							  
}							
					


