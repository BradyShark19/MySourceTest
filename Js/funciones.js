

function AgregarDatos(nombre,apellido,email,telefono)
{
    cadena = "nombre= " + nombre + 
             "&apellido= " + apellido + 
             "&email= " + email +
             "&telefono=" + telefono;

    $.ajax({
        type: "POST",
        url: "Php/agregarDatos.php",
        data: cadena,
        success: function(r)
        {
            if(r==1)
            { $('#tabla').load('Componentes/tabla.php');
              alertify.success("Agregado con Exito...!!!");}
            else 
            {alertify.error("Fallo en Servidor...");}
        } 
    });
}

function AgregaForm(datos)
{
    d=datos.split('||');

    $('#id_paciente').val(d[0]);
    $('#nombreu').val(d[1]);
    $('#apellidou').val(d[2]);
    $('#emailu').val(d[3]);
    $('#telefonou').val(d[4]); 
}

function ActualizaDatos()
{
    id_paciente = $('#id_paciente').val(d[0]);
    nombre = $('#nombreu').val(d[1]);
    apellido = $('#apellidou').val(d[2]);
    email = $('#emailu').val(d[3]);
    telefono = $('#telefonou').val(d[4]); 

    cadena = "id_paciente=" + id_paciente +
             "&nombre= " + nombre + 
             "&apellido= " + apellido + 
             "&email= " + email +
             "&telefono=" + telefono;

             $.ajax({
                type: "POST",
                url: "Php/actualizaDatos.php",
                data: cadena,
                success: function(r)
                {
                    if(r==1)
                    { $('#tabla').load('Componentes/tabla.php');
                      alertify.success("Paciente actualizado Correctamente...!!!");}
                    else 
                    {alertify.error("Fallo en Servidor...");}
                } 
            });         
}