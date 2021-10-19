<?php

namespace Logger;

class FileWriter implements WriterInterface
{

    public function write($log)
    {
        file_put_contents('logs/log_' . date("d-m-Y") . '.log', $log, FILE_APPEND);
    }
}