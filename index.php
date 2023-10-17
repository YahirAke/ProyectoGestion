<html lang="en">
  <head>
    <title>Inicio de sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/jquery.gritter.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="image0.png" rel="stylesheet">
  </head>
  <body>
  <div class="box">
      <img src="imagenes/engranajes.png" class="profile" height="100px" width="100px">
      <h2>Loggin</h2>
   
      <form onsubmit="enviarFormulario(event)">
        
          <p class="lable">Usuarios</p>

          <input type="email" placeholder="@itsmotul.edu.mx" id="usuario">
          <p class="lable">Contraseña</p>
          <input type="password" placeholder="Contraseña" id="password">       

          <div class="button-container">

            <input id="btnIngresar" onclick="Iniciar()" type="submit" value="Ingresar">
         
            <input type="submit" value="Registrarse">
        </div>
        
        <a href="#" class="forpas">Olvidaste tu contraseña?</a>
       
      </form>
      
      <div id="resultado"></div>
  </div>
  <script src="Scripts/Sps_functions.js"></script>
  <script src="Scripts/jquery.gritter.min.js"></script>
  </body>
</html>
