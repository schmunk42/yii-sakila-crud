<?php
$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1>Sakila CRUD Test</h1>

<p>
    This module is meant for testing CRUDs, you'll find the exisiting generated CRUDs in:
    <ul>
        <li><?php echo CHtml::link('slim', array('/sakila/slim/film')) ?></li>
        <li><?php echo CHtml::link('hybrid', array('/sakila/hybrid/film')) ?></li>
        <li><?php echo CHtml::link('legacy', array('/sakila/legacy/film')) ?></li>
        <li><?php echo CHtml::link('giix', array('/sakila/giix/film')) ?></li>
    </ul>
</p>
