<html>
 <head>
 <title>Toton-Edit Book</title>
 <style type="text/css">
        body {
            background-color: FAFAEB;
            color: darkblue;
        }
    </style>
 </head>
 <body>
 <h1>Edit Book Information</h1>
 <?php
 if (!isset($_GET['bookid']))
    die("You need to select a book ID from the form");
 $bookid = $_GET['bookid'];
 //open the server connection
 require 'dbConnectLibrary.php'; 
 //get the record
 $sql = "SELECT * FROM Books WHERE bookid = '$bookid'";
 $result = mysqli_query($conn, $sql) or die("Error editing - ". mysqli_error($conn)); 
 if (mysqli_num_rows($result) == 0)
 die("Error – record not found to edit");
 while ($row = mysqli_fetch_array($result))
 {
	 $bookid = $row['bookid'];
	 $isbn   = $row['isbn'];
	 $title  = $row['title'];
	 $author = $row['author'];
	 $booktype = $row['booktype'];
     $price = $row['price']; 	 
 }
 
 /*
 $sql1 = "SELECT * FROM booktypes WHERE booktypeid = $booktype";
 $result1 = mysqli_query($conn, $sql1) or die("Error editing - ". mysqli_error($conn)); 
  while ($row1 = mysqli_fetch_array($result1))
 {
	 $booktypeid = $row1['booktypeid'];
	 $theBookType = $row1['booktype'];
	 
 }
 */
 
 echo "<form action=book_update.php method=GET onSubmit=\"return checkForm()\">";
 echo "<input type=hidden name=bookid value=$bookid>"; 
 echo "<label for='isbn'>ISBN:</label> &nbsp &nbsp";
 echo "<input type = 'text' name = 'isbn' id = 'isbn'  value = '$isbn' selected>&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
 echo "<label for='author'>Author:</label> &nbsp &nbsp";
 echo "<input type = 'text' name = 'author' id = 'author'  value = '$author' selected> <br> <br> <br>";
 echo "<label for='title'>Title:</label> &nbsp &nbsp &nbsp";
 echo "<input type = 'text' name = 'title' id = 'title' size = '68px' value = '$title' selected> <br> <br>";
 echo "<label for='booktype'>Book Type:</label> &nbsp &nbsp";
 echo "<select name='booktype' >";
 ?>
 <option value='S' <?php if ($booktype == 'S') echo "selected" ?> >Soft Cover</option>;
 <option value='H' <?php if ($booktype == 'H') echo "selected" ?> >Hard Cover</option>;
 <option value='D' <?php if ($booktype == 'D') echo "selected" ?> >Digital</option>;
 
 <?php
 echo "</select> &nbsp &nbsp &nbsp" ;
 echo "<label for='price'>Price($):</label> &nbsp &nbsp";
 echo "<input type = 'text' name = 'price' id = 'price' step = '0.01' value = '$price' selected >*price must be number <br> <br> <br> <br>";
 echo "<a href='book_list.php'>Book List</a> &nbsp &nbsp &nbsp";
 echo "<input type='submit' value='Update Book'>"; 
 echo "</form>";
 
 ?>
 </body>
</html>