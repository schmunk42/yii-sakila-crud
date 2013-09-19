# Quick-quick guide

Create Phundament project (app-crud branch)

    composer.phar -sdev --prefer-dist create-project phundament/app app-crud

Install sakila module

    composer.phar require schmunk42/yii-sakila-crud:@dev
    
Update your local config

* update to MySQL
* enable sakila module
* enable gii, gtc and giix
```
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
```

Update your local console config 

* enable migration-module

Run giic
    
    php vendor/schmunk42/giic/giic.php giic generate sakila

Finally, open http://phundament.local/index.php?r=sakila
