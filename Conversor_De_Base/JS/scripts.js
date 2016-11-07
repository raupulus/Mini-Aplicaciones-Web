function accion() {
	var x = document.getElementById("entrada").value;

	//Condicional que pasará el filtro númerico y de A hasta F para base 16
	if ((/[^0-9,A-F]/g.test(x)) || x == "") {
		alert ("Introduce un valor numérico (0-9) o Hexadecimal (A-F)");
		document.getElementById("entrada").value = "";
		document.getElementById("entrada").focus();
		return false;
	}

}
