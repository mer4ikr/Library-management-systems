<?php
class Library {
    private $books;
    private $readers;

    public function __construct() {
        $this->books = [];
        $this->readers = [];
    }

    public function addBook($book) {
        $this->books[] = $book; // Добавляем книгу в библиотеку
        echo "Книга '" . $book->getTitle() . "' добавлена в библиотеку.\n";
    }

    public function addReader($reader) {
        $this->readers[] = $reader; // Добавляем читателя в систему
        echo "Читатель '" . $reader->getName() . "' добавлен в систему.\n";
    }

    public function findBook($title) {
        foreach ($this->books as $book) {
            if ($book->getTitle() === $title) {
                return $book; // Возвращаем найденную книгу
            }
        }
        return null; // Книга не найдена
    }

    public function listBooks() {
        echo "Список книг в библиотеке:\n";
        foreach ($this->books as $book) {
            echo "- " . $book->getTitle() . " автор: " . $book->getAuthor() . "\n";
        }
    }
}
?>