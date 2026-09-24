<?php

return [
    'enabled' => env('AUTO_CERT_SSL_RENEW_ENABLED', true),
    'timeout' => env('AUTO_CERT_SSL_RENEW_TIMEOUT', 30),
    'log_channel' => env('AUTO_CERT_SSL_RENEW_LOG', 'stack'),
];
