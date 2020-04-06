
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

<?php
$jugo = "manzana";
echo "Él tomó algo de jugo de $jugo.".PHP_EOL; 
// Inválido. "s" es un carácter válido para un nombre de variable, pero la variable es $jugo.
echo "Él tomó algo de jugo hecho de $jugos.";
// Válido. Explícitamente especifica el final del nombre de la variable encerrándolo entre llaves:
echo "Él tomó algo de jugo hecho de ${jugo}s."
?>
