<?php

namespace Zoho\CRM\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class Oauth2Service
{
    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getAccessToken():array
    {
        $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
            'grant_type'    => 'authorization_code',
            'client_id'     => '1000.7FJQ4A2KDH9S2IJWDYL13HATQFMA2H',
            'client_secret' => 'c3f1d0589803f294a7c5b27e3968ae1658927da9d7',
            'redirect_uri'  => 'https://it.gruponobe.com/',
            'code'          => '',
        ]);

        if ($response->failed()) {
            $response->throw();
        }

        return $response->json();
    }

    /**
     * @throws RequestException
     * @throws ConnectionException
     */
    public function getRefreshToken():array
    {
        $response = Http::asForm()->post('https://accounts.zoho.com/oauth/v2/token', [
            'grant_type'    => 'refresh_token',
            'client_id'     => '1000.7FJQ4A2KDH9S2IJWDYL13HATQFMA2H',
            'client_secret' => 'c3f1d0589803f294a7c5b27e3968ae1658927da9d7',
            'refresh_token' => '1000.c96967ba181c367d896086bc6379592d.ac8fcf53cd16614731bd72443b13e7bf',
        ]);

        if ($response->failed()) {
            $response->throw();
        }

        return $response->json();
    }
}
