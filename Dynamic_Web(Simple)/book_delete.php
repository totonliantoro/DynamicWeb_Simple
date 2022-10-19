<html>
 <head>
 <title>Toton-Books</title>
 <style type="text/css">
        body {
            background-color: FAFAEB;
            color: darkblue;
        }
    </style>
 </head>
 <body>
 <h1>Book Deleted</h1>
 <?php
 $bookid = $_GET['bookid'];
 //open the server connection
 require 'dbConnectlibrary.php'; 
 //delete the product
 $sql = "DELETE FROM Books WHERE bookid = $bookid";
 //echo "SQL statement = $sql<p>";
 $result = mysqli_query($conn, $sql) or die("Error deleting record - ".mysqli_error($conn));
 $numrows = mysqli_affected_rows($conn);
 if ($numrows == 1)
    echo "<h2>delete successful</h2>";
 else
    echo "<h2>delete failed. $numrows were deleted</h2>";
 mysqli_close($conn);
 ?>
 <a href="book_list.php">Return Books List</a>
 </body>
</html>