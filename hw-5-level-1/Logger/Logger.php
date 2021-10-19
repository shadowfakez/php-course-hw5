<?php


namespace Logger;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $formatted = $this->format($level, $message, $context);
        $this->write($formatted);

    }

    protected function write($log)
    {
        file_put_contents('logs/log_' . date("d-m-Y") . '.log', $log, FILE_APPEND);
    }

    protected function format($level, \Stringable|string $message, array $context = []): string
    {
        $result = '[' . date('H:i:s.v') . '] - ' . $level . ' - ' . $message . ' - ';
        $result .= json_encode($context) . PHP_EOL;
        return $result;
    }
}