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
        <title>All Products - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
    </head>
    <body>
         
        <div class="header-product">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                  <a href="index2.php">  <img src="Images/logo.png" width="100px"> </a>
                </div>  
            <nav>
                <ul id="MenuItems">
                    <li class="breadcrumbs-item"><a href="index2.php" class="breadcrumbs-link">Home</a></li>
                    <li class="breadcrumbs-item"><a href="Product2.php" class="breadcrumbs-link--active-Product">Products</a></li>
                    <li class="breadcrumbs-item"><a href="Contact2.php" class="breadcrumbs-link">Contact</a></li>
                    <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link">LogOut</a></li>
                </ul>
            </nav> 
            <a href="Cart.php"><img src="Images/Septy.png" width="30px" height="25px"></a>
            <img src="Images/Menu.png" class="menu-icon" height="100px" onclick="menutoggle()">
        </div> 
        </div>
    </div>
    <div class="small-container">
            <div class="row row-2">
                <h2>All Products</h2>
                <select id="sortOptions" onchange="sortProducts()">
                    <option value="default">Default Sorting</option>
                    <option value="price">Sort By Price</option>
                    <option value="popularity">Sort By Popularity</option>
                    <option value="rating">Sort By Rating</option>
                    <option value="sale">Sort By Sale</option>
                </select>
            </div>
            <div class="row">
                <div class="col-4">
                   <a href="Couple.php"> <img src="Images/migraine.jpeg" > </a>
                  <a href="Couple.php">  <h4>Migraine</h4> </a>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <p>R25.00</p>
                </div>
                <div class="col-4">
                 <a href="NikeShoesProduct-details.php">   <img src="Images/excedrin.jpeg" > </a>
                  <a href="NikeShoesProduct-details.php">  <h4>Excedrin Migraine</h4> </a>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <p>R33.33</p>
                </div>
                <div class="col-4">
                   <a href="OpenLeftGirl.php"><img src="Images/paracetamol.jpeg" ></a> 
                  <a href="OpenLeftGirl.php"><h4>Paracetamol Biosegic</h4></a>  
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                    </div>
                    <p>R69.87</p>
                </div>
                <div class="col-4">
                  <a href="HommeRouge.php">  <img src="Images/norflex.jpeg" ></a>
                  <a href="HommeRouge.php">  <h4>Norflex Co</h4></a>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <p>R19.33</p>
                </div>
            </div>
             
            <div class="row">
                <div class="col-4">
                  <a href="bsketrose.php"><img src="Images/arazo.jpeg" > </a>
                   <a href="bsketrose.php"> <h4>Arazo Nutrition</h4> </a>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <p>R50.00</p>
                </div>
                <div class="col-4">
                   <a href="CutyGirl.php"><img src="Images/swisse.jpeg" > </a> 
                    <a href="CutyGirl.php"><h4>Swisse Ulti Boost</h4> </a> 
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                    </div>
                    <p>R25.99</p>
                </div>
                <div class="col-4">
                   <a href="Chaussette.php"><img src="Images/sedds.jpeg" ></a>
                   <a href="Chaussette.php"> <h4>Sedds Super Joint</h4></a>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-half-o" ></i>
                        <i class="fa fa-star" ></i>
                    </div>
                    <p>R17.87</p>
                </div>
                <div class="col-4">
                  <a href="ClassicWatch.php">  <img src="Images/himalaya.jpeg" > </a>
                 <a href="ClassicWatch.php">   <h4>Himalaya Joint Care</h4> </a>
                    <div class="rating">
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star" ></i>
                        <i class="fa fa-star-o" ></i>
                    </div>
                    <p>R74.34</p>
                </div>
                <div class="row">
                    <div class="col-4">
                       <a href="BlancShoes.php"> <img src="Images/durex.jpeg" ></a>
                       <a href="BlancShoes.php"> <h4>Durex</h4></a>
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
                    <a href="SportWatch.php">    <img src="Images/loversplus.jpeg" ></a>
                     <a href="SportWatch.php">  <h4>Lovers Plus</h4></a>
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                            <i class="fa fa-star-o" ></i>
                        </div>
                        <p>R64.00</p>
                    </div>
                    <div class="col-4">
                     <a href="Alfanso.php">  <img src="Images/trust.jpeg" > </a> 
                     <a href="Alfanso.php">  <h4>Trust Condoms</h4></a> 
                        <div class="rating">
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star" ></i>
                            <i class="fa fa-star-half-o" ></i>
                        </div>
                        <p>R15.89</p>
                    </div>
                    <div class="col-4">
                      <a href="SchoolGirl.php"> <img src="Images/skins.jpeg" ></a> 
                       <a href="SchoolGirl.php"> <h4>Skins Ultra Thin </h4></a> 
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
        
          
        <div class="page-btn">
    <a href="Product.php"><span>1</span></a>
    <a href="Product2.2.php"><span>2</span></a>
    <a href="Product3.php"><span>3</span></a>
    <a href="Product4.php"><span>4</span></a>
    <a href="Product5.php"><span>&#8594;</span></a> 
</div>

        
        </div>

        <!------footer------->

<div class="footer">
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
            <p>Our Purpose Is to Sustainably Provide Affordable and Accessible Healthcare Solutions to Everyone.
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

var MenuItems=document.getElementById("MenuItems");

MenuItems.style.maxHeight= "0px";

function menutoggle(){
    if(MenuItems.style.maxHeight == "0px")
    {
        MenuItems.style.maxHeight= "200px"
    }
    else
    {
        MenuItems.style.maxHeight= "0px"
    }
}
</script>
   <!-- JavaScript for Sorting Products -->
   <script>
            function sortProducts() {
                const sortOption = document.getElementById('sortOptions').value;
                const productList = document.getElementById('product-list');
                const products = Array.from(productList.getElementsByClassName('col-4'));

                products.sort((a, b) => {
                    let aValue, bValue;
                    switch (sortOption) {
                        case 'price':
                            aValue = parseFloat(a.getAttribute('data-price'));
                            bValue = parseFloat(b.getAttribute('data-price'));
                            return aValue - bValue;
                        case 'popularity':
                            aValue = parseInt(a.getAttribute('data-popularity'));
                            bValue = parseInt(b.getAttribute('data-popularity'));
                            return bValue - aValue;
                        case 'rating':
                            aValue = parseFloat(a.getAttribute('data-rating'));
                            bValue = parseFloat(b.getAttribute('data-rating'));
                            return bValue - aValue;
                        case 'sale':
                            aValue = parseInt(a.getAttribute('data-sale'));
                            bValue = parseInt(b.getAttribute('data-sale'));
                            return bValue - aValue;
                        default:
                            return 0; // Default Sorting (no change)
                    }
                });

                // Clear existing products
                productList.innerHTML = '';

                // Re-add sorted products
                products.forEach(product => productList.appendChild(product));
            }

            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight= "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight= "200px";
                } else {
                    MenuItems.style.maxHeight= "0px";
                }
            }
        </script>     
    </body>
</html>