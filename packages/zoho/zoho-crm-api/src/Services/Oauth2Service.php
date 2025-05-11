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
    protected string $refreshToken;

    /**
     * @throws Throwable
     */
    public function __construct()
    {
        $this->clientId = config('zohocrm.credentials.client_id');
        $this->clientSecret = config('zohocrm.credentials.client_secret');
        $this->redirectUri = config('zohocrm.redirect_uri');
        $this->refreshToken = config('zohocrm.credentials.refresh_token');

        throw_if(!$this->clientId || !$this->clientSecret || !$this->redirectUri || !$this->refreshToken,
            new Exception('Missing Zoho CRM credentials')
        );
    }

    protected function getTokenUrl(): string
    {
        return config('zohocrm.domains.accounts_url') . '/oauth/' . config('zohocrm.versions.oauth') . '/token';
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     * @throws Exception
     * @throws Throwable
     */
    public function getAccessToken(): array
    {
        return Http::asForm()
            ->post($this->getTokenUrl(), [
                'grant_type' => 'authorization_code',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'redirect_uri' => $this->redirectUri,
                'code' => '',
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
    public function getRefreshToken(): array
    {
        return Http::asForm()
            ->post($this->getTokenUrl(), [
                'grant_type' => 'refresh_token',
                'client_id' => $this->clientId,
                'client_secret' => $this->clientSecret,
                'refresh_token' => $this->refreshToken,
            ])
            ->throw()
            ->json();
    }
}
