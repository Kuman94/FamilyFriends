<?php
$nombre = $_POST['nombre']
$email = $_POST['email']
$pass1 = $_POST['pass1']
$pass2 = $_POST['pass2']

echo "Nombre: " $nombre;

mail('francisco.gutierrez@iescampanillas.com', $nombre, $email, $pass1, $pass2)


?>