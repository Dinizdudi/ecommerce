<?php 

use \Hcode\Page;

$app->get('/', function() {
    
	$page = new Page(); //usa a classe Page, que faz o construct colocar o header

	$page->setTpl("index"); //qual html será usado na pagina || depois dessa linha chama o destruct que coloca o footer

});


 ?>