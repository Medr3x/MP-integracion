<?php
    function redirect_post($url, array $data)
    {
?>
    <html>
    <head>
    <script type="text/javascript">
            function closethisasap() {
                document.forms["redireccion"].submit();
            }
    </script>
    </head>
    <body onload="closethisasap();">
    <form name="redireccion" method="post" action="<? echo $url; ?>">
        <?php
            if ( !is_null($data) ) {
                foreach ($data as $name => $value) {
                    echo '<input type="hidden" name="' . $name . '" value="' . $value . '"> ';
                }
            }
        ?>
    </form>
    </body>
    </html>
<?php
    exit;
}


redirect_post($_POST["back_url"], $_POST);