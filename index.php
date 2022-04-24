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
        <dl>
            <dt><label>Book ID:</label></dt>
                <dd><input type="number" id="book_id" name="book_id"></input></dd>
            <dt><label>Book Name:</label><dt> 
                <dd><input type="text" id="book_name" name="book_name"></input></dd>
            <dt><label>Author Last Name:</label><dt>  
                <dd><input type="text" id="author_lastname" name="author_lastname"></input></dd>
            <dt><label>Author First Name:</label><dt>  
                <dd><input type="text" id="author_firstname" name="author_firstname"></input></dd>
            <dt><label>Genre:</label><dt>
                <dd><input type="text" id="genre" name="genre"></input></dd>
        </dl>
            <dd><input type="submit"></input></dd>
    </form>
    <?php
        connect();
        booksTable();
        addBook();
        close();
        echo("<br><a href='delete.php'>Delete a Book</a>");
    ?>
</html>