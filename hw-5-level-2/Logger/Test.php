<?php

namespace Logger;

use Psr\Log\LoggerInterface;

class Test
{
    private LoggerInterface $logger;

    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function alertTest()
    {
        $this->logger->alert('alert message!', ['a' => 'test1', 'b' => 'test2', 'c' => 'test3']);
    }

    public function infoTest()
    {
        $this->logger->info('info message!', ['a' => 'test1', 'b' => 'test2', 'c' => 'test3']);
    }

    public function debugTest()
    {
        $this->logger->debug('debug message!', ['a' => 'test1', 'b' => 'test2', 'c' => 'test3']);
    }

    public function emergencyTest()
    {
        $this->logger->emergency('emergency message!', ['a' => 'test1', 'b' => 'test2', 'c' => 'test3']);
    }
}