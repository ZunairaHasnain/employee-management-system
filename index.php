<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    include 'db_connection.php';
    if(isset($_POST['submit'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $message = $_POST['message'];  
      $sql="INSERT INTO `contact_form` (`name`, `email`, `message`,`date`) VALUES ('$name', '$email','$message',current_timestamp())";
      $result=mysqli_query($conn,$sql);
      if($result){
        header('Location:index.php');
        exit;
      }  
    }
}

?>
<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Personal Portfolio Website - HTML, CSS & Vanilla Javascript</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
  </head>
  <body>

    <div class="scrollToTop-btn">
      <i class="fas fa-angle-up"></i>
    </div>

    <header>
       <img src="image.png" style="width: 35px; height: 35px;">
      <a href="#" class="brand">EMS</a>
      <div class="menu-btn"></div>
      <div class="navigation">
        <a href="#main">Home</a>
        <a href="#about">About</a>
        <a href="#developers">Developers</a>
        <a href="#contact">Contact</a>
        <a href="login.php">Login</a>
        
        <img src="moon.svg" id="icon" alt="">
        <span id="main-span">
          <img src="palette.svg" id="icon">
          <ul>
            <li class="colors" id="darkgreen" data-color="hsl(96, 100%, 18%)" ></li>
            <li class="colors" id="purple" data-color="#762297" ></li>
            <li class="colors" id="blue" data-color="#1d64c7" ></li>
            <li class="colors" id="yellow" data-color="#c6d016" ></li>
            <li class="colors" id="red" data-color="#f50808" ></li>
            <li class="colors" id="pink" data-color="#ff5f94" ></li>
            <li class="colors" id="orange" data-color="#ff8921" ></li>
          </ul>
        </span>
      </div>
    </header>

    <section class="main" id="main">
    <div class="slider">
            <div class="load">
                
            </div>
            <div class="main-content">
                <div class="main-head">
                    <h1>Welcome to EMS</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
      <div class="title reveal">
        <h2 class="section-title">About</h2>
      </div>
      <div class="content">
        <div class="column col-left reveal">
          <div class="img-card">
            <img src="capture.gif" alt="" >
          </div>
        </div>
        <div class="column col-right reveal">
          <h2 class="content-title">Employee Management System</h2>
          <p class="paragraph-text"> Our employee management system (EMS) contains all the employee related personal as well as professional details.Also the employees in the company can easily mark their attendance by an advanced and less complicated facial recognition system, in addition to this the employee can only view his monthly salary and his allowances for extra office hours.
            Apart from this the admin or the manager of the company has the authority to add or remove the details of any employee if any new employee is hired or any old employee is fired.
            Therefore our website makes the viewing, addition, removal or editing of information easy. </p>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
    </section>

   

    <section class="developers" id="developers">
      <div class="title reveal">
        <h2 class="section-title">Team</h2>
      
      </div>
      <div class="content">
        <div class="card reveal">
          <div class="developers-img">
            <img src="logo.png" width=300px height=300px>
          </div>
          <div class="info">
            <h3>Zunaira Hasnain</h3>
            <p>Software Engineering Student @ NED University of Engineering & Technology</p>
            <a href="https://www.facebook.com/zunaira.hasnain.796/"><img class="social-icons" src="social-media-regular-icons/facebook.svg"></a>
            <a href="https://github.com/ZunairaHasnain"><img class="social-icons" src="social-media-regular-icons/github.svg"></a>
            <a href="https://www.instagram.com/zunaira._hasnain/"><img class="social-icons" src="social-media-regular-icons/instagram.svg"></a>
            <a href="https://twitter.com/HasnainZunaira"><img class="social-icons" src="social-media-regular-icons/twitter.svg"></a>
          </div>
        </div>
        <div class="card reveal">
          <div class="developers-img">
            <img src="maizahlogo.png" width=300px height=300px>
          </div>
          <div class="info">
            <h3>Rida Kaleem</h3>
            <p>Software Engineering Student @ NED University of Engineering & Technology</p>
            <a href="https://www.facebook.com/maizahk"><img class="social-icons" src="social-media-regular-icons/facebook.svg"></a>
            <a href="https://github.com/MaizahK"><img class="social-icons" src="social-media-regular-icons/github.svg"></a>
            <a href="https://www.instagram.com/maizah_k/"><img class="social-icons" src="social-media-regular-icons/instagram.svg"></a>
            <a href="https://twitter.com/maizah_k"><img class="social-icons" src="social-media-regular-icons/twitter.svg"></a>
          </div>
        </div>
       
      </div>
    </section>

   

    <section class="contact" id="contact">
      <div class="title reveal">
        <h2 class="section-title">Contact Us</h2>
      </div>
      <div class="content">
        <div class="row">
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-map-marker-alt"></i>
            </div>
            <div class="info">
              <h3>Address</h3>
              <span>
                Karachi,Pakistan
              </span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-phone"></i>
            </div>
            <div class="info">
              <h3>Phone</h3>
              <span>03312283040</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-envelope"></i>
            </div>
            <div class="info">
              <h3>Email Address</h3>
              <span>Empsystem@email.com</span>
            </div>
          </div>
          <div class="card reveal">
            <div class="contact-icon">
              <i class="fas fa-globe"></i>
            </div>
            <div class="info">
              <h3>Website</h3>
              <span>www.EMS.com</span>
            </div>
          </div>
        </div>
        <div class="row">
          <form method="post" action="" autocomplete="off">
          <div class="contact-form reveal">
            <h3>Send Message</h3>
            <div class="input-box">
              <input type="text" name="name" placeholder="Name" required>
            </div>
            <div class="input-box">
              <input type="text" name="email"  placeholder="Email" required>
            </div>
            <div class="input-box">
              <input type="text" name="message" placeholder="Message" required>
            </div>
            <div class="input-box">
              <input type="submit" class="send-btn" name="submit" value="SUBMIT">
            </div>
          </div>
        </form>
        </div>
      </div>
    </section>

    <footer class="footer">
      <span class="footer-title">EMS (Employee Management System)</span>
      <p>Copyright @2021 <a href="#">Zunairah Hasnain & Maizah Kaleem</a>. All Rights Reserved.</p>
    </footer>

    <script>


//javascript for responsive navigation sidebar menu

const menuBtn = document.querySelector(".menu-btn");
const navigation = document.querySelector(".navigation");
const navigationItems = document.querySelectorAll(".navigation a")

menuBtn.addEventListener("click",  () => {
  menuBtn.classList.toggle("active");
  navigation.classList.toggle("active");
});

navigationItems.forEach((navigationItem) => {
  navigationItem.addEventListener("click", () => {
    menuBtn.classList.remove("active");
    navigation.classList.remove("active");
  });
});

//javascript for scroll to top button
const scrollBtn = document.querySelector(".scrollToTop-btn");

window.addEventListener("scroll", function(){
  scrollBtn.classList.toggle("active", window.scrollY > 500);
});

//javascript for scroll back to top on click scroll-to-top button
scrollBtn.addEventListener("click", () => {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
});

//javascript for reveal website elements on scroll
window.addEventListener("scroll", reveal);

function reveal(){
  var reveals = document.querySelectorAll(".reveal");

  for(var i = 0; i < reveals.length; i++){
    var windowHeight = window.innerHeight;
    var revealTop = reveals[i].getBoundingClientRect().top;
    var revealPoint = 50;

    if(revealTop < windowHeight - revealPoint){
      reveals[i].classList.add("active");
    }
  }
}
    </script>
<script>
  var icon = document.getElementById("icon")
  icon.onclick = function () {
      document.body.classList.toggle("dark-theme");
      if (document.body.classList.contains("dark-theme")) {
        icon.src="sun.svg"
        
      } else {
        icon.src="moon.svg"
      }
  }
</script>
<script>
  const colors=document.getElementsByClassName('colors');
  let i;
  for(i=0;i<colors.length;i++){
    colors[i].addEventListener('click',changecolor)
  }
  function changecolor(){
    let color=this.getAttribute('data-color');
    document.documentElement.style.setProperty('--first-color',color)
  }
</script>
  </body>
</html>
