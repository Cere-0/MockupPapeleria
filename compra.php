<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Papeleria La Ideal</title>
	<link rel="stylesheet" href="css/estilos.css">
<style>
div#tabla{
	width: 80%;
	margin: auto;
	box-shadow: 0 5px 5px rgba(0,0,0,0.4);
	background: linear-gradient(#a8a8a8, #6f6f6f);
	border-radius: 1.2rem;
	padding: 1rem 0;
}
.row{text-align: center;}
div.celda1, div.celda2, div.celdas{
	display: inline-block;
	padding: .2rem 0;}
div.celda1{
	text-align: right;
	width: 15%;}
div.celda2{
	text-align: left;
	width: 60%;}
div.celda2 > input{
	border-radius: .25rem;
	color: black;
	height: 1.5rem;
	width: 100%;}
div.celdas{
	text-align: left;
	width: 60%;}
div.celdas >input:nth-child(1){
	border-radius: .25rem;
	color: black;
	height: 1.5rem;
	width: 60%;}
div.celdas >input:nth-child(2){
	border-radius: .25rem;
	color: black;
	height: 1.5rem;
	width: 30%;}
div.Titulo{
	padding: .7rem 0;
	font-size: 1.2rem;
	color: #FFF;}
div.boton{
	padding: 0;
	text-align: right;}
div.boton > input{
	font-size: 1.19rem;
	box-shadow: 0 2px 5px rgba(0,0,0,0.5);
	color: #656565;
	margin: .5rem auto 0;
	width: 20%;
	display: block;
	background: #ABABAB;
	padding: .5rem 1rem;
	border-radius: .5rem;
	font-weight: bolder;
	transition: all .3s ease-out;
}
div.boton > input:hover{
	width: 30%;
	transition: all .3s ease-out;
	color: #ABABAB;
	background: #656565;}
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
			<div id="tabla">
				<form action="confirmacion-compra.php" method="post">
					 <div class="Titulo">Informacion del Cliente</div>
					 <div class="row">
					 	<div class="celda1">Nombre:</div>
						<div class="celda2"><input type="text" name="nombre" size=30 required></div>
					</div>
					 <div class="row">
					 	<div class="celda1">Apellido:</div>
						<div class="celda2"><input type="text" name="apellido" size=30 required></div>
					</div>
					 <div class="row">
					 	<div class="celda1">Email:</div>
						<div class="celda2"><input type="text" name="email" size=30 required></div>
					</div>
					<div class="row">
					 	<div class="celda1">Telefono:</div>
						<div class="celda2"><input type="text" name="telefono" size=30 maxlength=15 required></div>
					</div>
					<div class="Titulo">Direccion de envio </div>
					<div class="row">
					 	<div class="celda1">Estado:</div>
						<div class="celda2"><input type="text" name="estado" size=30 required></div>
					</div>
					<div class="row">
					 <div class="celda1">Ciudad:</div>
						<div class="celda2"><input type="text" name="ciudad" size=30 required></div>
					</div>
					<div class="row">
					 	<div class="celda1">CPostal:</div>
						<div class="celda2"><input type="text" name="cp" size=30 required></div>
					</div>
					<div class="row">
					 	<div class="celda1">Calle:</div>
						<div class="celdas">
							<input type="text" name="calle" size=19 required>
							#:
							<input type="text" name="numero" size=5 maxlength=10 required>
						</div>
					</div>
					<div class="boton"><input type="submit" value="siguiente"></div>
				</form>
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