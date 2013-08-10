<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Site Name
    |--------------------------------------------------------------------------
    |
    | This is the name of your site. It will appear in the title head element
    | of every page and on the navigation bar except for error pages. You can,
    | of course, set the Error Page Header the same as the Site Name.
    |
    */

    'name' => 'Bootstrap CMS',

    /*
    |--------------------------------------------------------------------------
    | Error Page Header
    |--------------------------------------------------------------------------
    |
    | This is the header that will appear on all error pages. It will appear in
    | the title head element of every error page.
    |
    */

    'error' => 'CMS Web Services',

    /*
    |--------------------------------------------------------------------------
    | Enable Public Registration
    |--------------------------------------------------------------------------
    |
    | This defines if public registration is allowed.
    |
    | Requires mail.php to be configured.
    | Default to true. 
    |
    */

    'regallowed' => true,

    /*
    |--------------------------------------------------------------------------
    | Require Email Verification On Registration
    |--------------------------------------------------------------------------
    |
    | This defines if public registration requires email activation.
    |
    | Requires mail.php to be configured.
    | Default to true. 
    |
    */

    'regemail' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Blogging
    |--------------------------------------------------------------------------
    |
    | This defines if the blog functionality is enabled.
    |
    | Disabling it will not delete anything from your database, it will just
    | inaccessible from the web. All associated route will not be registered,
    | and the navigation bar will not show any associated links.
    | Default to true.
    |
    */

    'blogging' => true,

    /*
    |--------------------------------------------------------------------------
    | Enable Events
    |--------------------------------------------------------------------------
    |
    | This defines if the event functionality is enabled.
    |
    | Disabling it will not delete anything from your database, it will just
    | inaccessible from the web. All associated route will not be registered,
    | and the navigation bar will not show any associated links.
    | Default to true.
    |
    */

    'events' => true,

    /*
    |--------------------------------------------------------------------------
    | Use In Memory Caching
    |--------------------------------------------------------------------------
    |
    | This defines if we can cache some of our pages and SQL data in memory.
    |
    | Requires a caching server like Redis and cache.php to be configured.
    | Default to true.
    |
    */

    'cache' => true,

    /*
    |--------------------------------------------------------------------------
    | CSS Theme
    |--------------------------------------------------------------------------
    |
    | This defines what theme of Bootstrap to use from bootswatch.com.
    |
    | Supported: "amelia", "cerulean", "cosmo", "cyborg", "default", "flatly",
    |            "journal", "readable", "simplex", "slate", "spacelab", "spruce",
    |            "superhero", "united"
    |
    | Default to "default".
    |
    */

    'theme' => 'default',

);
