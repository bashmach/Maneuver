<?php

return array(

    /*
    |--------------------------------------------------------------------------
    | Ignored Files
    |--------------------------------------------------------------------------
    |
    | Maneuver will check .gitignore for ignore files, but you can conveniently
    | add here additional files to be ignored.
    |
    */
    'ignored' => array(),

    /*
    |--------------------------------------------------------------------------
    | Default server
    |--------------------------------------------------------------------------
    |
    | Default server to deploy to when running 'deploy' without any arguments.
    | If this options isn't set, deployment will be run to all servers.
    |
    */
    'default' => 'development',

    /*
    |--------------------------------------------------------------------------
    | Name of revision file
    |--------------------------------------------------------------------------
    |
    | File which stores the hash of latest repository revision deployed to the server
    */
    'revisionFile' => env('DEPLOY_REVISION_FILE', '.revision'),

    /*
    |--------------------------------------------------------------------------
    | Connections List
    |--------------------------------------------------------------------------
    |
    | Servers available for deployment. Specify one or more connections, such
    | as: 'deployment', 'production', 'stating'; each with its own credentials.
    |
    */

    'connections' => array(

        'development' => array(
            'scheme'    => 'ftp',
            'host'      => 'yourdevserver.com',
            'user'      => 'user',
            'pass'      => 'myawesomepass',
            'path'      => '/path/to/server/',
            'port'      => 21,
            'passive'   => true
        ),

        'production' => array(
            'scheme'    => 'ftp',
            'host'      => 'yourserver.com',
            'user'      => 'user',
            'pass'      => 'myawesomepass',
            'path'      => '/path/to/server/',
            'port'      => 21,
            'passive'   => true
        ),

    ),

);