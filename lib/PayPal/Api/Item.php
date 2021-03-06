<?php 

namespace PayPal\Api;

/**
 * 
 */
class Item extends Resource {


	/**
	 * Setter for name
	 * @param string $name
	 */ 
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Getter for name
	 * @return string
	 */ 
	public function getName() {
		return $this->name;
	}

	/**
	 * Setter for sku
	 * @param string $sku
	 */ 
	public function setSku($sku) {
		$this->sku = $sku;
	}

	/**
	 * Getter for sku
	 * @return string
	 */ 
	public function getSku() {
		return $this->sku;
	}

	/**
	 * Setter for price
	 * @param string $price
	 */ 
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Getter for price
	 * @return string
	 */ 
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Setter for currency
	 * @param string $currency
	 */ 
	public function setCurrency($currency) {
		$this->currency = $currency;
	}

	/**
	 * Getter for currency
	 * @return string
	 */ 
	public function getCurrency() {
		return $this->currency;
	}

	/**
	 * Setter for quantity
	 * @param string $quantity
	 */ 
	public function setQuantity($quantity) {
		$this->quantity = $quantity;
	}

	/**
	 * Getter for quantity
	 * @return string
	 */ 
	public function getQuantity() {
		return $this->quantity;
	}


}