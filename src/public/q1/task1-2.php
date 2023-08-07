<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Spendings;

$spendings = new Spendings();

echo "<pre>";
var_dump($spendings->fetchAllSpendings());
echo "<pre>";