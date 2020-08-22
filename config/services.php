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

    'paypal' => [
        'client_id' => env('PAYPAL_CLIENT_ID', 'AWc4j5BRrFMDW8Ij4vL1Fbfhymj67I5oPy8uRisM9b7UCZ15YERv2bX9z1f3lBJJTeMhf8qAT_q-n-r3'),
        'secret' => env('PAYPAL_SECRET', 'EKOBCG5lZIZxQvCjoxNMXribPIKt3UBDV_MM1fRjS4wvRK25EhF8UbQsBq7H5CH830aP2fRqqcCOs_ee'),
        'sandbox' => env('PAYPAL_SANDBOX', true),
    ],

];
