<?php

function ipaymu_debug_log($data)
{
    $file = __DIR__ . '/ipaymu_log.json';

    $logData = [
        'datetime' => date('Y-m-d H:i:s'),
        'data'     => $data
    ];

    file_put_contents(
        $file,
        json_encode($logData, JSON_PRETTY_PRINT) . PHP_EOL,
        FILE_APPEND
    );
}