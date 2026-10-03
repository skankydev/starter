<?php
/**
 * La config de ton projet : elle a toujours le dernier mot sur celle du
 * framework (SkankyDev/Config/default.config.php) et sur celle des modules.
 */

$conf =  [
	'debug'     => (int)(getenv('APP_DEBUG') !== false ? getenv('APP_DEBUG') : 2),
	'Module'=>[
		'App'
	],
	'db' => [
		'MongoDB' =>[
			'host'     => getenv('DB_MONGO_HOST')     ?: 'localhost',
			'port'     => getenv('DB_MONGO_PORT')     ?: '27017',
			'username' => getenv('DB_MONGO_USERNAME') ?: '',
			'password' => getenv('DB_MONGO_PASSWORD') ?: '',
			'database' => getenv('DB_MONGO_DATABASE') ?: 'SkankyStarter',
		]
	],
	'smtp' => [
		'host' => getenv('MAIL_HOST') ?: '',
		'port' => getenv('MAIL_PORT') ?: '',
		'secure' => getenv('MAIL_SECURE') ?: '',
		'username' => getenv('MAIL_USERNAME') ?: '',
		'password' => getenv('MAIL_PASSWORD') ?: '',
		'default_sender'  => getenv('MAIL_SENDER') ?: '',
	],
	'timeHelper'=> [
		'format'=>'Y-m-d H:i:s',
		'timezone'=>getenv('APP_TIMEZONE') ?: 'UTC',
	],
];

return $conf;
