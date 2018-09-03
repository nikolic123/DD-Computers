<?php
session_start(); //start session
include("db_config.php"); //include config file
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="keywords" content="Naslovna,laptop,miš,torba,tastatura,punjač,tehnika,računari,procesor,boja,grafička,memorija,hard disk,najjeftinije,konekcija,rezolucija,dijagonala ekrana,Šok cene, akcija, ušteda, Plaćanje na rate, online naručivanje, isporuka na adresu, oprema za laptop">
     <meta name="description" content="Plaćanje na rate, online naručivanje. Isporuka na adresu. Veliki izbor laptop opreme.">
     <meta name="author" content="Dragan Nikolić">
     <meta name="robots" content="index, follow">
     <meta name="googlebot" content="NOODP">
     <meta http-equiv="Content-language" content="en">

 
     <meta property="og:url"                content="" />
     <meta property="og:type"               content="article" />
     <meta property="og:title"              content="DD Computers" />
     <meta property="og:description"        content="Plaćanje na rate, online naručivanje. Isporuka na adresu. Veliki izbor laptop opreme." />
     <meta property="og:image"              content="" />


    <title>DD Computers - Kontakt</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/korpa.js"></script>



    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/css.css">

    <!-- Custom styles for this template -->


  </head>

  <body>


    <!-- Navigacija -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
   <div class="container">
   <div class="navbar-header">
   <div class="row">
   <div class="col-6 col-md-12">
       <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Meni&nbsp;&nbsp;<i class="fa fa-bars"></i>
       </button>
   </div>
   <div class="col-6 col-md-12">
      <a class="navbar-brand js-scroll-trigger" href="index.php">DD Computers</a>
   </div> 
   </div>
   </div>
   <div class="collapse navbar-collapse" id="navbarResponsive">
   <ul class="navbar-nav  ml-left">
   <li class="nav-item">
   </li>
   <li class="nav-item dropdown ">
   <a class="nav-link dropdown-toggle text-uppercase" href="#" id="navbardrop" data-toggle="dropdown">Proizvodi</a>
   <ul class="dropdown-menu">
   <div class="scroll">
   <ul class="list-unstyled">
   <li><a  href="Laptop.php">Laptopovi</a></li>
   <li><a href="Misevi.php">Miševi</a></li>
   <li><a href="Tastature.php">Tastature</a></li>
   <li><a href="Slusalice.php">Slušalice</a></li>
   <li><a href="Torbe.php">Torbe za laptop</a></li>
   <li><a href="Punjaci.php">Punjači za laptop</a></li>
   </ul>
   </div>
   </ul>
   </li>
   <li class="nav-item">
   <a class="nav-link js-scroll-trigger text-uppercase" href="Kontakt.php">Kontakt</a>
   </li>            
   </ul>
   </div>
        <button type="button" class="btn btn-link  js-scroll-trigger cart-box" style="color: #fed136;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive;text-decoration: none;font-size: 20px"><a href="#" style="text-decoration: none" >Korpa&nbsp;<i class="fa fa-shopping-cart" aria-hidden="true"></i></a> 
        <a href="#" class="cart-box" id="cart-info" style="text-decoration: none;">
                <?php
                if(isset($_SESSION["products"])){
                    echo count($_SESSION["products"]);
                }else{
                    echo 0;
                }
                ?>
        </a>
        </button>
        
            <div class="shopping-cart-box">
              <div class="scroll " style="height: 260px;" >
              <div class="row" style="margin-right: 10px">
                <div class="col-md-6 col-6">
                  <p style="font-weight: bold;">Moja korpa</p><hr>
                </div>
                <div class="col-md-6 col-6">
                  <a href="#" class="close-shopping-cart-box" ><p style="font-weight: bold;text-align: right;">Izlaz</p></a><hr>
                </div> 
                <div class="col-md-12" id="shopping-cart-results">
                  
                </div>
              </div> <br>
            </div>
        </div>
      </div>
        </nav>

    <!-- Naslovna slika i pretraga -->
    <div class="masthead">
      <div class="container">
        <div class="intro-text">
        <div class="intro-lead-in">Dobrodošli u svet tehnike!</div>
        <div class="col-12 col-md-5 p" >
        </div>         
        </div>
      </div>
    </div>
    
    <div class="container"><br>
      <div class="modal fade" id="myModal">
      <div class="modal-dialog">
      <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Vaša korpa</h4>
      </div>
      <div class="modal-body">
         <div class="shopping-cart-box">
         
         <div id="shopping-cart-results">
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Nastavi sa kupovinom</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Naruči</button>
      </div>
    </div>
  </div>
</div>
</div>
    
    <div class="container"><br>
      <div class="row">
        <div class="col-md-6"><h4 style="color: black;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;">Kontakt podaci</h4><br>Telefon:&nbsp;&nbsp; 555-555<br>Adresa:&nbsp;&nbsp;&nbsp; Marka Oreskovica 55,Subotica<br>Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proba@gmail.com<br><br></div>
                <div class="col-md-6"><h4 style="color: black;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;">Radno vreme</h4><br>Radnim danima: 08-20h<br>Subota:&nbsp;&nbsp;&nbsp;&nbsp; 08-17h<br>Nedelja:&nbsp;&nbsp;&nbsp; 08-15h<br><br></div>
                 <div class="col-md-6"><h4 style="color: black;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;">Reklamacije</h4><br>

Email: reklamacije@gmail.rs <br>
Telefon: 011 3-713-713<br><br> </div>
                  <div class="col-md-6"><h4 style="color: black;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;">Zaposlenje</h4><br>




Ukoliko želite da se pridružite timu Tehnomanije prijavite se za posao na email posao@gmail.rs<br><br></div>
<div class="col-md-12"><h4 style="color: black;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;" >Ponude<br><br></h4>
  <p>

Ukoliko ste zainteresovani za poslovnu saradnju sa nama ili nudite određenu robu ili usluge, molimo Vas kontaktirajte nas na sledeći email: ponude@gmail.rs




</p><br><br>
</div>
<div class="col-md-12 col-xs-12 col-sm-12">
  <form action="">
    <label  for="fname">Ime i prezime:</label>
    <input class="n" type="text" id="fname" name="firstname" placeholder="Unesite vaše ime i prezime...">

    <label for="lname">Telefon:</label>
    <input class="n" type="text" id="lname" name="lastname" placeholder="Unesite vaš broj telefona...">

    <label for="lname">Email:</label>
    <input class="n" type="text" id="lname" name="lastname" placeholder="Unesite vašu email adresu...">
    
    <label for="lname">Naslov poruke:</label>
    <input class="n" type="text" id="lname" name="lastname" placeholder="Unesite naslov poruke...">
    

    <label for="subject">Napišite poruku:</label>
    <textarea class="n" id="subject" name="subject" placeholder="Napišite nešto.." style="height:100px"></textarea>

    <input type="submit" value="Pošalji" class="btn" style="background-color: black;color: #fed136;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;">
  </form><br><br>
</div>     <div class="col-md-12 col-xs-12 col-sm-12">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2766.8224056714967!2d19.65994011548728!3d46.094517279113504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x474366d1b03dbbc9%3A0x4cb117142339b78e!2sVisoka+tehni%C4%8Dka+%C5%A1kola+strukovnih+studija!5e0!3m2!1sen!2srs!4v1512751258000" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe><br><br><br>
 </div>
   </div>
    
     
       
    </div>

    <!-- Services -->
    
    <!-- Footer -->
    <footer style="background-color: black">
      <div class="container">
        <div class="row nesto">
        <div class="col-12 col-md-5">
        <h4 style="color: #fed136;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;">DD Computers</h4><br>
        <p >DD Computers je školski projekat Visoke Tehničke škole u Subotici. Sajt je namenjen za prodaju desktop računara,laptopova i njihovih pratećih komponenti.<br><br></p>
        </div>
        <div class="col-12 col-md-4">
           <h4 style="color: #fed136;font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica,Arial, cursive;">Kontakt</h4><br>
         <p style="text-align: justify">Adresa: &nbsp;&nbsp;&nbsp; Marka Oreškovića 65, Subotica<br>
Telefon:&nbsp;&nbsp; &nbsp;565-556<br>
Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; proba@gmail.com<br><br>

         </p>
           
        </div>
              
         
          <div class="col-md-3">
            <ul class="list-inline social-buttons">
              <h4 style="color: #fed136;
    font-family: 'Kaushan Script', 'Helvetica Neue', Helvetica, Arial, cursive;">Pratite nas:</h4><br>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul><br>
          </div>
          <div class="col-md-12 col-xs-12 col-md-12"> <hr style="background-color: white">   <p class="name"> DD Computers &copy; 2017</p>
</div>
        
        </div>
      </div>
    </footer>
    


   

    <!-- Bootstrap core JavaScript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
