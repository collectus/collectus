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
			<span style="font-weight:bold;">QUEM SOMOS?</span><br><br>
				O Collect’us é uma empresa de coleta de lixo para profissionais e empresas. 
				Situada em Paris, sua função principal é coleta, classificação de despejos como cartuchos de tinta para impressora,
				toners de impressora, telefones, telefones celulares, material informático, pilhas, baterias e circuitos impressos. 
				Vendemos também produtos usados que reciclamos. 
				Nos oferecemos um serviço optimizado e de qualidade. 
				Trabalhamos com pequenas, médias e grandes empresas, escolas, associações, centros comerciais e estabelecimentos públicos. 
				Temos soluções adaptadas e personalizadas para nossos clientes. 
				Nossa empresa envolvida no meio associativo e rapidamente construímos uma parceria com o Telethon na França.<br><br><br>
				<span style="font-weight:bold;">VENDAS INTERNATIONAIS DOS NOSSOS PRODUTOS</span><br><br>
				Collect’us tem um estoque importante e de qualidade de diversas referências de toners e cartuchos de tinta originais para impressoras.
				Todos os nossos produtos passam por um processo de verificação de qualidade rigoroso. Nossas parcerias com fabricantes são propícias a uma oferta diversificada. 
				Nossa plataforma nos possibilita de oferecer aos nossos clientes grandes quantidades de produtos em diversos modelos.
				De fato, nosso serviço garante uma mercadoria conforme ao seu pedido. 
				Nossos produtos são : 
				-cartuchos e toners de impressoras usadas 
				-telefones celulares e material informático usado 
				-Circuitos impressos 
				-Cd rom 
				Para mais informações sobre a disponibilidade de produtos e condições de venda, contate nos por e-mail no endereço seguinte : 
				collectus@collectus.fr<br><br><br>
				<span style="font-weight:bold;">COLETA INTERNACIONAL :</span><br><br>
				Para ampliar nossa capacidade de coleta, Collect us adquire produtos no mercado internacional. 
				Compramos cartuchos de tinta e toners usados. 
				Com um total conhecimento do transporte internacional, 
				grandes quantidades de mercadoria são conduzidas em nosso depósito para serem re introduzidas no circuito de utilização. 
				Quando a mercadoria chega ao depósito, controlamos a sua qualidade. 
				Pedimos aos nossos clientes de respeitar as nossas condições de embalagem, para que o produto não seja danificado durante o transporte. 
				Temos parcerias em todo mundo.
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