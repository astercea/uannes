<?php

namespace Tami\Opencart;

class Debugger {
	const LOG_FILE_PREFIX = "tami-network-logs";
	private string $log_file;
	private $file_handle;

	public function __construct() {
		$this->log_file = str_replace('//','/', sprintf( "%s/logs/%s_%s.log",
			DIR_STORAGE,
			self::LOG_FILE_PREFIX, date( 'Y-m-d' ) ));


		$this->file_handle = fopen( $this->log_file, 'a' );

	}

	public function log( $input, $title = '' ) {
		if ( is_object( $input ) || is_array( $input ) ) {
			$input = json_encode( $input, JSON_PRETTY_PRINT );
		}
		fwrite( $this->file_handle, $title . PHP_EOL );
		fwrite( $this->file_handle, $input . PHP_EOL . '============' . PHP_EOL );
	}

	public function __destruct() {
		fclose( $this->file_handle );
	}
}