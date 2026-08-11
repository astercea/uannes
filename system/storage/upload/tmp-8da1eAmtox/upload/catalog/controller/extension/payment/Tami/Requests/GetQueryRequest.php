<?php
/**
 * File: GetQueryRequest.php
 * Year: 2023
 */

namespace Tami\Opencart;

if ( ! class_exists( '\Tami\Opencart\GetQueryRequest' ) ) {
	class GetQueryRequest {
		private string $orderId;
		private ?string $isTransactionDetail = null;

		public function setOrderId( string $orderId ): GetQueryRequest {
			$this->orderId = $orderId;

			return $this;
		}

		public function setIsTransactionDetail( ?string $isTransactionDetail ): GetQueryRequest {
			$this->isTransactionDetail = $isTransactionDetail;

			return $this;
		}

		public function get(): object {
			return (object) [
				'orderId'             => $this->orderId,
				'isTransactionDetail' => $this->isTransactionDetail
			];
		}
	}
}
