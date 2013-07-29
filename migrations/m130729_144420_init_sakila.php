<?php

class m130729_144420_init_sakila extends EDbMigration
{
	public function up()
	{
        $schema = file_get_contents(dirname(__FILE__).'/sakila-schema.sql');
	    $this->execute($schema);
        $data = file_get_contents(dirname(__FILE__).'/sakila-data.sql');
	    $this->execute($data);
	}

	public function down()
	{
		echo "m130729_144420_init_sakila does not support migration down.\n";
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}