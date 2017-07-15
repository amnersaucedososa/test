<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<?php 
	class Form
	{
		public function formulario()
		{
			if (!$_GET) {
				echo "
					<form action='' method='get'>
						<input type='text' name='usuario' placeholder='escribe tu usuario'><br>
						<input type='submit' name='send'>
					</form>";
			}elseif (@$_GET['send']) {
					
					$usuario = $_GET['usuario'];
					echo "
					<form action='' method='get'>
						<input type='text' name='usuario' value=\"$usuario\"><br>
						<input type='text' name='name' placeholder='escribe tu nombre'><br>
						<input type='text' name='lastname' placeholder='escribe tu apellido'><br>
						<input type='submit' name='send2'>
					</form>";
					
			}elseif (@$_GET['send2']) {
				$usuario = $_GET['usuario'];
				$name = $_GET['name'];
				$lastname = $_GET['lastname'];
				echo "
					<form action='' method='get'>
						<input type='text' name='usuario' value=\"$usuario\"><br>
						<input type='text' name='name' placeholder='escribe tu nombre' value=\"$name\"><br>
						<input type='text' name='lastname' placeholder='escribe tu apellido' value=\"$lastname\"><br>
						<input type='date' name='date' placeholder='fecha de nacimiento'><br>
						<input type='submit' name='send3'>
					</form>";
			}
		}
		public function resultado()
		{
			$user = $_GET['usuario'];
			$name = $_GET['name'];
			$lastname = $_GET['lastname'];
			$fecha = $_GET['date'];
			echo $user."<br>";
			echo $name."<br>";
			echo $lastname."<br>";
			echo $fecha."<br>";
		}
		public function newfolder()
		{
			$usuario = $_GET['usuario'];
		    $carpeta = "@".$usuario;
		    $crear = mkdir($carpeta,0700);
		    if($crear==true){
		        // echo "Éxito al crear carpeta&nbsp;<br>";
		        //  echo "tu carpeta: http://amner.com/$usuario"."<br>";
		    }else{
		        echo "busca otro usuario"."<br>";
		        echo "<a href=\"form.php\">regresar</a>";
		    }
		}
		
	}

	$Form = new Form;

	$Form->formulario();
	
	if (@$_GET['send']) {
		$Form->newfolder();
	}
	

	if(@$_GET['send3'])
	{
		$Form->resultado();
	}
	

	
?>	
</body>
</html>