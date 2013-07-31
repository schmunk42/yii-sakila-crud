<?php
// GIIC CONFIG FILE
// ----------------

// define table list (eg. you don't need MANY_MANY tables)
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

// define CRUDs
$cruds  = $tables;

// init actions
$actions = array();

// generate default models
foreach ($tables AS $table) {
    $actions[] = array(
        "codeModel" => "FullModelCode",
        "generator"=> 'vendor.phundament.gii-template-collection.fullModel.FullModelGenerator',
        "templates"=> array(
            'default' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullModel/templates/default',
        ),
        "model"    => array(
            "tableName"  => $table,
            "modelClass" => ucFirst($table),
            "modelPath"  => "sakila.models.gtc",
            "template"   => "default"
        )
    );
}

// generate slim CRUDs into application
foreach ($cruds AS $crud) {
    $actions[] = array(
        "codeModel" => "FullCrudCode",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'slim' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/slim',
        ),
        "model"    => array(
            "model"      => "sakila.models.gtc." . ucfirst($crud),
            "controller" => $crud,
            "template"   => "slim"
        )
    );
}

// generate legacy CRUDs into module subfolder legacy
foreach ($cruds AS $crud) {
    $actions[] = array(
        "codeModel" => "FullCrudCode",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'legacy' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/legacy',
        ),
        "model"    => array(
            "model"      => "sakila.models.gtc." . ucfirst($crud),
            "controller" => "sakila/legacy/" . $crud,
            "template"   => "legacy"
        )
    );
}

// generate slim CRUDs into module sakila subfolder slim
foreach ($cruds AS $crud) {
    $actions[] = array(
        "codeModel" => "FullCrudCode",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'slim' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/slim',
        ),
        "model"    => array(
            "model"      => "sakila.models.gtc." . ucfirst($crud),
            "controller" => "sakila/slim/" . $crud,
            "template"   => "slim"
        )
    );
}

// generate hybrid CRUDs into module sakila subfolder hybrid
foreach ($cruds AS $crud) {
    $actions[] = array(
        "codeModel" => "FullCrudCode",
        "generator"=> 'vendor.phundament.gii-template-collection.fullCrud.FullCrudGenerator',
        "templates"=> array(
            'hybrid' => dirname(__FILE__) . '/../../../vendor/phundament/gii-template-collection/fullCrud/templates/hybrid',
        ),
        "model"    => array(
            "model"      => "sakila.models.gtc." . ucfirst($crud),
            "controller" => "sakila/hybrid/" . $crud,
            "template"   => "hybrid"
        )
    );
}

// generate giix models
foreach ($tables AS $table) {
    $actions[] = array(
        "codeModel" => "GiixModelCode",
        "generator"=> 'application.extensions.giix.generators.giixModel.GiixModelGenerator',
        "templates"=> array(
            'default' => dirname(__FILE__) . '/../../../app/extensions/giix/generators/giixModel/templates/default',
        ),
        "model"    => array(
            "tableName"  => $table,
            "modelClass" => ucFirst($table),
            "baseClass"  => "GxActiveRecord",
            "modelPath"  => "sakila.models.giix",
            "template"   => "default"
        )
    );
}

// generate giix CRUDs into module sakila subfolder giix
foreach ($cruds AS $crud) {
    $actions[] = array(
        "codeModel" => "GiixCrudCode",
        "generator"=> 'application.extensions.giix.generators.giixCrud.GiixCrudGenerator',
        "templates"=> array(
            'default' => dirname(__FILE__) . '/../../../app/extensions/giix/generators/giixCrud/templates/default',
        ),
        "model"    => array(
            "model"      => "sakila.models.gtc." . ucfirst($crud),
            "controller" => "sakila/giix/" . $crud,
            "template"   => "default"
        )
    );
}

return array(
    "actions" => $actions
);