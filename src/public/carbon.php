<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->addYear() . "\n";

$dt = Carbon::now();
echo $dt->subYear() . "\n";

$dt = Carbon::now();
echo $dt->addDay();

$dt = Carbon::now();
echo $dt->subDay(). "\n";

$dt = Carbon::now();
echo $dt->addSeconds(). "\n";

$dt = Carbon::now();
echo $dt->subSeconds();