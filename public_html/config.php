<?php

require_once "../vendor/autoload.php";
require_once(__DIR__ . '/../vendor/magnusmanske/magnustools/public_html/php/common.php');

use Dotenv\Dotenv;

$dotenv = Dotenv::createUnsafeImmutable(__DIR__ . '/../');
$dotenv->load();

header('Content-type: application/json; charset=UTF-8');
header("Cache-Control: no-cache, must-revalidate");

$settings = require __DIR__ . '/../config/settings.php';
echo json_encode($settings);
