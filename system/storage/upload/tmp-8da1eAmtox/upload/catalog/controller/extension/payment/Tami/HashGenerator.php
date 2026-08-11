<?php

namespace Tami\Opencart;


class JWKResource {
	private string $kty = 'oct';
	private string $use = 'sig';
	private string $kid;
	private string $k;
	private string $alg = 'HS512';

	public function __construct(string $kid = '', string $k = '') {
		$this->kid = $kid;
		$this->k = $k;
	}


	public function getKid(): string {
		return $this->kid;
	}

	public function getK(): string {
		return $this->k;
	}

	public function getAlg(): string {
		return $this->alg;
	}

	public function setKid(string $kid): void {
		$this->kid = $kid;
	}

	public function setK(string $k): void {
		$this->k = $k;
	}

	public function toArray(): array {
		return [
			'kty' => $this->kty,
			'use' => $this->use,
			'kid' => $this->kid,
			'k' => $this->k,
			'alg' => $this->alg
		];
	}
}

class HashGenerator {
	private $merchant_id;
	private $terminal_id;
	private $secret_key;
	private $fixed_k_value;
	private $fixed_kid_value;

	public function __construct(
		$merchantId,
		$terminalId,
		$secretKey,
		$kidValue,
		$kValue
	) {
		$this->merchant_id     = $merchantId;
		$this->terminal_id     = $terminalId;
		$this->secret_key      = $secretKey;
		$this->fixed_k_value   = $kValue;
		$this->fixed_kid_value = $kidValue;
	}

	private function generateKidValue(): string {
		$input = $this->secret_key . $this->fixed_kid_value;
		return base64_encode(hash('sha512', $input, true));
	}

	private function generateKValue(): string {
		$input = $this->secret_key . $this->fixed_k_value . $this->merchant_id . $this->terminal_id;
		return base64_encode(hash('sha512', $input, true));
	}

	private function getJWKResource(): JWKResource {
		$jwkResource = new JWKResource();
		$jwkResource->setKid($this->generateKidValue());
		$jwkResource->setK($this->generateKValue());
		return $jwkResource;
	}

	private static function base64UrlEncode(string $data): string {
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

	public function generateJWKSignature($input): string {
		if(is_array($input) || is_object($input)) {
			$input = json_encode($input);
		}
		$jwkResource = $this->getJWKResource();

		// Create header
		$header = [
			'kid' => $jwkResource->getKid(),
			'typ' => 'JWT',
			'alg' => 'HS512'
		];

		// Encode header and payload
		$headerEncoded = self::base64UrlEncode(json_encode($header));
		$payloadEncoded = self::base64UrlEncode($input);

		// Create signature
		$dataToSign = $headerEncoded . '.' . $payloadEncoded;
		$signatureKey = base64_decode($jwkResource->getK());
		$signature = hash_hmac('sha512', $dataToSign, $signatureKey, true);
		$signatureEncoded = self::base64UrlEncode($signature);

		// Combine all parts
		return $headerEncoded . '.' . $payloadEncoded . '.' . $signatureEncoded;
	}

}