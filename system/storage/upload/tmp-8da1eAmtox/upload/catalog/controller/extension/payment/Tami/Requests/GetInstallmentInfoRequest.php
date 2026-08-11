<?php
/**
 * File: GetInstallmentInfoRequest.php
 * Year: 2023
 */

namespace Tami\Opencart;

if ( ! class_exists( '\Tami\Opencart\GetInstallmentInfoRequest' ) ) {
	class GetInstallmentInfoRequest {
		public int $binNumber;
		public string $securityHash;

		public function setBinNumber( int $binNumber ): GetInstallmentInfoRequest {
			$this->binNumber = $binNumber;

			return $this;
		}

		public function generateSecurityHash($merchantId,$terminalId,$secretKey, $fixedKidValue, $fixedKValue) : void {
			$requestBody  = [
				'binNumber' => $this->binNumber,
			];

			if(!class_exists('Tami\Opencart\\HashGenerator'))
				include dirname(__FILE__, 2) . '/HashGenerator.php';

			$HashGenerator = new HashGenerator($merchantId,$terminalId,$secretKey, $fixedKidValue, $fixedKValue);
			$hash = $HashGenerator->generateJWKSignature($requestBody);

			$this->setSecurityHash($hash);
		}

		public function setSecurityHash( string $securityHash ): GetInstallmentInfoRequest {
			$this->securityHash = $securityHash;
			return $this;
		}

		public function getBinNumber(): int {
			return $this->binNumber;
		}

		public function get(): object {
			return (object) [
				'binNumber' => $this->binNumber,
				'securityHash' => $this->securityHash,
			];
		}
	}
}
