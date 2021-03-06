<?php

namespace JsonWhois\Adapter\IP;

use JsonWhois\Adapter\Base;

class Geo extends Base {
	const END_POINT = '/geo';

	/**
	 * Set the payload for the request
	 * 
	 * @param string $ip IP address to lookup
	 */
	public function setPayload($ip) {
		$this->payload = ['ip_address' => $ip];
	}

	/**
	 * Build the base API request URL for this end-point
	 * 
	 * @return String Complete API end-point URL
	 */
	protected function getRequestBase() {
		return self::HOST . self::END_POINT;
	}
}