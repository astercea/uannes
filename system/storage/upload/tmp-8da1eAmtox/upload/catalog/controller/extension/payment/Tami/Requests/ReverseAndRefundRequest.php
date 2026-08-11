<?php
/**
 * File: ReverseAndRefundRequest.php
 * Year: 2023
 */

namespace Tami\Opencart;

if(!class_exists('\Tami\Opencart\ReverseAndRefundRequest')) {
	class ReverseAndRefundRequest {
		public string $orderId;
		public ?float $amount = null;
		public ?string $reason = null;
		public ?string $securityHash = null;

		public function setOrderId( string $orderId ): ReverseAndRefundRequest {
			$this->orderId = $orderId;

			return $this;
		}

		public function setAmount( ?float $amount ): ReverseAndRefundRequest {
			$this->amount = $amount;

			return $this;
		}

		public function setReason( ?string $reason ): ReverseAndRefundRequest {
			$this->reason = $reason;

			return $this;
		}

		public function setSecurityHash( string $securityHash ): ReverseAndRefundRequest {
			$this->securityHash = $securityHash;

			return $this;
		}

		public function generateHash(
			$merchantId,
			$terminalId,
			$secretKey,
			$fixedKidValue,
			$fixedKValue
		): bool {
			$requestBody = [
				'amount' => $this->amount,
				'orderId' => $this->orderId,
			];


			if(!class_exists('Tami\Opencart\HashGenerator'))
				include dirname(__FILE__, 2) . '/HashGenerator.php';

			$HashGenerator = new HashGenerator($merchantId,$terminalId,$secretKey, $fixedKidValue, $fixedKValue);
			$this->setSecurityHash($HashGenerator->generateJWKSignature($requestBody));
			return true;
		}

		public function get(): object {
			return (object) [
				'orderId' => $this->orderId,
				'amount'  => $this->amount,
				'reason'  => $this->reason,
				'securityHash' => $this->securityHash
			];
		}
	}
}
