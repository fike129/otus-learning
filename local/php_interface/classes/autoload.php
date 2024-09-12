<?php

if (!defined(constant_name: 'B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

spl_autoload_register(function (string $class): void
{
    if (!str_contains( $class, needle: 'Otus')) {
        return;
    }


    $class = str_replace(search: '\\', replace: '/', $class);


    $path = __DIR__ . '/classes/' . $class . '.php';

    if (is_file($path)) {
        require_once $path;
    }
});
