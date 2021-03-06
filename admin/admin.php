<?php
session_start();
include_once 'db_config.php';

if (!isset($_SESSION['userSession'])) {
    header("Location: index.php");
}

$query = $connection->query("SELECT * FROM admin WHERE admin_id=".$_SESSION['userSession']);
$userRow=$query->fetch_array();
$connection->close();

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


    <title>DD Computers - Svet tehnike</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="../js/korpa.js"></script>



    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/css.css">

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
      <a class="navbar-brand js-scroll-trigger" href="../index.php">DD Computers</a>
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
   <li><a  href="../Laptop.php">Laptopovi</a></li>
   <li><a href="../Misevi.php">Miševi</a></li>
   <li><a href="../Tastature.php">Tastature</a></li>
   <li><a href="../Slusalice.php">Slušalice</a></li>
   <li><a href="../Torbe.php">Torbe za laptop</a></li>
   <li><a href="../Punjaci.php">Punjači za laptop</a></li>
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
     <a href="admin.php" class="btn btn-primary">Vrati se početnu</a>
     <a href="register.php" class="btn btn-primary">Napravi novog admina</a>
     <a href="logout.php?logout" class="btn btn-primary" >Odjava</a><br><br><br>
     <h5>Unos propzvoda</h5>
     <a href="novo.php" class="btn btn-primary">Unosi novi laptop</a>
     <a href="punjac_unos.php" class="btn btn-primary">Unosi novi punjac</a>
     <a href="Mis_unos.php" class="btn btn-primary">Unosi novi miš</a>
     <a href="Torbe_unos.php" class="btn btn-primary">Unosi novu torbu</a>
     <a href="Slusalice_unos.php" class="btn btn-primary">Unosi nove slušalice</a>
     <a href="Tastatura_unos.php" class="btn btn-primary">Unosi novu tastaturu</a>   <hr> <br><br>
     <h5>Grupe proizvoda:</h5>
<?php
require "db_config.php";



$grup="SELECT grupa,ime FROM grupe";
$grou=$connection->query($grup);

foreach ($grou as $val) {
     echo "<a href='admin.php?group_IDD={$val["grupa"]}'class='btn btn-primary'>{$val["ime"]} </a>&nbsp;&nbsp;";

}
if(isset($_GET["group_IDD"])){
$groupidd=isset($_GET["group_IDD"]) ? intval($_GET["group_IDD"]) : 0;

$sql="SELECT * FROM laptop WHERE grupa={$groupidd}";

$execute=mysqli_query($connection, $sql) or die(mysqli_error($connection));
if(mysqli_num_rows($execute)>0)
{
    while($row=mysqli_fetch_array($execute))
    {   
        
        

      
        echo "
        <div class='row'>
        <div class='col-lg-12 col-md-12 col-xs-12'><br><h5>Laptopovi</h5>
<div class='card' >

<ul class='list-group list-group-flush'>
    <li class='list-group-item'><b>Ime Artikla:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Pun_naziv"]} </li>
    <li class='list-group-item'><b>Cena:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Cena"]}</li>
    <li class='list-group-item'><b>Ekran:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Ekran"]}</li>
    <li class='list-group-item'><b>Dijagonala ekrana:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Dijagonala_ekrana"]}</li>
    <li class='list-group-item'><b>Rezolucija:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Rezolucija"]}</li>
    <li class='list-group-item'><b>Procesor:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Procesor"]}</li>
    <li class='list-group-item'><b>Cipset:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Cipset"]}</li>
    <li class='list-group-item'><b>Graficka kartica:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Graficka_kartica"]}</li>
    <li class='list-group-item'><b>Memorija:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Memorija"]}</li>
    <li class='list-group-item'><b>Hard disk:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Hard_disk"]}</li>
    <li class='list-group-item'><b>Tip hard diska:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Tip_hard_diska"]}</li>
    <li class='list-group-item'><b>Opticki uredjaj:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Opticki_uredjaj"]}</li>
    <li class='list-group-item'><b>Web kamera:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Web_kamera"]}</li>
    <li class='list-group-item'><b>Mrezna kartica:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Mrezna_kartica"]}</li>
    <li class='list-group-item'><b>Bluetooth:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Bluetooth"]}</li>
    <li class='list-group-item'><b>Citac kartica:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Citac_kartica"]}</li>
    <li class='list-group-item'><b>Operativni sistem:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Operativni_sistem"]}</li>
    <li class='list-group-item'><b>Boja:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Boja"]}</li>
    <li class='list-group-item'><b>Baterija:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Baterija"]}</li>
    <li class='list-group-item'><b>Slika:</b>&nbsp;&nbsp;&nbsp;&nbsp;<img src='../" . $row['slika'] . "' class='img-responsive center-block'></li>
    <li class='list-group-item'><b>Slika brenda</b>&nbsp;&nbsp;&nbsp;&nbsp;<img src='../" . $row['slika_brenda'] . "' class='img-responsive center-block'></li>
  </ul>
    </div>
  </div>

        </div><br>";
    echo '<a href="brisanje.php?id=' .$row["id"] .'" class="btn btn-primary">Obrisi </a>&nbsp;&nbsp;';
        echo '<a href="menjanje.php?id=' .$row["id"] .'" class="btn btn-primary">Promeni </a><br><br>';
        
    }
}
$sql="SELECT * FROM tastature WHERE grupa={$groupidd}";


$execute=mysqli_query($connection, $sql) or die(mysqli_error($connection));
if(mysqli_num_rows($execute)>0)
{
    while($row=mysqli_fetch_array($execute))
    {   
        echo "<div class='row'>
        <div class='col-lg-12 col-md-12 col-12'><br><h5>Tastature</h5>
    <div class='card' >
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'><b>Ime Artikla:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Naziv"]} </li>
    <li class='list-group-item'><b>Cena:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Cena"]}&nbsp;RSD</li>
    <li class='list-group-item'><b>Numerički deo:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Numericki_deo"]}</li>
    <li class='list-group-item'><b>Miš:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["mis"]}</li>
    <li class='list-group-item'><b>Konekcija:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["konekcija"]}</li>
    <li class='list-group-item'><b>Dimenzije:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["dimenzije"]}</li>
    <li class='list-group-item'><b>Boja:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Boje"]}</li>
    <li class='list-group-item'><b>Slika:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../" . $row['slika'] . "' class='img-responsive center-block'></li>


    </ul>
    </div>
    </div>


        </div><br> ";
     echo '<a href="brisanje.php?id=' .$row["id"] .'" class="btn btn-primary">Obrisi </a>&nbsp;&nbsp;';
        echo '<a href="Tastatura_menjanje.php?id=' .$row["id"] .'" class="btn btn-primary">Promeni </a><br><br>';

        
    }
}
$sql="SELECT * FROM slusalice WHERE grupa={$groupidd}";


$execute=mysqli_query($connection, $sql) or die(mysqli_error($connection));
if(mysqli_num_rows($execute)>0)
{
    while($row=mysqli_fetch_array($execute))
    {   
        echo "<div class='row'>
        <div class='col-lg-12 col-md-12 col-12'><br><h5>Slušalice</h5>
    <div class='card' >
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'><b>Ime Artikla:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Naziv"]} </li>
    <li class='list-group-item'><b>Cena:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Cena"]}&nbsp;RSD</li>
    <li class='list-group-item'><b>Sistem:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Sistem"]}</li>
    <li class='list-group-item'><b>Mikrofon:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Mikrofon"]}</li>
    <li class='list-group-item'><b>Frekvetni odziv:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Frekventni_odziv"]}</li>
    <li class='list-group-item'><b>Boja:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Boja"]}</li>
    <li class='list-group-item'><b>Slika:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../" . $row['slika'] . "' class='img-responsive center-block'></li>



    </ul>
    </div>
    </div>


        </div><br> ";
     echo '<a href="brisanje.php?id=' .$row["id"] .'" class="btn btn-primary">Obrisi </a>&nbsp;&nbsp;';
        echo '<a href="Slusalice_menjanje.php?id=' .$row["id"] .'" class="btn btn-primary">Promeni </a><br><br>';

        
    }
}
$sql="SELECT * FROM torbe WHERE grupa={$groupidd}";


$execute=mysqli_query($connection, $sql) or die(mysqli_error($connection));
if(mysqli_num_rows($execute)>0)
{
    while($row=mysqli_fetch_array($execute))
    {   
        echo "<div class='row'>
        <div class='col-lg-12 col-md-12 col-12'><br><h5>Torbe</h5>
    <div class='card' >
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'><b>Ime Artikla:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Naziv"]} </li>
    <li class='list-group-item'><b>Cena:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Cena"]}&nbsp;RSD</li>
    <li class='list-group-item'><b>Veličina:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Veličina"]}</li>
    <li class='list-group-item'><b>Razno:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Razno"]}
    </li>
    <li class='list-group-item'><b>Slika:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../" . $row['slika'] . "' class='img-responsive center-block'></li>
    


    </ul>
    </div>
    </div>


        </div><br> ";
     echo '<a href="brisanje.php?id=' .$row["id"] .'" class="btn btn-primary">Obrisi </a>&nbsp;&nbsp;';
        echo '<a href="Torbe_menjanje.php?id=' .$row["id"] .'" class="btn btn-primary">Promeni </a><br><br>';

        
    }
}
$sql="SELECT * FROM misevi WHERE grupa={$groupidd}";


$execute=mysqli_query($connection, $sql) or die(mysqli_error($connection));
if(mysqli_num_rows($execute)>0)
{
    while($row=mysqli_fetch_array($execute))
    {   
        echo "<div class='row'>
        <div class='col-lg-12 col-md-12 col-12'><br><h5>Miševi</h5>
    <div class='card' >
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'><b>Ime Artikla:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Naziv"]} </li>
    <li class='list-group-item'><b>Cena:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Cena"]}&nbsp;RSD</li>
    <li class='list-group-item'><b>Senzor:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Senzor"]}</li>
    <li class='list-group-item'><b>Rezolucija:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Rezolucija"]}</li>
    <li class='list-group-item'><b>Dizajn:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Dizajn"]}</li>
    <li class='list-group-item'><b>Konekcija:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Konekcija"]}</li>
    <li class='list-group-item'><b>Boja:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Boja"]}</li>
    <li class='list-group-item'><b>Slika:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../" . $row['slika'] . "' class='img-responsive center-block'></li>
    


    </ul>
    </div>
    </div>


        </div><br> ";
     echo '<a href="brisanje.php?id=' .$row["id"] .'" class="btn btn-primary">Obrisi </a>&nbsp;&nbsp;';
        echo '<a href="Mis_menjanje.php?id=' .$row["id"] .'" class="btn btn-primary">Promeni </a><br><br>';

        
    }
}
$sql="SELECT * FROM Punjaci WHERE grupa={$groupidd}";


$execute=mysqli_query($connection, $sql) or die(mysqli_error($connection));
if(mysqli_num_rows($execute)>0)
{
    while($row=mysqli_fetch_array($execute))
    {   
        echo "<div class='row'>
        <div class='col-lg-12 col-md-12 col-12'><br><h5>Punjači</h5>
    <div class='card' >
    <ul class='list-group list-group-flush'>
    <li class='list-group-item'><b>Ime Artikla:</b>&nbsp;&nbsp;&nbsp;&nbsp;{$row["Naziv"]} </li>
    <li class='list-group-item'><b>Cena:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Cena"]}&nbsp;RSD</li>
    <li class='list-group-item'><b>Razno:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{$row["Razno"]}</li>
    <li class='list-group-item'><b>Slika:</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='../" . $row['slika'] . "' class='img-responsive center-block'></li>
    </ul>
    </div>
    </div>


        </div><br> ";
     echo '<a href="brisanje.php?id=' .$row["id"] .'" class="btn btn-primary">Obrisi </a>&nbsp;&nbsp;';
        echo '<a href="Punjaci_menjanje.php?id=' .$row["id"] .'" class="btn btn-primary">Promeni </a><br><br>';

        
    }
}
}








if(isset($_GET["succes"])){
    echo "Uspesno ste izmeni artikal!";
}
if(isset($_GET["error"])){
    echo "Greska u izmeni!";
}
if(isset($_GET["empty"])){
    echo "Niste uneli sve podatke!";
}

?>



    </div>
    <br><br><br>
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
              <h4  style="color: #fed136;
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
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>


    <!-- Custom scripts for this template -->
    <script src="../js/agency.min.js"></script>

  </body>

</html>
