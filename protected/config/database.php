<?php

// This is the database connection configuration.
return array(
	// 'connectionString' => 'sqlite:' . dirname(__FILE__) . '/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	// 'connectionString' => 'pgsql:host=localhost;port=5432;dbname=yii-pos',
	'connectionString' => 'pgsql:host=localhost;port=5432;dbname=yii-pos',
	'emulatePrepare' => true,
	'username' => 'postgres',
	'password' => '1122',
	'charset' => 'utf8',

);
