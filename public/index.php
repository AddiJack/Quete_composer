<?php

require "../vendor/autoload.php";

use App\Wcs\Hello;
use HelloWorld\SayHello;

$hello = new Hello;
$hello->talk();

$hello2 = new SayHello;
echo $hello2->world();