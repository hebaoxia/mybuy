<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/get/{id}', function (Request $request, Response $response) {
    $id = $request->getAttribute('id');

    $data = array('errcode' => 0, 'msg' => 'success', 'id' => $id);
    $newResponse = $response->withJson($data);
    // $response->getBody()->write("get the resourse who's id is $id");

    return $newResponse;
});
$app->run();