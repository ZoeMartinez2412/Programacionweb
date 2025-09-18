<?php
$nombre_get = $_get['Nombre'];
$apellidos_get = $_get['primerApellido'];

$nombreCompleto = $nombre_get . ' ' . $apellidos_get;
echo ($nombreCompleto);


?>