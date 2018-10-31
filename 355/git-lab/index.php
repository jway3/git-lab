<?php
/**
 * Created by PhpStorm.
 * User: ABDALLA
 * Date: 10/30/2018
 * Time: 6:50 PM
 */

require_once ('vendor/autoload.php');

$f3 = Base::instance();

$f3->route('GET /', function (){
    echo '<h1>Git Lab</h1>';
}
);

$f3->run();