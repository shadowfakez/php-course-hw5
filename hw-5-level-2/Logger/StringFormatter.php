<?php

namespace Logger;

class StringFormatter implements FormatterInterface
{

    public function format($level, \Stringable|string $message, array $context = []): string
    {
        $result = '[' . date('d-m-Y H:i:s.v') . '] - ' . $level . ' - ' . $message . ' - ';
        $result .= json_encode($context) . PHP_EOL;
        return $result;
    }
}