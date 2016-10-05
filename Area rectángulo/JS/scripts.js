function calculararea() {
	var base = document.getElementById('inputbase').value;
	var altura = document.getElementById('inputaltura').value;
	var resultado = "El área es:  " + base * altura + " m2";
	document.getElementById('inputresultado').defaultValue=resultado
}