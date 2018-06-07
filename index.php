<?php 

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page(); //usa a classe Page, que faz o construct colocar o header

	$page->setTpl("index"); //qual html será usado na pagina || depois dessa linha chama o destruct que coloca o footer

});

$app->run(); // roda a aplicação

 ?>