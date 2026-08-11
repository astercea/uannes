<?php
/**
 * File: Buyer.php
 * Year: 2023
 */

namespace Tami\Opencart;

use DateTime;

if(!class_exists('\Tami\Opencart\Buyer')) {
	class Buyer {
		public string $ipAddress;
		public string $buyerId;
		public string $name;
		public string $surName;
		public string $identityNumber = "";
		public string $city = "";
		public string $country = "";
		public string $emailAddress;
		public string $phoneNumber = "";
		public string $registrationAddress = "";
		public string $zipCode = "";
		public ?DateTime $lastLoginDate = null;

		public function setIpAddress( string $ipAddress ): Buyer {
			$this->ipAddress = $ipAddress;

			return $this;
		}

		public function setBuyerId( string $buyerId ): Buyer {
			$this->buyerId = $buyerId;

			return $this;
		}

		public function setName( string $name ): Buyer {
			$this->name = $name;

			return $this;
		}

		public function setSurName( string $surName ): Buyer {
			$this->surName = $surName;

			return $this;
		}

		public function setIdentityNumber( string $identityNumber ): Buyer {
			$this->identityNumber = $identityNumber;

			return $this;
		}

		public function setCity( string $city ): Buyer {
			$this->city = $city;

			return $this;
		}

		public function setCountry( string $country ): Buyer {
			$this->country = $country;

			return $this;
		}

		public function setEmailAddress( string $emailAddress ): Buyer {
			$this->emailAddress = $emailAddress;

			return $this;
		}

		public function setPhoneNumber( string $phoneNumber ): Buyer {
			$this->phoneNumber = $phoneNumber;

			return $this;
		}

		public function setRegistrationAddress( string $registrationAddress ): Buyer {
			$this->registrationAddress = $registrationAddress;

			return $this;
		}

		public function setZipCode( string $zipCode ): Buyer {
			$this->zipCode = $zipCode;

			return $this;
		}

		public function setLastLoginDate( ?DateTime $lastLoginDate ): Buyer {
			$this->lastLoginDate = $lastLoginDate;

			return $this;
		}

		public function get(): object {
			return (object) [
				'ipAddress'           => $this->ipAddress,
				'buyerId'             => $this->buyerId,
				'name'                => $this->name,
				'surName'             => $this->surName,
				'identityNumber'      => $this->identityNumber,
				'city'                => $this->city,
				'country'             => $this->country,
				'emailAddress'        => $this->emailAddress,
				'phoneNumber'         => $this->phoneNumber,
				'registrationAddress' => $this->registrationAddress,
				'zipCode'             => $this->zipCode,
			];
		}

	}
}
