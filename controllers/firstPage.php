<?php

$database = new QueryBuilder($pdo);
$questions = $database->selectQuestions('test');

require 'views/first.view.php';
