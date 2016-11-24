<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('test', ['middleware' => 'old', function (){
    return "Totul merge in regula!";
}]);

$app->get('user', function (){
    return "hello world!";
});

$app->get('andra/{age}/location/{city}', function ($age, $city){
    return "Andra are " . $age . " ani. Ea locuieste in " . $city .".";
});

$app->get('andra/{age}', function ($age){
    return "Andra are " . $age . " ani.";
});

//Controllers
 $app->get('controller_the_best/{id}', 'NewController@show');

$app->get('controller/{id}', ['uses' => 'NewController@show']);
