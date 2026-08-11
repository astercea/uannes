<?php
/**
 * File: BasketItem.php
 * Year: 2023
 */

namespace Tami\Opencart;

if(!class_exists('\Tami\Opencart\BasketItem')) {
	class BasketItem {
		public string $itemId;
		public string $itemType;
		public string $name;
		public string $category = "";
		public string $subCategory = "";
		public float $unitPrice = 1;
		public float $totalPrice;
		public int $numberOfProducts;

		public function setItemId( string $itemId ): BasketItem {
			$this->itemId = $itemId;

			return $this;
		}

		public function setItemType( string $itemType ): BasketItem {
			$this->itemType = $itemType;

			return $this;
		}

		public function setName( string $name ): BasketItem {
			$this->name = $name;

			return $this;
		}

		public function setCategory( string $category ): BasketItem {
			$this->category = $category;

			return $this;
		}

		public function setSubCategory( string $subCategory ): BasketItem {
			$this->subCategory = $subCategory;

			return $this;
		}

		public function setUnitPrice( float $unitPrice ): BasketItem {
			$this->unitPrice = number_format($unitPrice, 2, '.','');

			return $this;
		}

		public function setTotalPrice( float $totalPrice ): BasketItem {
			$this->totalPrice = number_format($totalPrice, 2, '.','');

			return $this;
		}

		public function setNumberOfProducts( int $numberOfProducts ): BasketItem {
			$this->numberOfProducts = $numberOfProducts;

			return $this;
		}

		public function get(): object {
			return (object) [
				'itemId'           => $this->itemId,
				'itemType'         => $this->itemType,
				'name'             => $this->name,
				'category'         => $this->category,
				'subCategory'      => $this->subCategory,
				'unitPrice'        => $this->unitPrice,
				'totalPrice'       => $this->totalPrice,
				'numberOfProducts' => $this->numberOfProducts
			];
		}
	}
}
