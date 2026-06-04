<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Contact Us | KKG Coco Lanka</title>

  <style>

    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
      font-family:Arial, sans-serif;
    }

    body{
      background:#f4f7f2;
      color:#222;
    }

    /* ================= NAVBAR ================= */

    header{
      width:100%;
      background:#0d3b2e;
      padding:18px 8%;
      position:sticky;
      top:0;
      z-index:1000;
      box-shadow:0 2px 10px rgba(0,0,0,0.1);
    }

    nav{
      display:flex;
      justify-content:space-between;
      align-items:center;
    }

    .logo img{
      width:50px;
    }

    .nav-links{
      display:flex;
      list-style:none;
      gap:35px;
    }

    .nav-links a{
      text-decoration:none;
      color:#fff;
      font-size:16px;
      transition:0.3s;
      font-weight:500;
    }

    .nav-links a:hover{
      color:#cce3d4;
    }

    .quote-btn{
      text-decoration:none;
      background:#fff;
      color:#0d3b2e;
      padding:12px 24px;
      border-radius:6px;
      font-weight:bold;
      transition:0.3s;
    }

    .quote-btn:hover{
      background:#dcecdf;
    }

    /* ================= HERO ================= */

    .contact-hero{
      width:100%;
      height:45vh;

      background:
      linear-gradient(rgba(0,40,25,0.65), rgba(0,40,25,0.65)),
      url('images/contact-bg.jpg');

      background-size:cover;
      background-position:center;

      display:flex;
      justify-content:center;
      align-items:center;
      text-align:center;

      color:#fff;
    }

    .contact-hero h1{
      font-size:58px;
      margin-bottom:15px;
    }

    .contact-hero p{
      font-size:18px;
      letter-spacing:0.5px;
    }

    /* ================= CONTACT SECTION ================= */

    .contact-section{
      width:100%;
      padding:90px 8%;
    }

    .contact-container{
      display:grid;
      grid-template-columns:1fr 1fr;
      gap:40px;
    }

    /* LEFT SIDE */

    .contact-info{
      background:#fff;
      padding:45px;
      border-radius:16px;
      box-shadow:0 5px 20px rgba(0,0,0,0.08);
      border-top:6px solid #0d3b2e;
    }

    .contact-info h2{
      color:#0d3b2e;
      margin-bottom:30px;
      font-size:34px;
    }

    .info-box{
      margin-bottom:28px;
    }

    .info-box h3{
      color:#0d3b2e;
      margin-bottom:8px;
      font-size:20px;
    }

    .info-box p{
      color:#555;
      line-height:1.8;
      font-size:15px;
    }

    .whatsapp-btn{
      display:inline-block;
      margin-top:10px;
      background:#25d366;
      color:#fff;
      text-decoration:none;
      padding:14px 24px;
      border-radius:8px;
      transition:0.3s;
      font-weight:bold;
    }

    .whatsapp-btn:hover{
      background:#1eb85a;
    }

    /* RIGHT SIDE */

    .contact-form{
      background:#fff;
      padding:45px;
      border-radius:16px;
      box-shadow:0 5px 20px rgba(0,0,0,0.08);
      border-top:6px solid #0d3b2e;
    }

    .contact-form h2{
      color:#0d3b2e;
      margin-bottom:30px;
      font-size:34px;
    }

    .form-group{
      margin-bottom:22px;
    }

    .form-group input,
    .form-group textarea{
      width:100%;
      padding:15px;
      border:1px solid #ccc;
      border-radius:8px;
      outline:none;
      font-size:15px;
      transition:0.3s;
    }

    .form-group input:focus,
    .form-group textarea:focus{
      border-color:#0d3b2e;
    }

    .form-group textarea{
      resize:none;
      height:140px;
    }

    .submit-btn{
      width:100%;
      border:none;
      background:#0d3b2e;
      color:#fff;
      padding:15px;
      font-size:16px;
      border-radius:8px;
      cursor:pointer;
      transition:0.3s;
      font-weight:bold;
    }

    .submit-btn:hover{
      background:#14523f;
    }

    /*  MAP  */

    .map-section{
      width:100%;
      padding:0 8% 80px;
    }

    .map-section iframe{
      width:100%;
      height:420px;
      border:none;
      border-radius:16px;
      box-shadow:0 5px 20px rgba(0,0,0,0.08);
    }

    /*  FOOTER  */

    footer{
      background:#0d3b2e;
      color:#fff;
      text-align:center;
      padding:28px;
    }

    footer p{
      font-size:15px;
      letter-spacing:0.4px;
    }

    .success-message{
    background:#d4edda;
    color:#155724;
    border:1px solid #b5edc2;
    padding:7px 10px;
    border-radius:6px;
    margin-bottom:12px;
    font-weight:1000;
}

.error-message{
    background:#f8d7da;
    color:#721c24;
    border:1px solid #f5c6cb;
    padding:15px 20px;
    border-radius:10px;
    margin-bottom:20px;
    font-weight:500;
}

    /*  RESPONSIVE  */

    @media(max-width:950px){

      .contact-container{
        grid-template-columns:1fr;
      }

      .nav-links{
        display:none;
      }

      .contact-hero h1{
        font-size:40px;
      }

      .contact-hero p{
        font-size:15px;
      }

      .logo img{
        width:140px;
      }



    }

  </style>

</head>

<body>

  <!-- NAVBAR  -->

  <header>

    <nav>

      <!-- LOGO -->

      <div class="logo">

        <img src="images/12.webp" alt="KKG Coco Lanka Logo">

      </div>

      <!-- NAV LINKS -->

      <ul class="nav-links">

        <li><a href="home.html">Home</a></li>

        <li><a href="ab.html">About</a></li>

        <li><a href="pro.html">Products</a></li>

        <li><a href="ser.html">Services</a></li>

        <li><a href="con.php">Contact</a></li>

      </ul>

      <!-- BUTTON -->

      <a href="get.html" class="quote-btn">
        Get a Quote
      </a>

    </nav>

  </header>

  <!--  HERO  -->

  <section class="contact-hero">

    <div>

      <h1>Contact Us</h1>

      <p>
        Connect with KKG Coco Lanka for premium coconut export solutions.
      </p>

    </div>

  </section>

  <!-- CONTACT SECTION  -->

  <section class="contact-section">

    <div class="contact-container">

      <!-- LEFT -->

      <div class="contact-info">

        <h2>Get In Touch</h2>

        <div class="info-box">

          <h3>Office Address</h3>

          <p>
            Colombo, Sri Lanka
          </p>

        </div>

        <div class="info-box">

          <h3>Email Address</h3>

          <p>
            info@kkgcocolanka.com
          </p>

        </div>

        <div class="info-box">

          <h3>Phone Number</h3>

          <p>
            +94 76 806 1977
          </p>

        </div>

        <div class="info-box">

          <h3>Business Hours</h3>

          <p>
            Monday - Saturday <br>
            8.00 AM - 6.00 PM
          </p>

        </div>

        <a href="#" class="whatsapp-btn">
          Chat on WhatsApp
        </a>

      </div>

<?php
if(isset($_GET['status']))
{
    if($_GET['status'] == 'success')
    {
        echo '<div class="success-message">
        ✅ Your message has been sent successfully.
        We will contact you soon.
        </div>';
    }

    if($_GET['status'] == 'error')
    {
        echo '<div class="error-message">
        ❌ Something went wrong. Please try again.
        </div>';
    }
}
?>


      <!-- RIGHT -->

      <div class="contact-form">

        <h2>Send Message</h2>

        <form action="backend/contact.php" method="POST">

  <div class="form-group">
    <input type="text" name="name" placeholder="Your Name" required>
  </div>

  <div class="form-group">
    <input type="email" name="email" placeholder="Email Address" required>
  </div>

  <div class="form-group">
    <input type="text" name="phone" placeholder="Phone Number">
  </div>

  <div class="form-group">
    <textarea name="message" placeholder="Write Your Message"></textarea>
  </div>

  <button type="submit" class="submit-btn">
    Send Message
  </button>

</form>



      </div>

    </div>

  </section>

  <!--  MAP  -->

  <section class="map-section">

    <iframe
      src="https://maps.google.com/maps?q=sri%20lanka&t=&z=7&ie=UTF8&iwloc=&output=embed">
    </iframe>

  </section>

  <!--  FOOTER  -->

  <footer>

    <p>
      © 2026 KKG Coco Lanka. All Rights Reserved.
    </p>

  </footer>


  <script>
setTimeout(function(){

    let success = document.querySelector('.success-message');
    let error = document.querySelector('.error-message');

    if(success){
        success.style.display = 'none';
    }

    if(error){
        error.style.display = 'none';
    }

},3000);
</script>

</body>
</html>