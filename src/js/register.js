let pass1 = document.getElementById('pass1');
let pass2 = document.getElementById('pass2');
let form = document.getElementById('regform');

function checker() {
	let error = document.createElement("h3");
	let errorText = document.getElementsByClassName("form-group");
	error.innerText = "TI PIDOR";
	if (pass1.value != pass2.value && pass2.value.length != 0) {
		for (let i = 0; i < errorText.length; i++) {
			errorText[i].classList.add("error")
		}
	}
	else {
		for (let i = 0; i < errorText.length; i++) {
			errorText[i].classList.remove("error")
		}
	}
}

pass2.addEventListener("change", checker);
pass1.addEventListener("change", checker);

function validateForm (form)
{
    // validation fails if the input is blank
    if(form.username.value == "") {
		alert("Error: Input is empty!");
		form.username.focus();
		return false;
    }
    // regular expression to match only alphanumeric characters and spaces
    var re = /^[\w ]+$/;
    // validation fails if the input doesn't match our regular expression
    if(!re.test(form.username.value)) {
		alert("Error: Input contains invalid characters!");
		form.username.focus();
		return false;
    }
	if(form.password.value != form.passwordAnother.value) {
		return false;
	}

    // validation was successful
    return true;
}
