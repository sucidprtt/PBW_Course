<?php 
class Novel{
    public $title = 'Laskar Pelangi';
    public $qty = 10;

    public function stockCheck(){
        return "Remaining stock " . $this->qty;
    }

}

class Category extends Novel{
    public $name_category = "Fiction";
    public function stockCheckCategory(){
        return $this->name_category . " " . $this->title . 
        " " . $this->stockCheck();
    }
}

$novel_one = new Category();
echo $novel_one->title; //Output: Laskar Pelangi
echo '<br>';
echo $novel_one->stockCheckCategory(); //Output: Fiction Lasakar Pelangi Remaining stock 10
?>