<?php


include "vendor/autoload.php";

use bdrango\Mvc\category;
use bdrango\Mvc\model\user;

$u = new user;

$c = new category;
$c->go();
$c->one();
