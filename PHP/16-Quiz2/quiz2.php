<?php
abstract class Book{
    private $name;
    protected $author;
    public $pages;

    public function __construct ($name,$author,$pages){
        $this->name = $name ;
        $this->author = $author;
        $this->pages  = $pages;

    }
    public function getBook(){
        echo "Book : $this->name\n"
        ."Author: $this->author\n";
    }

}
$book = new Book("James", "Percival Everett",320);
$book->getBook();
echo "Page Count: $book->pages\n";
?>









