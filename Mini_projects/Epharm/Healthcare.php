<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product Filter And Search</title>
    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap"
      rel="stylesheet"
    />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <style>
      *,
      ::after,
      ::before {
        box-sizing: border-box;
      }
      a{
        text-decoration:none;
      }

      .glowing-button {
        background-image: linear-gradient(45deg,#ac3dfc,#6148fd,#00ccff,#1900ff,#1e0db9,#8400ff);
        background-size: 400%;
        border: 7px solid rgb(5, 6, 45);
        box-shadow: 0 0 15px rgb(47, 0, 255);
        box-sizing: border-box;
        color: #FFFFFF;
        display: flex;
        font-size: 18px;
        padding: 5px;
        cursor: pointer;
        border-radius: 1.5rem;
        position: absolute;
       
        transform: translate(-50%,-50%);
        animation: animation 27s infinite;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 600;
        }
        @keyframes animation {
            0% {
                background-position:0 0;
            }
            50% {
                background-position: 400% 0;
            }
            100% {
                background-position: 0 0;
            }
        }

        .glowing-button span {
            background-color: rgb(5, 6, 45);
            padding: 16px 24px;
            width: 100%;
            height: 100%;
            transition: 300ms;
            border-radius: 1rem;
        }
        .glowing-button span:hover {
            background: none;
            transform: 700ms;
        }

      #header {
        vertical-align: top;
        /* border: 1px red solid; */
        display: flex;
        flex-direction: row;
        width: 100%;
        height: 120px;
      }

      #logo {
        object-fit: cover;
        width: 80%;
        height: 100%;
      }

      .row1 {
        text-align: center;
        /* border: green 1px solid; */
        height: 100%;
        width: 16.66%;
      }
      
      .headlink {
        margin: 10px;
        text-align: center;

        text-decoration: none;
        color: black;
      }

      .headlink > h2 {
        margin-top: 23px;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
      }

      .btn1 {
        font-size: medium;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        margin-top: 30px;
        border-radius: 64px;
        height: 50%;
        width: 70%;
        background-color: rgb(168, 215, 247);
      }

      .btn1:hover {
        background-color: rgb(5, 57, 102);
      }
      #content {
        padding: 150px;
      }

      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        border: none;
        outline: none;
        font-family: "Poppins", sans-serif;
      }
      .b{
        height: 600px;
  margin: 0;
  display: grid;
  grid-template-rows: 500px 100px;
  grid-template-columns: 1fr 30px 30px 30px 30px 30px 1fr;
  align-items: center;
  justify-items: center;
      }
      
main#carousel {
  grid-row: 1 / 2;
  grid-column: 1 / 8;
  width: 100vw;
  height: 500px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  transform-style: preserve-3d;
  perspective: 600px;
  --items: 5;
  --middle: 3;
  --position: 1;
  pointer-events: none;
}

div.item {
  position: absolute;
  width: 300px;
  height: 400px;
  background-color: coral;
  --r: calc(var(--position) - var(--offset));
  --abs: max(calc(var(--r) * -1), var(--r));
  transition: all 0.25s linear;
  transform: rotateY(calc(-10deg * var(--r)))
    translateX(calc(-300px * var(--r)));
  z-index: calc((var(--position) - var(--abs)));
}

div.item:nth-of-type(1) {
  --offset: 1;
  background-color: #90f1ef;
}
div.item:nth-of-type(2) {
  --offset: 2;
  background-color: #ff70a6;
}
div.item:nth-of-type(3) {
  --offset: 3;
  background-color: #ff9770;
}
div.item:nth-of-type(4) {
  --offset: 4;
  background-color: #ffd670;
}
div.item:nth-of-type(5) {
  --offset: 5;
  background-color: #e9ff70;
}

input:nth-of-type(1) {
  grid-column: 2 / 3;
  grid-row: 2 / 3;
}
input:nth-of-type(1):checked ~ main#carousel {
  --position: 1;
}

input:nth-of-type(2) {
  grid-column: 3 / 4;
  grid-row: 2 / 3;
}
input:nth-of-type(2):checked ~ main#carousel {
  --position: 2;
}

input:nth-of-type(3) {
  grid-column: 4 /5;
  grid-row: 2 / 3;
}
input:nth-of-type(3):checked ~ main#carousel {
  --position: 3;
}

input:nth-of-type(4) {
  grid-column: 5 / 6;
  grid-row: 2 / 3;
}
input:nth-of-type(4):checked ~ main#carousel {
  --position: 4;
}

input:nth-of-type(5) {
  grid-column: 6 / 7;
  grid-row: 2 / 3;
}
input:nth-of-type(5):checked ~ main#carousel {
  --position: 5;
}

      body {
        background-color: #f5f8ff;
      }
      .wrapper {
        width: 95%;
        margin: 0 auto;
      }
      #search-container {
        margin: 1em 0;
      }
      #search-container input {
        background-color: transparent;
        width: 40%;
        border-bottom: 2px solid #110f29;
        padding: 1em 0.3em;
      }
      #search-container input:focus {
        border-bottom-color: #6759ff;
      }
      #search-container button {
        padding: 1em 2em;
        margin-left: 1em;
        background-color: #6759ff;
        color: #ffffff;
        border-radius: 5px;
        margin-top: 0.5em;
      }
      .button-value {
        border: 2px solid #6759ff;
        padding: 1em 2.2em;
        border-radius: 3em;
        background-color: transparent;
        color: #6759ff;
        cursor: pointer;
      }
      .active {
        background-color: #6759ff;
        color: #ffffff;
      }
      #products {
        display: grid;
        grid-template-columns: auto auto auto;
        grid-column-gap: 2em;
        padding: 2em 0;
      }
      .card {
        background-color: #ffffff;
        max-width: 18em;
        margin-top: 1em;
        margin-left: 5em;
        padding: 1em;
        border-radius: 5px;
        box-shadow: 1em 2em 2.5em rgba(1, 2, 68, 0.08);
      }
      .image-container {
        text-align: center;
      }
      img {
        max-width: 100%;
        object-fit: contain;
        height: 15em;
      }
      .container {
        padding-top: 1em;
        color: #110f29;
      }
      .container h5 {
        font-weight: 500;
      }
      .hide {
        display: none;
      }
      @media screen and (max-width: 720px) {
        img {
          max-width: 100%;
          object-fit: contain;
          height: 10em;
        }
        .card {
          max-width: 10em;
          margin-top: 1em;
        }
        #products {
          grid-template-columns: auto auto;
          grid-column-gap: 1em;
        }
      }
      
.footer-basic {
  padding: 40px 0;
  background-color: #ffffff;
  color: #4b4c4d;
}

.footer-basic ul {
  padding: 0;
  list-style: none;
  text-align: center;
  font-size: 18px;
  line-height: 1.6;
  margin-bottom: 0;
}

.footer-basic li {
  padding: 0 10px;
}

.footer-basic ul a {
  color: inherit;
  text-decoration: none;
  opacity: 0.8;
}

.footer-basic ul a:hover {
  opacity: 1;
}

.footer-basic .social {
  text-align: center;
  padding-bottom: 25px;
}

.footer-basic .social > a {
  font-size: 24px;
  width: 40px;
  height: 40px;
  line-height: 40px;
  display: inline-block;
  text-align: center;
  border-radius: 50%;
  border: 1px solid #ccc;
  margin: 0 8px;
  color: inherit;
  opacity: 0.75;
}

.footer-basic .social > a:hover {
  opacity: 0.9;
}

.footer-basic .copyright {
  margin-top: 15px;
  text-align: center;
  font-size: 13px;
  color: #aaa;
  margin-bottom: 0;
}
    </style>
  </head>
  <body style="display: block;">
    <div>
      <div id="header">
        <div class="row1">
          <a href="dashboard.html"><img id="logo" src="logo.png" /></a>
        </div>
       
        <div class="row1">
          <a class="headlink" href="aboutus.html"><h2>About Us</h2></a>
        </div>
        <div class="row1">
          <a class="headlink" href="service.html"><h2>Service</h2></a>
        </div>
        <div class="row1">
          <a class="headlink" href="contactus.html"><h2>Contact us</h2></a>
        </div>
        <div class="headlink" style="padding-top:20px;padding-left:10px">
        <?php 
                  // Checking is User Logged In
                  if(isset($_SESSION['authentication']))
                  {
                      ?>
                          <h4>Welcome <?= $_SESSION['auth_user']['user_fullname']; ?> </h4>
                          <h4>User Email Id: <?= $_SESSION['auth_user']['user_email']; ?></h4>
                        
                      <?php
                  }
                  ?>
        </div>
        <div class="row1">
       
                   <?php 
                      if(!isset($_SESSION['authentication']))
                      {
                          ?>
                          
                          <center>
                          <a href="signup.php" class="btn btn-danger mt-3"  style="text-decoration: none"><button class="glowing-button" style="margin-top:60px ;margin-left: 120px;">
                          <span class="inner">Login</span>
              </button></a>
                          </center>
                       
                          <?php
                      }
                  ?>
                        <?php 
                  // Checking is User Logged In
                  if(isset($_SESSION['authentication']))
                  {
                      ?>
                         <center>
                         <a href="logout.php" class="btn btn-danger mt-3"  style="text-decoration: none"><button class="glowing-button" style="margin-top:60px ;margin-left: 120px;">
                  <span class="inner">Logout</span>
              </button></a>
                         </center>
                         
                        
                      <?php
                  }
                  ?>
                  
  
        </div>
        
    </div>
      <div >
      <center>
        <div class="wrapper">
          <div id="search-container">
            <input
              type="search"
              id="search-input"
              placeholder="Search product name here.."
            />
            <button id="search">Search</button>
          </div>
          <div id="buttons">
            <button class="button-value" onclick="filterProduct('all')">
              All
            </button>
            <button class="button-value" onclick="filterProduct('under99')">
              Under 99
            </button>
            <button class="button-value" onclick="filterProduct('under599')">
              Under 599
            </button>
            <button class="button-value" onclick="filterProduct('under999')">
              Under 999
            </button>
            <button class="button-value" onclick="filterProduct('under1999')">
              Under 1999
            </button>
          </div>
        
          <div id="products">
            
            
            
          <div class="card under1999">
                   <a href="Oximeter.php">
                   <div class="image-container">
                      
                      <img src="HEALTHCARE IMG/Oximeter/bpl-smart-oxy-finger-tip-pulse-black-oximeter-black-2-1654234561.webp">
                  </div>
                  <div class="container">
                      <h5 class="product-name">OXIMETER</h5>
                      <h6>₹ 1872</h6>
                     
                  </div>
                   </a>
                </div>
                

                <div class="card under999">
                   <a href="scanning.php">
                   <div class="image-container">
                        <img src="HEALTHCARE IMG/scanning Thermometer/pharmeasy-infrared-thermometer-2-1667628955.webp">
                    </div><div class="container">
                        <h5 class="product-name">SCANNING THERMOMETER</h5>
                        <h6>₹ 999</h6>
                       
                    </div>
                   </a>
                </div>


                   <div class="card under599">
                        <a href="d.php">
                          <div class="image-container">
                            <img src="HEALTHCARE IMG/Gluco bload monetering system/dr-morepen-bg-03-glucometer-test-strips-box-of-25-1-1654168049.webp">
                     </div>
                  <div class="container">
                  <h5 class="product-name">GLUCO MONITOR</h5>
                   <h6>₹ 449</h6>
                  </div>
                        </a>
                </div>


                <div class="card under99">
                  <a href="Thermometer.php">
                    <div class="image-container">
                      <img src="HEALTHCARE IMG/thermometer/topnotch-digital-thermometer-2-1654250140.webp">
               </div>
            <div class="container">
            <h5 class="product-name">THERMOMETER</h5>
             <h6>₹ 90 </h6>
            </div>
                  </a>
         </div>



         <div class="card under599">
<a href="vapourizer.php">
  <div class="image-container">
    <img src="HEALTHCARE IMG/Vaporizer/pharmeasy-all-in-one-vaporizer-1-1654233812.webp">
</div>
<div class="container">
<h5 class="product-name">VAPORIZER</h5>
<h6>₹ 269</h6>
</div>
</a>
 </div>
                  
                  
                        

                </div>
                        
                </div>
                
                


          </div>
        </div>
      </center>
    </div>
    
    <div class="footer-basic">
      <footer>
          <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Home</a></li>
              <li class="list-inline-item"><a href="#">Services</a></li>
              <li class="list-inline-item"><a href="#">About</a></li>
              <li class="list-inline-item"><a href="#">Contact Us</a></li>
              
          </ul>
          <p class="copyright">Epharm © 2022</p>
      </footer>
  </div>
    <!-- Script -->
    <script>
     
      
      //parameter passed from button (Parameter same as category)
      function filterProduct(value) {
        //Button class code
        let buttons = document.querySelectorAll(".button-value");
        buttons.forEach((button) => {
          //check if value equals innerText
          if (value.toUpperCase() == button.innerText.toUpperCase()) {
            button.classList.add("active");
          } else {
            button.classList.remove("active");
          }
        });
        //select all cards
        let elements = document.querySelectorAll(".card");
        //loop through all cards
        elements.forEach((element) => {
          //display all cards on 'all' button click
          if (value == "all") {
            element.classList.remove("hide");
          } else {
            //Check if element contains category class
            if (element.classList.contains(value)) {
              //display element based on category
              element.classList.remove("hide");
            } else {
              //hide other elements
              element.classList.add("hide");
            }
          }
        });
      }
      //Search button click
      document.getElementById("search").addEventListener("click", () => {
        //initializations
        let searchInput = document.getElementById("search-input").value;
        let elements = document.querySelectorAll(".product-name");
        let cards = document.querySelectorAll(".card");
        //loop through all elements
        elements.forEach((element, index) => {
          //check if text includes the search value
          if (element.innerText.includes(searchInput.toUpperCase())) {
            //display matching card
            cards[index].classList.remove("hide");
          } else {
            //hide others
            cards[index].classList.add("hide");
          }
        });
      });
      //Initially display all products
      window.onload = () => {
        filterProduct("all");
      };
    </script>
    
  </body>
</html>