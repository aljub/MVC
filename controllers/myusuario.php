<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 17/10/14
 * Time: 06:22 PM
 */
require('template/header.php');

$usuario = new Usuario();

$titulo = "Bienvenido al Myusuario";
$contenido = "contenido de la variable ...";

$variables = array('titulo'=>$titulo,
'contenido'=>$contenido,
'nombre'=>$usuario->setUsuario());

view('myusuario',$variables);








?>