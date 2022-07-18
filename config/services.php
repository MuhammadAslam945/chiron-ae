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
        'scheme' => 'https',
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'facebook' => [
        'client_id' => 'Facebook app id',
        'client_secret' => 'Facebook add secret',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],
    'google' => [
        'client_id' => 'app id',
        'client_secret' => 'add secret',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],
    'stripe' => [
        'secret' => 'pk_test_51JK8BQSFqlCAaWOJ6STcATVTxPyux6rp2y5WFcSc14cdOey5BGoQq8diPzNjE7pSkcpRpDN0CPks1amjs8W2KgWs0024emkrU2',
    ],

];
