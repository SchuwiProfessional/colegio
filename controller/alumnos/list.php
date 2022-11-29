<?php
session_start();
include_once "../../model/alumnos.php";
$obj_alumnos = new alumno();
$rs = $obj_alumnos->read();
$count = 0;
?>
<table id="table_alumnos" class="table table-bordered table-striped table-sm" style="font-size: 12px;">
    <thead>
        <tr>
            <th>N°</th>
            <th>ID</th>
            <th>Alumno</th>
            <th>Nro Documento</th>
            <th>Genero</th>
            <th>Email</th>
            <th>Grado</th>
            <th>Apoderado</th>
            <th>Estado</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($fila = mysqli_fetch_assoc($rs)) {
            $count++;
            if ($fila["estado"] == 0) {
                $accion = '<button data-id="' . $fila["id_alumno"] . '" 
                title="Activar" class="btn btn-xs btn-success activar-item" id="btn_item' . $fila["id_alumno"] . '">
                <i class="fas fa-user-check" id="icon_item' . $fila["id_alumno"] . '"></i></button>';
            } else {
                $accion = '<button data-id="' . $fila["id_alumno"] . '"     
                title="Inactivar" class="btn btn-xs btn-danger desactivar-item" id="btn_item' . $fila["id_alumno"] . '">
                <i class="far fa-trash-alt" id="icon_item' . $fila["id_alumno"] . '"></i></button>';
            }
            if ($_SESSION['rango'] == "admin") {
                $btn_editar = '<button data-id="' . $fila["id_alumno"] . '"
                 title="Mas detalle" class="btn btn-xs btn-warning new-modal-alumnos"><i class="far fa-edit"></i></button>';
            } else {
                $btn_editar = "";
            }
            if ($_SESSION['rango'] != "admin") {
                $accion = "";
            } ?>
            <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $fila['id_alumno'] ?></td>
                <td><?php echo $fila['nombres']." ".$fila['apellido_paterno']." ".$fila['apellido_materno'] ?></td>
                <td><?php echo $fila['numero_documento'] ?></td>
                <td><?php echo $fila['genero'] ?></td>
                <td><?php echo $fila['email'] ?></td>
                <td><?php echo $fila['grado'] ?></td>
                <td><?php echo $fila['id_apoderado'] ?></td>
                <td><?php echo $fila['estado'] ?></td>
                <td>
                    <?php
                    echo $btn_editar;
                    echo $accion; ?>
                    <button data-id="<?php echo $fila['id_alumno'] ?>" title="Modificar" class="btn btn-xs btn-primary new-modal-show-alumno"><i class="far fa-eye"></i></button>
                </td>

            </tr>


        <?php } ?>
    </tbody>

</table>



