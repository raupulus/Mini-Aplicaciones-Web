function funcionReloj() {
	momentoActual = new Date();//Crea hora
	horaActual = momentoActual.getHours();//Extraemos Hora
	minutoActual = momentoActual.getMinutes();//Extraemos Minutos

	hora = document.getElementById('hora');
	minutos = document.getElementById('minutos');

//Calcular grados cada minuto (6deg cada minuto, 6*6=360º)
	minutoActual = minutoActual * 6 + "deg";
	minutos.style.transform = "rotate(" + minutoActual + ")";

//Calcular grados por hora (30deg cada hora, 30*12=360º)
	horaActual = horaActual * 30 + "deg";
	hora.style.transform = "rotate(" + horaActual + ")";

//Actualizar reloj cada minuto
	setTimeout("cambiarHora()",60000);
}
