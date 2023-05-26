<?php 

include 'config.php';
if(isset($_POST['message'])){

 
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

$sql = "INSERT INTO `contact` (`name`, `email`, `message`, `date`) VALUES ('$name', '$email', '$message', current_timestamp());";

if($conn->query($sql)== true)
{
echo "<script>alert('Thank you for Contacting us !!')</script>";
}
else{
  echo "ERROR :  $sql </br> $conn->error";
}
 $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <title>CAFENA</title>

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>

    <div id="preloader"></div>
    <!-- header section  -->

    <header class="header">
      <a href="#" class="logo">
        <img src="images/logo.png" alt="logo" />
      </a>

      <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="menu.html">menu</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
        <a href="#blogs">blogs</a>
        <a href="login.php">Sign In/ Sign Up</a>
        <a href="logout.php">Logout</a>
      </nav>

      <div class="icons">
        <div><img src="images/sun.png" id="dark" /></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
        
      </div>

      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box" class="fas fa-search"></label>
      </div>

      <div class="cart-items-container">
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/hisbis-pack.jpg" alt="" />
          <div class="content">
            <h3>Hisbiscus tea powder</h3>
            <div class="price">15.00/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/americano-pack.jpg" alt="" />
          <div class="content">
            <h3>Americano coffee pack</h3>
            <div class="price">13.50/-</div>
          </div>
        </div>
        <div class="cart-item">
          <span class="fas fa-times"></span>
          <img src="images/green-pack.jpg" alt="" />
          <div class="content">
            <h3>Green tulshi tea pack</h3>
            <div class="price">9.99/-</div>
          </div>
        </div>

        <a href="#" class="cart-btn">checkout now</a>
      </div>
    </header>

    <!-- header section -->

    <!-- home section -->

    <section class="home" id="home">
      <div class="content">
        <h3>fresh tea & coffee from morning to evening</h3>
        <p>
          Wake up some mornings, sit, have tea or coffee and look out at
          beautiful garden, and ’Remember how good this is. Because you can lose
          it.’
        </p>
        <p style="font-size: 2rem; font-weight: 600; margin-left: 70px">
          Do some "Coffee पे चर्चा"
        </p>
        <a href="menu.html" class="btn">get yours now</a>
      </div>
    </section>

    <!-- home section ends -->

    <!-- about section -->

    <section class="about" id="about">
      <h1 class="heading"><span>Why Tea and Coffee</span> ?</h1>

      <div class="row">
        <div class="image">
          <img src="images/about-img.jpeg" alt="" />
        </div>

        <div class="content">
          <h3>what makes Tea and coffee special?</h3>
          <p>
            Numerous studies have shown that a variety of teas may boost your
            immune system, fight off inflammation, and even ward off cancer and
            heart disease.
          </p>
          <p>
            While some brews provide more health advantages than others, there’s
            plenty of evidence that regularly drinking fresh tea and coffee can
            have a lasting impact on your wellness.
          </p>
          <a href="#" class="btn">learn more</a>
        </div>
      </div>
    </section>

    <!-- about section ends -->

    <!-- menu section starts  -->

    <section class="menu" id="menu">
      <h1 class="heading">our <span>speciality</span></h1>

      <div class="box-container">
        <div class="box">
          <img src="images/white.jfif" alt="White_tea" />
          <h3>White Tea</h3>
          <div class="price">₹45.00 <span>₹50.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/green.jfif" alt="Green_tea" />
          <h3>Green Tea</h3>
          <div class="price">₹35.00 <span>₹50.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/hisbis-tea.jpg" alt="Hisbiscus_tea" />
          <h3>Hisbiscus Tea</h3>
          <div class="price">₹75.00 <span>₹100.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/chamo.jfif" alt="Chamomile_tea" />
          <h3>Chamomile Tea</h3>
          <div class="price">₹50.00 <span>₹75.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/cappuccino.png" alt="cappuccino" />
          <h3>cappuccino</h3>
          <div class="price">₹40.00 <span>₹50.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/latte.png" alt="Latte" />
          <h3>Cafe Latte</h3>
          <div class="price">₹35.00 <span>₹45.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/turkish.jpg" alt="Turkish" />
          <h3>Turkish</h3>
          <div class="price">₹25.00 <span>₹30.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/americano.jpg" alt="Americano" />
          <h3>Americano</h3>
          <div class="price">₹25.00 <span>₹40.00</span></div>
          <div class="stars">
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star fa-spin"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- menu section ends -->
    <section class="products" id="products">
      <h1 class="heading">our <span>products</span></h1>

      <div class="box-container">
        <div class="box">

          <div class="image">
            <img src="images/turk-pack.jpg" alt="" />
          </div>
          <div class="content">
            <h3>Turkish Coffee</h3>
            <div class="stars">
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹125<span>₹200</span></div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/chamomile-pack.jpg" alt="chamomile-pack" />
          </div>
          <div class="content">
            <h3>Chamomile Tea pack</h3>
            <div class="stars">
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹100 <span>₹150</span></div>
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/hisbis-pack.jpg" alt="hisbiscus-pack" />
          </div>
          <div class="content">
            <h3>fresh coffee</h3>
            <div class="stars">
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star fa-spin"></i>
              <i class="fas fa-star-half-alt"></i>
            </div>
            <div class="price">₹75.00 <span>₹100</span></div>
          </div>
        </div>
      </div>
    </section>

    <!-- review section starts  -->

    <section class="review" id="review">
      <h1 class="heading">Testimonials</h1>

      <div class="box-container">
        <div class="box">
          <img src="images/quote-img.png" alt="" class="quote" />
          <p>
            It’s a great experience. The ambiance is very welcoming and
            charming. Amazing food and service. Staffs are extremely
            knowledgeable and make great recommendations. good to go!
          </p>
          <img src="images/rev3.jpg" class="user" alt="" />
          <h3>Jenifer</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/quote-img.png" alt="" class="quote" />
          <p>
            I simply love this place for Irish latte and hazelnut coffee.. I
            think the only place in Gorakhpur which serves variety of coffee
            which can actually make your taste buds feel good..
          </p>
          <img src="images/rev2.jfif" class="user" alt="" />
          <h3>Heena</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
        </div>

        <div class="box">
          <img src="images/quote-img.png" alt="" class="quote" />
          <p>
            One of my favourite place to visit in the evenings. The most liked
            food by me are: Cold Coffee with Ice-cream Cappuccino Hot chocolate
            brownie with Ice-cream Cheese and vegie pizza! Must try all these.
          </p>
          <img src="images/rev1.jfif" class="user" alt="" />
          <h3>Rohan</h3>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </div>
        </div>
      </div>
    </section>

    <!-- review section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">
      <h1 class="heading"><span>contact</span> us</h1>

      <div class="row">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3608.245747895374!2d82.98712381400819!3d25.26231733525696!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398e33ef9b1f7cdd%3A0x7555db6d623dc140!2sIndian%20Institute%20of%20Technology%20(BHU)%20Varanasi!5e0!3m2!1sen!2sin!4v1680634517038!5m2!1sen!2sin"
          width="600"
          height="450"
          style="border: 0"
          allowfullscreen=""
          loading="lazy"
        ></iframe>

        <form action="index.php" method="post" >
          <h3>get in touch</h3>
          <div class="inputBox">
            <span class="fas fa-user"></span>
            <input type="text" class="name" name="name" id="name" placeholder="Name" required />
          </div>
          <div class="inputBox">
            <span class="fas fa-envelope"></span>
            <input type="email" class="email" name="email" id="email" placeholder="abc@xyz.com" required />
          </div>
          <div class="inputBox">
            <span class="fas fa-comment-alt"></span>
            <input
              type="text"
              class="message" id="message" name="message"
              placeholder="Enter your message here"
              required
            />
          </div>
          <button class="btn contact" > Send Email</button>
        </form>
      </div>
    </section>

    <!-- contact section ends -->

    <!-- blogs section starts  -->

    <section class="blogs" id="blogs">
      <h1 class="heading">Some <span>blogs</span></h1>

      <div class="box-container">
        <div class="box">
          <div class="image">
            <img src="images/blog_1.jpg" alt="" />
          </div>
          <div class="content">
            <h2 class="title">The 7 Best Teas for People With Diabetes</h2>
            <span>by Everyday health / 2nd jan, 2020</span>
            <p>
              “Tea is a great choice for individuals with diabetes — it can be a
              ...
            </p>
            <a
              href="https://www.everydayhealth.com/diabetes/the-best-teas-for-people-with-diabetes/"
              class="btn"
              >read more</a
            >
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/coffee.jpg" alt="" />
          </div>
          <div class="content">
            <h2 class="title">Nutrition source</h2>
            <span>by Harvard / 27th aug, 2020</span>
            <p>
              Coffee is an intricate mixture of more than a thousand
              chemicals...
            </p>
            <a
              href="https://www.hsph.harvard.edu/nutritionsource/food-features/coffee/"
              class="btn"
              >read more</a
            >
          </div>
        </div>

        <div class="box">
          <div class="image">
            <img src="images/tea.jpg" alt="" />
          </div>
          <div class="content">
            <h2 class="title">Hidden health benefits of Tea</h2>
            <span>by penn medicine - 20th July, 2020</span>
            <p>
              People all over the world have been drinking tea for thousands of
              centuries...
            </p>
            <a
              href="https://www.pennmedicine.org/updates/blogs/health-and-wellness/2019/december/health-benefits-of-tea"
              class="btn"
              >read more</a
            >
          </div>
        </div>
      </div>
    </section>

    <!-- blogs section ends -->

    <!-- footer section starts  -->

    <section class="footer">
      <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
      </div>

      <div class="links">
        <a href="#">home</a>
        <a href="#">about</a>
        <a href="menu.html">menu</a>
        <a href="#">products</a>
        <a href="#">contact</a>
        <a href="#">blogs</a>
      </div>

      <div class="credit">
        &copy; <span>Cafena, Varanasi 2022</span> | all rights reserved
      </div>
    </section>
   
    <!-- footer section ends -->

    <!-- custom js file link  -->
    
    <script src="js/script.js"></script>
  </body>
</html>
