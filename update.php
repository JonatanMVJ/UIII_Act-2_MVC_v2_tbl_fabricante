<?php
require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");

$obj = new mantenimientoController();

// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $id = $_POST['id'];
    $nombre_fabricante = $_POST['nombre_fabricante'];
    $apellidos = $_POST['apellidos'];
    $direccion = $_POST['direccion'];
    $piez_vendidas = $_POST['piez_vendidas'];
    $telefono = $_POST['telefono'];
    $instrumento_fabricado = $_POST['instrumento_fabricado'];
    $sucursal_trabaja = $_POST['sucursal_trabaja'];

    // Actualizar en la base de datos
    $result = $obj->update($id, $nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja);

    if ($result) {
        // Redirigir a la página de detalles después de la actualización exitosa
        header("Location: show.php?id=" . $id);
        exit();
    } else {
        // Manejar el caso en que la actualización falló
        echo "Error al actualizar el registro.";
    }
}

// Si no se ha enviado el formulario o la actualización falló, mostrar el formulario de edición
$user = $obj->show($_GET['id']);

// Verificar si el usuario existe antes de mostrar el formulario
if (!$user) {
    echo "Usuario no encontrado.";
    exit();
}
?>

<!-- Tu formulario HTML aquí -->

<?php
require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>
