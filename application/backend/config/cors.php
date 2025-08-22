<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'broadcasting/*'],
    'allowed_methods' => ['*'],
    'allowed_origins' => ['http://localhost:3000','http://192.168.200.1:10185','https://192.168.200.1:10182/'],
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => ['Content-Disposition'],
    'max_age' => 0,
    'supports_credentials' => true,
];
