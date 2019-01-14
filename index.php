<?php
/**
 * Created by PhpStorm.
 * User: brook
 * Date: 1/9/2019
 * Time: 10:06 AM
 */

ini_set('display_errors',1);
error_reporting(E_ALL);

require_once('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();

//define a default route
$f3->route('GET /', function(){
    $view = new View;
    echo $view->render('views/home.html');
});

//define a breakfast route
$f3 -> route('GET /breakfast',function(){
   $view = new View;
   echo $view -> render('views/breakfast.html');
});

//define a lunch route
$f3 -> route('GET /lunch',function(){
    $view = new View;
    echo $view -> render('views/lunch.html');
});
//run fat free
$f3->run();

