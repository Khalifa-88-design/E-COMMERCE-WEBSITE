<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>Product details - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
    </head>
    <body>
        
        <div class="header-product-details">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                  <a href="index2.php">  <img src="Images/logo.png" width="100px"></a>
                </div>  
            <nav>
                <ul id="MenuItems">
                    <li class="breadcrumbs-item"><a href="index2.php" class="breadcrumbs-link">Home</a></li>
                    <li class="breadcrumbs-item"><a href="Product2.php" class="breadcrumbs-link">Products</a></li>
                    <li class="breadcrumbs-item"><a href="Contact2.php" class="breadcrumbs-link">Contact</a></li>
                    <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link">LogOut</a></li>
                </ul>
            </nav> 
            <a href="Cart.php"><img src="Images/Septy.png" width="30px" height="25px"></a>
            <img src="Images/Menu.png" class="menu-icon" height="100px" onclick="menutoggle()">
        </div> 
        </div>
    </div>

<!--------Single Product details --------->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
        <img src="Images/inflamed.png" width="100%" id="ProductImg">

        <div class="small-img-row">
             <div class="small-img-col">
             <img src="Images/inflamed.png" width="100%" class="small-img">
             </div>
             <div class="small-img-col">
                <img src="Images/inflamed.png" width="100%" class="small-img">
            </div>
                <div class="small-img-col">
                    <img src="Images/inflamed.png" width="100%" class="small-img">
                </div>   
                <div class="small-img-col">
                    <img src="Images/inflamed.png" width="100%" class="small-img">
                    </div>  
        </div>


        </div>
        <div class="col-2">
           <p>Home / InflaMed</p>
           <h1>InflaMed</h1>
           <h4>R63.25</h4>
           <select >
            <option>Select Size</option>
            <option>100mg</option>
            <option>500mg</option>

           </select>
           <input type="number" id="product-quantity" value="1">
           <button class="btn" onclick="addToCart('InflaMed', 63.25)">Add To Cart</button>

           <h3>Product Details  <i class="fa fa-indent"></i></h3>
           <br>
           <p>
           Manage inflammation effectively with InflaMed Pain & Inflammation support for acute and chronic conditions. 
           Discover the power of CHD-FA™ & OPTI-MSM! Support for acute and chronic pain and inflammation, and is formulated 
           with the antiviral, antifungal, antibacterial, inflammatory soothing & antioxidant fivefold power action of CHD-FA™. 
           </p>
        </div>
    </div>
</div>

<!----------Title---------->

<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
      </div>
</div>

<!--------- Products------------>
<div class="small-container">
        <div class="row">
            <div class="col-4">
                <a href="BlancShoes2.php"><img src="Images/inflamed.png" ></a>
            <a href="BlancShoes2.php"><h4>Inflamed</h4> </a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>R63.23</p>
            </div>
            <div class="col-4">
              <a href="Alfanso2.php">  <img src="Images/neutracid.png" > </a>
               <a href="Alfanso2.php"> <h4>Neutracid</h4> </a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                </div>
                <p>R82.89</p>
            </div>
            <div class="col-4">
             <a href="SportWatch2.php">  <img src="Images/kiddia.png" ></a> 
          <a href="SportWatch2.php">    <h4>Kiddie forte</h4></a>  
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-half-o" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>R18.00</p>
            </div>
            <div class="col-4">
             <a href="SchoolGirl2.php"> <img src="Images/male_enlargement.png" ></a>  
             <a href="SchoolGirl2.php">   <h4>Make Enlargement</h4> </a>
                <div class="rating">
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star" ></i>
                    <i class="fa fa-star-o" ></i>
                </div>
                <p>R29.99</p>
            </div>
</div>
</div>
</div>
 
<!------footer------->


<div class="footer" style="background: radial-gradient(#fff,#72c6f7);">
    <div class="container"  >
        <div class="row" >
            <div class="footer-col-1" >
                <h3>Download Our App</h3>
            <p>Download App for Android and IOS Mobile Phone</p>
            <div class="app-logo">
                <img src="Images/gogogoolePlay.png">
                <img src="Images/StoryApp.svg">
            </div>    
            </div>
            <div class="footer-col-2">
               <img src="Images/logo.png">
            <p>Our Purpose Is To Sustainably Make the Pleasure and Benefits of Sport Accessible 
                to the Many
            </p>    
            </div>
            <div class="footer-col-3">
                <h3>Usuful Links</h3>
         <ul>
            <li>Gift Card</li>
            <li>Blog Post</li>
            <li>Return Policy</li>
            <li>Join Affiliate</li>
         </ul>
            </div>
            <div class="footer-col-4">
                <h3>Follow us</h3>
         <ul>
            <li>Facebook</li>
            <li>Twitter</li>
            <li>Instagram</li>
            <li>YouTube</li>
         </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">Copyright 2024 - HERD CARE</p>
    </div>
</div>


<!-------JavaScript for Toggle Menu------->

<script>
        var MenuItems = document.getElementById("MenuItems");

        MenuItems.style.maxHeight= "0px";

        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px") {
                MenuItems.style.maxHeight = "200px";
            } else {
                MenuItems.style.maxHeight = "0px";
            }
        }

        var ProductImg = document.getElementById("ProductImg");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function() {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function() {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function() {
            ProductImg.src = SmallImg[2].src;
        }
        SmallImg[3].onclick = function() {
            ProductImg.src = SmallImg[3].src;
        }

        // Function to add product to cart and store in localStorage
function addToCart(productName, productPrice) {
    var quantity = document.getElementById("product-quantity").value;
    var product = {
        name: productName,
        price: productPrice,
        quantity: quantity,
        totalPrice: productPrice * quantity
    };

    // Retrieve cart data from localStorage (if any)
    var cart = localStorage.getItem("cart");
    if (cart) {
        cart = JSON.parse(cart);
    } else {
        cart = [];
    }

    // Add new product to the cart
    cart.push(product);

    // Store updated cart data back in localStorage
    localStorage.setItem("cart", JSON.stringify(cart));

    alert(productName + " added to cart!\nQuantity: " + quantity + "\nTotal Price: R" + product.totalPrice.toFixed(2));
}
    </script>

</body>
</html>


    </body>
</html>