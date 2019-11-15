<?php
/*
	$dataPath = getenv('DATA_PATH');
	if ($dataPath == '') {
		$dataPath=FRESHRSS_PATH . '/data';
	}
*/

safe_define('DATA_PATH', '/FreshRSS-data');
safe_define('UPDATE_FILENAME', DATA_PATH . '/update.php');
safe_define('USERS_PATH', DATA_PATH . '/users');
safe_define('ADMIN_LOG', USERS_PATH . '/_/log.txt');
safe_define('API_LOG', USERS_PATH . '/_/log_api.txt');
safe_define('CACHE_PATH', DATA_PATH . '/cache');
safe_define('PSHB_LOG', USERS_PATH . '/_/log_pshb.txt');
safe_define('PSHB_PATH', DATA_PATH . '/PubSubHubbub');
