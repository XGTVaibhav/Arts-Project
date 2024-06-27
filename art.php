<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Art Advisory</title>
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
    margin: top 0px;
    background-color: rgb(159, 187, 188);
      padding:  50px;
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

  .about{
    cursor: pointer;
  transition: 1s;
  margin-bottom: 50px;

  }
  .about:hover{
  transform: translateY(-20px);
  transition: all;
  }

  


  

.photo1{
  height: ;
   width: 450px;
   margin: 0 10px;
   box-shadow: 0 0 20px 2px rgba(0, 0, 0, .1);
   transition: 1s;
}
.photo1 img{
   display: block;
   width: 300%;
   height: 500px;
   border-radius: 20px;
}
.photo1:hover{
   transform: scale(1.3);
   z-index: 2;
}
.card-title{
   position: relative;
   align-items: center;
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


      <div class="w3-row w3-padding-64" id="about">
        <div class="about w3-col m6 w3-padding-large w3-hide-small">
         <img src="img/arts1.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" height="700px">
        </div>
    
        <div class="w3-col m6 w3-padding-large">
          <h1 class="w3-center">Why Saatchi Art? </h1><br>
          <strong>Global Selection</strong>
          <p class="w3-large">We have an unparalleled selection of paintings, photography, sculpture, and drawings by over 60,000 artists from around the world.</p>
         <hr>

          <strong>Satisfaction Guaranteed</strong>
          <p class="w3-large">Our 14-day satisfaction guarantee allows you to buy with confidence. If for any reason you’re not satisfied with your purchase, return it and we’ll help you find a work you love..</p>
<hr>

          <strong>No Advisory Fees</strong>
          <p class="w3-large">Our personalized art advisory service gives you access to your own expert curator, free of charge..</p>
<hr>

          <strong>Original Art for Any Budget </strong>
          <p class="w3-large">Saatchi Art features works at a wide range of prices to suit all budgets and projects..</p>
<hr>

          <strong>Global Shipping</strong>
          <p class="w3-large">We handle all aspects of international shipping and customs for a completely hassle-free delivery. We have included the price of shipping within the artwork price. What you see is what you pay..</p>
        </div>



<!-- Photo Grid -->
<div class="photo w3-row" id="myGrid" style="margin-bottom:0px">
    <div class=" w3-third">
     <div class="photo1"> <img src="img/arts2.jpg" style="width:100%"></div>
     <div class="photo1"> <img src="img/arts3.jpg" style="width:100%"></div>
     <div class="photo1">  <img src="img/arts4.jpeg" style="width:100%"></div>
     <div class="photo1"> <img src="img/arts13.jpeg" style="width:100%"></div>
     
    </div>
  
    <div class="w3-third">
    <div class="photo1"><img src="img/arts6.jpeg" style="width:100%"></div>
    <div class="photo1"> <img src="img/arts7.jpg" style="width:100%"></div>
    <div class="photo1"> <img src="img/arts8.avif" style="width:100%"></div>
    <div class="photo1"> <img src="img/arts9.jpeg" style="width:100%"></div>
      
    </div>
  
    <div class="w3-third">
    <div class="photo1"> <img src="img/arts10.jpg" style="width:100%"></div>
    <div class="photo1"> <img src="img/arts11.jpg" style="width:100%"></div>
    <div class="photo1"> <img src="img/arts12.jpg" style="width:100%"></div>
    <div class="photo1"><img src="img/arts5.jpeg" style="width:100%"></div>
      
    </div>
  </div>
  
  <!-- End Page Content -->
  </div>
  
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