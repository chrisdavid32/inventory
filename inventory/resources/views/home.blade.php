@extends('layout')
@section('content')

<!-- ======= Intro Section ======= -->
<section id="intro" class="clearfix">
 <div class="container">

  <div class="intro-img">
   <img src="assets/img/intro-img.svg" alt="" class="img-fluid">
  </div>

  <div class="intro-info">
   <h2>Inventory<br><span>Management</span><br>System</h2>
   <div>
    <a href="#about" class="btn-get-started scrollto">Get Started</a>
    <a href="#services" class="btn-services scrollto">Our Services</a>
   </div>
  </div>

 </div>
</section><!-- End Intro Section -->
<main id="main">
 <section id="about">
  <div class="container">

   <header class="section-header">
    <h3>About Us</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
   </header>

   <div class="row about-container">

    <div class="col-lg-6 content order-lg-1 order-2">
     <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
     </p>

     <div class="icon-box wow fadeInUp">
      <div class="icon"><i class="fa fa-shopping-bag"></i></div>
      <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
      <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
     </div>

     <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
      <div class="icon"><i class="fa fa-photo"></i></div>
      <h4 class="title"><a href="">Magni Dolores</a></h4>
      <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
     </div>

     <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
      <div class="icon"><i class="fa fa-bar-chart"></i></div>
      <h4 class="title"><a href="">Dolor Sitema</a></h4>
      <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
     </div>

    </div>

    <div class="col-lg-6 background order-lg-2 order-1 wow fadeInUp">
     <img src="assets/img/about-img.svg" class="img-fluid" alt="">
    </div>
   </div>





  </div>

  <!-- ======= Contact Section ======= -->
  <section id="contact">
   <div class="container-fluid">

    <div class="section-header">
     <h3>Contact Us</h3>
    </div>

    <div class="row wow fadeInUp">

     <div class="col-lg-6">
      <div class="map mb-4 mb-lg-0">
       <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
      </div>
     </div>

     <div class="col-lg-6">
      <div class="row">
       <div class="col-md-5 info">
        <i class="ion-ios-location-outline"></i>
        <p>A108 Adam Street, NY 535022</p>
       </div>
       <div class="col-md-4 info">
        <i class="ion-ios-email-outline"></i>
        <p>info@example.com</p>
       </div>
       <div class="col-md-3 info">
        <i class="ion-ios-telephone-outline"></i>
        <p>+1 5589 55488 55</p>
       </div>
      </div>

      <div class="form">
       <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
         <div class="form-group col-lg-6">
          <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
          <div class="validate"></div>
         </div>
         <div class="form-group col-lg-6">
          <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
          <div class="validate"></div>
         </div>
        </div>
        <div class="form-group">
         <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
         <div class="validate"></div>
        </div>
        <div class="form-group">
         <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
         <div class="validate"></div>
        </div>
        <div class="mb-3">
         <div class="loading">Loading</div>
         <div class="error-message"></div>
         <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
       </form>
      </div>
     </div>

    </div>

   </div>
  </section><!-- End Contact Section -->

</main><!-- End #main -->
@endsection