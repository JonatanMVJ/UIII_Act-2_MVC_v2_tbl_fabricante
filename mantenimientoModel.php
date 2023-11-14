<?php
class mantenimientoModel
{
    private $PDO;

    public function __construct()
    {
        require_once("c://xampp/htdocs/proyecto/config/db.php");
        $con = new db();
        $this->PDO = $con->conexion();
    }

    public function insertar($nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja)
    {
        $stament = $this->PDO->prepare("INSERT INTO fabricante VALUES(null,:nombre_fabricante,:apellidos,:direccion,:piez_vendidas,:telefono,:instrumento_fabricado,:sucursal_trabaja)");
        $stament->bindParam(":nombre_fabricante", $nombre_fabricante);
        $stament->bindParam(":apellidos", $apellidos);
        $stament->bindParam(":direccion", $direccion);
        $stament->bindParam(":piez_vendidas", $piez_vendidas);
        $stament->bindParam(":telefono", $telefono);
        $stament->bindParam(":instrumento_fabricado", $instrumento_fabricado);
        $stament->bindParam(":sucursal_trabaja", $sucursal_trabaja);

        return ($stament->execute()) ? $this->PDO->lastInsertId() : false;
    }

    public function show($id)
    {
        $stament = $this->PDO->prepare("SELECT * FROM fabricante where id = :id limit 1");
        $stament->bindParam(":id", $id);

        return ($stament->execute()) ? $stament->fetch() : false;
    }

    public function index()
    {
        $stament = $this->PDO->prepare("SELECT * FROM fabricante");
        return ($stament->execute()) ? $stament->fetchAll() : false;
    }

    public function update($id, $nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja)
    {
        $stament = $this->PDO->prepare("UPDATE fabricante SET nombre_fabricante = :nombre_fabricante, apellidos = :apellidos, direccion = :direccion, piez_vendidas = :piez_vendidas, telefono = :telefono, instrumento_fabricado = :instrumento_fabricado, sucursal_trabaja = :sucursal_trabaja  WHERE id = :id");
        $stament->bindParam(":nombre_fabricante", $nombre_fabricante);
        $stament->bindParam(":apellidos", $apellidos);
        $stament->bindParam(":direccion", $direccion);
        $stament->bindParam(":piez_vendidas", $piez_vendidas);
        $stament->bindParam(":telefono", $telefono);
        $stament->bindParam(":instrumento_fabricado", $instrumento_fabricado);
        $stament->bindParam(":sucursal_trabaja", $sucursal_trabaja);
        $stament->bindParam(":id", $id);

        return ($stament->execute()) ? $id : false;
    }

    public function delete($id)
    {
        $stament = $this->PDO->prepare("DELETE FROM fabricante WHERE id = :id");
        $stament->bindParam(":id", $id);

        return ($stament->execute()) ? true : false;
    }
}
?>
