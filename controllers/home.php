<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 06:03 PM
 */
/*estas primeras dos lineas se pueden sustituir por una consulta y despues esa consulta se mete en un array*/
require('template/header.php');


$titulo = 'Bienvenidos a home';
$contenido = 'home';

$variables = array('titulo' => $titulo, 'contenido'=>$contenido);

view('home',$variables);//aqui le indico que la vista la va a obtener de home