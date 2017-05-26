function ValidarFormulario() {
	var nombre = document.FormSugerencia.nombre.value;
	var email = document.FormSugerencia.email.value;
	var sugerencia = document.FormSugerencia.sugerencia.value;
	
	//Solo permitir a-Z
	//nombre
	if (nombre.value.length == 0) { 
		alert("Tiene que escribir su nombre") 
		nombre.focus() 
		return false; 
	} 
	
	//email
	//Permitir a-Z0-9
	if (email.value.length == 0) { 
		alert("El email no debe estar vacío") 
		email.focus() 
		return false; 
	} 
	
	//sugerencia
	//Permitir a-Z0-9
	if (sugerencia.value.length==0) { 
		alert("No puede enviar una sugerencia vacía") 
		sugerencia.focus() 
		return false; 
	} 
	
	return true;
}