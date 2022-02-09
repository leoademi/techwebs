var form = document.querySelector('#form1');
var errors_el = document.querySelector('.errors');

form.addEventListener('submit', forma);

function forma(e) {
 e.preventDefault();
 
 var username = document.querySelector('#form1 #username');
 var password = document.querySelector('#form1 #password');

 
 var errors = [];
 
 
 var pass = /^[A-Za-z]\w{7,14}$/;
 var nameReg = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
 
 if (username.value == "") {
  errors.push({text: "username", el: username});
 }
 else if (!nameReg.test(username.value)) {
  errors.push({text: "username", el: username});
 }


 
 if (password.value == "") {
  errors.push({text: "password", el: password});
 } 
 else if (!pass.test(password.value)) {
  errors.push({text: "password", el: password});
 }

 
 if (errors.length > 0) {
 	rregulloErrors(errors);
 	return false;
 }
 alert("submited");
 return true;
 
}

function rregulloErrors(errs){
	var str = "Ki error ne kete field: ";

	errs.map((er) => {
		er.el.classList.add('.error');
		str += er.text + ", ";
	});
	errs[0].el.focus();
	var errorii = document.createElement('div');
	errorii.classList.add('error');
	errorii.innerText = str;

	errors_el.addEventListener('click',function(){
		
		this.removeChild(errorii);
	});

	errors_el.appendChild(errorii);

}