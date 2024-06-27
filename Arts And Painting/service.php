<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>service</title>
    <style>
        h1{
            padding-top: 50px;
            margin-top: 50px;
        }
        .cont{
            text-align: center;
            font-weight: bold;
            font-size: x-large;
        }
        h3{
            margin-top: 20px;
            text-align: center;
            font-weight: bold;
            font-size: xx-large; 
        }
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
margin-top: 20px;
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


  


.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: space-evenly;
}

.outer-container {
  padding-top: 10px;
  padding-right: 50px;
  padding-bottom: 10px;
  padding-left: 50px;
  background-color: rgb(244, 252, 255);
}

.inner-container {
  max-width: 1320px;
  flex-direction: column;
  align-items: center;
  margin-top: 50px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
}

.section-head-text {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
  font-size: 35px;
  font-weight: 700;
  line-height: 48px;
  color: rgb(0, 135, 177);
  margin: 0 0 10px 0;
}

.section-subhead-text {
  font-size: 25px;
  color: rgb(153, 153, 153);
  line-height: 35px;
  max-width: 470px;
  text-align: center;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 60px;
  margin-left: 0px;
}

.img-wrapper {
  width: 100%;
}



.team-card {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.social-media-links {
  width: 125px;
  display: flex;
  justify-content: space-between;
}

.name {
  font-size: 25px;
  font-weight: 700;
  color: rgb(102, 102, 102);
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 5px;
  margin-left: 0px;
}

.position {
  font-size: 25px;
  font-weight: 700;
  color: rgb(0, 135, 177);
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 50px;
  margin-left: 0px;
}

.team-img {
  width: 100%;
  height: 200px;
}



.team-card-container {
  width: 280px;
  margin: 0 0 40px 0;
}


.description {
    text-align: center;
    width: 43%;
}

.clientImage {
    display: flex;
    flex-direction: row;
    align-items: center;
}

.clientImage span {
    margin-left: 10px;
}

.clientImage img {
    width: 100%;
}

.reviewSection {
    padding: 1rem;
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-around;
}

.reviewItem {
    width: 300px;
    padding: 10px;
    margin: 1rem;
    cursor: pointer;
    border-radius: 10px;
    background-color: rgb(159, 187, 188);
    margin-top: 20px;

    border: 1px solid #10102a;
    transition: all .2s linear;
}

.reviewItem:hover {
    border-color: aqua;
    transform: scale(1.01);
    background-color: white;
    box-shadow: 0 0px 5px 0px #cbc0c0;
}

.top {
    margin-bottom: 1rem;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}

.top ul {
    display: flex;
    list-style: none;
}

.top ul li {
    padding-left: 4px;
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


 <!-- About Section -->
 <div class="cont">
    <div class="w3-container w3-padding-32" id="about">
      <h3 class=" w3-border-bottom w3-border-light-grey w3-padding-16">You can explore a vast collection of artworks from renowned artists and emerging talents in original 3D</h3>
      <p >Immerse yourself in diverse styles and genres within captivating virtual art spaces: </p>
    </div>
  </div>
      

      <div class="container">
        <div class="reviewSection">
            <div class="reviewItem">
                <div class="top">
                    <a href="https://en.wikipedia.org/wiki/The_arts"><div class="clientImage">
                        <img src="img/service1.png" alt="">      
                    </div>
                </div>
                <article>
                    <p class="review">Discover art collection and appreciation in a whole new dimension. Our platform revolutionizes how art is engaged and exhibited providing immersive 3D experiences. Step into virtual galleries to explore each piece's intricate details, textures, and nuances as if they were right before your eyes. </p>
                    <p>Jan 01, 2023</p></a>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                   <a href="https://www.behance.net/galleries/3d-art"> <div class="clientImage">
                        <img src="img/service.png" alt="">
                      
                    </div>
                   
                </div>
                <article>
                    <p class="review">ANASAEA breaks the boundaries of geography and physical space and gives artists an open platform to show their work as they made it. We are not just a place to buy art, we are a place to experience it. In ANASAEA art has has no borders Not just one piece, enjoy the story an artist wants to tell with their collection.</p>
                    <p>Jan 01, 2023</p></a>
                </article>
            </div>

            <div class="reviewItem">
                <div class="top">
                   <a href="https://en.wikipedia.org/wiki/Painting"> <div class="clientImage">
                        <img src="img/service2.png" alt="">
                    </div>  
                </div>
                <article>
                    <p class="review">We believe in fostering a direct connection between collectors and artists. ANASAEA provides a platform for you to engage with artists, learn about their inspirations, and gain insights into their creative processes. We also support artists with rights management, digital certificates and re-sales. </p>
                    <p>Jan 01, 2023</p></a>
                </article>
            </div>

            </div>
        </div>
</div>


 
 
 
 
 
          <div>
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
        </div>
        
</body>
</html>