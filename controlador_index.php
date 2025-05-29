
<?php
$correcta = 'd'; // La respuesta correcta es la opción d
$respuesta = $_POST['iniciar'] ?? '';

$resultado = ($respuesta === $correcta) ? '✅ ¡Correcto!' : '❌ Incorrecto.';
$color = ($respuesta === $correcta) ? 'green' : 'red';
?>
