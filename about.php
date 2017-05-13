<?php include('./includes/header.php'); ?>
<div class="main-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 header-container">
        <h1 class="page-header-title">info</h1>
      </div>
      <div class="col-sm-6 translate-container">
        <button class="btn translate-button" id="aboutTranslateBtn" type="button">
          ENG <i class="fa fa-arrows-h" aria-hidden="true"></i> 日本語
        </button>
      </div>
    </div>
  </div>
  <div class="about-container">
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-12 location-container">
          <h1 id="locationHeader">where to find us</h1>
          <hr />
          <a id="locationLink" href="https://goo.gl/maps/Pg2Ucd64cwj" target="_blank">
            <i class="fa fa-map-marker" aria-hidden="true"></i> 114 Dryden Rd, Ithaca, NY 14850
          </a>
          <hr />
          <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2944.341984174704!2d-76.48805818458843!3d42.44173923793206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d0818e443e39c5%3A0xee17ed5d01b53db1!2sCafe+Pacific!5e0!3m2!1sen!2sus!4v1493861584832"
          height="400" allowfullscreen></iframe>
        </div>
      </div>
      <div class="col-md-6">
          <div class="hours-container">
            <h1 id="hoursHeader">our hours</h1>
            <hr />
            <p class="date" ><span id="sun">Sunday</span><span class="time">10AM – 12AM</span></p>
            <p class="date"><span id="mon">Monday</span><span class="time">10AM – 12AM</span></p>
            <p class="date"><span id="tue">Tuesday</span><span class="time">10AM – 12AM</span></p>
            <p class="date"><span id="wed">Wednesday</span><span class="time">10AM – 12AM</span></p>
            <p class="date"><span id="thur">Thursday</span><span class="time">10AM – 12AM</span></p>
            <p class="date"><span id="fri">Friday</span><span class="time">10AM – 1AM</span></p>
            <p class="date"><span id="sat">Saturday</span><span class="time">10AM – 1AM</span></p>
          </div>
          <div class="transit-container">
            <h1 id="transitHeader">public transit</h1>
            <hr />
            <p class="bus-route">
              <i class="fa fa-bus" aria-hidden="true"></i> TCAT Schwartz Center Bus Stop <br />
              (Rt 10, 12, 28, 30, 31, 51, 54, 92, 93)
            </p>
            <p class="bus-route">
              <i class="fa fa-bus" aria-hidden="true"></i> TCAT Dryden and College Avenue <br /> (Rt 10, 12, 28, 30, 31)
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<?php include('./includes/footer.php'); ?>
