<?php

//makes sure that url gets to right controller
$router->get('', 'controllers/firstPage.php');
$router->post('questions', 'controllers/questions.php');
// $router->post('new', 'controllers/addProducts.php');
// $router->post('delete', 'controllers/deleteProducts.php');
