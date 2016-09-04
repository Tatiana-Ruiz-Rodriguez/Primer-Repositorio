<?php 
require("Conexion/Conexion.php");	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Trabajo Colaborativo 2</title>
<link href="Style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="Imagenes/favicon.ico">
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
</head>

<body>
<div id="grande">
	<div id="menu">
	  <div id="logo"><img src="Imagenes/logo.png" alt="" width="174" height="139" /></div>
      <div id="titulo"><img src="Imagenes/Titulo.png" width="355" height="138" /></div>
      <div id='cssmenu'>
        <ul>
           <li><a href='index.php'><span>Inicio</span></a></li>
           <li><a href='Bluetooth.php'><span>Estructura</span></a></li>
           <li><a href='Costos.php'><span>Costos</span></a></li>
           <li><a href='internet.php'><span>Internet</span></a></li>
           <li class='active'><a href='insertar.php'><span>Comentar</span></a></li>
           <li class='last'><a href='moodletele3.esy.es'><span>Ingresar a Moodle</span></a></li>
        </ul>
           </ul>
      </div>
  </div>
  
	  <div id="titulocontenido1"><img src="Imagenes/Comentario.png" width="345" height="55" style="border-radius:10px;"/></div>
     <div id="new">
    <form action="" method="post">
        <p>&nbsp;</p>
        <p>Nombre:
          <label for="name"></label>
        </p>
        <span id="sprytextfield1">
        <input name="name" type="text" id="name" style="font-family:Poiret One;font-size:17px;"/>
        <span class="textfieldRequiredMsg">Se necesita un valor.</span></span>
        <p>Correo:
          <label for="correo"></label>
      </p>
        <span id="sprytextfield2">
        <input type="text" name="correo" id="correo" style="font-family:Poiret One;font-size:17px;"/>
        <span class="textfieldRequiredMsg">Se nece</span></span>
        <p>Comentario:</p>
        <p>
          <label for="comentario"></label>
        <span id="sprytextarea1">
        <textarea name="comentario" id="comentario" cols="45" rows="5" style="font-family:Poiret One;font-size:17px;"></textarea>
        <span class="textareaRequiredMsg">Se necesita un valor.</span></span></p>
      <p>
        <input type="submit" name="button" id="button" value="Enviar" style="font-family:Poiret One; font-size:17px; color:#fff; background-color:#333; border-color:#333; border-radius:5px; height: 30px; width: 60px;" />
      </p>
      <p>&nbsp; </p>
      <?php 
	  if(isset($_POST['name'])){
	  mysqli_query($con,"insert into ejemplo (name, email, comentario) values('".$_POST['name']."', '".$_POST['correo']."', '".$_POST['comentario']."')");
	  $filas = mysqli_affected_rows($con);
	  if($filas == 1){
		echo '<script>alert("Gracias pos su comentario en breve daremos una respuesta a su petición.")</script>';
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	  }else{
		  echo '<script>alert("No se pudo enviar su comentario intentelo de nuevo")</script>';
	  }
	  
	  }
	  
	  ?>
    </form>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>
