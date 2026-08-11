<?php

namespace Tami\Opencart;
/**
 * File: Response.php
 * Year: 2023
 */

class Response {
	public static function json_output( $out ) {
		header( 'Content-Type: application/json' );
		if ( ! is_string( $out ) ) {
			$out = json_encode( $out );
		}
		die( $out );
	}

	public static function sendMessageToParent( $data, $cartUrl = '/') {
		header( 'Content-Type: text/html' );
		echo sprintf( "<html>
	                    <script>
	                        var targetWindow = window.parent;
                            var data = %s;
                            
                            if(typeof window.ReactNativeWebView !== 'undefined' && typeof window.ReactNativeWebView.postMessage === 'function') {
                                targetWindow = window.ReactNativeWebView;
                                data = JSON.stringify(data);
                            }                                                        
		                    targetWindow.postMessage(data, '*');
                            if(window === targetWindow)
                            {
                                if(typeof data === 'object' && typeof data.message === 'string' && data.message)
                                {
                                    alert(data.message);
                                }
                                window.location.href = '%s';
                            }
	                    </script>
                    </html>",
			json_encode( $data ),
			$cartUrl
		);
		die;
	}

	public static function sendHtmlResult( $html ) {
		header( 'Content-Type: text/html' );
		die( $html );
	}
}
