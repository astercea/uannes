<?php
/**
 * File: AuthRequest.php
 * Year: 2023
 */

namespace Tami\Opencart;

if(!class_exists('\Tami\Opencart\AuthRequest')) {
	class AuthRequest {
		public string $orderId;
		public string $amount;
		public string $currency = "TRY";
		public int $installmentCount = 1;
		public string $securityHash = '';
		public bool $motoInd = false;
		public string $paymentGroup;
		public string $paymentChannel = "";
		public string $subType = "";
		public string $callbackUrl = "";
		public Card $card;
		public Address $billingAddress;
		public Address $shippingAddress;
		public Buyer $buyer;
		public Basket $basket;

		public function setOrderId( string $orderId ): AuthRequest {
			$this->orderId = $orderId;

			return $this;
		}

		public function setAmount( float $amount ): AuthRequest {
			$this->amount = sprintf('%0.2f', $amount);

			return $this;
		}

		public function setCurrency( string $currency ): AuthRequest {
			$this->currency = $currency;

			return $this;
		}

		public function setSecurityHash( string $securityHash ): AuthRequest {
			$this->securityHash = $securityHash;

			return $this;
		}

		public function setInstallmentCount( int $installmentCount ): AuthRequest {
			$this->installmentCount = $installmentCount;

			return $this;
		}

		public function setMotoInd( bool $motoInd ): AuthRequest {
			$this->motoInd = $motoInd;

			return $this;
		}

		public function setPaymentGroup( string $paymentGroup ): AuthRequest {
			$this->paymentGroup = $paymentGroup;

			return $this;
		}

		public function setPaymentChannel( string $paymentChannel ): AuthRequest {
			$this->paymentChannel = $paymentChannel;

			return $this;
		}

		public function setSubType( string $subType ): AuthRequest {
			$this->subType = $subType;

			return $this;
		}

		public function setCallbackUrl( string $callbackUrl ): AuthRequest {
			$this->callbackUrl = $callbackUrl;

			return $this;
		}

		public function setCard( Card $card ): AuthRequest {
			$this->card = $card;

			return $this;
		}

		public function setBillingAddress( Address $billingAddress ): AuthRequest {
			$this->billingAddress = $billingAddress;

			return $this;
		}

		public function setShippingAddress( Address $shippingAddress ): AuthRequest {
			$this->shippingAddress = $shippingAddress;

			return $this;
		}

		public function setBuyer( Buyer $buyer ): AuthRequest {
			$this->buyer = $buyer;

			return $this;
		}

		public function setBasket( Basket $basket ): AuthRequest {
			$this->basket = $basket;

			return $this;
		}

		public function get(): object {
			return (object) [
				'orderId'          => $this->orderId,
				'amount'           => $this->amount,
				'currency'         => $this->currency,
				'installmentCount' => $this->installmentCount,
				'card'             => $this->card->get(),
				'billingAddress'   => $this->billingAddress->get(),
				'shippingAddress'  => $this->shippingAddress->get(),
				'buyer'            => $this->buyer->get(),
				'basket'           => $this->basket->get(),
				'securityHash'     => $this->securityHash,
				// 'motoInd'          => $this->motoInd,
				'paymentGroup'     => $this->paymentGroup,
				// 'paymentChannel'   => $this->paymentChannel,
				// 'subType'          => $this->subType,
				'callbackUrl'      => $this->callbackUrl,
			];
		}

		public function generateHash(
			$merchantId,
			$terminalId,
			$secretKey,
			$fixedKidValue,
			$fixedKValue,
			$requestBody = ''
		): bool {
			if(!class_exists('Tami\Opencart\HashGenerator'))
				include dirname(__FILE__, 2) . '/HashGenerator.php';

			$HashGenerator = new HashGenerator($merchantId,$terminalId,$secretKey, $fixedKidValue, $fixedKValue);
			$hash = $HashGenerator->generateJWKSignature(
				$requestBody
			);
			$this->setSecurityHash($hash);
			return true;
		}
	}
}
