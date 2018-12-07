<?php include_once 'header.php' ?>

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
          <div class="row register-form">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Name *" value="" />
              </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="College Name *" value="" />
              </div>
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Your Email *" value="" />
              </div>
              <div class="form-group">
                  <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
              </div>
          </div>
      <div class="col-md-6">

          <div class="form-group">
              <label for="solo-events"> Select Events</label>
              <select class="form-control" multiple name="SoloEvents">
                  <option class="hidden" selected disabled>Tech Events</option><br>
                  <option>Code Mapper</option>
                  <option>Error Hunt</option>
                  <option>Code in Less</option>
                  <option>Photoshop</option>
                  <option>Quiz</option>
                  <option>Tech Debate</option>
                  <option>Web Designing</option>
                  <option>Blind Coding</option>
                  <option>PPT Competition</option>
                  <option class="hidden"  selected disabled>Sub Events</option>
                  <option>Rubic's Cube</option>
                  <option class="hidden"  selected disabled>Fine Arts</option>
                  <option>Quilling</option>
                  <option>T-shirt Painting</option>
              </select>

          </div>

          <input align=center type="submit" class="btnRegister"  value="Register"/>
      </div>
  </div>
  </div>
  <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
  <h3  class="register-heading">Register for a Team Event</h3>
  <div class="row register-form">
      <div class="col-md-6">
          <div class="form-group">
              <input type="text" class="form-control" placeholder="First Name *" value="" />
          </div>
          <div class="form-group">
              <input type="text" class="form-control" placeholder="College Name *" value="" />
          </div>
          <div class="form-group">
              <input type="email" class="form-control" placeholder="Email *" value="" />
          </div>
          <div class="form-group">
              <input type="number" min="0" max="5" class="form-control" placeholder="No of Team Members *" value=""  required/>
          </div>


      </div>
      <div class="col-md-6">

          <div class="form-group">
            <label for="team-events"> Select Events</label>
            <select class="form-control" multiple name="TeamEvents">
                <option class="hidden" selected disabled>Tech Events</option>
                <option>Switch Hero</option>
                <option>Code Relay</option>
                <option>Tech Exhibition</option>
                <option class="hidden"  selected disabled>Sub Events</option>
                <option>Maze Racing</option>
                <option>PUBG</option>
                <option>Treasure Hunt</option>
                <option class="hidden"  selected disabled>Fine Arts</option>
                <option>Best out of E-Waste</option>
            </select>
          </div>
          <input type="submit" class="btnRegister"  value="Register"/>
      </div>
  </div>
  </div>
  </div>
  </div>
  </div>

            </div>

<?php include_once 'footer.php' ?>
