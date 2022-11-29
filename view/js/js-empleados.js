
$(document).on("click","#cerrar_sesion",function(){
    var url = "controller/login/logout/cerrar_sesion.php";
    $.get(url,function(data){
        console.log("s");
    })
})
//
function list_empleados(){
    $.ajax({
        url: "controller/empleados/list.php",
    }).done(function(data){
        $(".table-empleado").empty();
        $(".table-empleado").append(data);
    })
}

$(document).on("click" , ".new-modal-empleado" , function(){
    var id = $(this).data("id");
    var url = "controller/empleados/create.php?id="+id;
    $.get(url,function(data){
        $("#form_empleado").empty();
        $("#form_empleado").append(data);
    })
    $("#modal-form-empleado").modal("show");
})


$(document).on("click","#btn_save",function(){
    var data = $("#form_empleado").serialize();
    $.ajax({
        url: 'controller/empleados/accion.php',
        type: 'POST',
        data: data,
        success: function (data) {
            console.log(data);
            alert(data);
            if(data=="true"){
                list_empleados();
                toastr.success("Datos guardados correctamente");
                $('#modal-form-empleado').modal('hide');
            }else{
                
                toastr.error("Hubo un error");
                list_empleados();
            }
        }
    })
})

