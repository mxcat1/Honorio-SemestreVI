<?php
	//var_dump($_POST); die("Fin...");
	$valor1 = $_POST['fecha_nacimiento'];
	$valor2 = $_POST['codigo_postal'];
	$valor3 = $_POST['telefono'];
			
	echo("<p>Respuesta1...FECHA NACIMIENTO: ".$valor1);
	echo("<p>Respuesta2...CODIGO POSTAL: ".$valor2);
	echo("<p>Respuesta3...TELEFONO: ".$valor3);
?>
<P>Bucle
<select name="select">
	<?php
		for($i=0; $i<5; $i++)
			echo "<option value='$i'>Hola_$i";
	?>	
</select>
</P>