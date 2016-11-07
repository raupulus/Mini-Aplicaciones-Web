function accion() {
	var x = document.getElementById("entrada").value;

	//Condicional que pasará el filtro númerico y de A hasta F para base 16
	if ((/[^0-9,A-F]/g.test(x)) || x == "") {
		alert ("Introduce un valor numérico (0-9) o Hexadecimal (A-F)");
		document.getElementById("entrada").value = "";
		document.getElementById("entrada").focus();
		return false;
	}

	//Obtener Valor de Select de base de entrada
	var lista = document.getElementById("selectEntrada");
	var indiceSeleccionado = lista.selectedIndex;
	var opcionSeleccionada = lista.options[indiceSeleccionado];
	var valorSeleccionado = opcionSeleccionada.value;

	//Obtener Valor de Select de base de salida




	alert();



	/*
	x = parseInt(x);
	var bin = x.toString(2);
	var hex = x.toString(16).toUpperCase();
	var octal = x.toString(8);


	var figs = "The binary representation of " + x + " is " + bin + "<br>";
	figs = figs + "The hexadecimal representation of " + x + " is " + hex + "<br>";
	figs = figs + "The octal representation of " + x + " is " + octal + "<br>";

	document.getElementById("result").innerHTML = figs;
}
*/
}
