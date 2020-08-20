<?php
require_once '../vendor/autoload.php';

$names = new \Libs\FunctionsName\Names();

var_dump($names->getFunctionsName("https://www.unalanapay.com/webServicesUnalanaPAY.php?wsdl"));