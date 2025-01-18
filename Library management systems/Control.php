<?php
// Создаем библиотеку
$library = new Library();

// Создаем книги
$book1 = new Book("1984", "Джордж Оруэлл", 1949);
$book2 = new Book("Война и мир", "Лев Толстой", 1869);

// Добавляем книги в библиотеку
$library->addBook($book1);
$library->addBook($book2);

// Создаем читателя
$reader1 = new Reader("Иван Иванов", "ivan@example.com");

// Добавляем читателя в систему
$library->addReader($reader1);

// Читатель берет книгу
$reader1->borrowBook($book1);

// Список всех книг в библиотеке
$library->listBooks();

// Читатель возвращает книгу
$reader1->returnBook($book1);
?>