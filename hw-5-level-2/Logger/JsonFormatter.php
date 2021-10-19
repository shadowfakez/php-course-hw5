<?php

namespace Logger;

class JsonFormatter implements FormatterInterface
{


    public function format($level, \Stringable|string $message, array $context = [])
    {
        $result = ['date' => date('d-m-Y H:i:s.v'), 'level' => $level, 'message' => $message, 'context' => $context];

        return json_encode($result);
    }
}