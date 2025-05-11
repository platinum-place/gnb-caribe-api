<?php

namespace Zoho\CRM\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class RecordService
{
    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getRecords(): array
    {
        $response = Http::withHeaders([
            'Authorization' => 'Zoho-oauthtoken 1000.757996d545cdb9867541ebf553b01b90.4150caf4fb9d1e08cad9556756094913',
        ])->get('https://www.zohoapis.com/crm/v8/Cases', [
            'fields' => 'id'
        ]);

        if ($response->failed()) {
            $response->throw();
        }

        return $response->json();
    }
}
