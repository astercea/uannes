<?php
/**
 * File: Address.php
 * Year: 2023
 */

namespace Tami\Opencart;

if(!class_exists('\Tami\Opencart\Address')) {
	class Address {
		public string $address = "";
		public string $city = "";
		public string $country = "";
		public string $contactName = "";
		public string $companyName = "";
		public string $zipCode = "";
		public string $district = "";
		public string $phoneNumber = "";

		public string $emailAddress = "";

		public function setEmailAddress( string $emailAddress ): Address {
			$this->emailAddress = $emailAddress;

			return $this;
		}

		public function setAddress( string $address ): Address {
			$this->address = $address;

			return $this;
		}

		public function setCity( string $city ): Address {
			$this->city = $city;

			return $this;
		}

		public function setCountry( string $country ): Address {
			$this->country = $country;

			return $this;
		}

		public function setContactName( string $contactName ): Address {
			$this->contactName = $contactName;

			return $this;
		}

		public function setCompanyName( string $companyName ): Address {
			$this->companyName = $companyName;

			return $this;
		}

		public function setZipCode( string $zipCode ): Address {
			$this->zipCode = $zipCode;

			return $this;
		}

		public function setDistrict( string $district ): Address {
			$this->district = $district;

			return $this;
		}

		public function setPhoneNumber( string $phoneNumber ): Address {
			$this->phoneNumber = $phoneNumber;

			return $this;
		}

		public function get(): object {
			return (object) [
				'address'     => $this->address,
				'city'        => $this->city,
				'country'     => $this->country,
				'contactName' => $this->contactName,
				'companyName' => $this->companyName,
				'zipCode'     => $this->zipCode,
				'phoneNumber' => $this->phoneNumber,
				'district'    => $this->district
			];
		}
	}
}
