<?php
$correcta = 'd'; // La respuesta correcta es la opción d
$respuesta = $_POST['respuesta'] ?? '';

$resultado = ($respuesta === $correcta) ? '✅ ¡Correcto!' : '❌ Incorrecto.';
$color = ($respuesta === $correcta) ? 'green' : 'red';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f6fc;
            text-align: center;
            padding: 50px;
        }
        .resultado {
            font-size: 2rem;
            font-weight: bold;
            color: <?= $color ?>;
        }
        .boton {
            margin-top: 30px;
            padding: 12px 24px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            text-decoration: none;
        }
        .boton:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="resultado"><?= $resultado ?></div>
    <br>
    <a class="boton" href="pregunta2.php">Siguiente pregunta</a>
</body>
</html>
