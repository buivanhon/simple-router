<?php

$router->get('', 'IndexController@index');
$router->get('about', 'AboutController@show');
$router->post('article', 'IndexController@store');

?>