var username = document.getElementById('username');
var password = document.getElementById('password');
var confirmpassword = document.getElementById('confirmpassword');

var form = document.getElementById('formulario');
form.addEventListener('submit', function(evt){
	evt.preventDefault();
	if (username === "") {
		alert("Ingresa un username");
	}
	if (password === "") {
		alert("Ingresa un password");
	}
	if (confirmpassword === "") {
		alert("Confirma tu contraseña");
	}
	if (password != confirmpassword) {
		alert("Las contraseñas son diferentes!");
		return false;
	}
});

