<?php

namespace Zoho\CRM\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class RecordService
{
    protected function getApiUrl(): string
    {
        return config('zohocrm.domains.api') . '/crm/' . config('zohocrm.versions.crm');
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getRecords(string $module, string $token, array $fields, ?string $id = ''): array
    {
        $url = sprintf('%s/%s%s',
            $this->getApiUrl(),
            $module,
            $id ? "/$id" : ''
        );

        return Http::withToken($token, 'Zoho-oauthtoken')
            ->get($url, [
                'fields' => implode(',', $fields),
            ])
            ->throw()
            ->json();
    }
}
