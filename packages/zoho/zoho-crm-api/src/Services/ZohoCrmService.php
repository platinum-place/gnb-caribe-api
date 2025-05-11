<?php

namespace Zoho\CRM\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Throwable;

class ZohoCrmService
{
    public function __construct(protected Oauth2Service $oauth2, protected RecordService $record) {}

    /**
     * @throws RequestException
     * @throws ConnectionException
     * @throws Throwable
     */
    public function getAccessToken(): array
    {
        return $this->oauth2->getAccessToken();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     * @throws Throwable
     */
    public function getRefreshToken(): array
    {
        return $this->oauth2->getRefreshToken();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getRecords(string $module, string $token, array $fields, ?string $id = ''): array
    {
        return $this->record->getRecords($module, $token, $fields, $id);
    }
}
