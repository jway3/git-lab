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

$f3->route('GET /page1',
    function() {
        $view = new View;
        echo $view->render('views/page1.html');
    });

$f3->route('GET /page2',
    function() {
        $view = new View;
        echo $view->render('views/page2.html');
    });

$f3->route('GET /page3',
    function() {
        $view = new View;
        echo $view->render('views/page3.html');
    });

$f3->run();