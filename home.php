<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="home.css">
    <title>Home</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info-subtle fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Arts & Painting</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ms-auto bg-light-subtle">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="art.php">Art Advisory</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="page.php">Painting</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner mt-5" data-bs-interval="5000">
        <div class="carousel-item active" >
          <img src="img/home1.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" >
          <img src="img/home2.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="img/home3.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
</header>
  
<hr>
<h1>Featured Collections</h1>
<div class="card-group ">
  <div class="card1">
    <img src="img/feacture1.jpg" class="card-img-top"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body">
      <h2 class="card-title">2023 Best Seller</h2>
    
    </div>
  </div>
  <div class="card1">
    <img src="img/feacutr2.jpg" class="card-img-top"
      alt="Palm Springs Road" />
    <div class="card-body">
      <h2 class="card-title">Arresting Abstracts</h2>
    </div>
  </div>
</div>



<div class="card-group ">
  <div class="card">
    <img src="rising star.jpg" class="card-img-top"
      alt="Hollywood Sign on The Hill" />
    <div class="card-body">
      <h3 class="card-title">2023 Rising Stars</h3>
    
    </div>
  </div>
  <div class="card">
    <img src="threadwork.jpg" class="card-img-top"
      alt="Palm Springs Road" />
    <div class="card-body">
      <h3 class="card-title">Threadwork: Women Redefining Fiber Art</h3>
    </div>
  </div>
  <div class="card">
    <img src="art.jpg" class="card-img-top"
      alt="Los Angeles Skyscrapers" />
    <div class="card-body">
      <h3 class="card-title">The Other Art Fair</h3>
    </div>
  </div>
</div>

<br><br>


<footer class="footer">
  <div class="container">
   <div class="row">
     <div class="footer-col">
       <h4>Feed</h4>
       <ul>
         <li><a href="home.php">HOME</a></li>
         <li><a href="about.php">ABOUT</a></li>
         <li><a href="service.php">SERVICES</a></li>
         <li><a href="contact.php">CONTACT</a></li>
         <li><a href="art.php">ARTS</a></li>
         <li><a href="page.php">PAINTING</a></li>

       </ul>
     </div>
     <div class="footer-col">
       <h4>get help</h4>
       <ul>
         <li><a href="#">FAQ</a></li>
         <li><a href="#">SHIPPING</a></li>
         <li><a href="#">RETUNES</a></li>
         <li><a href="#"> STATUS</a></li>
         <li><a href="#">PAYMENT OPTION</a></li>
       </ul>
     </div>
     
     <div class="footer-col">
       <h4>follow us</h4>
       <div class="social-links">
         <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
         <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
         <a href="https://www.linkedin.com/"><i class="fab fa-linkedin-in"></i></a>
       </div>
     </div>
   </div>
  </div>
</footer>

</body>
</html>