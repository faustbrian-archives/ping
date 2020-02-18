<?php

namespace KodeKeep\Ping;

use InvalidArgumentException;

class Ping
{
    /**
     * @var string
     */
    private $driver = 'Tcp';

    /**
     * @var string
     */
    private $host;

    /**
     * @var int
     */
    private $port = 80;

    /**
     * @var int
     */
    private $timeout = 10;

    /**
     * @var int
     */
    private $ttl = 255;

    /**
     * @param string $value
     *
     * @return \KodeKeep\Ping\Ping
     */
    public function driver(string $value): Ping
    {
        $this->driver = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return \KodeKeep\Ping\Ping
     */
    public function host(string $value): Ping
    {
        $this->host = $value;

        return $this;
    }

    /**
     * @param int $value
     *
     * @return \KodeKeep\Ping\Ping
     */
    public function port(int $value): Ping
    {
        $this->port = $value;

        return $this;
    }

    /**
     * @param int $value
     *
     * @return \KodeKeep\Ping\Ping
     */
    public function timeout(int $value): Ping
    {
        $this->timeout = $value;

        return $this;
    }

    /**
     * @param int $value
     *
     * @return \KodeKeep\Ping\Ping
     */
    public function ttl(int $value): Ping
    {
        $this->ttl = $value;

        return $this;
    }

    /**
     * @throws InvalidArgumentException
     *
     * @return int|bool
     */
    public function ping()
    {
        $class = "KodeKeep\\Ping\\Drivers\\{$this->driver}";

        if (!class_exists($class)) {
            throw new InvalidArgumentException("The driver [{$this->driver}] is not supported.");
        }

        return (new $class())->ping($this->host, $this->port, $this->timeout, $this->ttl);
    }
}
