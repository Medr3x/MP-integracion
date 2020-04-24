
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/6.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://integracion-mp.herokuapp.com/assets/style.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>Tienda e-commerce</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
<style type="text/css">
button.mercadopago-button {
  background-color: #2D3277;
}
</style>
<body>
    <?php
    require ('vendor/autoload.php');

    // $_clientId = "8196777983571350";
    // $_secretId = "qe5ICWOHsP0dIhCzKwj9i99xS5UH4sGQ";
    // $_setPublicKey = "APP_USR-a83913d5-e583-4556-8c19-d2773746b430";
    $_setAccessToken = "APP_USR-6317427424180639-090914-5c508e1b02a34fcce879a999574cf5c9-469485398";

    // MercadoPago\SDK::setClientId($_clientId);
    // MercadoPago\SDK::setClientSecret($_secretId);
    // MercadoPago\SDK::setPublicKey($_setPublicKey);
    MercadoPago\SDK::setAccessToken($_setAccessToken);

    $preference->external_reference = "ABCD1234";

    $preference->notification_url = "https://integracion-mp.herokuapp.com/notifications.php";

    $preference->payment_methods  = [
                                        'default_installments' => 6,    # 6 Cuota
                                        'excluded_payment_types' => [ 
                                            ['id' => 'amex'],         # American Express
                                            ['id' => 'atm']           # tampoco deposito
                                        ]
                                    ];

    $item = new MercadoPago\Item();
    $item->id               = $_GET['id'];
    $item->title            = $_GET['title']; 
    $item->description      = $_GET['description']; 
    $item->picture_url      = $_GET['img'];
    $item->quantity         = $_GET['unit'];
    $item->unit_price       = $_GET['price'];

    $preference->items = [$item];

    //Datos del Usuario 

    $payer = new MercadoPago\Payer();

    $payer->name = "Lalo";
    $payer->surname = "Landa";
    $payer->email = "test_user_63274575@testuser.com";

    $payer->identification = array(
        "area_code" => "011",
        "number" => "2222-3333"
    );

    $payer->identification = array(
        "type" => "DNI",
        "number" => "22333444"
    );

    $payer->address = array(
        "street_name" => "Falsa",
        "street_number" => 123,
        "zip_code" => "1111"
    );

    # Return the HTML code for button
    $preference->back_urls = array(
                    "success" => "https://integracion-mp.herokuapp.com/success.php",
                    "failure" => "https://integracion-mp.herokuapp.com/failure.php",
                    "pending" => "https://integracion-mp.herokuapp.com/pending.php"
                );

    $preference->auto_return = "approved";
    $preference->payer = $payer;

    $preference->save(); # Save the preference and send the HTTP Request to create
    
    ?>

    <div class="wrap">
        <center><h1>Tienda e-commerce</h1></center>
            <div class="row">
            <div class="col-sm-3">
            <img src="<?php echo $_GET['img'] ?>" class="img-item" style="width: 200px;height: 260px; margin-top: 30px;"></img>
            </div>
            <div class="col-sm-9" style="margin-top: 50px; padding-left: 50px">
                <h4> <?php echo $_GET['title'] ?> </h4>
                <h4>Cantidad: <?php echo $_GET['unit'] ?></h4>
                <h4>Precio: $ <?php echo $_GET['price'] ?></h4>
                <form action="/procesar-pago" method="POST">
                  <script
                   src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                   data-preference-id="<?php echo $preference->id; ?>" data-button-label="Pagar la compra" data-elements-color="#2D3277" >
                  </script>
                </form>
            </div>
            </div>
    </div>
</body>
</html>