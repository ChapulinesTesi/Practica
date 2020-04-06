
<?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'Está usando Internet Explorer.<br />';
}
?>

<form action="accion.php" method="post">
 <p>Su nombre: <input type="text" name="nombre" /></p>
 <p>Su edad: <input type="text" name="edad" /></p>
 <p><input type="submit" /></p>
</form>
<?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> años.


$servidor= "localhost";
$usuario= "root";
$password = "";
$nombreBD= "php_buscador";
$db = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($db->connect_error) {
    die("la conexión ha fallado: " . $db->connect_error);
}
?>
