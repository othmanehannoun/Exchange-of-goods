<?php
include 'head.php';
include 'navbar.php';
include '../back-end/__profil.php';
?>


<div class="row">

  <!-- Profile widget -->

  <div class="px-4 pt-0 pb-4 cover">
    <div class="media align-items-end profile-head">
      <div class="profile mr-3"><img src="https://images.unsplash.com/photo-1522075469751-3a6694fb2f61?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=80" alt="..." width="130" class="rounded mb-2 img-thumbnail"><a href="#" class="btn btn-outline-dark btn-sm btn-block">Edit profile</a></div>
      <div class="media-body mb-5 text-white">
        <h4 class="mt-0 mb-0"><?php echo $_SESSION['user']['lastname']." ".$_SESSION['user']['firstname'];?></h4>
        <p class="small mb-4"> <i class="fas fa-map-marker-alt mr-2"></i>New York</p>
      </div>
    </div>
  </div>



</div>


<div class="row p2">
  <div class="col1">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Profil</a>

      <div class="dropdown">
        <a class="nav-link" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Product
        </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">HAVE</a>
          <a class="dropdown-item" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profiles" role="tab" aria-controls="v-pills-profile" aria-selected="false">whant</a>
        </div>
      </div>

      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">order</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col2">
    <div class="tab-content" id="v-pills-tabContent">

      <!---------------- partie profil ------------------------>
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

        <div class="register-form">
          <div class="form">
            <div class="note">
              <p>YOUR PROFIL</p>
            </div>

            <div class="form-content">

              <form id="contact-form" method="post" action="" role="form">

                <div class="messages"></div>

                <div class="controls">

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_name">Firstname </label>
                        <input id="form_name" type="text" name="name" class="form-control" value="<?php echo $_SESSION['user']['firstname'];?>" required="required" data-error="Firstname is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_lastname">Lastname </label>
                        <input id="form_lastname" type="text" name="surname" class="form-control" value="<?php echo $_SESSION['user']['lastname'];?>" required="required" data-error="Lastname is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_email">Email </label>
                        <input id="form_email" type="email" name="email" class="form-control" value="<?php echo $_SESSION['user']['email'];?>" required="required" data-error="Valid email is required.">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="form_phone">Phone</label>
                        <input id="form_phone" type="tel" name="phone" class="form-control" value="<?php echo $_SESSION['user']['phone'];?>">
                        <div class="help-block with-errors"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button type="button" class="btn btn-outline-danger">Danger</button>
                    </div>
                  </div>

                </div>

              </form>

            </div>
          </div>
        </div>
      </div>

      <!-- table Product have -->
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">Add Product</button>

          <?php
            $query  = "SELECT * FROM have where userId = '$iduser'"; 
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
          ?>
        <table class="table">
          <thead>
            <tr>
              
              <th scope="col">Image</th>
              <th scope="col">Name</th>
              <th scope="col">City</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>

            <?php  
                    while ($fetch = mysqli_fetch_array($result)) {
                      $prodId = $fetch['prodId'];
                      
                      $qry_prod       = "SELECT * FROM products WHERE prodId = '$prodId'";
                      $product        = mysqli_query($conn, $qry_prod);
                      
                      if (mysqli_num_rows($product) > 0) {
                          while ($row = mysqli_fetch_array($product)) {
                            $chemein = '../public/img/image_product/';
            ?>
              <tr>
                
                <td><img height="50vh" width="100px" src="<?php echo $chemein . $row['img']; ?>"></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['location']; ?></td>
                <td><i class="fas fa-edit"></i>
                  <i class="fas fa-trash-alt"></i></td>
              </tr>
            <?php 
                      } 
                    }
                  }
                }
 
 ?>
          </tbody>

        </table>

      </div>

      <!-- add product -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">New Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Type</label>
                  <select name="type" class="form-control" id="inputGroupSelect01">
                    <option value="have">Have</option>
                    <option value="whant">Whant</option>

                  </select>
                </div>

                <div class="form-group">

                  <input type="text" class="form-control" id="recipient-name" name="name" placeholder="Enter Name ">
                </div>

                <div class="form-group">

                  <textarea class="form-control" name="description" id="message-text" placeholder="Description"></textarea>
                </div>

                <div class="form-group">

                  <select name="city" class="form-control" id="inputGroupSelect01">
                    <option selected>City</option>
                    <option value="casablanca">casa blanca</option>
                    <option value="fes">Fès</option>
                    <option value="safi">Safi</option>
                    <option value="dakhla">dakhla</option>
                    <option value="Salé">Salé</option>
                  </select>
                </div>

                <div class="form-group">

                  <input type="number" class="form-control" name="quantite" id="recipient-name" placeholder="Quantite">
                </div>



                <div class="form-group">

                  <input type="file" class="form-control" id="recipient-name" name="image">
                </div>
                <button type="submit" name="add">Ajouter</button>
              </form>


            </div>
          </div>
        </div>
      </div>


      <div class="tab-pane fade" id="v-pills-profiles" role="tabpanel" aria-labelledby="v-pills-profile-tab">.whant.</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">.3.</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">.4.</div>
    </div>
  </div>
</div>



<?php include 'footer.php'; ?>