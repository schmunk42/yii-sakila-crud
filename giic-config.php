<?php

$tables = array(
    'actor',
    'address',
    'category',
    'film_text',
    'inventory',
    'language',
    'payment',
    'rental',
    'staff',
    'store',
    'film',
    'city',
    'customer',
    'country'
);
$cruds  = $tables;

$actions = array();


foreach ($tables AS $table) {
    $actions[] = array(
        "template" => "FullModel",
        "generator"=> 'vendor.phundament.gii-template-collection.fullModel.FullModelGenerator',
        "templates"=> array(
            'default' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullModel/templates/default',
        ),
        "model"    => array(
            "tableName"  => $table,
            "modelClass" => ucFirst($table),
            "modelPath"  => "sakila.models",
            "template"   => "default"
        )
    );
}

foreach ($cruds AS $crud) {
    $actions[] = array(
        "template" => "FullCrud",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'slim' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/slim',
        ),
        "model"    => array(
            "model"      => "sakila.models." . ucfirst($crud),
            "controller" => $crud,
            "template"   => "slim"
        )
    );
}

foreach ($cruds AS $crud) {
    $actions[] = array(
        "template" => "FullCrud",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'legacy' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/legacy',
        ),
        "model"    => array(
            "model"      => "sakila.models." . ucfirst($crud),
            "controller" => "zakila/" . $crud,
            "template"   => "legacy"
        )
    );
}

foreach ($cruds AS $crud) {
    $actions[] = array(
        "template" => "FullCrud",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'slim' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/slim',
        ),
        "model"    => array(
            "model"      => "sakila.models." . ucfirst($crud),
            "controller" => "sakila/slim/" . $crud,
            "template"   => "slim"
        )
    );
}

foreach ($cruds AS $crud) {
    $actions[] = array(
        "template" => "FullCrud",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'hybrid' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/hybrid',
        ),
        "model"    => array(
            "model"      => "sakila.models." . ucfirst($crud),
            "controller" => "sakila/hybrid/" . $crud,
            "template"   => "hybrid"
        )
    );
}

/*
foreach ($cruds AS $crud) {
    $actions[] = array(
        "template" => "giixModel",
        "generator"=> 'application.extensions.giix.generators.giixModel.GiixModelGenerator',
        "templates"=> array(
            'default' => dirname(__FILE__) . '/../../../app/extensions/giix/generators/giixModel/templates/default',
        ),
        "model"    => array(
            "model"      => "sakila.models.giix." . ucfirst($crud),
            "controller" => "sakila/giix/" . $crud,
            "template"   => "default",
        )
    );
}
*/

return array(
    "actions" => $actions
);