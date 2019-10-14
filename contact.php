<?php 
  require 'send.php';

  // if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['object']) && isset($_POST['message'])){
  
  if(isset($_POST['envoiemail '])){

    //print_r($_POST);


    $nom=$_POST['name'];

    $email=$_POST['email'];

    $object = $_POST['object'];

    $msg=$_POST['message'];

    sendmail($nom,$email,$object,$msg);

  }
?>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Reservations</h3>
      <div class="contact-item">
        <p>Please call</p>
        <p>(887) 654-3210</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p>4321 California St,</p>
        <p>San Francisco, CA 12345</p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon-Thurs: 10:00 AM - 11:00 PM</p>
        <p>Fri-Sun: 11:00 AM - 02:00 AM</p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="section-title text-center">
      <h3>Send us a message</h3>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form name="sentMessage" id="contactForm" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name='email' class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>

        <div class="form-group">
          <input type="text"  name="object" id="object" class="form-control" rows="4" placeholder="object" required> 
          <p class="help-block text-danger"></p>
        </div>

        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"> </div>
        <!-- <button type="submit" name="envoiemail" class="btn btn-custom btn-lg" >envoyer</button> -->
        <input type="submit" name="envoiemail" class="btn btn-custom btn-lg" value="envoyer"> 
      </form>
    </div>
  </div>
</div>