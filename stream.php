<?php
	ini_set('zlib.output_compression', 'Off');
	ini_set('output_buffering', 'Off');
	ini_set('output_handler', '');

	header('Content-Type: text/event-stream');
	header('Cache-Control: no-cache');
	header('Access-Control-Allow-Origin: *'); // Adjust if needed

	while(true) {
		$file = file_get_contents('http://192.168.2.17/wind.json'); // Adjust as needed
		$file = str_replace("\n", '', $file);

		echo 'data: ' . $file . "\n\n";

		ob_flush();
		flush();
		sleep(1);
	}
