<?php
session_start();
if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
header('location:login/login.php');
}

?>
<style>
  ul li:nth-child(4) .activo {
    background: rgb(11, 150, 214) !important;
  }
</style>

<script>
    function advertencia() {
        var not=confirm("¿Estás seguro que deseas eliminar?")
        return not;
    }
</script>


<!-- primero se carga el topbar -->
<?php require('./layout/topbar.php'); ?>
<!-- luego se carga el sidebar -->
<?php require('./layout/sidebar.php'); ?>

<!-- inicio del contenido principal -->
<div class="page-content">

    <h4 class="text-center text-secondary"> Clasificación </h4>
    <?php
    include "../modelo/conexion.php";
    include '../controlador/controlador_modificar_des.php';
    include '../controlador/controlador_eliminar_des.php';

    $sql=$conexion->query("SELECT * from des") ?>

    <a href="registro_des.php" class="btn btn-primary btn-rounded mb-2"><i class="fa-solid fa-plus"></i> &nbsp; Registrar </a>

    <table class="table table-bordered table-hover col-12" id="example">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Nombre</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php
    while ($datos =$sql->fetch_object()) { ?>
      <tr>
      <td><?= $datos->id_des?></td>
      <td><?= $datos->nombre ?></td>
      <td> 
        <a href="#" data-toggle="modal" data-target="#exampleModal<?= $datos->id_des ?>" class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="des.php?id=<?=$datos->id_des?>" onclick="return advertencia()" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></a> </td>
      </tr>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $datos->id_des ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header d-flex justify-content-between">
        <h5 class="modal-title w-100" id="exampleModalLabel">Modificar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="POST">
          <div hidden class="fl-flex-label mb-4 px-2 col-12">
          <input type="text" placeholder="ID" name="txtid" value="<?= $datos->id_des ?>" class="input input__text">
        </div>
        <div class="fl-flex-label mb-4 px-2 col-12">
          <input type="text" placeholder="Nombre" name="txtnombre" value="<?= $datos->nombre ?>" class="input input__text">
        </div>
        </div>
        <div class="text-right p-2">
          <a href="des.php" class="btn btn-secondary btn-rounded">Atras</a>
          <button type="submit" value="ok" name="btnmodificar" class="btn btn-primary btn-rounded">Modificar</button>
      </div>
      </form>
  </div>
</div>
    <?php   
    }
    ?>
    
  </tbody>
</table>

</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>