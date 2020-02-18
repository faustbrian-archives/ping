<?php

namespace KodeKeep\Ping\Drivers;

interface Driver
{
    public function ping(string $host, int $port, int $timeout, int $ttl);
}
