<?php

session_start();
require 'vendor/autoload.php';
require 'routes/functions.php';

// try {
//     Router::load('routes/test.php')->direct(uri(),  $_SERVER['REQUEST_METHOD']);
// } catch (\Exception $e) {
//     abort($e->getMessage(), $e->getCode());
// }


// function uri(): string
// {
//     return trim(
//         parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH),
//         '/'
//     );
// }

require __DIR__ . '/resources/pages/auth/signin.php';
