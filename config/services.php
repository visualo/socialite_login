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

    'google' => [
        'client_id' => '160338088153-6mplqsgg668fh6j23psgk74u07ae6r5u.apps.googleusercontent.com',
        'client_secret' => 'a_U9vqimHzr-afXBfXZFClZ0',
        'redirect' => 'http://localhost:8000/auth/google/callback',
    ],

    'facebook' => [
        'client_id' => '743960626103237',
        'client_secret' => '171ab3e8f8468ecca1bba2fefdf97689',
        'redirect' => 'https://localhost:8000/callback/facebook',
      ],    

      'twitter' => [
        'client_id' => 'rnO8ovzzWiCwkIsh7zdNUrlKS',
        'client_secret' => 'bHVkFiSQ0xqLDmCKMvOKQG7XID5bNaEWlQpoIyXaR5FColUFgg',
        'redirect' => 'http://localhost:8000/callback',
      ],    

];
