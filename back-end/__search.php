

<?php
include '../include/dbconnection.php';
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['search_key'];
    $location      = $_POST['city'];
    $query = "SELECT * FROM products WHERE name LIKE '%$valueToSearch%' AND location = '$location' ";
    $search_result = mysqli_query($conn, $query);
    
}
 else {
          $query =  "SELECT * FROM products WHERE type = 'have' "; 
          $search_result = mysqli_query($conn, $query);
}



?>

