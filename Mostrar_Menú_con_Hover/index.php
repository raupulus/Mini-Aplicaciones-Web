<!DOCTYPE html>
<HTML>
	<HEAD>
		<TITLE>Mostrar Menú con Hover</TITLE>
		<META charset="utf-8"/>
		<LINK rel="stylesheet" type="text/css" href="./CSS/styles.css"/>
		<LINK rel="stylesheet" href="./CSS/styles.css"/>
		<SCRIPT src="./JS/scripts.js"></SCRIPT>
	</HEAD>

	<BODY>
		<NAV id="MenuPrincipal">
			<UL>
				<LI>
					<P class="tapa" onMouseOver="ocultar('0')">1</P>
					<P class="opciones" onMouseOut="mostrar('0')">Opción 1</P>
				</LI>
				<LI>
					<P class="tapa" onMouseOver="ocultar('1')">2</P>
					<P class="opciones" onMouseOut="mostrar('1')">Opción 2</P>
				</LI>
				<LI>
					<P class="tapa" onMouseOver="ocultar('2')">3</P>
					<P class="opciones" onMouseOut="mostrar('2')">Opción 3</P>
				</LI>
				<LI>
					<P class="tapa" onMouseOver="ocultar('3')">4</P>
					<P class="opciones" onMouseOut="mostrar('3')">Opción 4</P>
				</LI>
			</UL>
		</NAV>
	</BODY>
</HTML>
