<?php

$controllerDir = base_path('app/Http/Controllers');
$routeFile = base_path('routes/web.php');

$files = scandir($controllerDir);
$routes = "";

foreach ($files as $file) {
    if (
        strpos($file, 'Controller.php') !== false &&
        $file !== 'Controller.php' &&
        is_file($controllerDir . '/' . $file)
    ) {
        $controllerName = pathinfo($file, PATHINFO_FILENAME); // Misal: JurnalController
        $routeName = strtolower(str_replace('Controller', '', $controllerName));

        $routes .= "Route::resource('{$routeName}', App\\Http\\Controllers\\{$controllerName}::class);\n";
    }
}

// Tambahkan hasil ke web.php (bisa ditaruh di bagian bawah)
file_put_contents($routeFile, "\n// Auto generated routes\n" . $routes, FILE_APPEND);

echo "✅ Routes berhasil digenerate ke routes/web.php\n";
