<?php 

SESSION_START();

require_once("vendor/autoload.php");

use \Slim\Slim;
use \Hcode\Page;
use \Hcode\PageAdmin;
use \Hcode\Model\User;

$app = new Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$page = new Page(); //usa a classe Page, que faz o construct colocar o header

	$page->setTpl("index"); //qual html será usado na pagina || depois dessa linha chama o destruct que coloca o footer

});

$app->get('/admin', function() {
    
	User::verifyLogin();

	$page = new PageAdmin(); //usa a classe PageAdmin, que faz o construct colocar o header

	$page->setTpl("index"); //qual html será usado na pagina || depois dessa linha chama o destruct que coloca o footer

});

$app->get("/admin/login", function(){

	$page = new PageAdmin([
		"header" => false,
		"footer" => false
	]);

	$page->setTpl("login");

});

$app->post("/admin/login", function(){

	User::login($_POST["login"], $_POST["password"]);

	header("location: /admin");
	exit;

});

$app->get("/admin/logout", function(){

	User::logout();

	header("location: /admin/login");
	exit;

});

$app->run(); // roda a aplicação

 ?>