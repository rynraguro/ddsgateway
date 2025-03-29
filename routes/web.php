<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->get('/', function () {
    return response()->json(['message' => 'Lumen is working!']);
});



// Routes for User1 Microservice
$router->get('/users1', 'User1Controller@index');          // Get all users from Site1
$router->post('/users1', 'User1Controller@add');             // Create a new user on Site1
$router->get('/users1/{id}', 'User1Controller@show');
$router->get('/users1/{id}', 'User1Controller@update');        // Get a specific user from Site1
$router->put('/users1/{id}', 'User1Controller@update');      // Update a user on Site1
$router->delete('/users1/{id}', 'User1Controller@delete');   // Delete a user on Site1

// Routes for User2 Microservice
$router->get('/users2', 'User1Controller@index');          // Get all users from Site1
$router->post('/users2', 'User1Controller@add');             // Create a new user on Site1
$router->get('/users2/{id}', 'User1Controller@show');
$router->get('/users2/{id}', 'User1Controller@update');        // Get a specific user from Site1
$router->put('/users2/{id}', 'User1Controller@update');      // Update a user on Site1
$router->delete('/users2/{id}', 'User1Controller@delete'); 

$router->get('/api/users', function () {
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'http://127.0.0.1:8001/api/users');

    return response($response->getBody(), $response->getStatusCode())
           ->header('Content-Type', 'application/json');
});
 
$router->get('/api/users', function () {
    $client = new \GuzzleHttp\Client();
    $response = $client->request('GET', 'http://127.0.0.1:8001/api/users');

    return response($response->getBody(), $response->getStatusCode())
           ->header('Content-Type', 'application/json');
});


// Delete a user on Site1


