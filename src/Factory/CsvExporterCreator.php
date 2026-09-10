<?php

namespace App\Factory;

use App\Exporter\CsvFileExporter;

class CsvExporterCreator extends ExporterCreator
{
    public function createExporter()
    {
        return new CsvFileExporter();
    }
}
