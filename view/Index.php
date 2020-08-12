<?php include '../include/dbconnection.php'; ?>
<?php include 'head.php'; ?>
<?php include 'navbar.php'; ?>
<?php include '../back-end/__search.php'; ?>


    <header>
   
      <div class="row">
          <div id="container">  

            <!-- SEARCH PRODUCT -->
            <form id="contact" action="" method="post">
  
              <h3>SEARCH PRODUCT</h3>

                <input name="search_key" placeholder="Search" id="inputGroupSelect01">
            
                 <select name="depart" class="search-field skills" id="inputGroupSelect01">
                  <option selected>Category</option>
                  <option value="casablanca">casa blanca</option>
                  <option value="fes">Fes</option>
                  <option value="safi">Safi</option>
                  <option value="dakhla">dakhla</option>
                  <option value="Salé">Salé</option>
                </select>
                
                <select name="city" class="search-field skills" id="inputGroupSelect01">
                  <option selected>City</option>
                  <option value="casablanca">casa blanca</option>
                  <option value="fes">Fès</option>
                  <option value="safi">Safi</option>
                  <option value="dakhla">dakhla</option>
                  <option value="Salé">Salé</option>
                </select>
     
                <select name="depart" class="search-field skills" id="inputGroupSelect01">
                  <option selected>Secture</option>
                  <option value="casablanca">casa blanca</option>
                  <option value="fes">Fès</option>
                  <option value="safi">Safi</option>
                  <option value="dakhla">dakhla</option>
                  <option value="Salé">Salé</option>
                </select>
             
                <button name="search" type="submit" id="contact-submit" data-submit="...Sending">SEARCH</button>
             
              </form>
          </div>
        
         
        </div>
        
      </div>
      <div class="overly"></div>
    </div>
  </header> 


<div class="row">
<?php 
              while($row = mysqli_fetch_array($search_result)){
                    $chemein = '../public/img/image_product/';
                    $id = $row['prodId'];
                    $name = $row['name'];
                    $description = $row['description'];
                    $location = $row['location'];
                    $qte = $row['qte'];
                    $date = $row['datet'];
                    
     ?>
<div class="col-md-4">
	<figure class="card card-product">
  <img height="250vh"  src="<?php echo $chemein.$row['img']; ?>">
		<figcaption class="info-wrap">
    <h5 class="card-title"><?php echo $name ?></h5>
    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    
		</figcaption>
		<div class="card-footer">
      <small class="text-muted"><?php echo $date ?></small>
      <a href="#" class="btn btn-outline-danger float-right">Product details </a>
    </div>
	</figure>
</div> <!-- col // -->
 <?php } ?>
</div> <!-- row.// -->
<?php include 'footer.php'; ?>
  