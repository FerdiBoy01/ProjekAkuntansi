<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenerateModelsControllers extends Command
{
    protected $signature = 'make:models-controllers';
    protected $description = 'Generate models and controllers for all database tables';

    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $key = 'Tables_in_' . DB::getDatabaseName();

        foreach ($tables as $table) {
            $tableName = $table->$key;
            $modelName = Str::studly(Str::singular($tableName));
            $controllerName = $modelName . 'Controller';

            // Buat model
            $this->call('make:model', ['name' => $modelName]);

            // Buat controller
            $this->call('make:controller', ['name' => $controllerName]);

            $this->info("Generated: $modelName & $controllerName");
        }

        $this->info('Semua model dan controller berhasil dibuat!');
    }
}


// cara membuat controller dan model secara otomatis
// jalankan perintan ini di cmd 'php artisan make:command GenerateModelsControllers'
// lalu masuk ke file nya dan paste kode di



