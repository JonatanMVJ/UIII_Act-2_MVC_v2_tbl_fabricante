<?php
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $obj->delete($_GET['id']);

?>