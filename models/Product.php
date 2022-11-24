<?php
class Product{
    private int $id;
    private string $title;
    private string $desc;
    private string $stock;
    private string $image;
    private int $brand;
    private int $category;
    private string $price;

    function __construct($id,$title,$desc,$stock,$image,$brand,$category,$price) {
        $this->id = $id;
        $this->title = $title;
        $this->desc = $desc;
        $this->stock = $stock;
        $this->image = $image;
        $this->brand = $brand;
        $this->category = $category;
        $this->price = $price;
    }
    public function getId():int {
        return $this->id;
    }
    public function getTitle():string {
        return $this->title;
    }
    public function getDesc():string {
        return $this->desc;
    }
    public function getStock():string {
        return $this->stock;
    }

    public function getImage():string {
        return $this->image;
    }
    
    public function getBrand():int {
        return $this->brand;
    }
    public function getCategory():int {
        return $this->category;
    }
    public function getPrice():string {
        return $this->price;
    }
}
?>