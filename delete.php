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
                <dl>
                    <dt><label>Book Id:</label></dt>
                        <dd><input type="number" id="book_id" name="book_id"></input></dd>
                    <dt><label>Book Name:</label></dt>
                        <dd><input type="text" id="book_name" name="book_name"></input></dd>
                </dl>
                <dd><input type="submit"></input></dd>
        </form>
    <?php
        connect();
        booksTable();
        deleteBook();
        close();
        echo("<br><a href='index.php'>Back to Home</a>");
    ?>
</html>