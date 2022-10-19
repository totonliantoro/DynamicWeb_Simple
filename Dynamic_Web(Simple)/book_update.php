<html>
<head>
<style type="text/css">
        body {
            background-color: FAFAEB;
            color: darkblue;
        }
    </style>
</head>
 <body>
 <?php
 if (empty ($_REQUEST['bookid']) || empty ($_REQUEST['isbn']) || empty ($_REQUEST['title']) || empty ($_REQUEST ['author']) || empty ($_REQUEST ['booktype']) || empty ($_REQUEST['price']))
    die("Update book failed. You must use the edit screen to supply values for the product");
	
 $bookid= $_REQUEST['bookid'];
 $isbn = $_REQUEST['isbn'];
 $author = $_REQUEST['author'];
 $title = $_REQUEST['title'];
 $booktype = $_REQUEST['booktype'];
 $price = $_REQUEST['price'];
 
 if (!filter_var($price, FILTER_VALIDATE_FLOAT))
		die ("Update book failed. You must fill the Book's price with NUMBER character");
		
 //open the server connection
 require 'dbConnectLibrary.php'; 
 //update the record
 $sql = "UPDATE Books SET isbn ='$isbn', author = '$author', title = '$title', booktype = '$booktype', price = '$price' WHERE bookid = $bookid";
 //echo "$sql";
 $result = mysqli_query($conn, $sql) or die("Error updating record ".mysqli_error($conn));
 $numrows = mysqli_affected_rows($conn);
 if ($numrows == 1)
 echo "<h2>Update successful</h2>";
 else
 echo "<h2>Update failed. $numrows were updated </h2>"; 
 ?>
 <br><br>
 <a href="book_list.php">Return to List of Books</a>
 </body>
</html>