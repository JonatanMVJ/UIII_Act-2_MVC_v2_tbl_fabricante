<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/head.php");
?>


    <form action="store.php" method="POST" autocomplete="off">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre</label>
        <input type="text" name="nombre_fabricante" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Apellidos  </label>
        <input type="text" name="apellidos" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Direccion</label>
        <input type="text" name="direccion" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">piezas vendidas</label>
        <input type="text" name="piez_vendidas" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">telefono</label>
        <input type="text" name="telefono" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">instrumento fabricado</label>
        <input type="text" name="instrumento_fabricado" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">sucursal en que trabaja</label>
        <input type="text" name="sucursal_trabaja" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a class="btn btn-danger" href="../../index.php">Cancelar</a>
    </form>

<?php
    require_once("C:/xampp/htdocs/proyecto/view/head/footer.php");
?>