<?php
require_once __DIR__.'/../vendor/autoload.php';
use App\wcs\hello;
use HelloWorld\SayHello;

echo "1er objet : <br/>";
$obj = new hello();
echo $obj->talk();
echo "<br/>2éme objet : <br/>";
$obj2 = new SayHello();
echo $obj2->world(); 
?>