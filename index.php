<?php
// header('Access-Control-Allow-Origin: *');
require 'vendor/autoload.php';
// header('Content-Type: application/json;charset=UTF-8');
// header('Access-Control-Allow-Methods: DELETE, HEAD, GET, OPTIONS, POST, PUT');
// header('Access-Control-Allow-Headers: Content-Type, Content-Range, Content-Disposition, Content-Description');
// header('Access-Control-Max-Age: 1728000');
use Psr\Http\Message\RequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;
define("PROJECTPATH", __DIR__);
define("IP", $_SERVER['SERVER_NAME']);

$app = new Slim\App();
$app->get('/', function (Request $req, Response $res)
{
  $pollos = [
    'pollos' => [
      [
        'nombre' => 'CrestaRoja',
        'edad' => 35,
        'precio' => 35,
        'url' => 'http://'.IP.'/pollos/img/pollo1.jpg'
      ],
      [
        'nombre' => 'Charly Pio',
        'edad' => 46,
        'precio' => 32,
        'url' => 'http://'.IP.'/pollos/img/pollo2.jpg'
      ],
      [
        'nombre' => 'Plumaseca',
        'edad' => 12,
        'precio' => 12,
        'url' => 'http://'.IP.'/pollos/img/pollo3.jpg'
      ],
      [
        'nombre' => 'Pico Fino',
        'edad' => 25,
        'precio' => 20,
        'url' => 'http://'.IP.'/pollos/img/pollo4.jpg'
      ],
      [
        'nombre' => 'Gallardina',
        'edad' => 45,
        'precio' => 50,
        'url' => 'http://'.IP.'/pollos/img/pollo5.jpg'
      ],
      [
        'nombre' => 'Pluma Elegante',
        'edad' => 55,
        'precio' => 45,
        'url' => 'http://'.IP.'/pollos/img/pollo6.jpg'
      ],
    ]
  ];
  return $res->withJson($pollos);
});

$app->run();
