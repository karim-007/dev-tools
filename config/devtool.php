<?php

return [
    "dev_sandbox"         => env("DEV_SANDBOX", true),
    'timezone'        => 'Asia/Dhaka',
    /*
      |--------------------------------------------------------------------------
      | Default Response Type
      |--------------------------------------------------------------------------
      |
      | This option controls the response type callback
      | By default, it will return json data
      | you may specify any of the other wonderful options provided here.
      |
      | Supported: "json", "html",
      |
      */
    "response_type"   => "html" // response type json/html
];
