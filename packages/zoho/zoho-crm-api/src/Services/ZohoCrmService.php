<?php

namespace Zoho\CRM\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;

class ZohoCrmService
{
    public function __construct(protected Oauth2Service $oauth2, protected RecordService $record)
    {
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getAccessToken(): array
    {
        return $this->oauth2->getAccessToken();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getRefreshToken(): array
    {
        return $this->oauth2->getRefreshToken();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getRecords(): array
    {
        return $this->record->getRecords();
    }
}
