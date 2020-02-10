<?php

namespace BrianFaust\Ping\Drivers;

class Tcp implements Driver
{
    public function ping(string $host, int $port, int $timeout, int $ttl)
    {
        $connection = @stream_socket_client("tcp://{$host}:{$port}", null, null, $timeout);

        if ($connection) {
            $start = microtime(true);

            $response = stream_socket_sendto($connection, 'Hello World', STREAM_OOB);
            fclose($connection);

            $latency = microtime(true) - $start;
            $latency = (int) round($latency * 1000000);
        }

        return $latency ?? false;
    }
}
