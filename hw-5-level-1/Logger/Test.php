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

    public function example()
    {
        $this->logger->info('testing!', ['a' => 'test1', 'b' => 'test2', 'c' => 'test3']);
    }
}