<?php

namespace Betagen\Linerider\Facades;

use Illuminate\Support\Facades\Facade;

class Linerider extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'linerider';
    }
}
