<?php

namespace App\Exporter;

use App\Contract\FileExporter;

class TextFileExporter implements FileExporter
{
    public function export($records)
    {
        $lines = array();

        foreach ($records as $record) {
            // TODO 4: Add one readable line to $lines.
            // Format: ID | Service | Status
            $lines[] = $record['id'] . ' | ' . $record['service'] . ' | ' . $record['status'];
        }

        // TODO 5: Join the lines using PHP_EOL.
        return implode(PHP_EOL, $lines);
    }

    public function getExtension()
    {
        // TODO 6: Return the text-file extension.
        return 'txt';
    }
}
