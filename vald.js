function validation(){
	var fn = true;
	var ln = true;
	var e = true;
	var p = true;
	var a = true;
	var m = true;
	var u = true;
	
	formLables = document.getElementsByTagName("label");
	
	var firstName = document.getElementsByName("firstName")[0];
	if(firstName.value==""){
		formLables[2].innerHTML="First Name: [required]";
		formLables[2].style="color: red";
		fn = false;
	}
	else if( !isNaN(firstName.value)){
		formLables[2].innerHTML="First Name: [Name must be a text]";
		formLables[2].style="color: red";
		fn = false;
	}
	else {
		formLables[2].innerHTML="First Name:";
		formLables[2].style="color: black";
		fn = true;
	}

	
	var mobile = document.getElementsByName("Number")[0];
	if(mobile.value ==""){
		formLables[3].innerHTML="Mobile: [required]";
		formLables[3].style="color: red";
		m = false;
	}
	else if( isNaN(mobile.value)){
		formLables[3].innerHTML="Mobile: [Mobile must be a number]";
		formLables[3].style="color: red";
		m = false;
	}
	else {
		formLables[3].innerHTML="Mobile:";
		formLables[3].style="color: black";
		m = true;
	}
	
	
	
	var email = document.getElementsByName("email")[0];
	var x = email.value.indexOf("@");
	if(email.value==""){
		formLables[4].innerHTML="Email: [required]";
		formLables[4].style="color: red";
		e = false;
	}
	else if(x==-1){
		formLables[4].innerHTML="Email: [Enter correct email]";
		formLables[4].style="color: red";
		e = false;
	}
	else {
		formLables[4].innerHTML="Email:";
		formLables[4].style="color: black";
		e = true;
	}
	
	
	var password = document.getElementsByName("pword")[0];
	if(password.value == ""){
		formLables[5].innerHTML="Password: [required]";
		formLables[5].style="color: red";
		p = false;
	}
	else if(password.value.length < 8){
		formLables[5].innerHTML="Password: [Length at least 8]";
		formLables[5].style="color: red";
		p = false;
	}
	else {
		formLables[5].innerHTML="Password:";
		formLables[5].style="color: black";
		p = true;
	}
	
	var user = document.getElementsByName("usern")[0];
	if(user.value==""){
		formLables[6].innerHTML="Username: [required]";
		formLables[6].style="color: red";
		u = false;
	}
	else if( !isNaN(user.value)){
		formLables[6].innerHTML="Username: [Name must be a text]";
		formLables[6].style="color: red";
		u = false;
	}
	else {
		formLables[6].innerHTML="Username:";
		formLables[6].style="color: black";
		u = true;
	}
	
	
	
	
	
	
	if(fn & e & p & m & u){
		return true;
	}
	else {
		return false;
	}
}

