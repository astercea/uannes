<?php
/**
 * File: Basket.php
 * Year: 2023
 */

namespace Tami\Opencart;

if(!class_exists('\Tami\Opencart\Basket')) {
	class Basket {
		public string $basketId;
		public array $basketItems;

		public function setBasketId( string $basketId ): Basket {
			$this->basketId = $basketId;

			return $this;
		}

		public function setBasketItems( array $basketItems ): Basket {
			$this->basketItems = $basketItems;

			return $this;
		}

		public function addBasketItem( BasketItem $basket_item ): Basket {
			$this->basketItems[] = $basket_item;

			return $this;
		}

		public function emptyBasket(): Basket {
			$this->basketItems = [];

			return $this;
		}

		public function get(): object {
			return (object) [
				'basketId'    => $this->basketId,
				'basketItems' => array_map( function ( BasketItem $basket_item ) {
					return $basket_item->get();
				}, $this->basketItems )
			];
		}
	}
}
