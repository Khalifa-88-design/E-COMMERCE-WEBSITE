<?php

$servername = "localhost"; 
$username = "root";         
$password = "";             
$dbname = "pharmacy";       

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];

    $password = $_POST['password'];

    // Server-side validation for password strength
    if (strlen($password) < 8 || 
        !preg_match("#[0-9]+#", $password) || 
        !preg_match("#[A-Z]+#", $password) || 
        !preg_match("#[a-z]+#", $password) || 
        !preg_match("#[\W]+#", $password)) {
        
        echo "Password must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.";
    } else {
        // If password is strong enough, hash and save it
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Prepare and bind the query
        $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashed_password);

        // Execute the query
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
}

// Close the connection
$conn->close();
?>
<?php
session_start();

// Database connection
$servername = "localhost";  // Change if necessary
$username = "root";         // Default XAMPP user
$password = "";             // Default XAMPP password
$dbname = "pharmacy";       // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $username = $_POST['username'];
    $password = $_POST['password'];


    $stmt = $conn->prepare("SELECT userID, password FROM user WHERE username = ?");
    $stmt->bind_param("s", $username);

    $stmt->execute();
    $stmt->store_result();
    
    // If a user with the given username is found
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();

        // Verify the password
        if (password_verify($password, $hashed_password)) {
            // Password is correct, set session and login the user
            $_SESSION['userID'] = $userID;
            $_SESSION['username'] = $username;

            // Redirect to a protected page
            header("Location: index2.php");
            exit();
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "No user found with that username.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>

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
        <title>Account - HERD CARE</title>
        <link rel="icon" href="Images/logo.png">
    </head>
    <body>
        
        <div class="container">
            <div class="navbar">
                <div class="logo">
                  <a href="index.php"> <img src="Images/logo.png" width="100px"> </a> 
                </div>  
            <nav>
                <ul id="MenuItems">
                    <li class="breadcrumbs-item"><a href="index.php" class="breadcrumbs-link">Home</a></li>
                    <li class="breadcrumbs-item"><a href="Product.php" class="breadcrumbs-link">Products</a></li>
                    <li class="breadcrumbs-item"><a href="Contact.php" class="breadcrumbs-link">Contact</a></li>
                    <li class="breadcrumbs-item"><a href="Account.php" class="breadcrumbs-link--active-Account">Account</a></li>
                </ul>
            </nav> 
    
        </div> 
        </div >

<!------ Account - Page  ------>
<div class="account-page">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <img style="border-radius: 15%;" src="Images/WelcomeGirl.jpg" width="100%">
            </div>
            <div class="col-2">

                <div class="form-container">
                       <div class="form-btn">
                        <span onclick="login()">Login</span>
                        <span onclick="register()">Register</span>
                        <hr id="Indicator">
                       </div>

                  
                       <form action=" " method="POST" id="LoginForm" >
                        <input type="text" placeholder="Username" id="username" name="username">
                        <input type="password" placeholder="Password" id="password" name="password">
                        <button  type="submit" class="btn">Login</button>
                        <a href="forgotPassword.php">Forgot Password</a>
                       </form>


         
                       <form id="RegForm" method="POST" id="RegForm">
                        <input type="text" placeholder="Username" id="username" name="username">
                        <input type="email" placeholder="Email" id="email" name="email">
                        <input type="password" placeholder="Password" id="password" name="password">
                        <button  type="submit" class="btn">Register</button> 
                       </form>
                </div>
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


<!------------- JavaScript for Toggle Form --------------->

<script>

   var LoginForm = document.getElementById("LoginForm");

   var RegForm =document.getElementById("RegForm");

   var Indicator =document.getElementById("Indicator")

    function register()
    {
        RegForm.style.transform="translateX(0px)";
        LoginForm.style.transform="translateX(0px)";
        Indicator.style.transform="translateX(100px)";
    }
    
    function login()
    {
        RegForm.style.transform="translateX(300px)";
        LoginForm.style.transform="translateX(300px)";
        Indicator.style.transform="translateX(0px)";
    }


</script>




    </body>
</html>