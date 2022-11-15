<?php
namespace App;
use App\Animal\Sheep;

require_once ('../vendor/autoload.php');

$sheep1 = new Sheep('Dolly');

print_r($sheep1);