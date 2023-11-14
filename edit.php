<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
    require_once("C:/xampp/htdocs/proyecto/controller/mantenimientoController.php");
    $obj = new mantenimientoController();
    $user = $obj->show($_GET['id']);
?>
  <form action="update.php" method="post" autocomplete="off">
    <h2>Modificando Registro</h2>
    <div class="mb-3 row">
        <label for="staticEmail" class="col-sm-2 col-form-label">Id</label>
        <div class="col-sm-10">
        <input type="text" name="id" readonly class="form-control-plaintext" id="staticEmail" value="<?= $user[0]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nombre_fabricante" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
            <input type="text" name="nombre_fabricante" class="form-control" id="inputPassword" value="<?= $user[1]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
        <div class="col-sm-10">
            <input type="text" name="apellidos" class="form-control" id="inputPassword" value="<?= $user[2]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="direccion" class="col-sm-2 col-form-label">Direccion</label>
        <div class="col-sm-10">
            <input type="text" name="direccion" class="form-control" id="inputPassword" value="<?= $user[3]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="piez_vendidas" class="col-sm-2 col-form-label">Piezas vendidas </label>
        <div class="col-sm-10">
            <input type="text" name="piez_vendidas" class="form-control" id="inputPassword" value="<?= $user[4]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="telefono" class="col-sm-2 col-form-label">telefono</label>
        <div class="col-sm-10">
            <input type="text" name="telefono" class="form-control" id="inputPassword" value="<?= $user[5]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="instrumento_fabricado" class="col-sm-2 col-form-label">instrumento fabricado</label>
        <div class="col-sm-10">
            <input type="text" name="instrumento_fabricado" class="form-control" id="inputPassword" value="<?= $user[6]?>">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="sucursal_trabaja" class="col-sm-2 col-form-label">sucursal en que trabaja</label>
        <div class="col-sm-10">
            <input type="text" name="sucursal_trabaja" class="form-control" id="inputPassword" value="<?= $user[7]?>">
        </div>
    </div>
    <div>
        <input type="submit" class="btn btn-success" value="Actualizar">
        <a class="btn btn-danger" href="show.php?id=<?= $user[0]?>">Cancelar</a>
    </div>
  </form>
<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>