<?php
session_start();

// Incluir el archivo de configuración
require_once '../../connections/config.php';

try {
    // ----------------------
    // Crear una conexión PDO
    // ----------------------
    $conexion = new PDO("mysql:host=$servidor;dbname=$nombre_db", $usuario_db, $password_db);

    // Configurar PDO para que lance excepciones en caso de error
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // ----------------------
    // Asignar variables
    // ----------------------
    // Obtener los datos del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];
    $confirmar_clave = $_POST['confirmar_clave'];

    // Verificar que las claves coincidan
    if ($clave !== $confirmar_clave) {
        echo "Las claves no coinciden.";
        exit();
    }

    // -----------------------------------
    // Consulta SQL para registrar el usuario
    // -----------------------------------
    
    // Preparar la consulta SQL para insertar un nuevo usuario
    $consulta = $conexion->prepare("INSERT INTO usuarios (nombre, clave) VALUES (?, ?)");
    
    // Ejecutar la consulta con los parámetros proporcionados
    $consulta->execute([$usuario, $clave]);

    // Iniciar sesión y redirigir a la página de bienvenida
    $_SESSION['usuario'] = $usuario;
    header("Location: ../Home/home.php");
    exit();
} catch (PDOException $e) {
    // En caso de error, mostrar el mensaje de error
    echo "Error: " . $e->getMessage();
}

// Cerrar la conexión
$conexion = null;
?>