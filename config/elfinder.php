<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Upload dir
    |--------------------------------------------------------------------------
    |
    | The dir where to store the images (relative from public).
    |
    */
    'dir' => ['uploads\yaki'],

    /*
    |--------------------------------------------------------------------------
    | Filesystem disks (Flysytem)
    |--------------------------------------------------------------------------
    |
    | Define an array of Filesystem disks, which use Flysystem.
    | You can set extra options, example:
    |
    | 'my-disk' => [
    |        'URL' => url('to/disk'),
    |        'alias' => 'Local storage',
    |    ]
    */
    'disks' => [
       
    ],

    /*
    |--------------------------------------------------------------------------
    | Routes group config
    |--------------------------------------------------------------------------
    |
    | The default group settings for the elFinder routes.
    |
    */

    'route' => [
        'prefix'     => config('backpack.base.route_prefix', 'admin').'/yaki-images',
        'middleware' => ['web', config('backpack.base.middleware_key', 'admin')], //Set to null to disable middleware filter
    ],

    /*
    |--------------------------------------------------------------------------
    | Access filter
    |--------------------------------------------------------------------------
    |
    | Filter callback to check the files
    |
    */

    'access' => 'Barryvdh\Elfinder\Elfinder::checkAccess',

    /*
    |--------------------------------------------------------------------------
    | Roots
    |--------------------------------------------------------------------------
    |
    | By default, the roots file is LocalFileSystem, with the above public dir.
    | If you want custom options, you can set your own roots below.
    |
    */

    'roots' => null,

    /*
    |--------------------------------------------------------------------------
    | Options
    |--------------------------------------------------------------------------
    |
    | These options are merged, together with 'roots' and passed to the Connector.
    | See https://github.com/Studio-42/elFinder/wiki/Connector-configuration-options-2.1
    |
    */

    'options' => array(
        'driver'         => 'LocalFileSystem',
        'path'           => 'PathToTargetDirectory',
        'dirMode'        => 0755,            // new dirs mode (default 0755)
        'fileMode'       => 0644,            // new files mode (default 0644)
        'quarantine'     => '.quarantine',   // quarantine folder name. Absolute path is also possible. (default '.quarantine') - required to check archive (must be hidden)
        'followSymLinks' => true,            // follow symbolic links (default true) (elFinder >= 2.1.8)
        'detectDirIcon'  => '',              // File to be detected as a folder icon image (elFinder >= 2.1.10) e.g. '.favicon.png'
        'keepTimestamp'  => 'array("copy", "move")' // Keep timestamp at inner filesystem (elFinder >= 2.1.12) It allowed 'copy', 'move' and 'upload'.
    ),

];
