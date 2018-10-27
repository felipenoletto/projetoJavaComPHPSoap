<?php 
	
	$result = 0;

	if(isset($_POST["valor2"])) {

		$client = new SoapClient("http://127.0.0.1:9000/calculadora?wsdl");
		$opt = array('location' => 'http://127.0.0.1:9000/calculadora');
		$arg = array($_POST['valor1'], $_POST['valor2']);

		if(isset($_POST["som"])) {
			$function = "som";

		} else if(isset($_POST["sub"])) {
			$function = "sub";

		} else if(isset($_POST["multi"])) {
			$function = "multi";

		} else if(isset($_POST["div"])) {
			$function = "div";

		}

		$result = $client->__soapCall($function, $arg, $opt);

	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calculadora PHP/JAVA SOAP</title>

	<style type="text/css">
		table {
			border-collapse: collapse;
		}
		td, th {
			border: 1px solid black;
			padding: 5px;
		}
	</style>
</head>
<body>
	<br>
	<center>
		<form name="formulario" action="index.php" method="post">
			<p><label>Valor 1</label><br/><input type="text" name="valor1" size="30"></p>
			<p><label>Valor 2</label><br/><input type="text" name="valor2" size="30"></p>
			<p><input type="submit" name="som" value="Som">
			   <input type="submit" name="sub" value="Sub">
			   <input type="submit" name="multi" value="Mult">
			   <input type="submit" name="div" value="Div"></p>
		</form>
		<table>
			<tr>
				<th>Resultado: </th>
				<td><?php print_r($result); ?></td>
			</tr>
		</table>
	</center>
</body>
</html>