<?php


include "vendor/autoload.php";

use Mega\Mvc\category;
use Mega\Mvc\model\user;

$u = new user;

$c = new category;
$c->go();
$c->one();
