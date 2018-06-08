<?php 

SESSION_START();

require_once("vendor/autoload.php");

use \Slim\Slim;

$app = new Slim();

$app->config('debug', true);

require_once("site.php"); //rotas do site, (parte cliente)
require_once("admin.php");//rotas com relação a administração (login, esqueci a senha)
require_once("admin-users.php");//rota com relação aos usuarios (CRUD)
require_once("admin-categories.php");//rota com relação as categorias (CRUD)
require_once("admin-products.php");//rota com relação as PRODUTOS (CRUD)




$app->run(); // roda a aplicação

 ?>