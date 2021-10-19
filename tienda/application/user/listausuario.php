

<html>
<head></head>
<body>
<?php 
include_once "../persistence/MySQLPDO.class.php";
MySQLPDO::connect();
$usuarios = MySQLPDO::listarUsuarios();

?>
<table border="1">
<tr>

<th>Id</th>
<th>Usuario</th>
<th>Apellido</th>
<th>E-mail</th>
<th>Contraseña</th>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>





</tr>


</table>



</body>




</html>


<?php






















