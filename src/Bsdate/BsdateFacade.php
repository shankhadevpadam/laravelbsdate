<?php

namespace Shankhadev\Bsdate;

use Illuminate\Support\Facades\Facade;

class BsdateFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'bsdate';
    }
}
