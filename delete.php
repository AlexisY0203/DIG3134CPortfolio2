<?php
    INCLUDE("database.php");
?>

<html>
    <head>
        <title>Books!</title>
    </head>
    <body>
        <h2>Are we out of a book?</h2>
        <form action="delete.php" method="POST">
            <h3>Delete a Book:</h3>
            <label>Book Id:</label>  
            <input type="number" id="book_id" name="book_id"></input>
            <label>Book Name:</label>  
            <input type="text" id="book_name" name="book_name"></input>
            <input type="submit"></input>
        </form>
    <?php
        connect();
        booksTable();
        deleteBook();
        close();
    ?>
</html>