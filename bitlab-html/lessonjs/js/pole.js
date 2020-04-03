function validate(){

	ok = true;

    userName = document.getElementById("1111");

	if(userName.value==""){
		userName.style = "border:1px solid red";
		ok = false;
	}else{
		userName.style = "border:1px solid green";
	}

    userSurname = document.getElementById("1111");

	if(userSurname.value==""){
		userSurname.style = "border:1px solid red";
		ok = false;
	}else{
		userSurname.style = "border:1px solid green";
	}
}
