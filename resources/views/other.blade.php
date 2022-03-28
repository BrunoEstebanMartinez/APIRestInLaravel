<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" type = "text/css" href = "../resources/sass/styles.css">
    </head>
    <body>
      <div class = "container-1" align = "center">
      <div class = "labelcontent-1">
      <label class = "label-1"> LATE Interdisciplinar</label>
      <div>
       <div class = "container-2" align = "center">
          <img src = "../public/Imagen1.png" class = "imagen1">
         <form class = "for-2" id = "For-2" method = "post" action = ""><br>
            <input type = "text" class = "input-usuario-correo-contraseña1" placeholder = "Nombre de usuario o correo electronico" required><br><br>
            <input type = "password" class = "input-usuario-correo-contraseña1" placeholder = "Contraseña" required>
         </form>
        <br>
        <br>
        <a href = "users" ><input class = "btn-1" type = "submit" value = "Iniciar sesión" name = "validacion"></a>   
    </div>
      </div>
    </body>
</html>