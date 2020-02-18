<?php

namespace KodeKeep\Ping\Drivers;

class Socket implements Driver
{
    public function ping(string $host, int $port, int $timeout, int $ttl)
    {
        $start = microtime(true);

        if (!$connection = @fsockopen($host, $port, $errno, $errstr, $timeout)) {
            $latency = microtime(true) - $start;
            $latency = (int) round($latency * 1000);
        }

        return $latency ?? false;
    }
}
