<?php
include "../model/Usuario.class.php";
include "../persistence/MySQLPDO.class.php";

$user = $_POST['usuario'];

$pwd = $_POST['clave'];

$variable = new Usuario();

$variable->setLogin($user);
$variable->setPassword($pwd); 

MySQLPDO::connect();

$sql = "SELECT * FROM nombretabla WHERE usuario= ? AND clave= ?";// Select para la tabla usuario
$params = array($variable->getLogin(), $variable->getPassword()); // parametros que sustituyen a los símbolos ?
$result = MySQLPDO::select($sql, $params);
if (sizeof($result) != 0) {
    echo "Login correcto";
}   else {
    echo "Login incorrecto";
}

?>