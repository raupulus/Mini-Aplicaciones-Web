<?php
  //Leer entrada
	$data = file_get_contents("php://input");

	// Filtrar y decodificar los datos pasados
	// Filtrando las cabeceras (data:,) part.
	$filteredData=substr($data, strpos($data, ",")+1);
	// Se necesita decodificar de base64
	$decodedData=base64_decode($filteredData);
	// Guardar al servidor
	$NombreFirma = 'firma'.rand(1000,9999).'.png';
	$ssss = count(glob("firmas/{*.jpg,*.gif,*.png}",GLOB_BRACE));
	$ssss = "Firma".($ssss + 1).".png";
	$fp = fopen('./firmas/'.$ssss, 'wb');
	$ok = fwrite( $fp, $decodedData);
	fclose( $fp );
	if($ok)
		echo $ssss;
	else
		echo "ERROR";
?>
