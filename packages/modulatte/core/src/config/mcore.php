<?php

return [
    /**
     * Enabling this configuration allows the users to do the following
     *  - log in on the website
     *  - reset their password
     *
     * There are several packages that are dependent on this. Make sure
     * to add the *auth* middleware on your route definitions in order
     * to make the controllers only accessible by logged in users
     *
     * Log in supports both AXIOS and normal POST requests
     */
    'account' => [
        'enabled' => false,

        /**
         * Enabling this configuration allows the users to register on the
         * website
         *
         * route: /register
         * view: resources/views/auth/register.blade.php
         */
        'register' => false,

        /**
         * Enabling this configuration allows users update their account
         * information
         *
         * route: GET /my-account
         * route: PUT /my-account
         * view: resources/views/account/my-account.blade.php
         */
        'allow_account_update' => false,

        /**
         * Enabling this configuration allows users to have multiple addresses
         * related to their account
         * API Endpoints
         * route: PUT /api/user-addresses/:id
         * route: DELETE /api/user-addresses/:id
         * route: GET /api/user-addresses
         * route: POST /api/user-addresses
         */
        'addresses' => [
            'enabled' => false,
        ]
    ]
];