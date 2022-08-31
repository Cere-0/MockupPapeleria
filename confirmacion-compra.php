<?php
session_start();
$datoscompra=$_SESSION['carrito'];

$datoscliente[]=array();
$datoscliente['Nombre']=$_POST['nombre'];
$datoscliente['Apellido']=$_POST['apellido'];
$datoscliente['Email']=$_POST['email'];
$datoscliente['Telefono']=$_POST['telefono'];
$datoscliente['Estado']=$_POST['estado'];
$datoscliente['Ciudad']=$_POST['ciudad'];
$datoscliente['CP']=$_POST['cp'];
$datoscliente['Calle']=$_POST['calle'];
$datoscliente['Numero']=$_POST['numero'];


$_SESSION['cliente']=$datoscliente;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Papeleria La Ideal</title>
	<link rel="stylesheet" href="css/estilos.css">
<style>
div#tabla{
	width: 90%;
	margin: auto;
	box-shadow: 0 5px 5px rgba(0,0,0,0.4);
	background: linear-gradient(#a8a8a8, #6f6f6f);
	border-radius: 1.2rem;
	padding: 1rem 0;
}
#compra{
	margin-top: 1rem;
	padding-right: .3rem;
	text-align: right;
	width: 40%;}
#producto{
	border-right: .01rem solid #8eabbc;
	padding-bottom: .5rem;}
#compra, #cliente{
	display: inline-block;
	vertical-align: top;}
#cliente{
	margin-top: 1rem;
	padding-left: .3rem;
	text-align: left;
	min-width: 35%;}
#cliente span{color: #fef102;}
#monto{
	color: red;
	padding-top: .3rem;
	text-align: right;}
#monto span{
	color: red;
	text-decoration: underline;}
#detalle-pago{
	margin-top: .7rem;
	text-align: center;}
#detalle-pago span:nth-child(1){
	color: #cf007a;
	font-size: 1.4rem;
	font-weight: bold;}
#detalle-pago span:nth-child(2){
	color: #fef102;
	font-weight: bold;}
#detalle-pago p{
	margin: .6rem auto 0 auto;
	text-align: justify;
	width: 80%;}
#detalle-pago img{
	width: 15%;
	margin-bottom: 1rem;}
#detalle-pago a{
	box-shadow: 0 2px 5px rgba(0,0,0,0.5);
	color: #656565;
	margin: .5rem auto 0;
	width: 30%;
	display: inline-block;
	background: #ABABAB;
	padding: .5rem 1rem;
	border-radius: .5rem;
	font-weight: bolder;
	transition: all .3s ease-out;}
#detalle-pago a:hover{
	width: 35%;
	transition: all .3s ease-out;
	color: #ABABAB;
	background: #656565;}
.miniatura, .detalles{
	display: inline-block;
	vertical-align: top;}
.miniatura{width: 25%;}
.miniatura img{width: 100%;}
.detalles{
	text-align: left;
	width: 70%;}
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
				<div id="compra">				
						<?php
						$total=0;
						$envio=0;
						$totalenvio=0;
						for ($i=0;$i<count($datoscompra);$i++) { 
						?>
					<div id="producto">
						<div class="miniatura">
							<img src="./images/<?php echo $datoscompra[$i]['Imagen'];?>">
						</div>
						<div class="detalles">
							<? echo $datoscompra[$i]['Nombre'];?> <br>
							Cantidad: <?php echo $datoscompra[$i]['Cantidad'];?> <br>
							Precio: <? echo $datoscompra[$i]['Precio'];?>
						<?php
						$total=($datoscompra[$i]['Cantidad']*$datoscompra[$i]['Precio'])+$total;
						?>
						</div>
					</div>
						<?php }	?>

					<div id="monto">
					<?php
						$envio=150;
						$totalenvio=$total+$envio;
					?>
						Subotal: $ <?php echo($total);?><br>
						<span>Envio: $ <?php echo($envio);?></span><br>
						Total: $ <?php echo($totalenvio);?>
					</div>
				</div>

				<div id="cliente">
					<span>Entregar a: </span><br>
					<?php echo $datoscliente['Nombre'];?> <?php echo $datoscliente['Apellido'];?> <br>
					<?php echo $datoscliente['Calle'];?> <?php echo $datoscliente['Numero'];?> <br>
					<?php echo $datoscliente['CP'];?> <br>
					<?php echo $datoscliente['Ciudad'];?>, <?php echo $datoscliente['Estado'];?><br>
					<span>Email:</span>
					<?php echo $datoscliente['Email'];?><br>
					<span>Telefono :</span>
					<?php echo $datoscliente['Telefono'];?><br>
				</div>					

				<div id="detalle-pago">
					<span>Metodo de pago: </span><span>Deposito/transferencia bancaria.</span>
					<p>
						Al confirmar tu compra se te hará llegar a tu direccion de correo electronico,nuestro(s) 
						numero(s) de cuenta(s) en los que podras realizar el deposito o transferencia bancaria.
					</p>
					<img src="./images/bancos.jpg">
					<div id="botones">
						<a href="pedido.php">Corregir datos</a>
						<a href="envio_mensaje.php">Realizar compra</a>
					</div>
				</div>
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