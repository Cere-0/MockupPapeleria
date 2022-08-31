<?php
session_start();
unset($_SESSION['cesta']);
unset($_SESSION['cliente']);
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Papeleria La Ideal</title>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery.cycle2.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<link rel="stylesheet" href="css/estilos.css">
<style>
/* set border-box so that percents can be used for width, padding, etc (personal preference) */
.cycle-slideshow, .cycle-slideshow *{
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}
div.cycle-slideshow{
	border-radius: 2rem;
	width: 500px;
	margin: 1rem auto;
	height: 300px;
	box-shadow: 0 5px 5px rgba(0,0,0,0.5);
	position: relative;
}
/* slideshow images (for most of the demos, these are the actual "slides") */
.cycle-slideshow img { 
	border-radius: 2rem;
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 0;
    display: block;
}
/* in case script does not load */
.cycle-slideshow img:first-child {
    position: static;
    z-index: 100;
}
.cycle-pager { 
    text-align: center;
    width: 100%; 
    z-index: 500; 
    position: absolute; 
    top: -10px; 
    overflow: hidden;
}
.cycle-pager span { 
    font-family: arial;
    font-size: 50px;
    width: 16px;
    height: 16px; 
    display: inline-block; 
    color: #ddd; 
    cursor: pointer; 
}
.cycle-pager span.cycle-pager-active{
	color: #D69746;
}
.cycle-pager > * {
 cursor: pointer;
}
.mensaje{
	font-size: 2rem;
	color: red;
	padding: 1rem 0;
}
</style>
</head>
<body>

	<div id="contenedor">

		<header>
			<div id="logo">
				<img src="images/logo.png" alt="">
			</div>
			<nav id="nav">
				<ul>
					<a href="index.php"><li>INICIO</li></a>
					<a href="escolar.php"><li>ESCOLAR</li></a>
					<a href="oficina.php"><li>OFICINA</li></a>
					<a href="pedido.php"><li>PEDIDO</li></a>
				</ul>
			</nav>
		</header>
		

		<section id="contenido">
			<div class="cycle-slideshow" 
			    data-cycle-fx=shuffle
			    data-cycle-timeout=2000>
			    <!-- empty element for pager links -->
			    <div class="cycle-pager"></div>
			    <img src="images/slide_01.jpg">
			    <img src="images/slide_02.jpg">
			    <img src="images/slide_03.jpg">
			</div>
			<div class="mensaje">
				<center>¡Gracias por su compra!</center>
			</div>
		</section>


		<aside>
			<a href="contacto.php"><img src="images/contactanos.png" alt=""></a>
			<ul>
				<a href=""><li><img src="images/facebook.png" alt=""></li></a>
				<a href=""><li><img src="images/twitter.png" alt=""></li></a>
			</ul>
		</aside>
		<footer>
			<figure id="utc">
				<img src="images/render.png" alt="">
			</figure>
			<div id="team">
				<p>Papeleria La Ideal, Ubicada entre Ocampo y Gonzales Treviño</p>
				<p>
					Alejandro Reyes Cerecero <br> 
				</p>
			</div>
		</footer>

	</div>

</body>
</html>