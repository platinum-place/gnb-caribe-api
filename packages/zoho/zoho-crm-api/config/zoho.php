<?php

return [
    /**
     * Zoho domain URLs
     */
    'domains' => [
        'accounts_url' => 'https://accounts.zoho.com',
        'api' => 'https://www.zohoapis.com',
    ],

    /**
     * API versions used for OAuth and endpoints
     */
    'versions' => [
        'oauth' => 'v2',
        'crm' => 'v8',
    ],

    /**
     * Zoho API authentication credentials
     */
    'credentials' => [
        'client_id' => env('ZOHO_API_CLIENT_ID'),
        'client_secret' => env('ZOHO_API_CLIENT_SECRET'),
    ],

    /**
     * OAuth redirect URI for authentication flow
     */
    'redirect_uri' => env('ZOHO_API_REDIRECT_URL'),
];
