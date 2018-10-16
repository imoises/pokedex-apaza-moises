function valida_envia(){

	var email = document.form.email.value;
	var password = document.form.password.value;

	if (email == 0) {
		return 0;
	}
	if (password == 0) {
		return 0;
	}
	if (email == 0 && password == 0) {
		return 0;
	}
	document.form.btnAceptar();
}