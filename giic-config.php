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
        "model"    => array(
            "model"      => "sakila.models." . ucfirst($crud),
            "controller" => "sakila/hybrid/" . $crud,
            "template"   => "hybrid"
        )
    );
}

return array(
    "actions" => $actions
);