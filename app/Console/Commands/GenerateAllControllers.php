<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class GenerateAllControllers extends Command
{
    protected $signature = 'make:allcontrollers';
    protected $description = 'Generate controllers for all database tables';

    public function handle()
    {
        $tables = DB::select('SHOW TABLES');
        $dbName = 'Tables_in_' . DB::getDatabaseName();

        foreach ($tables as $table) {
            $tableName = $table->$dbName;

            // Buat nama model & controller dari nama tabel
            $modelName = Str::studly(Str::singular($tableName));
            $controllerName = $modelName . 'Controller';

            // Path controller
            $controllerPath = app_path("Http/Controllers/{$controllerName}.php");

            // Skip kalau sudah ada
            if (File::exists($controllerPath)) {
                $this->warn("Controller {$controllerName} sudah ada, dilewati...");
                continue;
            }

            // Isi template controller
            $stub = <<<EOT
<?php

namespace App\Http\Controllers;

use App\Models\\{$modelName};
use Illuminate\Http\Request;

class {$controllerName} extends Controller
{
    public function index()
    {
        \$data = {$modelName}::all();
        return view('{$tableName}.index', compact('data'));
    }
}
EOT;

            File::put($controllerPath, $stub);
            $this->info("Controller {$controllerName} berhasil dibuat.");
        }

        return 0;
    }
}
