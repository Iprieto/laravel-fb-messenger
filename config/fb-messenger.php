<?php
return [

   'guest' => [

       'debug' => env('APP_DEBUG', false),
       'verify_token' => env('MESSENGER_VERIFY_TOKEN'),
       'app_token' => env('MESSENGER_APP_TOKEN'),
       'app_secret' => env('MESSENGER_APP_SECRET', null),
       'auto_typing' => true,
       'handlers' => [
           Minty\Bot\MainHandler::class,
       ],
       'postbacks' => [
           Minty\Bot\StartupPostback::class,
           Minty\Bot\ContentPostback::class,
           Minty\Bot\ApartmentPostback::class,
           Minty\Bot\MenuHumanHelpPostback::class,
           Minty\Bot\PersistantMenuHumanButtonPostback::class,
       ],
       'referrals' => [
           Minty\Bot\CustomReferralHandler::class,
       ],

   ],

   'clean' => [

       'debug' => env('APP_DEBUG', false),
       'verify_token' => env('MESSENGER_VERIFY_TOKEN'),
       'app_token' => env('MESSENGER_APP_TOKEN'),
       'app_secret' => env('MESSENGER_APP_SECRET', null),
       'auto_typing' => true,
       'handlers' => [
           Minty\Bot\MainHandler::class,
       ],
       'postbacks' => [
           Minty\Bot\StartupPostback::class,
           Minty\Bot\ContentPostback::class,
           Minty\Bot\ApartmentPostback::class,
           Minty\Bot\MenuHumanHelpPostback::class,
           Minty\Bot\PersistantMenuHumanButtonPostback::class,
       ],
       'referrals' => [
           Minty\Bot\CustomReferralHandler::class,
       ],

   ],

   'another_one' => [

       'debug' => env('APP_DEBUG', false),
       'verify_token' => env('MESSENGER_VERIFY_TOKEN'),
       'app_token' => env('MESSENGER_APP_TOKEN'),
       'app_secret' => env('MESSENGER_APP_SECRET', null),
       'auto_typing' => true,
       'handlers' => [
           Minty\Bot\MainHandler::class,
       ],
       'postbacks' => [
           Minty\Bot\StartupPostback::class,
           Minty\Bot\ContentPostback::class,
           Minty\Bot\ApartmentPostback::class,
           Minty\Bot\MenuHumanHelpPostback::class,
           Minty\Bot\PersistantMenuHumanButtonPostback::class,
       ],
       'referrals' => [
           Minty\Bot\CustomReferralHandler::class,
       ],

   ],

];