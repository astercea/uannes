<?php
/**
 * File: PostAuthRequest.php
 * Year: 2023
 */

namespace Tami\Opencart;
if(!class_exists('\Tami\Opencart\PostAuthRequest')) {
	class PostAuthRequest {
		public ?float $amount = null;
		public string $orderId;
		public string $securityHash;

		public function setAmount( ?float $amount ): PostAuthRequest {
			$this->amount = $amount;

			return $this;
		}

		public function setOrderId( string $orderId ): PostAuthRequest {
			$this->orderId = $orderId;

			return $this;
		}

		public function setSecurityHash( string $securityHash ): PostAuthRequest {
			$this->securityHash = $securityHash;

			return $this;
		}

		public function get(): object {
			return (object) [
				'amount'  => $this->amount,
				'orderId' => $this->orderId,
				'securityHash' => $this->securityHash
			];
		}
	}
}
