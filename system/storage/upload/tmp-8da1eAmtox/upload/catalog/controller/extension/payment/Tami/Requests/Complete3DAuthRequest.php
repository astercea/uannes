<?php
/**
 * File: Complete3DAuthRequest.php
 * Year: 2023
 */

namespace Tami\Opencart;

if(!class_exists('\Tami\Opencart\Complete3DAuthRequest')) {
	class Complete3DAuthRequest extends PostAuthRequest {
		public function generateHash(
			$merchantId,
			$terminalId,
			$secretKey,
			$fixedKidValue,
			$fixedKValue
		): bool {
			$hashBody = [
				'orderId' => $this->orderId
			];

			if(!class_exists('Tami\Opencart\\HashGenerator'))
				include dirname(__FILE__,2) . '/HashGenerator.php';

			$HashGenerator = new HashGenerator(
				$merchantId,
				$terminalId,
				$secretKey,
				$fixedKidValue,
				$fixedKValue
			);

			$hash = $HashGenerator->generateJWKSignature(
				$hashBody
			);

			$this->setSecurityHash($hash);
			return true;
		}
	}

}
