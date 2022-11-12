<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Personal Portfolio Website</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css"
    />

    <link rel="stylesheet" href="style/style.css" />
    <link rel="stylesheet" href="style/responsive.css" />
  </head>
  <body>
  <?php

  if(isset($message)){
     foreach($message as $message){
        echo '
        <div class="message" data-aos="zoom-out">
           <span>'.$message.'</span>
           <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
        </div>
        ';
     }
  }
  
  ?>
    <div class="container">
      <nav>
        <ul id="sidemenu">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#skills">Skills</a></li>

          <li><a href="#services">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

      <div class="home-section">
        <div class="home--title">
          <img src="img/girl.png" alt="image" />

          <h4>Hi, I'm <span>Bleona </span><br /></h4>
          <h3>I am an 18 year old, working as a Web Development</h3>
        </div>
        <button class="button button1">
          <a href="https://www.linkedin.com/in/bleona-zeqiri-9a304a249/"
            >Follow me</a
          >
        </button>
      </div>
    </div>
    <!-- about -->
    <div id="about">
      <div class="container">
        <div class="row">
          <div class="about-col-1">
            <img src="img/about.gif" alt="" />
          </div>
          <div class="about-col-2">
            <h1 class="sub-title">About Me</h1>
            <p>
              I am a web developer. I like to craft and scalable frontend
              products with great user experiences.
              <br />
              I am a programmer dedicated to the tasks I receive from the
              company, where of all the tasks given to me by the company, help
              me to prefer my profession the most.<br />
              Skilled in Html, Css, Bootstrap ,JavaScript, Php&Mysql, Wordpress
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- skills -->
    <div class="container">
      <div class="tab-titles">
        <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>

        <p class="tab-links" onclick="opentab('education')">Educations</p>
      </div>
      <div class="tab-contents active-tab" id="skills">
        <ul>
          <li>
            <div class="description">
              <span class="description">Html</span>
              <span class="span">90%</span>
            </div>

            <div class="hr-2"><hr /></div>
          </li>
          <li>
            <div class="description">
              <span class="description">Css</span>
              <span class="span">90%</span>
            </div>
            <div class="hr-2"><hr /></div>
          </li>
          <li>
            <div class="description">
              <span class="description">JavaScript</span>
              <span class="span">70%</span>
            </div>
            <div class="hr"><hr /></div>
          </li>
          <li>
            <div class="description">
              <span class="description">Bootstrap</span>
              <span class="span">90%</span>
            </div>
            <div class="hr-2"><hr /></div>
          </li>
          <li>
            <div class="description">
              <span class="description">Php&Mysql</span>
              <span class="span">70%</span>
            </div>
            <div class="hr"><hr /></div>
          </li>

          <li>
            <div class="description">
              <span class="description">Wordpress</span>
              <span class="span">75%</span>
            </div>
            <div class="hr-1"><hr /></div>
          </li>
        </ul>
      </div>
      <div class="tab-contents" id="education">
        <ul>
          <div class="mani-2">
            <img src="img/shkolladigjitale.png" alt="" />
            <li>
              <span>Shkolle Digjitale</span><br />Web Development:<br />
              Front-end: Html, Css, JavaScript <br />Back-end: Php, Mysql,
              Wordpress, Java
            </li>
          </div>
          <div class="mani-2">
            <img src="img/beetroot.jpg" alt="" />
            <li>
              <span>Beetroot Academy</span><br />Web Development:<br />
              Front-end: Html, Css, JavaScript
            </li>
          </div>
        </ul>
      </div>
    </div>
    <!-- resporties -->
    <div id="services">
      <div class="container">
        <h1 class="sub-title">My resporties</h1>
        <div class="services-list">
          <div>
            <h2>Personal Portfolio</h2>
            <p>
              This is my portfolio. I have described myself and my abilities.
            </p>
            <a href="https://github.com/BleonaZeqiri/Portfolio_Starlabs"
              >View Code</a
            >
          </div>
          <div>
            <h2>Luna Project</h2>
            <p>Luna is a design project, that I made.</p>
            <a href="#">View Code</a>
          </div>
          <div>
            <h2>Utopicfllowers</h2>
            <p>
              Restaurant, establishment where refreshments or meals may be
              procured by the public.
            </p>
            <a href="#">View Code</a>
          </div>
        </div>
        <button class="button button1">
          <a href="https://github.com/BleonaZeqiri">Show more</a>
        </button>
      </div>
    </div>
     <!-- contact section starts  -->

<section class="contact" id="contact">

<h1 class="heading" > Contact me</h1>

<form action="" method="post">
   <div class="flex">
      <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
      <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
   </div>
   <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
   <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
   <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
</form> 

    <script src="main.js"></script>
  </body>
</html>
