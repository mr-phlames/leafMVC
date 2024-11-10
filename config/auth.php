<?php

use Leaf\Helpers\Password;

return [
    /*
    |--------------------------------------------------------------------------
    | Database table
    |--------------------------------------------------------------------------
    |
    | This is the table that leaf auth will perform authentication
    | checks on and edit/retrieve users from.
    |
    */
    'db.table' => 'users',

    /*
    |--------------------------------------------------------------------------
    | ID Key
    |--------------------------------------------------------------------------
    |
    |  Set your primary key name. For instance, you might have used id_user instead of id.
    |  This setting allows you to quickly switch your key name
    |
    */
    'id.key' => 'id',

    /*
    |--------------------------------------------------------------------------
    | Generate timestamps
    |--------------------------------------------------------------------------
    |
    | Automatically generate created_at/updated_at timestamps for register
    | and update methods
    |
    */
    'timestamps' => true,

    /*
    |--------------------------------------------------------------------------
    | Set timestamps format
    |--------------------------------------------------------------------------
    |
    | Use this property to specify the format that you want your timestamps to be saved in.
    | Be aware that auth uses the leafs/date module, so the accepted formats are listed in the leafs/date documentation
    |
    */
    'timestamps.format' => 'YYYY-MM-DD HH:mm:ss',

    /*
    |--------------------------------------------------------------------------
    | Encode password
    |--------------------------------------------------------------------------
    |
    | Password encode is run when leaf wants to encode passwords on register
    | This exact method is used by default in Leaf, so you can set it to null
    | if you want to.
    |
    | You can set your own implementation instead of Password::hash
    |
    */
    'password.encode' => function ($password) {
        return Password::hash($password);
    },

    /*
    |--------------------------------------------------------------------------
    | Verify Password
    |--------------------------------------------------------------------------
    |
    | This function is run to verify the password. This implementation is done
    | by default, so you can set it to null, and it will still work fine.
    |
    | You can add your own implementation instead of Password::verify
    |
    */
    'password.verify' => function ($password, $hashedPassword) {
        return Password::verify($password, $hashedPassword);
    },

    /*
    |--------------------------------------------------------------------------
    | Password Key
    |--------------------------------------------------------------------------
    |
    | The default password key. Leaf will expect this key to hold passwords
    | in your database.
    |
    */
    'password.key' => 'password',

    /*
    |--------------------------------------------------------------------------
    | Unique fields
    |--------------------------------------------------------------------------
    |
    | This is a list of items that should be unique to each user eg: email
    |
    */
    'unique' => ['email'],

    /*
    |--------------------------------------------------------------------------
    | Hidden fields
    |--------------------------------------------------------------------------
    |
    | This is a list of items that should be hidden when
    | a user object is returned. You should use the field name
    | exactly as it is in the database.
    |
    */
    'hidden' => ['field.id', 'field.password'],

    /*
    |--------------------------------------------------------------------------
    | Use session
    |--------------------------------------------------------------------------
    |
    | Use session based authentication instead of the default JWT based auth.
    |
    */
    'session' => true,

    /*
    |--------------------------------------------------------------------------
    | Session lifetime
    |--------------------------------------------------------------------------
    |
    | Set the lifetime of the session. After this time, the session will expire and the user will have to login again.
    | You can either use '1 day' format or as an integer: 86400
    | You can also set session.lifetime to 0 to disable session expiration.
    |
    */
    'session.lifetime' => 60 * 60 * 24,

    /*
    |--------------------------------------------------------------------------
    | SESSION COOKIE PARAMS
    |--------------------------------------------------------------------------
    |
    | Set the session cookie params
    | Read more: https://www.php.net/manual/en/function.session-set-cookie-params.php
    |
    | secure: cookie should only be sent over secure connections (https)
    | httponly: cookie should only be accessible through HTTP requests
    | samesite: cookie should be sent with "SameSite" directives :-
    |       Possible values for samesite: 'strict', 'lax', 'none' or null
    |
    |
    */
    'session.cookie' => ['secure' => false, 'httponly' => true, 'samesite' => 'lax'],

    /*
    |--------------------------------------------------------------------------
    | JWT Lifetime
    |--------------------------------------------------------------------------
    |
    | How long should JWT be valid for?
    |
    */
    'token.lifetime' => 60 * 60 * 24 * 365,

    /*
    |--------------------------------------------------------------------------
    | JWT Token Secret
    |--------------------------------------------------------------------------
    |
    | Secret string to encode JWT
    |
    */
    'token.secret' => _env('TOKEN_SECRET', '@leaf$MVC*JWT#AUTH.Secret'),

    /*
    |--------------------------------------------------------------------------
    | Login params error
    |--------------------------------------------------------------------------
    |
    | Error to show when the login params aren't found in db
    |
    */
    'messages.loginParamsError' => 'Incorrect credentials!',

    /*
    |--------------------------------------------------------------------------
    | Password error
    |--------------------------------------------------------------------------
    |
    | Error to show when the login password is wrong
    |
    */
    'messages.loginPasswordError' => 'Password is incorrect!',
];
