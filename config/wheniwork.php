<?php

return [
    /*
     * Your Wheniwork account login email address.
     */
    'email' => env('WHENIWORK_EMAIL', 'johndoe@example.com'),

    /*
     * Your Wheniwork account login password.
     */
    'password' => env('WHENIWORK_PASSWORD', '123456'),

    /*
     * Your developer key that you get directly from the Wheniwork.
     */
    'key' => env('WHENIWORK_DEVELOPER_KEY', 'asdfghjkl1234567890'),

    /*
     * Your Wheniwork API token that returns from the login response.
     */
    'api' => env('WHENIWORK_API_TOKEN', 'qwertyuiop0987654321'),

    /*
     * Additional options to set `endpoint` and `headers`.
     */
    'options' => [

        /*
         * Set API end point for all requests.
         */
        'endpoint' => env('WHENIWORK_API_ENDPOINT', null),

        /*
         * Set API headers for all requests.
         */
        'headers' => env('WHENIWORK_API_HEADERS', null),
    ],
];
