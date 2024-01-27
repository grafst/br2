<?php

namespace Greenheron\Br2\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Greenheron\Br2\Br2
 */
class Br2 extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Greenheron\Br2\Br2::class;
    }
}
