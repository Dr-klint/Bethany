<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="description" content="bethany offers the best pie at incedible price and brings it right at your door step.">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/038%20Grid.css">
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/style8.css">
    <link rel="stylesheet" type="text/css" href="css/menu8.css">
    <link rel="stylesheet" type="text/css" href="css/queries8.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,100;1,300;1,400&display=swap" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    
    
    <title>Bethany's pie</title>
   
</head>
<body>
    <div class="menu-wrap">
        <input type="checkbox" class="toggler">
        <div class="hamburger"><div></div></div>
        <div class="menu">
            <div>
                <div>
                    <ul>
                        <li> <a  href="#">Home</a></li>
                        <li> <a href="#products">Product</a></li>
                        <li> <a href="#us">Blog</a></li>
                        <li> <a href="#contact-us">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header>
        <nav>
            <div class="row" >
      
              <img class="img" src="css/images-20210802T205231Z-001/images/bethanylogo.png" alt="bethanylogo">
              <ul class="list">
                <li> <a href="#">Home</a></li>
                <li> <a href="#products">Product</a></li>
                <li> <a href="#us">Blog</a></li>
                <li> <a href="#contact-us">Contact Us</a></li>
              </ul>
            </div> 
      
          </nav>
          <div class="showcase">
            <h1> It's not just pie,<br> but Bethany’s pie</h1>
          </div>
    </header>
    <section class="US" id="us">
        <h2>Get a peak about us</h2>
        <p>
            For many years, Bethany has been baking the most delicous pies at her home. In 2013, we opened our first store in Brussel (Belgium) in a cosy little street near the Grand Market. People from all over the world fell in love with the soft cakes, heavenly cheese cakes, spicy apple pies...
The store became a success in no time.<br><br>
In 2015, no less than 100 pies were sold every day and Bethany's Pie Shop moved into a larger building. After receiving many requests, it became clear that our next step was making it possible to order pies from the comfort of your own home and from anywhere in the world. You are now looking at the result of this: our very own webstore, making it possible to order Bethany's delicious pies whenever you feel like it!

        </p>
        <img class="image" src="css/images-20210802T205231Z-001/images/bethanysmall.jpg" alt="bethany's pix">
    </section>

    <section class="pies clearfix" id="products">


        <div class="pie1 clearfix">
            <img src="css/images-20210802T205231Z-001/images/products/applepie.jpg" alt="applepie">
            <div class="text-box text-box1">
                <h1>A tip of our finest pies</h1>
                <span></span>
                <p>Apple Pie</p>
            </div>
        </div>
    
        
        <div class="pie2 clearfix">
            <img src="css/images-20210802T205231Z-001/images/products/blueberrycheesecakesmall.jpg" alt="blueberrycheesecakesmall">
            <div class="text-box text-box2">
                <h1>A tip of our finest pies</h1>
                <span></span>
                <p>Blueberry cheese cake</p>
            </div>
        </div>

            <div class="pie3 clearfix">
             <img  src="css/images-20210802T205231Z-001/images/products/rhubarbpiesmall.jpg" alt="rhubarbpiesmall">
            <div class="text-box text-box3">
                <h1>A tip of our finest pies</h1>
                <span></span>
                <p>Rhubarb Pie</p>
            </div>
        </div>
        
        
        <div class="pie4 clearfix">
            <img src="css/images-20210802T205231Z-001/images/products/pumpkinpiesmall.jpg" alt="pumpkinpiesmall">
            <div class="text-box text-box4">
                <h1>A tip of our finest pies</h1>
                <span></span>
                <p>Pumpkin Pie</p>
            </div>
        </div>
       
    </section>
   
      <section class="section-form" id="form">
        <div class="row">
          <h2>Contact Us</h2>
        </div>
        <div class="row">
         
          <form method="POST" action="mailer.php" class="contact-form">
           <div class="row">
              <?php
               if ($_GET['success']== 1) {
                   echo"<div class=\"form-messages success\">Thank you! Your message has been sent.</div>";
               }
               
            if ($_GET['success'] == -1) {
                echo"<div class=\"form-messages error\">Oops, Something went wrong, Please try again.</div>";
                }
              ?>
           </div>
            <div class="row">
             <div class="col span-1-of-3">
               <label for="name">Name</label>
             </div>
             <div class="col span-2-of-3">
               <input type="text" name="name" id="name" placeholder="First name, others" required>
             </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label for="email">Email</label>
              </div>
              <div class="col span-2-of-3">
                <input type="email" name="email" id="email" placeholder="klint@example.com" required>
              </div>
             </div>
             <div class="row">
                <div class="col span-1-of-3">
                  <label for="phone-number">Phone number</label>
                </div>
                <div class="col span-2-of-3">
                  <input type="phone-number" name="phone-number" id="phone-number" placeholder="Your number" required>
                </div>
               </div>
             <div class="row">
              <div class="col span-1-of-3">
                <label for="find-us">How did you find us?</label>
              </div>
              <div class="col span-2-of-3">
                <select name="find-us" id="find-us">
                  <option value="friends" selected>friends</option>
                  <option value="search">search-engine</option>
                  <option value="ad">Advertisement</option>
                  <option value="other">option</option>
                </select>
              </div>
             </div>
             <div class="row">
              <div class="col span-1-of-3">
                <label for="news">Newsletter?</label>
              </div>
              <div class="col span-2-of-3">
                <input type="checkbox" name="news" id="news" checked>Yes, please
                  </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label>Comment</label>
              </div>
              <div class="col span-2-of-3">
                <textarea name="message" placeholder="your message"></textarea>
                  </div>
            </div>
            <div class="row">
              <div class="col span-1-of-3">
                <label>&nbsp;</label>
              </div>
              <div class="col span-2-of-3">
                <input type="submit" value="Submit">
                  </div>
            </div>
          </form>
        </div>
    
      </section>
      <footer>
        <div class="row">
          <div class="col span-1-of-2">
            <ul class="footer-nav">
              <li>BETHANY’s PIE SHOP</li>
              <li>via Grand Market,Belgium</li>
              <li>Tel:+39 081 19022620</li>
              <li><a href="#">mail to:info@bethanypie.com</a></li>
            </ul>
          </div>
          <div class="col span-1-of-2">
            <ul class="social-links">
              <li><a href="#"><i class="ion-social-facebook"></i></a></li>
              <li><a href="#"><i class="ion-social-twitter"></i></a></li>
              <li><a href="#"><i class="ion-social-googleplus"></i></a></li>
              <li><a href="#"><i class="ion-social-instagram"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="end">
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Credits</a></li>
            </ul>
          <p>
            Copyright &copy; 2021 by Klint. All rights reserved.
          </p>
        </div>
    
    
      </footer>
    
  
    <script src="https:code.jquery.com/jquery-3.3.1.js"></script>
  <script src="script.js"></script>
</body>
</html>

