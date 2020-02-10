<?php

namespace BrianFaust\Ping\Drivers;

class Exec implements Driver
{
    public function ping(string $host, int $port, int $timeout, int $ttl)
    {
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $command = $this->windows($host, $port, $timeout, $ttl);
        } elseif (strtoupper(PHP_OS) === 'DARWIN') {
            $command = $this->macos($host, $port, $timeout, $ttl);
        } else {
            $command = $this->linux($host, $port, $timeout, $ttl);
        }

        exec($command, $output, $return);
        $output = array_values(array_filter($output));

        if (!empty($output[2])) {
            $response = preg_match("/time(?:=|<)(?<time>[\.0-9]+)(?:|\s)ms/", $output[2], $matches);

            if ($response && array_key_exists('time', $matches)) {
                $latency = round($matches['time']);
            }
        }

        return $latency ?? false;
    }

    private function windows(string $host, int $port, int $timeout, int $ttl)
    {
        return sprintf(
            'ping %s -p %s -w %s -i %s -n 1',
            $host, $port, $timeout * 1000, $ttl
        );
    }

    private function macos(string $host, int $port, int $timeout, int $ttl)
    {
        return sprintf(
            'ping %s -p %s -t %s -m %s -n -c 1',
            $host, $port, $timeout, $ttl
        );
    }

    private function linux(string $host, int $port, int $timeout, int $ttl)
    {
        return sprintf(
            'ping %s -p %s -W %s -t %s -n -c 1 2>&1',
            $host, $port, $timeout * 1000, $ttl
        );
    }
}
