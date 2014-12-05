<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 17/10/14
 * Time: 06:22 PM
 */
$usuario02 = new Usuario();

?>
<html>
    <head></head>
    <body>
        <h1><?=$titulo?></h1>
        <p><?=$contenido?><p>
        <p><?=$nombre?></p>
        <p>
            <?php
                $usuario02->setUsuario();
                $usuario02->getUsuario();
                $usuario02->Read_General();
            ?>
        </p>

    </body>
</html>