<?php 
class Book { 
// konstruktor adalah isi yang ada dalam kurung class
    // public $title ="PHP for beginners";
    // public $price = 5.5;
    // public $qty = 18;
    // public $publisher = "Gramedia";

    // property
    public $title;
    public $price;
    public $qty;
    public $publisher;

    // METHOD
    public function orderBook() {
        return $this->title . ' Ordered...';
    }

    // public function __construct() 
    // {
    //     echo 'Book class has been instantiated..';
    //     echo '<br>';
    // }

    public function __construct($title, $price, $qty, $publisher)
    {
        $this->title = $title;
        $this->price = $price;
        $this->qty = $qty;
        $this->publisher = $publisher;
    }
}
// membuat objek (instansiasi objek)
// variabel penampung, setelah itu setelah sama engan diisi, new sebagai kata kunci, setelah new memasukkan nama class nya
$book_one = new Book ('PHP for Beginner', 5.5, 18, 'Gramedia');
// mengakses properi objek untuk menampilkan isi dari object yang ada di kelasnya
//kalau paroperti ga perlu memanggil parameter (), kalau function iya
echo $book_one->title;  //Output: PHP for Beginners
echo '<br>';
echo $book_one->price; //Output: 5.5
echo '<br>';
echo $book_one->qty; //oUTPUT: 18
echo '<br>';
echo $book_one->publisher; //Output: Gramedia
echo '<br>';
echo $book_one->orderBook(); //Output: Book Ordered...

$book_two = new Book('Java for Beginners', 6.5, 20, 'Elex Media');
echo '<br>';
echo $book_two->title;
?>