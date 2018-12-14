<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

//including the required files
require_once '../../data/config.php';
require '../../vendor/autoload.php';

$app = new \Slim\App();

$container = $app->getContainer();

$container->get('settings')['displayErrorDetails'] = true;

$app->get('/hello', function (Request $request, Response $response) {
   $response->getBody()->write("Hello");
    return $response;
});

function writeResponse($request,$response,$data,$status_code){
    $response = $response->withHeader('Content-type', 'application/json');
    $response = $response->withJson($data,$status_code);
    return $response;
}


$app->get('/events', function (Request $request, Response $response) use(&$db) {
    $eventHelper = new EventHelper($db);
    $result = $eventHelper->getEvents();
    $data = [];
    if(!$result['error']) {
        $data['data'] = $result['data'];
    }
    if($data != NULL){
        $response = writeResponse($request, $response, $data, 200);
    }else{
        $response = writeResponse($request, $response, $data, 204);
    }
    return $response;
});

function getValueOrDefault($key,$array,$default){
    return array_key_exists($key,$array) ? $array[$key] : $default;
}

function authorization($request,$response,$next){
    
}

$app->run();


