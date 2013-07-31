

    'gii' => array(
        'class'          => 'system.gii.GiiModule',
        'generatorPaths' => array(
            'vendor.phundament.gii-template-collection', // gtc generators
            'ext.giix.generators',                       // giix generators
            'bootstrap.gii',                             // bootstrap generator
        ),
    ),


    'import'     => array(
        'ext.giix.components.*',
    ),