<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 06:03 PM
 */
require('template/header.php');
$titulo = 'Bienvenidos a GALERIA';
$contenido = '...';

$variables = array('titulo' => $titulo, 'contenido'=>$contenido);

view('galeria',$variables);//aqui le indico que la vista la va a obtener de galeria