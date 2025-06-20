<?php
require "vendor/autoload.php";

use Nokon\NokonScalarTool\NokonString;

$str = "1";
$string = NokonString::build($str)
    ->leftPad(4, "0")
    ->rightPad(8, "0")
    ->get();
echo $string;