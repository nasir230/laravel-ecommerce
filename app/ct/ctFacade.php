<?php

namespace App\ct;
use illuminate\Support\Facades\Facade;

class ctFacade extends Facade 
{
    protected static function getFacadeAccessor()
    {
        return new setting();
    }
}
