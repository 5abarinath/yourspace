function validate_user(username, password) {
	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'validate_user.php', true);
	xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
	var params = "username=" + username + "&password=" + password;
	console.log(username + " " + password);
	xhr.onload = function () {
	    if(this.responseText ==  "1") {
	    	document.getElementById("login").innerHTML = "";
	    	document.getElementById("loginModal").style.display = "none";
	    	alert("Successful Login");
	    }
	    else {
	    	alert("Incorrect username or password");
	    }
	    console.log(this.responseText);
	};
	xhr.send(params);
}