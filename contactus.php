<?php
if (isset($_POST['submit'])) {

 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $message=$_POST['message'];
 $to='ranjansameer928@gmail.com'; 
 $sub="NAME: {$name}  EMAIL:   {$email} phone:   {$phone}  message:   {$message}";

$mymail=mail($to,$name,$sub);
 if ($mymail) {
?>
<script>
  alert('successfuly sended');
</script>
<?php
}else {
  ?>
  <script>
    alert('something went wrong')
  </script>
  <?php
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="css/contactus.css"/>
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="image/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            Please reach out to us if you have any query about classes or want more information. 
<br>
            Or you can leave a message for us. We are here to listen you. 
            <br>
            Thank you
          </p>

          <div class="info">
            <div class="information">
              <img src="image/location.png" class="icon" alt="" />
              <p>Delhi,New Delhi</p>
            </div>
            <div class="information">
              <img src="image/email.png" class="icon" alt="" />
              <p>edusnap27@gmail.com</p>
            </div>
            <div class="information">
              <img src="image/phone.png" class="icon" alt="" />
              <p>7292038251</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action=""  method="Post">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" required class="input" />
              <label for="">Name</label>
              <span>Name</span>
            </div>
            <div class="input-container">
              <input type="email" name="email" required class="input" />
              <label for="">Email</label>
              <span>Email</span>
            </div>
            <div class="input-container">
              <input type="number" name="phone" required class="input" />
              <label for="">Phone</label>
              <span>Phone</span>
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" required></textarea>
              <label for="">Message</label>
              <span>Message</span>
            </div>
            <input type="submit" value="Send" name="submit" class="btn" />
          </form>
        </div>
      </div>
    </div>
    <!--
 <div class="alert-success">
   <span>Message sent! Thank you for contacting us.</span>
 </div> 
 <div class="alert-error">
  <span>Something went wrong! Please try again.</span>
</div>
-->
    <script src="js/contactus.js"></script>
  </body>
</html>