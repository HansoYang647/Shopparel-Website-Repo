<?php session_start();?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Cart- Shopparel</title>
    <!---stylesheet-->
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
  
    <!--light-slider-css-->
    <link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
    <!--jQuery-->
     <script src="js/jQuery.js"></script>
     <!--light-slider-js-->
     <script src="js/lightslider.js"></script>

    <!--fav-icon-->
    <link rel="shorcut icon" href="images/bag.png"/>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        
            body{
                font-family:poppins;
            }
        </style>
    <!--using -fontAwesome-for-icons-->
    <script crossorigin="anonymous" src="https://kit.fontawesome.com/c8e4d183c2.js"></script>
    </head>
    
    <body>
        <!--navigation-->
        <nav>
           
        <!--menu bar-->
        <div class="navigation">
            <!--logo-->
            <a href="#" class="logo">
                <img src="images/logo.png"/>
            </a>
            <!--menu-->
            <ul class="menu">
                <li><a href="index.php">Trends</a>
                     <!--sale-lable-->
                     <span class ="sale-lable">Sale</span>
                </li>
               
                <li><a href="men.php">Men</a></li>
                <li><a href="women.php">Women</a></li>
                <li><a href="kids.php">Kids</a></li>
            </ul>

            <!--right-menu-->
            <div class="right-menu">
                <!--search-->
                <a href="#" class ="search">
                    <i class="fas fa-search"></i>
                </a>

                <!--user EDITED to use sessions to keep user logged in-->
                <?php if (isset($_SESSION["userID"])): ?>
                <a href="user-profile.php" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <?php else: ?>
                <a href="#" class="user">
                    <i class="fas fa-user"></i>
                </a>
                <?php endif; ?>

                <!--cart-icon-->
                <a href="cart.php">
                    <i class="fas fa-shopping-cart">
                    <!--number-of-product-in-cart-->
                    <span class="num-cart-product">3</span>
                    </i>
                </a>
            </div>
        </div>
        </nav>
        <!--search-bar-->

        <div class="search-bar">
            <!--search-input-->
            <div class="search-input">
                <!--input-->
                <input type="text" placeholder="Search For Product"/>
                <!--cancel-btn-->
                <a href="#" class="search-cancel">
                    <i class="fas fa-times"></i>
                </a>
            </div>
        </div>

        <!--login-and-sign-up-->
        <div class="form">
        <!--login--> 
        <div class="login-form">  
            <!--cancel-btn-->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--heading-->
            <strong>Log In</strong>
            <!-- EDITED this part to redirect data to verifyLogin.php for authentication-->
            <!--inputs-->
            <form name="login_old_member" action="verifyLogin.php" method="GET">
                <input type="text" id="userID" name="userID"  placeholder="Enter User ID"  required="true"/>
                <input type="password" id="password" name="password" placeholder="Enter Password" required="true"/>
                <!--submit-btn-->
                <input type="submit" id="submit" value="Log In"/>
            </form>
           <!--forget-and-sign-up-btn-->
           <div class="form-btns">
           <a href="#" class="forget">Forget Your Password?</a>
           <a href="#" class="sign-up-btn">Create Your Account</a> 
           </div>
        </div>
    
         <!--Sign-Up-->
         <div class="sign-up-form">
            <!--cancel-btn-->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>
            <!--heading-->
            <strong>Sign Up</strong>
            <!--inputs-->
            <form name="signup_new_member" action="registerNewUser.php" method="GET">
                <input type="text" id="firstName" name="firstName" placeholder="First Name" required/>
                <input type="text" id="lastName" name="lastName" placeholder="Last Name" required/>
                <input type="password" id="password" name="password" placeholder="Password" required/>
                <input type="text" id="contactNumber" name="contactNumber" placeholder="333333" required/>
                <input type="text" id="email" name="email" placeholder="Example@gmail.com" required/>
                <input type="text" id="address" name="address" placeholder="Example City" required/>
                <!--submit-btn-->
                <input type="submit" id="submit" value="Sign Up"/>
            </form>
           <!--forget-and-sign-up-btn-->
           <div class="form-btns">
           <a href="#" class="already-account">Already Have Account?</a>
           </div>
        </div>
        </div>
        


    <!-- Cart Items -->
    <div class="cart">
      <table>
        <tr>
          <th><h3>Product</h3></th>
          <th><h3>Quantitiy</h3></th>
          <th><h3>Subtotal</h3></th>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/pp-1.png" alt="" />
              <div>
                <p>Jayden Skinny Pants</p>
                <span>Price: ₱ 799.00</span>
                <br />
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₱ 799.00</td>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/k-4.png" alt="" />
              <div>
                <p>Kids Boy Fashion</p>
                <span>Price: ₱ 599.00</span>
                <br />
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₱ 599.00</td>
        </tr>

        <tr>
          <td>
            <div class="cart-info">
              <img src="./images/w-6.png" alt="" />
              <div>
                <p>Rita Yosemite Tee</p>
                <span>Price: ₱ 399.00</span>
                <br />
                <a href="#">Remove</a>
              </div>
            </div>
          </td>
          <td><input type="number" value="1" min="1" /></td>
          <td>₱ 399.00</td>
        </tr>

     

      </table>

      <div class="total-price">
        <table>
          <tr>
            <td>Subtotal</td>
            <td>₱ 1,797</td>
          </tr>
        </table>
        <a href="cart-checkout.php" class="checkout btn">Proceed To Checkout</a>
      </div>
    </div>


      <!--services------------------------->
    <section class="services">
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-shipping-fast"></i>
            <span>Fast Delivery</span>
            <p>Receive your Order within 5-7 days  </p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-headphones-alt"></i>
            <span>Support 24/7</span>
            <p>We support 24h a day</p>
        </div>
        <!--services-box---------->
        <div class="services-box">
            <i class="fas fa-sync"></i>
            <span>100% Money Back</span>
            <p>You have 30 days to Return</p>
        </div>
        
    </section>


    <!--footer---------------------------->
   
    <div class="footer">
    <div class="footer-content">

      <div class="footer-section about">
        <h1 class="logo-text"><span>Shop</span>parel</h1>
        <p>
          Shopparel is a web-based, Fashion E-Commerce platform 
          in the Philippines that caters to non-mainstream retailers.
          It specifically retails clothing fashion and apparel, such 
          as tops and bottoms. 
        </p>
       
       

      </div>

      <div class="footer-section links">
        <h2>Customer Service</h2>

        <ul>
          <a href="#">
            <li>FAQ</li>
          </a>
          <a href="#">
            <li>Size Guide</li>
          </a>
          <a href="#">
            <li>Exchanges and Returns</li>
          </a>
          <a href="#">
            <li>Products index</li>
          </a>
          <a href="#">
            <li>Contact Us</li>
          </a>
        </ul>
      </div>

      <div class="footer-section links">
        <h2>Quick Links</h2>

        <ul>
          <a href="#">
            <li>Who Are We</li>
          </a>
          <a href="#">
            <li>Sell With Us</li>
          </a>
          <a href="#">
            <li>Advertise With Us</li>
          </a>
          <a href="#">
            <li>Terms & Conditions</li>
          </a>
          <a href="#">
            <li>Privacy Policy</li>
          </a>
        </ul>
      </div>

      <div class="footer-section links">
        <h3>Contact Us</h3>

        <ul>
          <a href="#">
            <li>Luna St., La Paz, Iloilo City, <br>
                Philippines</li>
          </a>
          <a href="#">
            <li>+639-5534-7985-43</li>
          </a>
          <a href="#">
            <li>Shopparel@gmail.com</li>
          </a>
          <a href="#">
            <li>Shopparel Support</li>
          </a>
          <a href="#">
            <li>Admin</li>
          </a>
        </ul>
      </div>

     
      <div class="socials">
        
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      
    </div>

  </div>
    
  </div>
  

       
        <!--script-->
        <script type="text/javascript">

        /*------For Search bar -------*/
        $(document).on('click','.search',function(){
            $('.search-bar').addClass('search-bar-active')
        });

        $(document).on('click','.search-cancel',function(){
            $('.search-bar').removeClass('search-bar-active')
        });


        /*-----login-sign-up-form-----*/
        $(document).on('click','.user,.already-account',function(){
            $('.form').addClass('login-active').removeClass('sign-up-active')
        });

        $(document).on('click','.sign-up-btn',function(){
            $('.form').addClass('sign-up-active').removeClass('login-active')
        });

        $(document).on('click','.form-cancel',function(){
            $('.form').removeClass('login-active').removeClass('sign-up-active')
        });

        /*-----full-slider-script-----*/

        $(document).ready(function() {
        $('#adaptive').lightSlider({
        adaptiveHeight:true,
        auto:true,
        item:1,
        slideMargin:0,
        loop:true
        });
        });

         /*--For-Product-SLider----------------*/
        $(document).ready(function() {
        $('#autoWidth').lightSlider({
        autoWidth:true,
        loop:true,
        onSliderLoad: function() {
            $('#autoWidth').removeClass('cS-hidden');
        } 
        });  
        });

         /*--For-make-Menu-responsive------------*/
        $(document).ready(function(){
		$('.toggle').click(function(){
			$('.toggle').toggleClass('active')
			$('.navigation').toggleClass('active')
		})
	});

      
        </script>
    </body>

</html>