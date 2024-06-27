<!DOCTYPE html>
<html>
<head>
<title>Painting</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>


*{
    margin:0;
    padding:0;
    box-sizing: border-box;
  }
  .container{
    max-width: 1170px;
    margin:auto;
  }
  .row{
    display: flex;
    flex-wrap: wrap;
  }
  ul{
    list-style: none;
  }
  .footer{
    margin: 0%;
    width: 1270px;
    background-color: rgb(159, 187, 188);
      padding: 70px 0;
  }
  .footer-col{
    margin-left: 50px;
     width: 25%;
     padding: 0 15px;
  }
  .footer-col h4{
    font-size: 18px;
    color: #050505;
    text-transform: capitalize;
    margin-bottom: 35px;
    font-weight: 500;
    position: relative;
  }
  .footer-col h4::before{
    content: '';
    position: absolute;
    left:0;
    bottom: -10px;
    background-color: #222121;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }
  .footer-col ul li:not(:last-child){
    margin-bottom: 10px;
  }
  .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #050505;
    text-decoration: none;
    font-weight: 300;
    color: #050505;
    display: block;
    transition: all 0.3s ease;
  }
  .footer-col ul li a:hover{
    color: #050505;
    padding-left: 8px;
  }
  .footer-col .social-links a{
    display: inline-block;
    height: 40px;
    width: 40px;
    background-color: rgba(255,255,255,0.2);
    margin:0 10px 10px 0;
    text-align: center;
    line-height: 40px;
    border-radius: 50%;
    color: #080707;
    transition: all 0.5s ease;
  }
  .footer-col .social-links a:hover{
    color: #24262b;
    background-color: #ffffff;
  }
  
  /*responsive*/
  @media(max-width: 767px){
    .footer-col{
      width: 50%;
      margin-bottom: 30px;
  }
  }
  @media(max-width: 574px){
    .footer-col{
      width: 100%;
  }
  }

  .photo1{
    cursor: pointer;
  transition: 1s;
  }
  .photo1:hover{
  transform: translateY(-20px);
  transition: all;
  }
</style>
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
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>PAINTING</b></h1>
  </header>

  <!-- Image header -->
  <header class="w3-display-container w3-wide" id="home">
    <img class="photo1 w3-image" src="img/painting.jpeg" alt="Fashion Blog" width="1600" height="800">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>PAINTING</b></h1>
    </div>
  </header>

  <!-- Grid -->
  <div class="w3-row w3-padding w3-border">

    <!-- Blog entries -->
    <div class="w3-col l8 s12">
    
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>TITLE HEADING</h3>
          <h5>Date <span class="w3-opacity">May 2, 2016</span></h5>
        </div>

        <div class="photo1 w3-justify">
          <img src="img/painting3.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><strong>More Hats!</strong> I am crazy about hats these days. Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor
            magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
             
              <div class="w3-col l10 m9">
                
              </div>
          </div>
        </div>
      </div>
      

      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>TITLE HEADING</h3>
          <h5> Date <span class="w3-opacity">April 23, 2016</span></h5>
        </div>

        <div class="photo1 w3-justify">
          <img src="img/painting1.avif" alt="Men in Hats" style="width:100%" class="w3-padding-16">
          <p><strong>Hats!</strong> The trend this summer is hats for men!</p>
          <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies
            mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          
          <!-- Example of comment field -->
          <div id="demo2" style="display:none">
            <div class="w3-row">
              <hr>
              <div class="w3-col l2 m3">
                <img src="/w3images/girl_train.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Amber <span class="w3-opacity w3-medium">April 26, 2015, 10:52 PM</span></h4>
                <p>Love your blog page! Simply the best! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p><br>
              </div>
            </div>
            <div class="w3-row w3-margin-bottom">
              <div class="w3-col l2 m3">
                <img src="/w3images/girl.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>Angie <span class="w3-opacity w3-medium">April 23, 2015, 9:12 PM</span></h4>
                <p>Love hats!!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Blog entry -->
      <div class=" w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>TITLE HEADING</h3>
          <h5>Date<span class="w3-opacity">April 7, 2016</span></h5>
        </div>

        <div class="photo1 w3-justify">
          <img src="img/painting2.jpg" alt="Runway" style="width:100%" class="w3-padding-16">
          <p><strong>Dont miss!</strong> The runway in New York City this weekend is gonna be legendary!</p>
          <p>Some text about this blog entry. Fashion fashion and mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies
            mi non congue ullam corper. Praesent tincidunt sedtellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
          
          

    
      

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
