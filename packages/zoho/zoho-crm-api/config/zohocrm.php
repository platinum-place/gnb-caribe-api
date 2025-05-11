<?php

return [
    /**
     * Zoho CRM domain URLs
     */
    'domains' => [
        'accounts_url' => 'https://accounts.zoho.com',
        'api' => 'https://www.zohoapis.com',
    ],

    /**
     * API versions used for OAuth and CRM endpoints
     */
    'versions' => [
        'oauth' => 'v2',
        'crm' => 'v8',
    ],

    /**
     * Zoho CRM API authentication credentials
     */
    'credentials' => [
        'client_id' => env('ZOHO_CRM_API_CLIENT_ID'),
        'client_secret' => env('ZOHO_CRM_API_CLIENT_SECRET'),
        'refresh_token' => env('ZOHO_CRM_API_REFRESH_TOKEN'),
    ],

    /**
     * OAuth redirect URI for authentication flow
     */
    'redirect_uri' => env('ZOHO_CRM_API_REDIRECT_URL'),
];
