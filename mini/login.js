function validation(){
	var a = document.getElementById('username').value;
	var b = document.getElementById('psswrd').value;
	var usernameRegex = /^[a-zA-Z0-9]+$/;
	var passwordRegex=  /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
	if(a.match(usernameRegex) && b.match(passwordRegex)){
		return true;
	}
	else{
		return false;
	}
}