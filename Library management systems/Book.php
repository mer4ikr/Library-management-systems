<?php
// массив всех книг в библиотеке.
class Book {
    private $title;
    private $author;
    private $year;
    private $isAvailable;

    public function __construct($title, $author, $year) {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isAvailable = true; // Книга доступна по умолчанию 
    }

    // Метод getTitle()
    //Он обращается к свойству $title, которое хранит название книги, и возвращает его. 
    //Использование public означает, что этот метод доступен для вызова из других классов или объектов.
    public function getTitle() {
        return $this->title;
    }
    // Метод getAuthor()
    //Он получает значение свойства $author, которое содержит имя автора, и возвращает его. 
    public function getAuthor() {
        return $this->author;
    }
    
    //Метод getYear()
    //Он возвращает значение свойства $year, которое хранит год, когда книга была издана. 
    public function getYear() {
        return $this->year;
    }

    //Метод getAvailability()
    //Он возвращает значение свойства $isAvailable, которое является булевым значением (true или false). 
    //Если книга доступна, метод вернет true, в противном случае — false.
    public function getAvailability() {
        return $this->isAvailable;
    }
    //Метод setAvailability($status)
    //Он принимает один параметр $status, который должен быть булевым значением (true или false). 
    //Метод устанавливает значение свойства $isAvailable в соответствии с переданным параметром.
    public function setAvailability($status) {
        $this->isAvailable = $status;
    }
}
?>