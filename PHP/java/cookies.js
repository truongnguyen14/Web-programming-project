const cookies= document.querySelector(".cookie");
		const cookiebutton= document.querySelector(".cookiebtn");
		if(cookiebutton){
		cookiebutton.addEventListener("click", function(ev){
			cookies.classList.remove("active");
			localStorage.setItem("cookiedisplay", "true");
			sessionStorage.setItem("cookiedisplay", "true");
			});
			}
		setTimeout(() => {
				if(!sessionStorage.getItem("cookiedisplay")){
					cookies.classList.add("active");
					}
					},500);