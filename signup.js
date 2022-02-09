var form = document.querySelector('#form1');
var errors_el = document.querySelector('.errors');

form.addEventListener('submit', forma);

function forma(e) {
 e.preventDefault();
 
 var name = document.querySelector('#form1 #name');
 var surname = document.querySelector('#form1 #surname');
 var username = document.querySelector('#form1 #username');
 var password = document.querySelector('#form1 #password');
 var email = document.querySelector('#form1 #email');
 
 var errors = [];
 
 var email_regx = /^[^@]+@[^@]{2,}\.[^@]{2,}$/;
 var pass = /^[A-Za-z]\w{7,14}$/;
 var nameReg = /^[a-zA-Z\-]+$/;

 if (name.value == "") {
  errors.push({text: "name", el: name});
 }
 
 if (surname.value == "") {
  errors.push({text: "surname", el: surname});
 }
 
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


 if (email.value == "") {
  errors.push({text: "email", el: email});
 } 
 else if (!email_regx.test(email.value)) {
  errors.push({text: "email", el: email});
 }

 
 if (errors.length > 0) {
 	rregulloErrors(errors);
 	return false;
 }
 alert('SUBMITED');
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