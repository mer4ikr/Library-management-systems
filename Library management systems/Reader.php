<?php
// массив всех читателей.
class Reader {
    private $name;
    private $email;
    private $borrowedBooks;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
        $this->borrowedBooks = [];
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function borrowBook($book) {
        if ($book->getAvailability()) {
            $this->borrowedBooks[] = $book; // Добавлеи книгу в список взятых
            $book->setAvailability(false); // Меняем статус доступности на false
            echo "Вы взяли книгу: " . $book->getTitle() . "\n";
        } else {
            echo "Книга '" . $book->getTitle() . "' недоступна.\n";
        }
    }

    public function returnBook($book) {
        if (($key = array_search($book, $this->borrowedBooks, true)) !== false) {
            unset($this->borrowedBooks[$key]); // Удаляем книгу из списка взятых
            $book->setAvailability(true); // Меняем статус доступности на true
            echo "Вы вернули книгу: " . $book->getTitle() . "\n";
        } else {
            echo "Вы не брали книгу: " . $book->getTitle() . "\n";
        }
    }
}
?>