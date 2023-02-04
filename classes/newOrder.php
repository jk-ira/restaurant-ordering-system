<?php
class Order{
	public $name;
	public $order_item;
	public $order_type;

	//name
	function setName($name){
		$this->name = $name;
	}
	function getName(){
		return $this->name;
	}

	//order item
	function setOrderItem($order_item){
		$this->name = $order_item;
	}
	function getOrderItem(){
		return $this->order_item;
	}

	//order type
	function setOrderType($order_type){
		$this->order_type = $order_type;
	}
	function getOrderType(){
		return $this->order_type;
	}

}


?>