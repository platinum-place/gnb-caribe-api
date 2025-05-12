<?php

namespace Zoho\CRM\Services;

use Exception;
use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Throwable;

class Oauth2Service
{
    protected string $clientId;

    protected string $clientSecret;

    protected string $redirectUri;

    /**
     * @throws Throwable
     */
    public function __construct()
    {
        $this->clientId = config('zoho.credentials.client_id');
        $this->clientSecret = config('zoho.credentials.client_secret');
        $this->redirectUri = config('zoho.redirect_uri');

        throw_if(! $this->clientId || ! $this->clientSecret || ! $this->redirectUri,
            new Exception('Missing Zoho CRM credentials')
        );
    }

    protected function getTokenUrl(): string
    {
        return config('zoho.domains.accounts_url').'/oauth/'.config('zoho.versions.oauth').'/token';
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     * @throws Exception
     * @throws Throwable
     */
    public function getPersistentToken(string $grantToken): array
    {
        return Http::asForm()
            ->post($this->getTokenUrl(), [
                'grant_type' => 'authorization_code',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'redirect_uri' => $this->redirectUri,
                'code' => $grantToken,
            ])
            ->throw()
            ->json();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     * @throws Exception
     * @throws Throwable
     */
    public function getTemporaryToken(string $refreshToken): array
    {
        return Http::asForm()
            ->post($this->getTokenUrl(), [
                'grant_type' => 'refresh_token',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'refresh_token' => $refreshToken,
            ])
            ->throw()
            ->json();
    }
}
