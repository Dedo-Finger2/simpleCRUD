<?php

$routes = [
    '/' => 'HomeController@index',
    '/users' => 'UserController@index',
    '/create' => 'UserController@create',
    '/store' => 'UserController@store',
    '/user/{id}/edit' => 'UserController@edit',
    '/update' => 'UserController@update',
    '/user/{id}/show' => 'UserController@show',
    '/user/{id}/delete' => 'UserController@destroy',
];
