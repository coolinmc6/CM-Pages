<?php
	// host, username, password, db_name
	// localhost, root, password, php_web_dev_4th
	// table is: bookmarks
	function db_connect() {
		// $result = new mysqli('localhost', 'bm_user', 'password', 'bookmarks');

		// WORK
		// $result = new mysqli('localhost', 'root', 'password', 'php_web_dev_4th');

		//HOME
		$result = new mysqli('localhost', 'root', '', 'php_web_dev_4th');
		if (!$result) {
			throw new Exception('Could not connect to database server');
		} else {
			// echo "Successfully connected";
			return $result;
		}
	}
?>
