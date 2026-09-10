<?php

require __DIR__ . '/vendor/autoload.php';

use App\Config\AppSettings;
use App\Factory\TextExporterCreator;
use App\Factory\JsonExporterCreator;
use App\Factory\CsvExporterCreator;

$records = array(
    array('id' => 101, 'service' => 'Laptop check', 'status' => 'Done'),
    array('id' => 102, 'service' => 'Printer setup', 'status' => 'Done'),
    array('id' => 103, 'service' => 'Account reset', 'status' => 'Done')
);

$format = isset($argv[1]) ? strtolower($argv[1]) : 'txt';

if ($format == 'txt') {
    // TODO 12: Create the text exporter creator.
    $creator = new TextExporterCreator();
} elseif ($format == 'json') {
    // TODO 13: Create the JSON exporter creator.
    $creator = new JsonExporterCreator();
} elseif ($format == 'csv') {
    // Challenge Extension: CSV exporter creator.
    $creator = new CsvExporterCreator();
} else {
    echo 'Use txt, json, or csv.' . PHP_EOL;
    exit;
}

$settings = AppSettings::getInstance();
$path = $creator->save($records, 'daily_report');

// TODO 14: Display the application name.
echo $settings->getApplicationName() . PHP_EOL;
echo 'Report saved to: ' . $path . PHP_EOL;
