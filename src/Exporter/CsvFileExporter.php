<?php

namespace App\Exporter;

use App\Contract\FileExporter;

class CsvFileExporter implements FileExporter
{
    public function export($records)
    {
        $lines = array();
        // CSV Header
        $lines[] = 'ID,Service,Status';

        foreach ($records as $record) {
            $lines[] = $record['id'] . ',"' . $record['service'] . '",' . $record['status'];
        }

        return implode(PHP_EOL, $lines);
    }

    public function getExtension()
    {
        return 'csv';
    }
}
