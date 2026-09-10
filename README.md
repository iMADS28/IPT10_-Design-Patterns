# FileFlow Report Exporter

FileFlow Report Exporter is a PHP console application demonstrating the Singleton and Factory Method design patterns along with Composer PSR-4 autoloading. It manages shared application configuration centrally and dynamically exports service reports into multiple file formats without duplicating common workflows.

## Requirements

- **PHP CLI** (v8.0 or higher)
- **Composer** (v2.0 or higher)

## Setup Commands

Run the following commands in the project root to install dependencies and generate the PSR-4 autoloader:

```bash
composer install
composer dump-autoload
```

## Run Commands

Execute the console application by passing the desired export format (`txt` or `json`):

```bash
php app.php txt
php app.php json
```

The exported files will be saved in the `output/` directory (`output/daily_report.txt` and `output/daily_report.json`).

## Student Developers

- Christian (Lead Developer)
