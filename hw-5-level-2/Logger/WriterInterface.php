<?php

namespace Logger;

interface WriterInterface
{
    public function write($log);
}