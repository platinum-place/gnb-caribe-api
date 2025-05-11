<?php

namespace Zoho\CRM;

use Illuminate\Support\Facades\Facade;
use Zoho\CRM\Services\ZohoCrmService;

class ZohoCrm extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return ZohoCrmService::class;
    }
}
