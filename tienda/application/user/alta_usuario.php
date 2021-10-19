<html>
<head>
</head>
<body>
<form method="post" action="alta_usuario.php">
 	<p> Usuario: <input type="text" name="user" maxlength="100"/></p>
 	<p> Clave: <input type="password" name="pass" maxlenght="100"/></p>
	
	<!--  TO DO: deberia pedir 2 veces la clave y comprobar que es la misma -->
	
	<p> Nombre: <input type="text" name="nomb" maxlength="200"/></p>
	<p> Apellido: <input type="text" name="apell" maxlength="200"/></p>
	<p> Email: <input type="email" name="mail" maxlength="150"/></p>
				<input type="submit" name="boton_alta" value="Alta usuario"/>
</form>
<?php 
  include "../user/alta_usuario.php";
  include "../model/Usuario.class.php";
	
 
  if ($_POST) {
    $user = $_POST['user'];
    $pwd = $_POST['pass'];
    $nombre = $_POST['nomb'];
    $apellido = $_POST['apell'];
    $email = $_POST['mail'];
  }



?>
</body>








</html>