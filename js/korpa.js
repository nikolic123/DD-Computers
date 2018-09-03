$(document).ready(function() {
            var sideslider = $('[data-toggle=collapse-side]');
            var sel = sideslider.attr('data-target');
            var sel2 = sideslider.attr('data-target-2');
            sideslider.click(function(event){
                $(sel).toggleClass('in');
                $(sel2).toggleClass('out');
            });
        });
        $(document).ready(function(){
            $(".form-item").submit(function(e){
                var form_data = $(this).serialize();
                var button_content = $(this).find('button[type=submit]');
               

                $.ajax({ //make ajax request to cart_process.php
                    url: "cart_process.php",
                    type: "POST",
                    dataType:"json", //expect json value from server
                    data: form_data
                }).done(function(data){ //on Ajax success
                    $("#cart-info").html(data.items); //total items in cart-info element
                    button_content.html('Dodaj u korpu'); //reset button text to original text
                    if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
                        $(".cart-box").trigger( "click" ); //trigger click to update the cart box.
                    }
                })
                e.preventDefault();
            });

            //Show Items in Cart
            $( ".cart-box").click(function(e) { //when user clicks on cart box
                e.preventDefault();
                $(".shopping-cart-box").fadeIn(); //display cart box
                $("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
            });

            //Close Cart
            $( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
                e.preventDefault();
                $(".shopping-cart-box").fadeOut(); //close cart-box
            });

            //Remove items from cart
            $("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
                e.preventDefault();
                var pcode = $(this).attr("data-code"); //get product code
                $(this).parent().fadeOut(); //remove item element from box
                $.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
                    $("#cart-info").html(data.items); //update Item count in cart-info
                    $(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
                });
            });

        });