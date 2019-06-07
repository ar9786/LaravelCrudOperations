<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
        'webhook' => [
            'secret' => env('STRIPE_WEBHOOK_SECRET'),
            'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
        ],
    ],

    // Facebook
    'facebook' => [
        'client_id' => '360482001444455',
        'client_secret' => '6d566131836fe7ec6986ef3119f4d5ad',
        'redirect' => 'https://www.sportstrives.com/fbcallback',
    ],
	//Google
	'google' => [
    'client_id'     => '227858938927-6fsvv2pm6g1dh078l191bolti68vdjjp.apps.googleusercontent.com',
    'client_secret' => 'o-185EpCiefQB-2p31Laikgk',
    'redirect'      => 'https://www.sportstrives.com/gcallback'
	],
	
];
