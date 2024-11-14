<?php
$host = '82.197.82.73';  // Esto lo debes cambiar con el host de la base de datos proporcionado por Hostinger
$dbname = 'u584871321_stockProducts'; // Cambia esto con el nombre de tu base de datos
$username = 'u584871321_admin';  // Cambia esto con tu usuario de base de datos
$password = 'Kinesis1233#';  // Cambia esto con tu contraseña de base de datos

try {
    // Crea una nueva conexión PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Establece el modo de error de PDO para que lance excepciones
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Conexión exitosa a la base de datos";
} catch (PDOException $e) {
    // Si ocurre un error, se captura la excepción y se muestra el mensaje de error
    die("Error al conectar a la base de datos: " . $e->getMessage());
}
?>