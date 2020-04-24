<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
    <link rel="stylesheet" href="./assets/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>Tienda e-commerce</title>
</head>
<body>
<div class="wrap">
	<center><h1>Tienda e-commerce</h1></center>
    <center style="margin-top:50px"><h1>El pago ha sido<b style="color: green"> Exitoso!</b></h1></center>
        <?php print_r($_REQUEST); ?>
    <center>
        
    </center>
</body>
</html>

<!-- payment_method_id que se usó para pagar, el monto pagado, el número de orden del pedido y el ID de pago de Mercado Pago (approved)


{"billing_address":{"first_name":"Prueba","last_name":"Meemba","email":"medero1025@gmail.com","street":"Alvear","number":"1434","flat_apartment":null,"type":"billing","country":"1","state":"2","city":"11076","postal_code":"1842","tax_regime_id":"2","identification_type":"cuit","identification_number":"20406649068","company":"diego sa"},"payment_reference":"{\"metodo\":\"MercadoPago\",\"collection_id\":\"6281837871\",\"collection_status\":\"approved\",\"external_reference\":\"27\",\"payment_type\":\"credit_card\",\"merchant_order_id\":\"1291358952\",\"preference_id\":\"532022302-f5bbcbe4-68be-44b8-bbed-6f75314bf742\",\"site_id\":\"MLA\",\"processing_mode\":\"aggregator\",\"merchant_account_id\":\"null\"}","gateway":"MercadoPago","payment_status":"paid"} -->