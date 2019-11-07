<?php

require "vendor/autoload.php";

use josano\DigitalCep\Search;

$busca = New Search;

$resultado = $busca->getAddressFromZipCode('30720490');

print_r($resultado);