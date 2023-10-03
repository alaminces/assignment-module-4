<?php 

class Product {
  private int $productId;
  private string $productName;
  private float $productPrice;

  public function __construct($id,$name,$price){
    $this->productId    = $id;
    $this->productName  = $name;
    $this->productPrice = $price;
  }

  private function getFormattedPrice() {
    return sprintf("$%.2f",$this->productPrice);
  }

  public function showDetails() {
    print "Product Details:\n";
    printf("ID: %d\n",$this->productId);
    printf("Name: %s\n",$this->productName);
    printf("Price: %s\n",$this->getFormattedPrice());
  }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
