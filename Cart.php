<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Cart - HERD CARE</title>
    <link rel="icon" href="Images/logo.png">
</head>
<body>

    <!-- Navigation Bar -->
    <div class="container">
        <div class="navbar" style="background: radial-gradient(#fff,#72c6f7);">
            <div class="logo">
                <a href="index2.php"><img src="Images/logo.png" width="100px"></a>
            </div>
            <nav>
                <ul id="MenuItems">
                    <li><a href="index2.php">Home</a></li>
                    <li><a href="Product2.php">Products</a></li>
                    <li><a href="Contact2.php">Contact</a></li>
                    <li><a href="Account.php">LogOut</a></li>
                </ul>
            </nav>
            <img src="Images/Septy.png" width="30px" height="25px">
            <img src="Images/Menu.png" class="menu-icon" height="100px" onclick="menutoggle()">
        </div>
    </div>

    <!-- Cart Items Section -->
    <div class="small-container cart-page">
        <table id="cart-table">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Remove</th>
            </tr>
            <!-- Cart items will be dynamically inserted here -->
        </table>

        <!-- Total Price Section -->
        <div class="total-price">
            <table>
                <tr>
                    <td>Subtotal</td>
                    <td id="subtotal">R0.00</td>
                </tr>
                <tr>
                    <td>Tax (15%)</td>
                    <td id="tax">R0.00</td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td id="total">R0.00</td>
                </tr>
            </table>
        </div>

        <!-- Checkout Button -->
        <div class="checkout-btn">
            <button onclick="checkout()">Proceed to Checkout</button>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer" style="background: radial-gradient(#fff,#72c6f7);">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Download Our App</h3>
                    <p>Download App for Android and IOS Mobile Phone</p>
                    <div class="app-logo">
                        <img src="Images/gogogoolePlay.png">
                        <img src="Images/StoryApp.svg">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="Images/logo.png">
                    <p>Our Purpose Is to Sustainably Provide Affordable and Accessible Healthcare Solutions to Everyone.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
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

    <!-- JavaScript for Cart Functionality and Menu Toggle -->
    <script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function updateCart() {
        let cartTable = document.getElementById('cart-table');
        cartTable.innerHTML = `
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Remove</th>
            </tr>
        `;

        let subtotal = 0;
        cart.forEach((product, index) => {
            let productSubtotal = product.price * product.quantity;
            subtotal += productSubtotal;

            cartTable.innerHTML += `
                <tr>
                    <td>${product.name}</td>
                    <td>${product.quantity}</td>
                    <td>R${productSubtotal.toFixed(2)}</td>
                    <td><button onclick="removeFromCart(${index})" class="remove-btn">Remove</button></td>
                </tr>
            `;
        });

        // Update subtotal, tax, and total
        let tax = subtotal * 0.15;
        let total = subtotal + tax;

        document.getElementById('subtotal').innerText = `R${subtotal.toFixed(2)}`;
        document.getElementById('tax').innerText = `R${tax.toFixed(2)}`;
        document.getElementById('total').innerText = `R${total.toFixed(2)}`;

        // Disable checkout button if cart is empty
        const checkoutBtn = document.querySelector('.checkout-btn button');
        if (cart.length === 0) {
            checkoutBtn.disabled = true;
            checkoutBtn.style.backgroundColor = '#ccc';  // Change button color to indicate disabled state
        } else {
            checkoutBtn.disabled = false;
            checkoutBtn.style.backgroundColor = '';  // Reset button color
        }
    }

    function removeFromCart(index) {
        cart.splice(index, 1);  // Remove product from cart
        localStorage.setItem('cart', JSON.stringify(cart));  // Save updated cart to localStorage
        updateCart();  // Refresh the cart display
    }

    function checkout() {
        if (cart.length === 0) {
            alert('Your cart is empty! Please add at least one product.');
        } else {
            window.location.href = 'payment.php';  // Redirect to checkout page
        }
    }

    var MenuItems = document.getElementById("MenuItems");

    MenuItems.style.maxHeight = "0px";

    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px";
        } else {
            MenuItems.style.maxHeight = "0px";
        }
    }

    // Load cart when page loads
    window.onload = updateCart;
</script>


</body>
</html>
