<?php 
include_once "../../model/empleado.php";
$obj_empleado=new Empleado();
$obj_empleado->id_empleado=$_REQUEST['id'];
$obj_empleado->consult();

?>

<div class="row">
    <input type="hidden" name="id" id="id" value="<?php echo $obj_empleado->id_empleado; ?>">
    <div class="col-4">
        <label for="txt_name">Nombres <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_nombres" name="txt_nombres" value="<?php echo $obj_empleado->nombres; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Paterno<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_ap_pat" name="txt_ap_pat" value="<?php echo $obj_empleado->apellido_paterno; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Apellido Materno<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_ap_mat" name="txt_ap_mat" value="<?php echo $obj_empleado->apellido_materno; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de documento<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_doc" name="txt_doc" value="<?php echo $obj_empleado->nro_documento; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Direccion<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_direccion" name="txt_direccion" value="<?php echo $obj_empleado->direccion; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Genero<i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_genero" name="txt_genero" value="<?php echo $obj_empleado->genero; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Tipo de empleado <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_tipo_emp" name="txt_tipo_emp" value="<?php echo $obj_empleado->id_tipo_empleado; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de Celular <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_num_cel" name="txt_num_cel" value="<?php echo $obj_empleado->nro_celular; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Email <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txt_email" name="txt_email" value="<?php echo $obj_empleado->email; ?>"/>
        </div>
    </div>
    <div class="col-4">
        <label for="txt_name">Numero de cuenta <i class="text-danger" title="Ingrese asunto">*</i></label>
        <label class="text-danger msj_txt_name"></label>  
        <div class="input-group mb-2">
            <div class="input-group-prepend ">
            <span class="input-group-text"><i class="fas fa-align-left"></i></span>
            </div>
            <input type="text" class="form-control valid validText" id="txr_nro_cuenta" name="txr_nro_cuenta" value="<?php echo $obj_empleado->nro_cuenta; ?>"/>
        </div>
    </div>
</div>
