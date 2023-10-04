<?php
class Product {
    // TODO: Add properties
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    // TODO: Add getFormattedPrice method

    public function getFormattedPrice(){
        $formattedPrice = number_format($this->price, 2);
        return $formattedPrice = '$'.$formattedPrice;
    }

    // TODO: Add showDetails method
    public function showDetails(){
        echo "Product Details:\n";
        echo "ID: {$this->id}\n";
        echo "Name: {$this->name}\n";
        echo "Price: {$this->getFormattedPrice()}\n";
    }

}



$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();