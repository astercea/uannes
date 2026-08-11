<?php

namespace Tami\Opencart;

if ( ! class_exists( '\Tami\Opencart\\OneTimeHostedTokenRequest' ) ) {
	class OneTimeHostedTokenRequest {
		private $amount;
		private $orderId;
		private $successCallbackUrl;
		private $failCallbackUrl;
		private $mobilePhoneNumber;

		/**
		 * @return mixed
		 */
		public function get_amount() {
			return $this->amount;
		}

		/**
		 * @param mixed $amount
		 */
		public function set_amount( $amount ): void {
			$this->amount = sprintf('%0.2f', $amount);
		}

		/**
		 * @return mixed
		 */
		public function get_order_id() {
			return $this->orderId;
		}

		/**
		 * @param mixed $orderId
		 */
		public function set_order_id( $orderId ): void {
			$this->orderId = $orderId;
		}

		/**
		 * @return mixed
		 */
		public function get_success_callback_url() {
			return $this->successCallbackUrl;
		}

		/**
		 * @param mixed $successCallbackUrl
		 */
		public function set_success_callback_url( $successCallbackUrl ): void {
			$this->successCallbackUrl = $successCallbackUrl;
		}

		/**
		 * @return mixed
		 */
		public function get_fail_callback_url() {
			return $this->failCallbackUrl;
		}

		/**
		 * @param mixed $failCallbackUrl
		 */
		public function set_fail_callback_url( $failCallbackUrl ): void {
			$this->failCallbackUrl = $failCallbackUrl;
		}

		/**
		 * @return mixed
		 */
		public function get_mobile_phone_number() {
			return $this->mobilePhoneNumber;
		}

		/**
		 * @param mixed $mobilePhoneNumber
		 */
		public function set_mobile_phone_number( $mobilePhoneNumber ): void {
			$this->mobilePhoneNumber = $mobilePhoneNumber;
		}

		public function get(): array {
			return [
				'amount' => (string) $this->amount,
				'orderId' => $this->orderId,
				'successCallbackUrl' => $this->get_success_callback_url(),
				'failCallbackUrl' => $this->get_fail_callback_url(),
				'mobilePhoneNumber' => $this->get_mobile_phone_number(),
			];
		}

	}
}