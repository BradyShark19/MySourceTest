<!DOCTYPE html>
<html lang="en">

<head>
    <title>Oftalmologia La Fuente</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" type="text/css" href="Librerias/alertifyjs/css/themes/default.css">

    <script src="Librerias/jquery-3.5.1.min.js"></script>
    <script src="Js/funciones.js"></script>
    <script src="Librerias/bootstrap/js/bootstrap.js"></script>
    <script src="Librerias/alertifyjs/alertify.js"></script>
</head>

<body>

    <div class="container">
        <div id="tabla"></div>
    </div>

    <!--Modal para registros pacientes nuevos-->
    <div class="modal fade" id="modalNuevo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Registrar Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label>Nombre</label>
                        <input type="text" name="" id="nombre" class="form-control input-sm"></input>
                    <label>Apellido</label>
                        <input type="text" name="" id="apellido" class="form-control input-sm"></input>
                    <label>Email</label>
                        <input type="text" name="" id="email" class="form-control input-sm"></input>
                    <label>Telefono</label>
                        <input type="text" name="" id="telefono" class="form-control input-sm"></input> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="guardarNuevo">Agregar</button>             
                </div>
            </div>
        </div>
    </div>

    <!--Modal para edicion de  pacientes nuevos-->
    <div class="modal fade" id="modalEdicion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editar Paciente</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <input type="text" hidden="" id="idpersona" name="">
                    <label>Nombre</label>
                        <input type="text" name="" id="nombreu" class="form-control input-sm"></input>
                    <label>Apellido</label>
                        <input type="text" name="" id="apellidou" class="form-control input-sm"></input>
                    <label>Email</label>
                        <input type="text" name="" id="emailu" class="form-control input-sm"></input>
                    <label>Telefono</label>
                        <input type="text" name="" id="telefonou" class="form-control input-sm"></input>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-bs-dismiss="modal" id="actualizarDatos">Actualizar</button>                
                </div>
            </div>
        </div>
    </div>


</body>

</html>

<script type="text/javascript">
    $(document).ready(
        function() {
            $('#tabla').load('Componentes/tabla.php');
        });
</script>

<script type="text/javascript">
    $(document).ready(function()
    {
        $('#guardarNuevo').click(function()
        {
         nombre   = $('#nombre').val();
         apellido = $('#apellido').val();
         email    = $('#email').val();
         telefono = $('#telefono').val();   
            AgregarDatos(nombre,apellido,email,telefono);      
        });

        $('#actualizarDatos').click(function(){
            ActualizaDatos();
        });

    });
</script>