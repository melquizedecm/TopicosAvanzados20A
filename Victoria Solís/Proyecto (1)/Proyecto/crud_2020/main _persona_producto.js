$(document).ready(function(){
    tablaPersonas = $("#tablaPersonas").DataTable({
       "columnDefs":[{
        "targets": -1,
        "data":null,
        "defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btnEditar'>Editar</button><button class='btn btn-danger btnBorrar'>Borrar</button></div></div>"  
       }],
        
        //Para cambiar el lenguaje a español
    "language": {
            "lengthMenu": "Mostrar _MENU_ registros",
            "zeroRecords": "No se encontraron resultados",
            "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
            "infoFiltered": "(filtrado de un total de _MAX_ registros)",
            "sSearch": "Buscar:",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast":"Último",
                "sNext":"Siguiente",
                "sPrevious": "Anterior"
             },
             "sProcessing":"Procesando...",
        }
    });
    
$("#btnNuevo").click(function(){
    $("#formPersonas").trigger("reset");
    $(".modal-header").css("background-color", "#28a745");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Nuevo");            
    $("#modalCRUD").modal("show");        
    id=null;
    opcion = 1; //alta
});    
    
var fila; //capturar la fila para editar o borrar el registro
    
//botón EDITAR    
$(document).on("click", ".btnEditar", function(){
    fila = $(this).closest("tr");
    
    nombre = fila.find('td:eq(1)').text();
    facebook= fila.find('td:eq(2)').text();
    n_cel= parseInt(fila.find('td:eq(3)').text());
    Cantidad = fila.find('td:eq(4)').text();
    Pedido= fila.find('td:eq(5)').text();
    Total= parseInt(fila.find('td:eq(6)').text());
    
    $("#nombre").val(nombre);
    $("#facebook").val(facebook);
    $("#n_cel").val(n_cel);
    $("#Cantidad").val(Cantidad);
    $("#Pedido").val(Pedido);
    $("#Total").val(Total);
    opcion = 2; //editar
    
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white");
    $(".modal-title").text("Editar Persona");            
    $("#modalCRUD").modal("show");  
    
});

//botón BORRAR
$(document).on("click", ".btnBorrar", function(){    
    fila = $(this);
    id = parseInt($(this).closest("tr").find('td:eq(0)').text());
    opcion = 3 //borrar
    var respuesta = confirm("¿Está seguro de eliminar el registro: "+id+"?");
    if(respuesta){
        $.ajax({
            url: "bd/crud.php",
            type: "POST",
            dataType: "json",
            data: {opcion:opcion, id:id},
            success: function(){
                tablaPersonas.row(fila.parents('tr')).remove().draw();
            }
        });
    }   
});
    
$("#formPersonas").submit(function(e){
    e.preventDefault();    
    nombre = $.trim($("#nombre").val());
    facebook= $.trim($("#facebook").val());
    n_cel= $.trim($("#n_cel").val()); 
    nombre = $.trim($("#Cantidad").val());
    facebook= $.trim($("#Pedido").val());
    n_cel= $.trim($("#Total").val());    
    $.ajax({
        url: "bd/crud.php",
        type: "POST",
        dataType: "json",
        data: {nombre:nombre, facebook:facebook, n_cel:n_cel, Cantidad:Cantidad, Pedido:Pedido, Total:Total,  opcion:opcion},
        success: function(data){  
            console.log(data);
              
            nombre = data[0].nombre;
            facebook = data[0].pais;
            n_cel = data[0].edad;
            Cantidad = data[0].Cantidad;
            Pedido = data[0].Pedido;
            Total = data[0].Total;
            if(opcion == 1){tablaPersonas.row.add([nombre,facebook,n_cel, Cantidad, Pedido, Total]).draw();}
            else{tablaPersonas.row(fila).data([nombre,facebook,n_cel, Cantidad, Pedido, Total]).draw();}            
        }        
    });
    $("#modalCRUD").modal("hide");    
    
});    
    
});