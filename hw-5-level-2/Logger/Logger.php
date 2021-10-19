<?php

namespace Logger;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    protected WriterInterface $writer;

    protected FormatterInterface $formatter;


    public function __construct(WriterInterface $writer, FormatterInterface $formatter)
    {
        $this->writer = $writer;
        $this->formatter = $formatter;

    }

    public function log($level, \Stringable|string $message, array $context = []): void
    {
        $formatted = $this->format($level, $message, $context);
        $this->write($formatted);
    }

    protected function write($log)
    {
        $this->writer->write($log);
    }

    protected function format($level, \Stringable|string $message, array $context = []): string
    {
        return $this->formatter->format($level, $message, $context);
    }
}