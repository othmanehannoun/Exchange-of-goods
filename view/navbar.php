<?php 
session_start();
include 'head.php'; ?>

<div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="Index.php">HAK <span>WARA</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <i class="fas fa-align-right text-light"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <div class="mr-auto"></div>
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="Index.php">HOME
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">COURSE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">ORDER</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link login" href="login.php">LOGIN</a>
            </li>
            <li class="nav-item">
            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Account
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="profil.php?iduser=<?php echo $_SESSION['user']['iduser'];?>">PROFIL</a>
                  <a class="dropdown-item" href="#">SIN UP</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout.php">LOG OUT</a>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>

  
    