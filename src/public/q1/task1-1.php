<?php
require_once __DIR__ . '/../../vendor/autoload.php';
use App\Incomes;

$incomes = new Incomes();

echo "<pre>";
var_dump($incomes->fetchAllIncomes());
echo "<pre>";