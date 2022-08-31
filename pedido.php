<?php
session_start();
include './conexion.php';
	if(isset($_SESSION['carrito'])){
		if(isset($_GET['id'])){
				$arreglo=$_SESSION['carrito'];
				$encontro=false;
				$numero=0;
				for ($i=0;$i<count($arreglo);$i++){ 
					if ($arreglo[$i]['Id']==$_GET['id']){
						$encontro=true;
						$numero=$i;
					}
				}
				if ($encontro==true) {
					$arreglo[$numero]['Cantidad']=$arreglo[$numero]['Cantidad']+1;
					$_SESSION['carrito']=$arreglo;
				}else{
					$nombre="";
					$precio=0;
					$imagen="";
					$re=mysql_query("select * from productos where num=".$_GET['id']);
					while ($f=mysql_fetch_array($re)) {
						$nombre=$f['descripcion'];
						$precio=$f['precio'];
						$imagen=$f['imagen'];
					}
					$datosnuevos=array('Id'=>$_GET['id'],
									'Nombre'=>$nombre,
									'Precio'=>$precio,
									'Imagen'=>$imagen,
									'Cantidad'=>1);
					array_push($arreglo, $datosnuevos);
					$_SESSION['carrito']=$arreglo;
				}
		}

	}else{
		if(isset($_GET['id'])){
			$nombre="";
			$precio=0;
			$imagen="";
			$re=mysql_query("select * from productos where num=".$_GET['id']);
				while ($f=mysql_fetch_array($re)) {
					$nombre=$f['descripcion'];
					$precio=$f['precio'];
					$imagen=$f['imagen'];
				}
					$arreglo[]=array('Id'=>$_GET['id'],
									'Nombre'=>$nombre,
									'Precio'=>$precio,
									'Imagen'=>$imagen,
									'Cantidad'=>1);
					$_SESSION['carrito']=$arreglo;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
	<title>Papeleria La Ideal</title>
	<link rel="stylesheet" href="css/estilos.css">
<style>
div.producto{
	padding: 1rem 0;
	margin: 1rem auto;
	width: 70%;
	box-shadow: 0 5px 5px rgba(0,0,0,0.4);
	background: linear-gradient(#a8a8a8, #6f6f6f);
	border-radius: 1.2rem;
}
div.producto figure, div.producto div{
	margin: 0 .5rem;
	display: inline-block;
	vertical-align: middle;
}
div.producto figure{
	width: 40%;
	border-radius: .7rem;
}
div.producto div{
	width: 50%;
}
div.producto figure img{
	border: .1rem solid #6F6F6F;
	width: 100%;
	border-radius: .7rem;
}
div.producto div span{
	font-weight: bolder;
	color: #C00D0D;
}
div.producto div p{
	color: #FFF;
	margin: 1rem 0;
	text-align: left;
}
div.producto div a{
	display: block;
	text-align: right;
}
div.producto div a img{
	width: 15%;
}
div#totales{
	margin: 1rem auto;
	padding: 1rem 0;
	border-radius: 1rem 3rem;
	box-shadow: 0 5px 5px rgba(0,0,0,0.4);
	width: 50%;
	background: #7B7B7B;
}
div#totales > span:first-child{
	font-size: .8rem;
	color: #ABABAB;
}
div#totales > span{
	font-size: 1.2rem;
	color: red;
	font-weight: bolder;
}
div#totales a{
	box-shadow: 0 2px 0 rgba(0,0,0,0.5);
	color: #656565;
	margin: .5rem auto 0;
	width: 40%;
	display: block;
	background: #ABABAB;
	padding: .5rem 1rem;
	border-radius: .5rem;
	font-weight: bolder;
	transition: all .3s ease-out;
}
div#totales a:hover{
	width: 50%;
	font-size: 1.3rem;
	transition: all .3s ease-out;
	color: #ABABAB;
	background: #656565;
}
div#vacio{
	color: white;
	text-align: center;
	padding: 1rem 0;
	margin: 1rem auto;
	width: 70%;
	box-shadow: 0 5px 5px rgba(0,0,0,0.4);
	text-shadow: 0 5px 5px rgba(0,0,0,0.4);
	background: linear-gradient(#a8a8a8, #6f6f6f);
	border-radius: 1.2rem;
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
					<a href="index.html"><li>INICIO</li></a>
					<a href="escolar.html"><li>ESCOLAR</li></a>
					<a href="oficina.html"><li>OFICINA</li></a>
					<a href="pedido.html"><li>PEDIDO</li></a>
				</ul>
			</nav>
		</header>
		
<?php
if (isset($_SESSION['carrito'])) {
	$datos=$_SESSION['carrito'];
	$total=0;
?>
		<section id="contenido">
			<?php
			for ($i=0; $i < count($datos); $i++) { 
			?>
				<div class="producto">
					<figure>
						<img src="./images/<?php echo $datos[$i]['Imagen'];?>"><br>
					</figure>
					<div>
						<span class="nombre"><?php echo $datos[$i]['Nombre'];?></span><br>
						<p>
							Precio: $ <?php echo $datos[$i]['Precio'];?><br>
							Cantidad: <?php echo $datos[$i]['Cantidad'];?><br>
							Subtotal: $ <?php echo $datos[$i]['Precio']*$datos[$i]['Cantidad'];?>
						</p>
						<a href="eliminar.php?id=<?php echo($i);?>"><img src="images/eliminar.png" alt=""></a>
					</div>		
				</div>
			<?php
				$total=($datos[$i]['Cantidad']*$datos[$i]['Precio'])+$total;
			?>
			<?php
			}
			$envio=150;
			$pago=$total+$envio;
			?>
				<div id="totales">
					<span>
						Subtotal: $ <?php echo($total)?><br>
						Gasto de envio: $ 150
					</span><br>
					<span>Total: $ <?php echo($pago)?></span><br>
					<a href="compra.php">Comprar</a>
				</div>

<?php
}else{
?>
	<div id="vacio"><h2>El carrito de compras esta vacio</h2></div>
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