<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'linkedin' => [
        'client_id' => '77hmutrde9spi2',         // Your LinkedIn Client ID
        'client_secret' => 'FSIYZLHrWhMtaNzz', // Your LinkedIn Client Secret
        'redirect' => 'https://www.fista.iscte-iul.pt/login/linkedin/callback/',       // Your LinkedIn Callback URL
    ],
    'google' => [
        'client_id' => '704002805292-3iu58r9jf1fsp6cr0k4ne3vb7u6t0h5t.apps.googleusercontent.com',
        'client_secret' => 'lzPKxs9j7kF0q-tMIldGidBk',
        'redirect' => 'https://fista.iscte-iul.pt/login/google/callback',
    ],

];
