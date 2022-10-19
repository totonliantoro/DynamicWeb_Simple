<html>
 <head>
  <title>Toton-Add Book</title>
  <style type="text/css">
        body {
            background-color: FAFAEB;
            color: darkblue;
        }
    </style>
 <head>
 <body>
  <h1>Insert Book</h1>
  <?php
   
   if (null !== ($_GET['isbn'] && $_GET['author'] && $_GET['title'] && $_GET ['booktype'] && $_GET ['price']))
 { 
	 $isbn = trim($_GET['isbn']);
	 $author = trim($_GET['author']);
	 $title =  trim($_GET['title']);
	 $booktype =  trim($_GET['booktype']);
	 $price =  trim($_GET['price']);
	 
	 if (empty($isbn) || empty($author) || empty ($title) || empty($booktype)||empty($price))
		die("Add book failed. The book information has not been filled completely");
	 if (!filter_var($price, FILTER_VALIDATE_FLOAT))
		die ("Add book failed. You must fill the Book's price with NUMBER character");	
	 else
		 
	 {
		 //open the server connection
		 require 'dbConnectLibrary.php'; 
		 //update the record
		 $sql = "INSERT INTO Books (ISBN, Title, Author, Booktype, Price) VALUES ('$isbn','$author','$title','$booktype','$price')";
		 $result = mysqli_query($conn, $sql) or die("Error updating record ".mysqli_error($conn));
		 $numrows = mysqli_affected_rows($conn);
		 if ($numrows == 1)
			echo "1 New book added successfully";
		 else
			echo "New book add failed. $numrows were updated"; 
	 }
 }
 else
 {
	die("You must supply all required book information.");
 }
 ?>

<br> <br> <br>

<a href='book_list.php'>Book List</a> &nbsp &nbsp
<a href='new_book.php'>New Book</a>
 
   
  
 </html>