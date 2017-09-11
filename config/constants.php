<?php

return [

    /*
    |--------------------------------------------------------------------------
    | User Defined Variables
    |--------------------------------------------------------------------------
    |
    | This is a set of variables that are made specific to this application
    | that are better placed here rather than in .env file.
    | Use config('your_key') to get the values.
    |
    | access these variables with these functions
    | Config::get('constants.company_name')
    | config('constants.company_name')
    |
    | for blade as well
    | {{ config('constants.company_email') }}
    */

    'active_con' => env('ACTIVE_CON',1),
];