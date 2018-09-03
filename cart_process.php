<?php
session_start(); //start session
include_once("db_config.php"); //include config file

if(isset($_POST["id"]))
{
	foreach($_POST as $key => $value){
		$new_product[$key] = filter_var($value, FILTER_SANITIZE_STRING); //create a new product array 
	}
	
	//we need to get product name and price from database.
	$statement = $connection->prepare("SELECT Pun_naziv, Cena,slika FROM laptop WHERE id=? LIMIT 1  ");
	$statement->bind_param('s', $new_product['id']);
	$statement->execute();
	$statement->bind_result($imeArtikla, $cena,$Slika);
	
	

	while($statement->fetch()){ 
		$new_product["Proizvodjac"] = $imeArtikla; //fetch product name from database
		$new_product["Cena"] = $cena;
		$new_product["slika"] = $Slika;  //fetch product price from database
		
		if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['id']])) //check item exist in products array
			{
				$_SESSION["products"][$new_product['id']]; //unset old item
			}			
		}
		
		$_SESSION["products"][$new_product['id']] = $new_product;	//update products with new item array	
	}
	$statement1 = $connection->prepare("SELECT Naziv, Cena,slika FROM torbe WHERE id=? LIMIT 1  ");
	$statement1->bind_param('s', $new_product['id']);
	$statement1->execute();
	$statement1->bind_result($imeArtikla, $cena,$Slika);
	
	

	while($statement1->fetch()){ 
		$new_product["Proizvodjac"] = $imeArtikla; //fetch product name from database
		$new_product["Cena"] = $cena;
		$new_product["slika"] = $Slika;  //fetch product price from database
		
		if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['id']])) //check item exist in products array
			{
				$_SESSION["products"][$new_product['id']]; //unset old item
			}			
		}
		
		$_SESSION["products"][$new_product['id']] = $new_product;	//update products with new item array	
	}
	$statement2 = $connection->prepare("SELECT Naziv, Cena,slika FROM misevi WHERE id=? LIMIT 1  ");
	$statement2->bind_param('s', $new_product['id']);
	$statement2->execute();
	$statement2->bind_result($imeArtikla, $cena,$Slika);
	
	

	while($statement2->fetch()){ 
		$new_product["Proizvodjac"] = $imeArtikla; //fetch product name from database
		$new_product["Cena"] = $cena;
		$new_product["slika"] = $Slika;  //fetch product price from database
		
		if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['id']])) //check item exist in products array
			{
				$_SESSION["products"][$new_product['id']]; //unset old item
			}			
		}
		
		$_SESSION["products"][$new_product['id']] = $new_product;	//update products with new item array	
	}
	$statement3 = $connection->prepare("SELECT Naziv, Cena,slika FROM tastature WHERE id=? LIMIT 1  ");
	$statement3->bind_param('s', $new_product['id']);
	$statement3->execute();
	$statement3->bind_result($imeArtikla, $cena,$Slika);
	
	

	while($statement3->fetch()){ 
		$new_product["Proizvodjac"] = $imeArtikla; //fetch product name from database
		$new_product["Cena"] = $cena;
		$new_product["slika"] = $Slika;  //fetch product price from database
		
		if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['id']])) //check item exist in products array
			{
				$_SESSION["products"][$new_product['id']]; //unset old item
			}			
		}
		
		$_SESSION["products"][$new_product['id']] = $new_product;	//update products with new item array	
	}
	$statement4 = $connection->prepare("SELECT Naziv, Cena,slika FROM slusalice WHERE id=? LIMIT 1  ");
	$statement4->bind_param('s', $new_product['id']);
	$statement4->execute();
	$statement4->bind_result($imeArtikla, $cena,$Slika);
	
	

	while($statement4->fetch()){ 
		$new_product["Proizvodjac"] = $imeArtikla; //fetch product name from database
		$new_product["Cena"] = $cena;
		$new_product["slika"] = $Slika;  //fetch product price from database
		
		if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['id']])) //check item exist in products array
			{
				$_SESSION["products"][$new_product['id']]; //unset old item
			}			
		}
		
		$_SESSION["products"][$new_product['id']] = $new_product;	//update products with new item array	
	}
	$statement5 = $connection->prepare("SELECT Naziv, Cena,slika FROM punjaci WHERE id=? LIMIT 1  ");
	$statement5->bind_param('s', $new_product['id']);
	$statement5->execute();
	$statement5->bind_result($imeArtikla, $cena,$Slika);
	
	

	while($statement5->fetch()){ 
		$new_product["Proizvodjac"] = $imeArtikla; //fetch product name from database
		$new_product["Cena"] = $cena;
		$new_product["slika"] = $Slika;  //fetch product price from database
		
		if(isset($_SESSION["products"])){  //if session var already exist
			if(isset($_SESSION["products"][$new_product['id']])) //check item exist in products array
			{
				$_SESSION["products"][$new_product['id']]; //unset old item
			}			
		}
		
		$_SESSION["products"][$new_product['id']] = $new_product;	//update products with new item array	
	}
	
 	$total_items = count($_SESSION["products"]); //count total items
	die(json_encode(array('items'=>$total_items))); //output json 

}



################## list products in cart ###################
if(isset($_POST["load_cart"]) && $_POST["load_cart"]==1)
{
if(isset($_SESSION["products"]) && count($_SESSION["products"])>0){ //if we have session variable
		$cart_box = '<div class="cart-products-loaded">';
		$total = 0;
		foreach($_SESSION["products"] as $product){ //loop though items and prepare html content
			
			//set variables to use them in HTML content below
			$product_name = $product["Proizvodjac"]; 
			$product_price = $product["Cena"];
			$product_code = $product["id"];
			$product_slika = $product["slika"];
		
			$cart_box .=  "<div class='row' style='background: white;padding:5px'><div class='col-md-3 col-3'><img src='$product_slika' style=' display: block;
    margin: auto;
    width: 90%'></div>
			<div class='col-7 col-md-7' style='font-weight: 600;font-size:90%' >$product_name</div>
			<div class='col-md-2 col-2'> <a href=\"#\" class=\"remove-item\" data-code=\"$product_code\" style='font-size:25px'>&times;</a></div><div class='col-md-12 col-12'style='padding-left:70%;font-weight:bold'><br>$product_price&nbsp;RSD</div> 
			 </div><hr> ";
			$subtotal = ($product_price);
			$total = ($total + $subtotal);
		
			
		}
		$cart_box .= "</div>";
		$cart_box .= '<div class="cart-products-total"><div class="row">
<div class="col-md-12"><p style="font-size:14px;font-weight:bold">Ukupno: '.sprintf("%01.3f RSD",$total).'</p></div><div class="col-md-12"><a href="Placanje.php" title="Da bi ste izvršili potvrdu naručenog proizvoda!" ><button type="button" class="btn btn-sm " style="background-color: black;color: #fed136;cursor:pointer">Naruči sve iz korpe</button></a>
</div>
		</div>

	</div>';



	
		die($cart_box); //exit and output content
	}else{
		die("Vaša Korpa je prazna, ako zelite da dodate proizvod u Vašu Korpu kliknite na link Naruči."); //we have empty cart
	}
}

################# remove item from shopping cart ################
if(isset($_GET["remove_code"]) && isset($_SESSION["products"]))
{
	$product_code   = filter_var($_GET["remove_code"], FILTER_SANITIZE_STRING); //get the product code to remove

	if(isset($_SESSION["products"][$product_code]))
	{
		unset($_SESSION["products"][$product_code]);
	}
	
 	$total_items = count($_SESSION["products"]);
	die(json_encode(array('items'=>$total_items)));
}