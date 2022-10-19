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
  <h1>New Book</h1>
  <?php
   
   echo "<form action='book_add.php' method='get'>";
   echo "<label for='isbn'>ISBN:</label> &nbsp &nbsp";
   echo "<input type = 'text' name = 'isbn' id = 'isbn'  >&nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp";
   echo "<label for='author'>Author:</label> &nbsp &nbsp";
   echo "<input type = 'text' name = 'author' id = 'author'  > <br> <br> <br>";
   echo "<label for='title'>Title:</label> &nbsp &nbsp &nbsp";
   echo "<input type = 'text' name = 'title' id = 'title' size = '68px'> <br> <br>";
   echo "<label for='booktype'>Book Type:</label> &nbsp &nbsp";
   echo "<select name='booktype'>";
   echo "<option value='S'>Soft Cover</option>";
   echo "<option value='H'>Hard Cover</option>";
   echo "<option value='D'>Digital</option>";
   echo "</select> &nbsp &nbsp &nbsp" ;
   echo "<label for='price'>Price($):</label> &nbsp &nbsp";
   //echo "<input type = 'number' name = 'price' id = 'price' step='0.01'> <br> <br> <br> <br>";
   echo "<input type = 'text' name = 'price' id = 'price'> *price must be number";
   echo "<br> <br> <br> <br>"; 	
   echo "<a href='book_list.php'>Book List</a> &nbsp &nbsp &nbsp";
   echo "<input type='submit' value='Insert Book'>"; 
   echo "</form>"
   
   
   
   
   
  
  ?>