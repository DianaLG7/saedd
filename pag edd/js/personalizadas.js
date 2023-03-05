function ValidarRegistro()
{
    var idbecario = document.getElementById("idbecario").value;
    var contraseña1 = document.getElementById("pass1").value;
    var contraseña2 = document.getElementById("pass2").value;

    if (contraseña1.length == 0 | contraseña2.length == 0 | idbecario.length == 0)
    {
        alert("¡Debes llenar todos los campos!");
        return false;
    }
}