<?php
/**
 * Created by PhpStorm.
 * User: alberto
 * Date: 16/10/14
 * Time: 05:48 PM
 */
require('db/db.php');
require('helpers.php');
require('Clases/Usuario.php');


if(empty($_GET['url']))
    $_GET['url'] = 'home';

controller($_GET['url']);

