<?php

namespace Zoho\CRM\Facades;

use Illuminate\Support\Facades\Facade;
use Zoho\CRM\Services\ZohoCrmService;

class ZohoCrmFacade extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return ZohoCrmService::class;
    }
}
