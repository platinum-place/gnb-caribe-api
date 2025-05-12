<?php

namespace Zoho\CRM;

use Illuminate\Support\Facades\Facade;
use Zoho\CRM\Services\ZohoCrmApiService;

class ZohoCrmApi extends Facade
{
    public static function getFacadeAccessor(): string
    {
        return ZohoCrmApiService::class;
    }
}
