<?php
$controllerDir = base_path('app/Http/Controllers');
$modelNamespace = 'App\Models';

$files = scandir($controllerDir);

foreach ($files as $file) {
    if (strpos($file, 'Controller.php') !== false && $file !== 'Controller.php') {
        $controllerName = pathinfo($file, PATHINFO_FILENAME); // Misal: JurnalController
        $modelName = str_replace('Controller', '', $controllerName); // Jadi: Jurnal
        $viewName = strtolower($modelName);

        $content = <<<PHP
<?php

namespace App\Http\Controllers;

use {$modelNamespace}\\{$modelName};
use Illuminate\Http\Request;

class {$controllerName} extends Controller
{
    public function index()
    {
        \$data = {$modelName}::all();
        return view('{$viewName}', compact('data'));
    }
}
PHP;

        file_put_contents("{$controllerDir}/{$controllerName}.php", $content);
        echo "Updated: {$controllerName}\n";
    }
}
