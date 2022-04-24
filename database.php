<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "bookStore";
    $connection = null;

    function connect() {
        global $server;
        global $username;
        global $password;
        global $database;
        global $connection;

        if ($connection == null) {
            $connection = mysqli_connect($server, $username, $password, $database);
        }
    }

    function booksTable() {
        global $connection;

        if ($connection != null) {
            $results = mysqli_query($connection, "SELECT `book_name`, `author_lastname`, `author_firstname`, `genre` FROM `stock`;");
            echo("<table width='600' border='1px solid'><tbody>");
            echo("<tr><th>Book Name</th><th>Author Last Name</th><th>Author First Name</th><th>Genre</th></tr>");
            while($row = mysqli_fetch_assoc($results)) {
                echo("<tr>");
                echo("<td>".$row['book_name']."</td>");
                echo("<td>".$row['author_lastname']."</td>");
                echo("<td>".$row['author_firstname']."</td>");
                echo("<td>".$row['genre']."</td>");
                echo("</tr>");
            }
            echo("</tbody></table>");
        }
    }

    function addBook() {
        global $connection;
        if (isset($_POST["book_id"]) &&
            isset($_POST["book_name"]) &&
            isset($_POST["author_lastname"]) &&
            isset($_POST["author_firstname"]) &&
            isset($_POST["genre"])) {
                $bookName = htmlspecialchars($_POST["book_name"]);
                $author_lastName = htmlspecialchars($_POST["author_lastname"]);
                $author_firstName = htmlspecialchars($_POST["author_firstname"]);
                $genre = htmlspecialchars($_POST["genre"]);
                $bookId = intval($_POST["book_id"]);
                if($connection != null) {
                    $results = mysqli_query($connection, "INSERT INTO stock (book_id, book_name, author_lastname, author_firstname, genre) VALUES('{$bookId}', '{$bookName}', '{$author_lastName}', '{$author_firstName}', '{$genre}')");
            }
        }
    }

    function deleteBook() {
        global $connection;
        if (isset($_POST["book_id"]) &&
            isset($_POST["book_name"])) {
                $book_id = intval($_POST["book_id"]);
                $book_name = htmlspecialchars($_POST["book_name"]);
                if($connection != null) {
                    $delete = "DELETE FROM stock WHERE book_name = '{$book_name}'";
                    mysqli_query($connection, $delete);
                }
            }
    }

    function close() {
        global $connection;

        if ($connection != null) {
            mysqli_close($connection);
        }
    }
?>