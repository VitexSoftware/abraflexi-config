<?php
// Debian PSR-4 autoloader for abraflexi-client-config
// Loads classes from /usr/share/php/ (standard Debian PHP path)
spl_autoload_register(function ($class) {
    $file = '/usr/share/php/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require $file;
    }
});
