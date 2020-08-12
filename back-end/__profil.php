<?php   
include '../include/dbconnection.php';

// Add Product
$iduser =  $_GET['iduser'];
if(isset($_POST['add'])){

    $chemein = '../public/img/image_product/';

    $type          = $_POST['type'];
    $name          = $_POST['name'];
    $description   = $_POST['description'];
    $city          = $_POST['city'];
    $quantite      = $_POST['quantite'];
    $image         = $_FILES['image']['name'];

    $filechemien =  $chemein.$image;

if(move_uploaded_file($_FILES['image']['tmp_name'],$filechemien)){
    $stmt = $conn->prepare("INSERT Into products (type, name, description, location, qte, img) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssssis", $type, $name, $description, $city, $quantite, $image);
    $stmt->execute();

}
 if($stmt == true){
     $product_id = mysqli_insert_id($conn);
     $stmt2 = $conn->prepare("INSERT Into have (userId, prodId) values(?,?)");
     $stmt2->bind_param("ii", $iduser,  $product_id);
     $stmt2->execute();
  }

}

// affichie prodcuct table


   
    
?>