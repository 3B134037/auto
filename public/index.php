<?php
require '../vendor/autoload.php';


use Demo\Hello\Lara;
use Demo\Hello\Someone;
$lara= new Lara();
$vincent= new Someone('Vincent');

$mary= new \Demo\Hello\Someone('Mary');
$john= new Demo\Hello\Someone('John');
$hello= new Demo\HelloWorld();

use Demo\HelloWorld as World;
$world = new World();
