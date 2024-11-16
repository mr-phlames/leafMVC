<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Enable/Disable CSRF Protection
    |--------------------------------------------------------------------------
    |
    | Leaf will automatically generate a CSRF token for each active
    | session. We still allow you to manually enable or disable
    | CSRF protection for your app by uncommenting the line below.
    |
    */
    // 'enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Secret
    |--------------------------------------------------------------------------
    |
    | This is the secret key used to generate the CSRF token. It is
    | combined with a random string to generate the token.
    |
    */
    'secret' => _env('APP_KEY', '@nkor_leaf$0Secret!!'),

    /*
    |--------------------------------------------------------------------------
    | Secret Key
    |--------------------------------------------------------------------------
    |
    | This is the key under which the token will be stored in the
    | session. It can also be used to retrieve the token from the
    | request headers.
    |
    */
    'secretKey' => 'X-Leaf-CSRF-Token',

    /*
    |--------------------------------------------------------------------------
    | Route Exceptions
    |--------------------------------------------------------------------------
    |
    | This is a list of routes that will be excluded from CSRF
    | verification. This is useful for APIs that need to bypass
    | the CSRF verification.the csrf exempted routes routes can 
    | be defined as
    |    - directly i.e 'sample/route'
    |    - predefined expressions i.e 'route/{int|slug|any|all}' 
    |
    | @expression {int}    - Integer values i.e order/{int} → order/10
    | @expression {slug}   - Alphanumerical values i.e user/{slug} → user/janedoe98
    | @expression {any}    - Every character except slashes (/) i.e blog/{any} → blog/hello-world-153
    | @expression {wild}   - Every character including slashes i.e path/{wild} → path/any/file/path
    |
    */
    'except' => [],

    /*
    |--------------------------------------------------------------------------
    | Configure allowed HTTP methods
    |--------------------------------------------------------------------------
    |
    | This is a list of HTTP methods that are the CSRF module will
    | be active on. All other methods will be ignored.
    |
    */
    'methods' => ['POST', 'PUT', 'PATCH', 'DELETE'],

    /*
    |--------------------------------------------------------------------------
    | Configure missing token message
    |--------------------------------------------------------------------------
    |
    | This is the message that will be returned when the CSRF token
    | is not found in the request.
    |
    */
    'messages.tokenNotFound' => 'Token not found.',

    /*
    |--------------------------------------------------------------------------
    | Configure invalid token message
    |--------------------------------------------------------------------------
    |
    | This is the message that will be returned when the CSRF token
    | is invalid.
    |
    */
    'messages.tokenInvalid' => 'Invalid token.',

    /*
    |--------------------------------------------------------------------------
    | Configure error handler
    |--------------------------------------------------------------------------
    |
    | By default, the CSRF module will return a built-in error page,
    | however, you can configure a custom error handler to handle
    | your own error pages.
    |
    | onError: function() {
    |     // Your custom error handler
    | }
    |
    */
    'onError' => null,
];
