<?php

class Logger {
    private mixed $logFile;

    public function __construct($logFile = 'log.txt') {
        $this->logFile = $logFile;
    }

    public function log($message): void
    {
        $formattedMessage = "OTUS: " . $message . PHP_EOL;

        file_put_contents($this->logFile, $formattedMessage, FILE_APPEND);
    }
}

