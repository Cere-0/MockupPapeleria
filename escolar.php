<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Papeleria La Ideal</title>
	<link rel="stylesheet" href="css/estilos.css">
<style>
div#productos{
	padding: .8rem 0 0;
	margin: 1rem .5rem;
	border-radius: .5rem;
	box-shadow: 0 5px 5px rgba(0,0,0,0.4);
	width: 30%;
	height: 13rem;
	display: inline-block;
	vertical-align: top;
	background: linear-gradient(#a8a8a8, #6f6f6f);
	transition: all .4s ease-out;
}
div#productos img{
	width: 170px;
	border-radius: 1rem;
	border: .1rem solid #6F6F6F;
}
a:hover div#productos{
	background: linear-gradient(#6f6f6f, #a8a8a8);
	box-shadow: 0 10px 7px rgba(0,0,0,0.3);
	transition: all .5s ease-in;
}
</style>
</head>
<body>
<?php
include 'conexion.php';
$re=mysql_query("select * from productos where id='escolar'")or die(mysql_error());
?>
	<div id="contenedor">

		<header>
			<div id="logo">
				<img src="images/logo.png" alt="">
			</div>
			<nav id="nav">
				<ul>
					<a href="index.html"><li>INICIO</li></a>
					<a href="escolar.html"><li>ESCOLAR</li></a>
					<a href="oficina.html"><li>OFICINA</li></a>
					<a href="pedido.html"><li>PEDIDO</li></a>
				</ul>
			</nav>
		</header>
		

		<section id="contenido">
		<?php
		while ($f=mysql_fetch_array($re)) {
		?>
			<a href="detalles.php?id=<?php echo $f['num'];?>">
				<div id="productos">
					<img src="images/<?php echo $f['imagen'];?>" alt=""><br>
					<?php echo $f['tipo'];?>
				</div>
			</a>
		<?php
		}
		?>
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