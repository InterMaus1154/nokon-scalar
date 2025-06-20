<?php
require "vendor/autoload.php";

use Nokon\NokonScalarTool\NokonString;

$str = "1";
$string = NokonString::build($str)
    ->bothPad(8, "a")
    ->toUpperCase();
echo $string->toNokonString()->get();


