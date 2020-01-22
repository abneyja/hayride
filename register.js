function addEvent(node, type, callback) {
  if (node.addEventListener) {
    node.addEventListener(
      type,
      function(e) {
        callback(e, e.target);
      },
      false
    );
  } else if (node.attachEvent) {
    node.attachEvent("on" + type, function(e) {
      callback(e, e.srcElement);
    });
  }
}

function shouldBeValidated(field) {
  return (
    !(field.getAttribute("readonly") || field.readonly) &&
    !(field.getAttribute("disabled") || field.disabled) &&
    (field.getAttribute("pattern") || field.getAttribute("required"))
  );
}


function instantValidation(field) {
  if (shouldBeValidated(field)) {
    var invalid =
      (field.getAttribute("required") && !field.value) ||
      (field.getAttribute("pattern") &&
        field.value &&
        !new RegExp(field.getAttribute("pattern")).test(field.value));

    if (!invalid && field.getAttribute("aria-invalid")) {
      field.removeAttribute("aria-invalid");
    } else if (invalid && !field.getAttribute("aria-invalid")) {
      field.setAttribute("aria-invalid", "true");
    }
  }
}

var fields = [
  document.getElementsByTagName("input"),
  document.getElementsByTagName("textarea")
];
for (var a = fields.length, i = 0; i < a; i++) {
  for (var b = fields[i].length, j = 0; j < b; j++) {
    addEvent(fields[i][j], "change", function(e, target) {
      instantValidation(target);
    });
  }
}

var password = document.getElementById("password");
var passwordConfirm = document.getElementById("passwordConfirm");
    password.onchange = ConfirmPassword;
    passwordConfirm.onkeyup = ConfirmPassword;

      function ConfirmPassword() {
          passwordConfirm.setCustomValidity("");
          if (password.value != passwordConfirm.value) {
			document.getElementById("password_conf").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
          }else{
			document.getElementById("password_conf").style.visibility = "hidden";
		if (formvalidation == true)
				formvalidation = true;
		}
      }
		
 
	
function checkForm() {
	var formvalidation = true
	var myVariable = ""
	var pattern = ""
	
	myVariable = document.getElementById("fullName").value;
	pattern =/^[A-Za-z]+$/
		if ((myVariable == "") || (!pattern.test(myVariable))){
			document.getElementById("fullName_error").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else {
			document.getElementById("fullName_error").style.visibility = "hidden";
		if (formvalidation != false)
				formvalidation = true;
		}
			myVariable = document.getElementById("email").value;
			pattern = /^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]{2,4}$/
		if (!pattern.test(myVariable)) {
			document.getElementById("email_error").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else{
			document.getElementById("email_error").style.visibility = "hidden";
		if (formvalidation == true)
				formvalidation = true;
		}
			myVariable = document.getElementById("password").value;
		if (myVariable == "") {
			document.getElementById("password_empty").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else {
			document.getElementById("password_empty").style.visibility = "hidden";
		if (formvalidation == true)
				formvalidation = true;
		}
			myVariable = document.getElementById("password").value;
		if (myVariable.length < 10 || myVariable.length > 20) {
			document.getElementById("password_len_error").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else{
			document.getElementById("password_len_error").style.visibility = "hidden";
		if (formvalidation == true)
				formvalidation = true;
		}
			myVariable = document.getElementById("password").value;
		if (!hasLowerCase(myVariable)) {
			document.getElementById("password_lower").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else {
			document.getElementById("password_lower").style.visibility = "hidden";
		if (formvalidation == true)
			formvalidation = true;
		}myVariable = document.getElementById("password").value;
        if (!hasUpperCase(myVariable)) {
            document.getElementById("password_upper").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else{
			document.getElementById("password_upper").style.visibility = "hidden";
		if (formvalidation == true)
				formvalidation = true;
		}if (!hasLowerCase(myVariable)) {
			document.getElementById("password_lower").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else {
			document.getElementById("password_lower").style.visibility = "hidden";
		if (formvalidation == true)
				formvalidation = true
		}
		if (!hasUpperCase(myVariable)) {
			document.getElementById("password_upper").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else {
			document.getElementById("password_upper").style.visibility = "hidden";
		if (formvalidation == true)
			formvalidation = true
		}
		if (!hasDigitCase(myVariable)) {
			document.getElementById("password_digit").style.visibility = "visible";
			document.getElementById("formErrors").style.display = "block";
				formvalidation = false;
		}else {
			document.getElementById("password_digit").style.visibility = "hidden";
		if (formvalidation == true)
			formvalidation = true
		}
		return formvalidation;
			function hasLowerCase(myVariable) { 
		return (/[a-z]/.test(myVariable));
		}
		function hasUpperCase(myVariable) { 
			return (/[A-Z]/.test(myVariable));
		}
		function hasDigitCase(myVariable) { 
			return (/[0-9]/.test(myVariable));
		}
	}



	