<?php
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $obj->guardar($_POST['nombre_fabricante'],$_POST['apellidos'],$_POST['direccion'],$_POST['piez_vendidas'],$_POST['telefono'],$_POST['instrumento_fabricado'],$_POST['sucursal_trabaja']);
?>