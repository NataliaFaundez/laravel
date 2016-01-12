	<!DOCTYPE html>
	<html>
	<head>
		<title>Formulario</title>
	</head>
	<body>
	<label>
	<form>
		<BR><BR><BR><BR>
		<table width="60%" align="center" border="0" bordercolor='teal' cellspacing="0" cellpadding="0">
		<tr>
		<td>
		<fieldset> <legend><font color="teal"> OPERACION </font></legend> 
		<DIV ALIGN=center>
		<p>Primer numero: <input type="text" name="n1" value="{{$num1}}" /></p>
		<p>Segunda numero: <input type="text" name="n2" value="<?php echo $num2;?>" /></p>
		<input type="button" value="Sumar" ><!--onclick="sumar()">--> 
		<p><b>Suma: <input type="text" name="suma" value="<?php echo $suma;?>" /></b></p>
		</DIV>
		</fieldset>
		</td>
		</tr>
		</table>
		<!-- esto es una linea roja <hr> es linea sola <HR align="CENTER" size="2" width="400" color="Red" noshade>-->
	</form>
</label>
	
	</body>
	</html>
	




