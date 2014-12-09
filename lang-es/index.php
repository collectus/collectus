<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Collectus : Service professionel de collecte et recyclage de matériel bureautique</title>
	<meta charset="UTF-8">
	<meta name="description" content="Collectus" /> 
	<meta name="keywords" content="" />
	<meta name="Indentifier-URL" content="http://www.collectus.fr/" />
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" href="../images/favicon.ico" >

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45629393-1', 'collectus.fr');
  ga('send', 'pageview');

</script>

	
	</head>
<body onLoad="check_infos();currentPage('homepage');">
<div id="headpage"><span>Copyright © Collect'us</span></div>
<div id="conteneur">
	<?php include('head.php'); ?>
	<?php include('shmenu.php'); ?>
	<div id="contenu">
		<?php include('formulaire.php'); ?>
		<div id="center">
			<div id="text">
			<strong>¿ QUIENES SOMOS ?</strong>			
			<br><br>Collect’us es una empresa de servicios de recogida multirresiduos, multisitios, dedicada a las empresas y los profesionales. Basada en París, nuestra actividad principal es la recuperación, la recogida y la selección de los instrumentos ofimáticos usados : Cartuchos de inyección de tinta y toners de impresión originales, teléfonos móviles, equipos informáticos, baterías y circuitos impresos (REEE). 
			Tenemos la experiencia que nos permite ofrecer un servicio de calidad y optimizado. Recopilamos grupos grandes, pymes, instituciones académicas y asociaciones. Ofrecemos soluciones individualizadas en función de sus tamaños, de sus estructuras y de sus logísticas. Ademas, Collect’us apoya financieramente al associacion Teletón en Francia.
			<br><br><br><strong>EXPORTACION DE NUESTROS PRODUCTOS</strong>
			<br><br>La empresa Collect’us tiene productos de calidad por muchas referencias. Gracias a nuestra plataforma , nuestra capacidad de almacenamiento puede ofrecer a nuestros clientes importantes cantidades de varios modelos. Despues de un estricto control, los cartuchos que vendemos son de calidad.
			Ofrecemos cartuchos y tóners usados de marca, teléfonos móviles, equipos informáticos usados, tarjetas de circuitos impresos y CD-ROM.
			Por más información sobre nuestras condiciones de venta y nuestra existencia de mercancias disponible, puede contactar con nosotros via correo electrónico collectus@collectus.fr
			<br><br><br><strong>IMPORTACION AL INTERNATIONALE</strong> 				
			<br><br>Para complementar nuestro programa de recolección en el territorio nacional, la empresa Collect’us utiliza el mercado internacional.
			Collect’us compra los cartuchos de tóner y de inyección de tinta vacío original.
			Por minimizar el daño del envío, le pedimos a nuestros socios a seguir estrictos procedimientos para el envío
			
			</div>
		</div>
	</div>
	<?php include('contact.php'); ?>
</div>
<div id="footer">
	<a href="" title="Accueil">Home</a> - <a href="" title="Mentions legales">Legal mentions</a>
</div>

<!-- Code javascript -->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="../js/javascript.js"></script>
<script> 
<!--
$(document).ready(
function () { 
	$(".menu li.has-sub").each(
	function () {
		var $ul = $(this).find("ul"); 
		$(this).hover(
		function () {			
			var tempHeight = $ul.css("height", "auto").height();
			$ul
			.height(0)
			.stop()
			.animate({ height: tempHeight.toString() }, 350);
		}, 
		function () {
			$ul
			.stop()
			.animate({ height: "0" }, 350);
		});
	});
});

-->
</script>
</body>
</html>