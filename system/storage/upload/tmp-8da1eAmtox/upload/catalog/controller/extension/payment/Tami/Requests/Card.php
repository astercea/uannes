<?php
/**
 * File: Card.php
 * Year: 2023
 */

namespace Tami\Opencart;

if(!class_exists('\Tami\Opencart\Card')) {
	class Card {
		public string $cvv;
		public string $expireMonth;
		public string $expireYear;
		public string $holderName;
		public string $number;

		public function setCvv( string $cvv ): Card {
			$this->cvv = $cvv;

			return $this;
		}

		public function setExpireMonth( string $expireMonth ): Card {
			$this->expireMonth = $expireMonth;

			return $this;
		}

		public function setExpireYear( string $expireYear ): Card {
			$this->expireYear = $expireYear;

			return $this;
		}

		public function setHolderName( string $holderName ): Card {
			$this->holderName = $holderName;

			return $this;
		}

		public function setNumber( string $number ): Card {
			$this->number = $number;

			return $this;
		}

		public function get(): object {
			return (object) [
				'cvv'         => $this->cvv,
				'expireMonth' => $this->expireMonth,
				'expireYear'  => $this->expireYear,
				'holderName'  => $this->holderName,
				'number'      => $this->number
			];
		}
	}
}
