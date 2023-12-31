<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/herramienta.css" rel="stylesheet" type="text/css"/>
        <link rel="icon" href="img/favicon.png"/>
    </head>
    <body>
      <?php
      include 'leftpanel.php';
  ?>
    <main>
  <div class="panel-main flex flex-col gap-3" style="left: 0px; top: 0px;">
   <div class="grafica-ventas grafica-1">
            <h3>Préstamos pendientes</h3>   
            <img src="imagenes/img2.png" alt=""/>
        </div>
        <div class="grafica-ventas grafica-2">
          <h3>Préstamos con retraso</h3>   
          <img src="imagenes/img4.png" alt=""/>
        </div>
    <div class="borrar-flotacion"></div>
    
<section class="contenedor">
        <div class="slider">
     <div class="carousel-img slider1 ">
      <img src="imagenes/img5.jpeg" alt=""/>
    </div>
  <div class="carousel-img slider2">
      <img src="imagenes/img6.jpeg" alt=""/>
      
  </div>
  <div class="carousel-img slider3 ">
      <img src="imagenes/img7.jpeg" alt="" />
  </div>
 
      </div>
   <div class="team">
       <div class="team-principal">
         <h3>Usuarios</h3>
         <br>
         <p>Más destacados</p>
       </div>
       <div class="team-destacado">
         <div class="team-contenedor">
           <img src="https://beta-static.photobucket.com/images/o528/apilon/0/7dfcc68b-cad8-4dac-9cd0-6d5c7d3bf4f5-original.jpg?width=590&height=370&fit=bounds" alt="" />
           <p>Gimena</p>
           <a href="#">gimena@hotmail.com</a>
         </div>

         <div class="team-contenedor">
           <img src="https://beta-static.photobucket.com/images/o528/apilon/0/ff4a2a30-8afa-4dc9-a50f-2d40460a7a1d-original.jpg?width=590&height=370&fit=bounds" alt="" />
           <p>Alejandro</p>
           <a href="#">alejandro@hotmail.com</a>
         </div>

         <div class="team-contenedor">
           <img src="https://beta-static.photobucket.com/images/o528/apilon/0/cff2a385-67e5-46f4-96af-1c746cac4ba7-original.jpg?width=590&height=370&fit=bounds" alt="" />
           <p>Luisana</p>
          <a href="#">luisana@hotmail.com</a>
         </div>
      </div>
       <input type="button" value="Agregar" id="seleccionar">
    </div>
    </section>
    <section class="tabla">
     
     <div class="contenedor-btn">
     <button class="btn-tab active-btn" id="btn-productos">Herramientas</button>
     <button class="btn-tab active-btn" id="btn-destacados" >Destacadas</button>
     </div>
        
     <div id="cont-productos" class="tab">
       <h3>Año 2023</h3>
      
       <figure>
           <img src="imagenes/casco.png" alt="" title="Silla escritorio"/>
       </figure>
       <figure>
           <img src="imagenes/herramienta-de-trabajo.png" alt="" title="Mesa de centro"/>
       </figure>
        <figure>
            <img src="imagenes/llave-inglesa (1).png" alt="" title="Sofá de tres plazas"/>
       </figure>
       <figure>
           <img src="imagenes/serrucho.png" alt="" title="Silla exterior"/>
       </figure>
       
        <figure>
           <img src="imagenes/taladro.png" alt="" title="Puf"/>
       </figure>
       
        <figure>
           <img src="imagenes/voltimetro.png" alt="" title="Biblioteca"/>
       </figure>
     </div>
    </section>
    <div class="borrar-flotacion"></div>
    </div>
  </main>
</body>
</html>