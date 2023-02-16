<?php

use App\classes\Dbhelper;

require __DIR__ . '/../vendor/autoload.php';
$o = new Dbhelper();
// var_dump($o->toArray('categories'));
var_dump($o->getRecord("users",4));
