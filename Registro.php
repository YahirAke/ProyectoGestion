<html lang="en">
<head>
  <title>Registro</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style_index.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.gritter.css">
  <link href="image0.png" rel="stylesheet">
  <script src="Scripts/jquery-3.7.1.js"></script>
  </head>
  <body>
  <div class="box">
      <img src="imagenes/sitio-web.png" class="profile" height="100px" width="100px">
      <h2>Registro de usuario</h2>
   
      <form onsubmit="enviarFormulario(event)">
        
          <p class="lable">Matrícula</p>
          <input type="Matricula" placeholder="" id="Matricula">
          <p class="lable">Nombre(s)</p>
          <input type="Matricula" placeholder="" id="Nombre">
          <p class="lable">Apellido(s)</p>
          <input type="Matricula" placeholder="" id="Apellido">
          <p class="lable">Email</p>
          <input type="Email" placeholder="" id="Email">
          <p class="lable">Contraseña</p>
          <input type="password" placeholder="********" id="Password"> 
          <p class="lable">Confirmar contraseña</p>
          <input type="password" placeholder="********" id="Conf_password">        

            <input id="btnregistro" onclick="registrarse();" type="submit" value="Registrarse">

      </form>
    
    
        </div>
    <script src="Scripts/Sps_functions.js"></script>
    <script src="Scripts/jquery.gritter.min.js"></script>
    </body>
</html>