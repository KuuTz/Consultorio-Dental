
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Recopilar los datos del formulario
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    $telefono = $_POST["telefono"];
    $fecha = $_POST["fecha"];
    $mensaje = $_POST["mensaje"];
    
    // Puedes agregar aquí el código para enviar un correo electrónico de confirmación o guardar los datos en una base de datos.

    // Imprimir los datos en pantalla como ejemplo
    echo "<h2>Confirmación de Cita</h2>";
    echo "<p>Gracias por programar una cita con nosotros.</p>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Correo Electrónico: $email</p>";
    echo "<p>Teléfono: $telefono</p>";
    echo "<p>Fecha de la Cita: $fecha</p>";
    echo "<p>Mensaje: $mensaje</p>";
} else {
    // Redirigir de nuevo a la página de citas si se intenta acceder directamente a este archivo PHP sin enviar un formulario
    header("Location: index.html#citas");
}
?>
