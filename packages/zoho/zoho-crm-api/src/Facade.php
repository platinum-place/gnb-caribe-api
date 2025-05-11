<?php

namespace Zoho\CRM;

use Illuminate\Support\Facades\Facade as LaravelFacade;

class Facade extends LaravelFacade
{
    public static function getFacadeAccessor(): string
    {
        return ZohoCrm::class;
    }
}
