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
	var lista2 = document.getElementById("selectSalida");
	var indiceSeleccionado2 = lista2.selectedIndex;
	var opcionSeleccionada2 = lista2.options[indiceSeleccionado2];
	var valorSeleccionado2 = opcionSeleccionada2.value;

	//Pasa Entrada según selección a base 10
	var n = parseInt(x, valorSeleccionado);
	//Ahora de base 10 pasamos a la selección 2
	var m = n.toString(valorSeleccionado2).toUpperCase();

	//Pintar Resultados
	var o = "El resultado en base <B>" + valorSeleccionado2 + "</B> es: <BR/>" + m;

	document.getElementById("ResultadoBase").innerHTML = o;
}

