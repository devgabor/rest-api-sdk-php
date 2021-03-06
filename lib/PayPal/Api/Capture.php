<?php 

namespace PayPal\Api;

/**
 * 
 */
class Capture extends Resource {


	/**
	 * Setter for id
	 * @param string $id
	 */ 
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * Getter for id
	 * @return string
	 */ 
	public function getId() {
		return $this->id;
	}

	/**
	 * Setter for create_time
	 * @param string $create_time
	 */ 
	public function setCreate_time($create_time) {
		$this->create_time = $create_time;
	}

	/**
	 * Getter for create_time
	 * @return string
	 */ 
	public function getCreate_time() {
		return $this->create_time;
	}

	/**
	 * Setter for update_time
	 * @param string $update_time
	 */ 
	public function setUpdate_time($update_time) {
		$this->update_time = $update_time;
	}

	/**
	 * Getter for update_time
	 * @return string
	 */ 
	public function getUpdate_time() {
		return $this->update_time;
	}

	/**
	 * Setter for state
	 * @param string $state
	 */ 
	public function setState($state) {
		$this->state = $state;
	}

	/**
	 * Getter for state
	 * @return string
	 */ 
	public function getState() {
		return $this->state;
	}

	/**
	 * Setter for amount
	 * @param PayPal\Api\Amount $amount
	 */ 
	public function setAmount($amount) {
		$this->amount = $amount;
	}

	/**
	 * Getter for amount
	 * @return PayPal\Api\Amount
	 */ 
	public function getAmount() {
		return $this->amount;
	}

	/**
	 * Setter for parent_payment
	 * @param string $parent_payment
	 */ 
	public function setParent_payment($parent_payment) {
		$this->parent_payment = $parent_payment;
	}

	/**
	 * Getter for parent_payment
	 * @return string
	 */ 
	public function getParent_payment() {
		return $this->parent_payment;
	}

	/**
	 * Setter for authorization_id
	 * @param string $authorization_id
	 */ 
	public function setAuthorization_id($authorization_id) {
		$this->authorization_id = $authorization_id;
	}

	/**
	 * Getter for authorization_id
	 * @return string
	 */ 
	public function getAuthorization_id() {
		return $this->authorization_id;
	}

	/**
	 * Setter for description
	 * @param string $description
	 */ 
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Getter for description
	 * @return string
	 */ 
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Setter for links
	 * @param PayPal\Api\Link $links
	 */ 
	public function setLinks($links) {
		$this->links = $links;
	}

	/**
	 * Getter for links
	 * @return PayPal\Api\Link
	 */ 
	public function getLinks() {
		return $this->links;
	}


}