<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Papeleria La Ideal</title>
	<link rel="stylesheet" href="css/estilos.css">
<style>
div#producto{
	margin: 1rem auto;
	background: linear-gradient(#a8a8a8, #6f6f6f);
	border-radius: 1rem;
	box-shadow: 0px 5px 10px rgba(0,0,0,0.4);
	border: .1rem solid #858585;
}
figure#img-producto, div#detalles-producto{
	margin-top: 1rem;
	display: inline-block;
	vertical-align: middle;
	text-align: left;
}
figure#img-producto{
	width: 30%;
}
figure#img-producto img{
	border-radius: .9rem;
	border: .1rem solid #6F6F6F;
}
div#detalles-producto{
	margin: 0 0 0 1rem;
	width: 50%;
}
span{
	color: red;
	font-weight: bolder;
}
</style>
</head>
<body>
<?php
include 'conexion.php';
$re=mysql_query("select * from productos where num=".$_GET['id'])or die(mysql_error());
$f=mysql_fetch_array($re);
?>
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
			<div id="producto">
				<figure id="img-producto">
					<img src="images/<?php echo $f['imagen'];?>" alt="">
				</figure>
				<div id="detalles-producto">
					<span>Descripcion:</span><br>
					<strong><?php echo $f['tipo'];?></strong><br>
					<?php echo $f['descripcion'];?><br>
					<span>Precio:</span> <strong>$<?php echo $f['precio'];?></strong>
				</div>
				<figure id="add-producto">
					<a href="pedido.php?id=<?php echo $f['num'];?>">
						<img src="images/agregarcarrito.png" alt="">
					</a>
				</figure>
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