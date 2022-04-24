CREATE DATABASE bookStore;

CREATE TABLE bookStore.stock (
	book_id INT(11),
    book_name VARCHAR (255),
	author_lastname VARCHAR (255),
	author_firstname VARCHAR (255),
    genre VARCHAR (255),
    PRIMARY KEY(book_id)
);

INSERT INTO bookStore.stock(book_id, book_name, author_lastname, author_firstname, genre) VALUES(0, 'Twilight', 'Meyer', 'Stephenie', 'Young Adult');