<?php
session_start();
if (isset($_SESSION['guia'])) {
  echo "<script>window.location='misitioguia.php';</script>";
  echo "<script>alert('iniciando sesión');</script>";
}elseif(isset($_SESSION['turista'])){
  echo "<script>window.location='misitioturista.php';</script>";
}else{
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  	<!-- Latest compiled and minified CSS -->
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">


     <link rel="stylesheet" href="./css/informacion.css">
    <link rel="shortcut-icon" type="image/x-icon" href="./img/mapa.svg">
  </head>

<body class="body3" style="background:#a0c8f7;">
  <a href="index.php" ><img src="img/mapa.svg" alt="" id="logoRegistroGuia"></a>
  <div class="contenedor_titulo_r_turista">
    <h3>TOURIST DAY</h3>
  </div>
  <a href="##" ><img src="img/imagen_turista.svg" alt="" id="imagen_guia"></a>



      <div class="form__top_turista">
      <div class="tilin" >  <h2 > <span class="t1"></span><span class="t2"> Formulario Registro Turista</span></h2>
      <form class="form__reg" method="post" action="codigo_registrar.php" enctype='multipart/form-data'>
        <input class="input" name="nom_turista_1" type="text" placeholder="&#128100; Primer Nombre" required autofocus>
        <input class="input" name="nom_turista_2" type="text" placeholder="&#128100;  Segundo Nombre" required autofocus>
        <input class="input" name="ape_turista_1" type="text" placeholder="&#128100;  Primer Apellido" required autofocus>
          <input class="input" name="ape_turista_2" type="text" placeholder="&#128100;  Segundo Apellido" required autofocus>

              <input class="input" name="mail_turista" type="email" placeholder="&#9993;  Email" required>
              <input class="input" name="tel_turista" type="number" placeholder="&#128222;  Telefono" required>
              <input class="input" name="doc_turista" type="number" placeholder="    &#128443;  Documento" required>
              <input class="input" name="f_n_turista" type="date" placeholder="   Fecha de nacimiento" required>
              <label class="tm"> <h3 style="color:white">País de residencia</h3></label>
                      <select class="input" name="pais_guia">
                          <option>Afganistán</option>
                          <option>Albania</option>
                          <option>Alemania</option>
                          <option>andorra</option>
                          <option>Angola</option>
                          <option>Antigua y Barbuda</option>
                          <option>Arabia Saudita</option>
                          <option>Argelia</option>
                          <option>Argentina</option>
                          <option>Armenia</option>
                          <option>Australia</option>
                          <option>Austria</option>
                          <option>Azerbaiyán</option>
                          <option>Bahamas</option>
                          <option>Bangladés</option>
                          <option>Barbados</option>
                          <option>Baréin</option>
                          <option>Bélgica</option>
                          <option>Belice</option>
                          <option>Benín</option>
                          <option>Bielorrusia</option>
                          <option>Birmania</option>
                          <option>Bolivia</option>
                          <option>bosnia y Herzegovina</option>
                          <option>Botsuana</option>
                          <option>Brasil</option>
                          <option>Brunéi</option>
                          <option>Bulgaria</option>
                          <option>Burkina Faso</option>
                          <option>Burundi:</option>
                          <option>Bután</option>
                          <option>Cabo Verde</option>
                          <option>sVenecia</option>
                      </select>
              <input class="input" name="pass_turista_1" type="password" placeholder="&#x1F512;  Contraseña" required>
              <input class="input" name="pass_turista_2" type="password" placeholder="&#x1F512;  Confirmar contraseña" required>

              <input type='file' required name='imagen' accept="image/*">
              <br>
              <div class="btn__form">
             <input class="btn__submit" name="registrar_turista" type="submit" value="Registrar">
                <input class="btn__reset" type="reset" value="Limpiar">
              </div>
            <a class="form__recover" href="registroguia.php" id="textoCuentaGuia">Registro guia</a style="">

           </form>


<a href="index.php" id="regresar"><img src="img/regresar.svg" alt="" ></a>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="particles.js"></script>
<script src="app.js"></script>
</body>
</html>
<?php

}
?>
