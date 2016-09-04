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
<link href='http://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<style type="text/css">
#contenido1 #redeswifi p {
	text-align: justify;
}
#contenido2 #contenido #redeswifi p {
	text-align: justify;
}
#contenido2 #c #redeswifi p {
	text-align: justify;
}
#contenido1 #redeswifi p {
	font-weight: normal;
}
</style>
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
           <li class='active'><a href='internet.php'><span>Internet</span></a></li>
           <li class='last'><a href='insertar.php'><span>Comentar</span></a></li>
           <li class='last'><a href='moodletele3.esy.es'><span>Ingresar a Moodle</span></a></li>
           </ul>
           </ul>
           </div>
</div>
      <div id="slider"><meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="Made with WOW Slider - Create beautiful, responsive image sliders in a few clicks. Awesome skins and animations. Css slideshow" />
	
	<!-- Start WOWSlider.com HEAD section --> <!-- add to the <head> of your page -->
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<!-- End WOWSlider.com HEAD section -->

</head>
<body style="background-color:#d7d7d7;margin:auto">
	
	<!-- Start WOWSlider.com BODY section --> <!-- add to the <body> of your page -->
	<div id="wowslider-container1">
	<div class="ws_images"><ul>
		
		<li><a href="http://wowslider.com/vi"><img src="data1/tooltips/www_67821884_PCOM.gif" alt="slideshow html" title="Internet" id="wows1_1"/></a></li>
		<li><img src="data1/tooltips/Internet.jpg" alt="Internet" title="Internet" id="wows1_2"/></li>
        <li><img src="data1/images/integrantes.png" alt="Integrantes" title="Integrantes" id="wows1_0"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		
		<a href="#" title="Internet"><span><img src="data1/tooltips/www_67821884_PCOM.gif" alt="Internet"/>2</span></a>
		<a href="#" title="Internet"><span><img src="data1/tooltips/Internet.jpg" width="531" height="306" />3</span></a>
        <a href="#" title="Integrantes"><span><img src="data1/tooltips/integrantes.png" alt="Integrantes"/>1</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.com/vi">css slideshow</a> by WOWSlider.com v7.8</div>
	<div class="ws_shadow"></div>
	</div>	
	<script type="text/javascript" src="engine1/wowslider.js"></script>
	<script type="text/javascript" src="engine1/script.js"></script>
	<!-- End WOWSlider.com BODY section --></div>
    <div id="contenido1">
    	<div id="titulocontenido1"><img src="Imagenes/Internet.png" width="345" height="47" /></div>
        <div id="redeswifi">
          <p>Conjunto de redes intercomunicadas bajo el protocolo TCP/IP que permiten una interconexion descentralizada <br />
          de alcance global permitiendo que millones de ordenadores se comuniquen.</p>
          <p>Es un espacio donde puedes comprar, ver tus videos favoritos, compartir cualquier producto ect. desde cualquier lugar.</p>
          <p> <br />
          </p>
<p>&nbsp;</p>
      </div>
    </div>
<div id="contenido2">
     <div id="contenido">
       <div id="titulocontenido1"><img src="Imagenes/Servicios.png" width="345" height="46" /></div>
       <div id="redeswifi">
         <p>&nbsp;</p>
         <p><strong>World Wide Web:</strong> Permite consultar información desde cualquier ordenador de la red.</p>
         <p><strong>Correo Electrónico:</strong> Servicio mas usado de internet, nos permite enviar mensajes a cualquier otra persona con cuenta de correo electrónico. </p>
         <p><strong>Transferencia de Archivos FTP:</strong> Permite intercambiar archivos desde un PC 	que se conecta a un servidor remoto.</p>
         <p>&nbsp;</p>
       </div>
  </div>
     <div id="c">
       <div id="titulocontenido1"><img src="Imagenes/Servicios.png" alt="" width="345" height="46" /></div>
       <div id="redeswifi">
         <p><img src="Imagenes/Intevdhe.png" width="450" height="239" /><br />
         </p>
       </div>
      </div>
     <div id="comentarios"> 
     <div id="titulocontenido1"><img src="Imagenes/Comentario.png" alt="" width="334" height="42" /></div>
     <div id="co">
       <?php 
       $sql = mysqli_query($con, "select * from ejemplo order by id desc");
       $res = mysqli_fetch_assoc($sql);
       ?>
       <table width="605" border="0" style="margin-top:20px; border-radius: 10px">
        <tr>
          <td width="85" style="background-color:#666; color:#FFF">Nombre:</td>
          <td width="91" style="background-color:#666; color:#FFF">Correo:</td>
          <td width="202" style="background-color:#666; color:#FFF">Comentario</td>
        </tr>
        <tr>
          <td><?php echo $res["name"]?></td>
          <td><?php echo $res["email"]?></td>
          <td><?php echo $res["comentario"]?></td>
        </tr>
      </table>
      <form id="form1" name="form1" method="post" action="insertar.php">
         <input type="submit" name="button" id="button" value="Nuevo Comentario" style="font-family:Poiret One; font-size:17px; color:#fff; background-color:#333; border-color:#333; border-radius:5px; height: 30px; width: 154px;" />
       </form>
     <p>&nbsp;</p>

   </div>
   <div id="piepagina"><img src="Imagenes/piepagina.png" alt="" width="533" height="117" /></div>
 </div>
</div>

</body>
</html>
