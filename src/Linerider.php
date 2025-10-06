<?php

namespace Betagen\Linerider;

class Linerider
{
    public function __construct(protected array $config = [])
    {
    }

    public function ping(): string
    {
        return $this->config['greeting'] . ' from linerider';
    }
}
