<?php

return array(
    "actions" => array(
        array(
            "template" => "FullModel",
            "model"    => array(
                "tableName"  => "actor",
                "modelClass" => "Actor",
                "modelPath"  => "sakila.models",
                "template"   => "default"
            )
        ),
        array(
            "template" => "FullModel",
            "model"    => array(
                "tableName"  => "address",
                "modelClass" => "Address",
                "modelPath"  => "sakila.models",
                "template"   => "default"
            )
        ),
        array(
            "template" => "FullModel",
            "model"    => array(
                "tableName"  => "film",
                "modelClass" => "Film",
                "modelPath"  => "sakila.models",
                "template"   => "default"
            )
        ),
        array(
            "template" => "FullModel",
            "model"    => array(
                "tableName"  => "city",
                "modelClass" => "City",
                "modelPath"  => "sakila.models",
                "template"   => "default"
            )
        ),
        array(
            "template" => "FullModel",
            "model"    => array(
                "tableName"  => "customer",
                "modelClass" => "Customer",
                "modelPath"  => "sakila.models",
                "template"   => "default"
            )
        ),
        array(
            "template" => "FullCrud",
            "model"    => array(
                "model" => "sakila.models.Actor",
                "controller" => "sakila/actor"
            )
        ),
        array(
            "template" => "FullCrud",
            "model"    => array(
                "model" => "sakila.models.Address",
                "controller" => "sakila/address"
            )
        )
    )
);