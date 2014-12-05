<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 06:04 PM
 */
require('template/header.php');
$titulo = 'Bienvenidos a contacto';
$contenido = '...';

$variables = array('titulo' => $titulo, 'contenido'=>$contenido);

view('contacto',$variables);//aqui le indico que la vista la va a obtener de contacto