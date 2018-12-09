<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- Title -->
    <title> Techxposure 2.0</title>

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">

    <!-- swiper css -->
    <link rel="stylesheet" type="text/css" href="css/swiper.min.css">

    <!-- custom css -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon.png">

    <!-- form css -->
    <link rel="stylesheet" type="text/css" href="css/form.css">


  </head>
  <body>

    <!-- navbar-->
    <header class="site-header" role="banner">
      <nav id="navbar-main" class="navbar navbar-expand-lg navbar-dark fixed-top">
        <img id="navbar-logo" src="assets\images\txp-logo.png" width="110" height="60" alt="">
        <h3><a class="navbar-brand" href="#hero-section">Techxposure 2.0</a></h3>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about-us-new">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Events
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="index.php#tech-events">Tech Events</a>
                <a class="dropdown-item" href="index.php#cultural-events">Cultural Events</a>
                <a class="dropdown-item" href="index.php#sub-events">Sub Events</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#sponsors">Our Sponsors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact-section">Contact Us</a>
            </li>
          </ul>
        </div>
       </nav>
    </header>

<div class=" register">
  <div class="row">
    <div class="col-md-3 register-left">
      <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
      <h3>Registration Form</h3>
      <p>* Registrations for Solo events and Team events should be done separately.</p>
    </div>
    <div class="col-md-9 register-right">
      <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Solo</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Team</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <h3 class="register-heading">Register for a Solo Event</h3>
      <form action="admin/solo.php" method="POST">
          <div class="row register-form">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="Name" class="form-control" placeholder="Name *" value="" required/>
              </div>
              <div class="form-group">
                <input type="text" name="collegeName" class="form-control" placeholder="College Name *" value="" required/>
              </div>
              <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email *" value="" required/>
              </div>
              <div class="form-group">
                  <input type="text" name="phone" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" required/>
              </div>
          </div>
        <div class="col-md-6">
          <div class="form-group">
              <label for="solo-events"> Select Events</label>
              <select class="form-control" multiple name="SoloEvents[]" required>
                  <option class="hidden category" selected disabled>Tech Events</option><br>
                  <option>Code Mapper</option>
                  <option>Error Hunt</option>
                  <option>Code in Less</option>
                  <option>Photoshop</option>
                  <option>Quiz</option>
                  <option>Tech Debate</option>
                  <option>Web Designing</option>
                  <option>Blind Coding</option>
                  <option>PPT Competition</option>
                  <option class="hidden category"  selected disabled>Sub Events</option>
                  <option>Rubic's Cube</option>
                  <option class="hidden category"  selected disabled>Fine Arts</option>
                  <option>Quilling</option>
                  <option>T-shirt Painting</option>
              </select>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">I confirm that all the information submitted by me is correct to the best of my knowledge</label>
          </div>
          <input type="submit" class="btnRegister"  value="Register"/>
      </div>
     </div>
    </form>
  </div>
  <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <h3  class="register-heading">Register for a Team Event</h3>
  <form action="admin/team.php" method="POST">
  <div class="row register-form">
      <div class="col-md-6">
          <div class="form-group">
              <input type="text" name="Name" class="form-control" placeholder="First Name *" value="" required/>
          </div>
          <div class="form-group">
              <input type="text" name="collegeName" class="form-control" placeholder="College Name *" value="" required/>
          </div>
          <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email *" value="" required/>
          </div>
          <div class="form-group">
              <input type="number" name="numberOfMembers" min="0" max="5" class="form-control" placeholder="No of Team Members *" value=""  required/>
          </div>
      </div>
      <div class="col-md-6">

          <div class="form-group">
            <label for="team-events"> Select Events</label>
            <select class="form-control" multiple name="TeamEvents[]" required>
                <option class="hidden category" selected disabled>Tech Events</option>
                <option>Switch Hero</option>
                <option>Code Relay</option>
                <option>Tech Exhibition</option>
                <option class="hidden category"  selected disabled>Sub Events</option>
                <option>Maze Racing</option>
                <option>PUBG</option>
                <option>Treasure Hunt</option>
                <option class="hidden category"  selected disabled>Fine Arts</option>
                <option>Best out of E-Waste</option>
            </select>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
            <label class="form-check-label" for="exampleCheck1">I confirm that all the information submitted by me is correct to the best of my knowledge</label>
          </div>
          <input type="submit" class="btnRegister"  value="Register"/>
      </div>
  </div>
</form>
  </div>
  </div>
  </div>
  </div>

            </div>

<?php include_once 'footer.php' ?>
