<?php
require "vendor/autoload.php";

use Nokon\NokonScalarTool\NokonString;

$str = "hello world";
$string = NokonString::build($str)->toUpperCase()->get();
echo $string;