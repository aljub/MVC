<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 05:55 PM
 */


function view($plantilla,$variables = array()){
    extract($variables);//los extrae y los asigna a variables independientes
    require('views/'.$plantilla.'.tpl.php');

}

function controller($nombre){
    if(empty($nombre))
        $nombre = 'home';

    $archivo = "controllers/$nombre.php";

    if(file_exists($archivo))
        require($archivo);
		else
            echo"Error archivo no encontrado";
}
