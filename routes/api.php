<?php

$router->get('/', function () {
    return response()->json([
        'api' => 'school-server-api',
        'description' => 'school system api'
    ]);
});

$router->post('auth/login', [
    'uses' => 'AuthController@authenticate',
    'as' => 'api.auth.login'
]);

$router->get('/state/farmers_excel_no_user', [
    'uses' => 'StateController@dowloadFarmersNoUser',
    'as' => 'api.state.dowloadFarmersNoUser'
]);
$router->group(['middleware' => 'jwt.auth'], function () use ($router) {
    ///////////// auth methods
    $router->get('/auth/me', [
        'uses' => 'AuthController@me',
        'as' => 'api.auth.me'
    ]);

    $router->get('/auth/users/{id}', [
        'uses' => 'AuthController@getUser',
        'as' => 'api.auth.get'
    ]);

    $router->get('/auth/users', [
        'uses' => 'AuthController@getUsers',
        'as' => 'api.auth.getAll'
    ]);

    $router->post('/auth/users', [
        'uses' => 'AuthController@createUser',
        'as' => 'api.auth.create'
    ]);

    $router->delete('/auth/users/{id}', [
        'uses' => 'AuthController@delete',
        'as' => 'api.auth.delete'
    ]);

    $router->put('/auth/users/{id}', [
        'uses' => 'AuthController@update',
        'as' => 'api.auth.update'
    ]);

    // farmers

    $router->get('/farmers/{id}', [
        'uses' => 'FarmerController@get',
        'as' => 'api.farmers.get'
    ]);

    $router->get('/farmers', [
        'uses' => 'FarmerController@getAll',
        'as' => 'api.farmers.getAll'
    ]);

    $router->post('/farmers', [
        'uses' => 'FarmerController@create',
        'as' => 'api.farmers.create'
    ]);

    $router->delete('/farmers/{id}', [
        'uses' => 'FarmerController@delete',
        'as' => 'api.farmers.delete'
    ]);

    $router->put('/farmers/{id}', [
        'uses' => 'FarmerController@update',
        'as' => 'api.farmers.update'
    ]);

    $router->post('/farmers/img1/{id}', [
        'uses' => 'FarmerController@uploadImg1',
        'as' => 'api.farmers.uploadImg1'
    ]);

    $router->post('/farmers/img2/{id}', [
        'uses' => 'FarmerController@uploadImg2',
        'as' => 'api.farmers.uploadImg2'
    ]);

    $router->post('/farmers/img3/{id}', [
        'uses' => 'FarmerController@uploadImg3',
        'as' => 'api.farmers.uploadImg3'
    ]);

    // state

    $router->get('/state/numbers_farmers_users', [
        'uses' => 'StateController@getNumbersFarmersAndUsers',
        'as' => 'api.state.getNumbersFarmersAndUsers'
    ]);
       
    $router->get('/state/farmers_excel', [
        'uses' => 'StateController@dowloadFarmers',
        'as' => 'api.state.dowloadFarmers'
    ]);
});
