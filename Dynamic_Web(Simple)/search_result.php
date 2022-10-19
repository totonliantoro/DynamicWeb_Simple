<?php require 'dbConnectLibrary.php'; ?>
<html>
 <head>
  <title>Toton</title>
  <style type="text/css">
        body {
            background-color: FAFAEB;
            color: darkblue;
        }
    </style>
 <head>
 <body>
  <h1>Library Search Result</h1>
  <?php
   
   $searchtype = $_GET['searchtype'];  

   //set up the sql statement - it is different depending on whether the search type
   if ($searchtype == "all")
      $sql = "SELECT * FROM books";
   if ($searchtype == "softCover")
      $sql = "SELECT * FROM books WHERE booktype='S'";
   if ($searchtype == "hardCover")
      $sql = "SELECT * FROM books WHERE booktype='H'";
   if ($searchtype == "digital")
      $sql = "SELECT * FROM books WHERE booktype='D'";
   	
   //echo "SQL statement = $sql<p>";
   //read through the books and write out info
   $result = mysqli_query($conn,$sql) or die("Error searching - ".mysqli_error($conn));
   echo "<table border=1>";
   echo "<tr><td>ID</td><td>ISBN</td><td>Title</td><td>Author</td><td>Book Type</td><td>Price</td><td>Action</td></tr>";
   while ($row = mysqli_fetch_array($result))
   {
      echo "<tr>";
      echo "<td>$row[bookid]</td>";
      echo "<td>$row[isbn]</td>";
      echo "<td>$row[title]</td>";
      echo "<td>$row[author]</td>";
      echo "<td>$row[booktype]</td>";
      echo "<td>$row[price]</td>";
	  echo "<td> <a href='book_edit.php?bookid=$row[bookid]'>Edit</a> &nbsp <a href='book_delete.php?bookid=$row[bookid]'>Delete</a></td>";
      echo "</tr>";
   }
   echo"</table> <br>";
   echo "<a href='new_book.php'>New Book</a> &nbsp &nbsp &nbsp &nbsp"; 
   echo "<a href='toton.html'>Search Again</a>";
   
  ?>
</html>
  
  
 