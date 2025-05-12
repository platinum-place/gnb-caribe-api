<?php

namespace Zoho\CRM\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Throwable;

class ZohoCrmApiService
{
    public function __construct(protected Oauth2Service $oauth2, protected RecordService $record) {}

    /**
     * @throws RequestException
     * @throws ConnectionException
     * @throws Throwable
     */
    public function getPersistentToken(string $grantToken): array
    {
        return $this->oauth2->getPersistentToken($grantToken);
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     * @throws Throwable
     */
    public function getTemporaryToken(string $refreshToken): array
    {
        return $this->oauth2->getTemporaryToken($refreshToken);
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getRecords(string $module, string $token, array $fields, ?string $id = ''): array
    {
        return $this->record->getRecords($module, $token, $fields, $id);
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function searchRecords(string $module, string $token, string $criteria): array
    {
        return $this->record->searchRecords($module, $token, $criteria);
    }
}
