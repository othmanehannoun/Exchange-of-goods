<?php 
  $query = "SELECT * FROM products WHERE type = 'have'";
  $result = mysqli_query($conn, $query);      
     if (mysqli_num_rows($query) > 0 ) {
               
     ?>