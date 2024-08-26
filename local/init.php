<?php
define('DEBUG_FILE_NAME', $_SERVER['DOCUMENT_ROOT'] . '/logs/'.date(format: "Y-m-d"). '.log');

if (file_exists(filename: '/php_interface/classes/autoload.php')) {
    require_once __DIR__ . '/php_interface/classes/autoload.php';
}

//\Otus\Diagnostic\Helper::writeToLog(data: 'Hello, world!');