<?php 


if (((((isset($_POST['enviar'])) {
    if (!empty($_POST['email']) && !empty($_POST['contraseña']) && !empty($_POST['edad'])  && !empty($_POST['nombre'])  && !empty($_POST['mensaje']))))) {
        $nombre = $_POST['nombre'];
        $edad = $_POST['edad'];
        $email = $_POST['email'];
        $contraseña = $_POST['contraseña'];
        $mensaje = $_POST['mensaje'];
        $header = "From:lucero14.lucero@gmail.com" . "/r/n";
        $header.= "Reply-To: lucero14.lucero@gmail.com" . "/r/n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($nombre, $edad, $email, $contraseña, $mensaje);

    }
}

/*
if (isset($_POST['enviar'])) {
    if (!empty($_POST['email']) && !empty($_POST['contraseña1'])) {
        $email = $_POST['email'];
        $contraseña1 = $_POST['contraseña1'];
        $header = "From:lucero14.lucero@gmail.com" . "/r/n";
        $header.= "Reply-To: lucero14.lucero@gmail.com . /r/n";
        $header.= "X-Mailer: PHP/". phpversion();
        $mail = @mail($email,$contraseña1);

    }
}
*/


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Envio de Formulario</title>
	<link type="text/css" rel="stylesheet" href="index.css">
    <script type="text/javascript" src="formulario.js"></script>
<body>

<div class="container">
    <form class="formulario" id="form1" action="inicio.html" method="post">
        <input  class="inputs" type="text" id="nombre" name="nombre" placeholder="&#128273; Nombre:"><br>
        <input class="inputs" type="text" id="edad" name="edad" placeholder="Edad:"><br>
        <input class="inputs" type="email" id="email" name="email" placeholder="Email:"><br>
        <input class="inputs" type="password" id="contraseña" name="contraseña" placeholder="Contraseña:"><br>
        <textarea id="mensaje" placeholder="Mensaje:"></textarea><br>
        <input id="boton" type="button" value="enviar" onclick="envioFormulario();">
        <p id="contenido"></p>

    </form>
</div>
 <script>
    function envioFormulario() {

        var form1 = document.getElementById("form1");
        var nombre = document.getElementById("nombre").value;
        var edad = document.getElementById("edad").value;
        var email = document.getElementById("email").value;
        var contraseña = document.getElementById("contraseña").value;
        var mensaje = document.getElementById("mensaje").value;
         



        

        if (nombre == "") {
            document.getElementById("contenido").innerHTML = "El campo NOMBRE esta vacio";
            return false;
        } else if (nombre.length <= 3) {
            document.getElementById("contenido").innerHTML = "El campo nombre es menor a 3 caracteres";
            return false;
        } else {
            document.getElementById("contenido").innerHTML = "";
        
        }

        if (edad == 0){
            document.getElementById("contenido").innerHTML = "El campo EDAD esta vacio";
            return false;
        } else if (edad <= 17) {
            document.getElementById("contenido").innerHTML = "Lo siento, eres menor de edad";
            return false;
        } else {
            document.getElementById("contenido").innerHTML = "";
         
        }

        if (email == 0){
            document.getElementById("contenido").innerHTML = "El campo EMAIL esta vacio";
            return false;
        } else if (email.indexOf("@") < 0) {
            document.getElementById("contenido").innerHTML = "No es un email";
            return false;
        } else {
            document.getElementById("contenido").innerHTML = "";
        
        }


        if(email.length <= 5) {
            document.getElementById("contenido").innerHTML = "No es un email";
            return false;
        }


        if (contraseña == 0){
            document.getElementById("contenido").innerHTML = "El campo CONTRASEÑA esta vacio";
            return false;
        } else if (contraseña.length <= 4) {
            document.getElementById("contenido").innerHTML = "la contraseña es muy corta";
            return false;
        } else {
            document.getElementById("contenido").innerHTML = "";
        
        }

        if (mensaje == 0){
            document.getElementById("contenido").innerHTML = "El campo MENSAJE esta vacio";
            return false;
        } else if (mensaje.length <=5) {
            document.getElementById("contenido").innerHTML = "es mensaje es muy corto";
            return false;
        } else {
            document.getElementById("contenido").innerHTML = "";       
        }


       form1.submit();


     }


</script>


<!--?php

include("correo.php");

?>-->
</body>
</html>
