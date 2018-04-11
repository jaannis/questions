<?php
// require 'config.php';

require 'vendor/autoload.php';

// $abc = new QueryBuilder($pdo);
// $test = $abc->selectQuestions('questions1');
// var_dump($config);

require 'bootstrap.php';

// $wtf = new QueryBuilder($pdo);
// $wtf->suds();
// var_dump($wtf);

require Router::load('routes.php')->direct(Request::uri(), Request::method());
