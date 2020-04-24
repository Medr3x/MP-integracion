
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

<!------ Include the above in your HEAD tag ---------->
</head>
<body>
<div class="wrap">
	<center><h1>Tienda e-commerce</h1></center>
    <div class="menu">
        <div class="mini-menu">
        	<center style="padding: 10px; background: #dadada"><span style="color: #333; font-size: 15px; padding: 10px">Smartphones</span></center>
            <ul>
		        <li><a href="#">Apple</a></li>
		        <li><a href="#">LG</a></li>
		        <li><a href="#">Motorola</a></li>
		        <li><a href="#">Samsung</a></li>
		        <li><a href="#">Huawei</a></li>
		        <li><a href="#">Sony</a></li>
		    </ul>
        </div>
    </div>

    <div class="items">
        
  <div class="items">
        <div data-price="15000" class="item form-post" style=" cursor:pointer; cursor: hand">
        	<form action="https://integracion-mp.herokuapp.com/detail.php" method="post">
            	<img src="https://integracion-mp.herokuapp.com/assets/samsung-galaxy-s9-xxl.jpg" alt="samsung" class="img-item"></img>
                <input type="hidden" name="img" value="https://integracion-mp.herokuapp.com/assets/samsung-galaxy-s9-xxl.jpg">
                <input type="hidden" name="title" value="Samsung Galaxy S9">
                <input type="hidden" name="price" value="15000">
                <input type="hidden" name="unit" value="1">
                <input type="hidden" name="description" value="Dispositivo móvil de Tienda e-commerce">
                <input type="hidden" name="id" value="1234">
                <div class="info">
                    <h3>Samsung Galaxy S9</h3>
                    <h5>$15.000</h5>
                </div>
            </form>
        </div>
        <div data-price="12000" class="item form-post" style=" cursor:pointer; cursor: hand">
        	<form action="https://integracion-mp.herokuapp.com/detail.php" method="post">
            	<img src="https://integracion-mp.herokuapp.com/assets/l6g6.jpg" alt="samsung" class="img-item"></img>
                <input type="hidden" name="img" value="https://integracion-mp.herokuapp.com/assets/l6g6.jpg">
                <input type="hidden" name="title" value="LG G6">
                <input type="hidden" name="price" value="12000">
                <input type="hidden" name="unit" value="1">
                <input type="hidden" name="description" value="Dispositivo móvil de Tienda e-commerce">
                <input type="hidden" name="id" value="1234">
                <div class="info">
                    <h3>LG G6</h3>
                    <h5>$12.000</h5>
                </div>
            </form>
        </div>
        <div data-price="18000" class="item form-post" style=" cursor:pointer; cursor: hand">
        	<form action="https://integracion-mp.herokuapp.com/detail.php" method="post">
            	<img src="https://integracion-mp.herokuapp.com/assets/u_10168742.jpg" alt="samsung" class="img-item"></img>
                <input type="hidden" name="img" value="https://integracion-mp.herokuapp.com/assets/u_10168742.jpg">
                <input type="hidden" name="title" value="iPhone 8">
                <input type="hidden" name="price" value="18000">
                <input type="hidden" name="unit" value="1">
                <input type="hidden" name="description" value="Dispositivo móvil de Tienda e-commerce">
                <input type="hidden" name="id" value="1234">
                <div class="info">
                    <h3>iPhone 8</h3>
                    <h5>$18.000</h5>
                </div>
            </form>
        </div>
        <div data-price="16000" class="item form-post" style=" cursor:pointer; cursor: hand">
        	<form action="https://integracion-mp.herokuapp.com/detail.php" method="post">
            	<img src="https://integracion-mp.herokuapp.com/assets/motorola-moto-g5-plus-1.jpg" alt="samsung" class="img-item"></img>
                <input type="hidden" name="img" value="https://integracion-mp.herokuapp.com/assets/motorola-moto-g5-plus-1.jpg">
                <input type="hidden" name="title" value="Motorola G5">
                <input type="hidden" name="price" value="16000">
                <input type="hidden" name="unit" value="1">
                <input type="hidden" name="description" value="Dispositivo móvil de Tienda e-commerce">
                <input type="hidden" name="id" value="1234">
                <div class="info">
                    <h3>Motorola G5</h3>
                    <h5>$16.000</h5>
                </div>
            </form>
        </div>
        <div data-price="10000" class="item form-post" style=" cursor:pointer; cursor: hand">
        	<form action="https://integracion-mp.herokuapp.com/detail.php" method="post">
            	<img src="https://integracion-mp.herokuapp.com/assets/motorola-moto-g4-3.jpg" alt="samsung" class="img-item"></img>
                <input type="hidden" name="img" value="https://integracion-mp.herokuapp.com/assets/motorola-moto-g4-3.jpg">
                <input type="hidden" name="title" value="Moto G4">
                <input type="hidden" name="price" value="10000">
                <input type="hidden" name="unit" value="1">
                <input type="hidden" name="description" value="Dispositivo móvil de Tienda e-commerce">
                <input type="hidden" name="id" value="1234">
                <div class="info">
                    <h3>Moto G4</h3>
                    <h5>$10.000</h5>
                </div>
            </form>
        </div>
        <div data-price="13000" class="item form-post" style=" cursor:pointer; cursor: hand">
        	<form action="https://integracion-mp.herokuapp.com/detail.php" method="post">
            	<img src="https://integracion-mp.herokuapp.com/assets/003.jpg" alt="samsung" class="img-item"></img>
                <input type="hidden" name="img" value="https://integracion-mp.herokuapp.com/assets/003.jpg">
                <input type="hidden" name="title" value="Sony Xperia XZ2">
                <input type="hidden" name="price" value="13000">
                <input type="hidden" name="unit" value="1">
                <input type="hidden" name="description" value="Dispositivo móvil de Tienda e-commerce">
                <input type="hidden" name="id" value="1234">
                <div class="info">
                    <h3>Sony Xperia XZ2</h3>
                    <h5>$13.000</h5>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
</body>
<script
  src="https://code.jquery.com/jquery-3.2.1.min.js"
  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  crossorigin="anonymous"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).on('click','.form-post',function(){
	    $(this).children('form').submit();
	});
</script>

</html>