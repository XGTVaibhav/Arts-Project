<?php
 include("connection.php"); 

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>contact</title>
    <style>
        .para{
            margin-bottom: 50px;
            text-align: center;
            font-size: larger;
            font-weight: bolder;
            margin-top: 50px;
        }
        .cont{
            text-align: center;
            font-weight: bolder;
            margin-bottom: 50px;
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
    margin-top: 50px;
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


      <!-- Contact Section -->
    <div class="w3-container w3-padding-32" id="contact">
        <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"></h3>
        <p class="para">Connect US.</p>
        <form action="#" method="POST">
          <input class="w3-input w3-border" type="text" placeholder="Name" name="Name" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Phone No" name="Phone" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Email" name="Email" required>
          <input class="w3-input w3-section w3-border" type="text" placeholder="Address" name="Address" required>
          <button class="w3-button w3-black w3-section" type="submit" value="submit" class="btn" name="submit">
            <i class="fa fa-paper-plane"></i>SUBMIT</button>
        </form>
      </div>

<div class="cont">
      <div class="w3-row w3-padding-64 m-lg-5 " id="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <h2 class=" fa-5px ">CONTACT INFO  </h2>
            <span class="fa-5px"> Arts & Painting <br>
                S.NO 153, Pune-Mumbai Highway, <br>
                Nr. Wakad Bridge,<br>
                Wakad, Pune - 411057.</span>
                <h3>CONTACT</h3>
                <span>020 63 11 11 11 <br>
                    +91 99870 00000</span>
                    <h3>EMAIL</h3>
                    <span>reservations@arts.in
                    </span>
                </div>

                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60502.966421210585!2d73.67601919043753!3d18.599476122293552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bbc048041bef%3A0xd0c9eb5ac3c3dee5!2sHinjawadi%2C%20Pune%2C%20Pimpri-Chinchwad%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1697019826850!5m2!1sen!2sin" width="600" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
                 </div>
                    


                 <footer>
                 <div class="container-fluid footer">

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



<?php
if (isset($_POST['submit'])) {

 $Name=$_POST['Name'];
 $Phone=$_POST['Phone'];
 $Email=$_POST['Email'];
 $Address=$_POST['Address'];


  $sql= "INSERT INTO `contact`(`Name`,`Phone`,`Email`,`Address`)  VALUES('$Name','$Phone','$Email','$Address')";
  $data= mysqli_query($conn,$sql);

  if($data){
   // echo "Record Updated Successfully";
    
    
  }
  else{
    echo "data do not insert";

}
}

?>