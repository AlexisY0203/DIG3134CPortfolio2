<?php
    INCLUDE("database.php");
?>

<html>
    <head>
        <title>Books!</title>
    </head>
    <body>
    <h2>Current Book Stock</h2>
    <form action="index.php" method="POST">
        <h3>Add a Book to Our Stock:</h3>
        <label>Book ID:</label>
        <input type="number" id="book_id" name="book_id"></input>
        <label>Book Name:</label>  
        <input type="text" id="book_name" name="book_name"></input>
        <label>Author Last Name:</label>  
        <input type="text" id="author_lastname" name="author_lastname"></input>
        <label>Author First Name:</label>  
        <input type="text" id="author_firstname" name="author_firstname"></input>
        <label>Genre:</label>
        <input type="text" id="genre" name="genre"></input>
        <input type="submit"></input>
    </form>
    <?php
        connect();
        booksTable();
        addBook();
        close();
    ?>
</html>