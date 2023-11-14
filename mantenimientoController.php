<?php
class mantenimientoController
{
    private $model;

    public function __construct()
    {
        require_once("C:/xampp/htdocs/proyecto/model/mantenimientoModel.php");
        $this->model = new mantenimientoModel();
    }

    public function guardar($nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja)
    {
        $id = $this->model->insertar($nombre_fabricante, $apellidos, $direccion, $piez_vendidas, $telefono, $instrumento_fabricado, $sucursal_trabaja);

        return ($id != false) ? header("Location:show.php?id=" . $id) : header("Location:create.php");
    }

    public function show($id)
    {
        return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:index.php");
    }

    public function index()
    {
        return ($this->model->index()) ? $this->model->index() : false;
    }

    public function update($id, $nombre_fabricante, $apellidos, $direccion, $telefono, $instrumento_fabricado, $sucursal_trabaja, $iva)
    {
        return ($this->model->update($id, $nombre_fabricante, $apellidos, $direccion, $telefono, $instrumento_fabricado, $sucursal_trabaja, $iva) != false) ? header("Location:show.php?id=" . $id) : header("Location:index.php");
    }

    public function delete($id)
    {
        return ($this->model->delete($id)) ? header("Location:index.php") : header("Location:show.php?id=" . $id);
    }
}
?>
