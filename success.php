<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

$_setAccessToken = "APP_USR-6317427424180639-090914-5c508e1b02a34fcce879a999574cf5c9-469485398";
$payment_id = $_POST["payment_id"];

$curl_init = curl_init();
curl_setopt($curl_init, CURLOPT_URL, "https://api.mercadopago.com/v1/payments/$payment_id?access_token=$_setAccessToken");
curl_setopt($curl_init, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl_init);
curl_close($curl_init);

$json_response = json_decode($response);

$pedido_id = $json_response->order->id;
$payment_method_id = $json_response->payment_method_id;
$monto = $json_response->transaction_amount;
?>
<html lang="en">
<head>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>
<body>
	<center><h1>Tienda e-commerce</h1></center>
    <center style="margin-top:50px">
      <h1>El pago ah sido realizado con <b style="color:orange"></b>Exito!</h1>
	  <p>ID de MercadoPago: <?php $payment_id ?> </p>
	  <p>Número de órden: <?php $pedido_id ?> </p>
	  <p>Payment method id:<?php $payment_method_id ?> </p>
	  <p>Monto:<?php $monto ?></p>
	  <a class="btn btn-info" href="https://integracion-mp.herokuapp.com">Inicio</a>
	</center>
  	<!-- <p></p> -->
</body>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
</html>