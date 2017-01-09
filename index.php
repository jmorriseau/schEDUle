<!DOCTYPE html>
<html>
  <head>
    <title>schEDUle</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="dist/main.css" type="text/css" />
  </head>
  <body onload="loadPage('login')">


    <div id="header">
      <div id="header-image">
      </div>

    </div>

    <div class="content-wrapper">
      <div id="side-bar">
        <ul>
          <li onclick="loadPage('home')" class="nav-home"><span class="fa fa-home"></span>Home</li>
          <li onclick="loadPage('building')" class="nav-building"><span class="fa fa-building-o"></span>Building</li>
          <li onclick="loadPage('classroom')" class="nav-classroom"><span class="fa fa-desktop"></span>Classroom</li>
          <li onclick="loadPage('course')" class="nav-course"><span class="fa fa-book"></span>Course</li>
          <li onclick="loadPage('curriculum')" class="nav-curriculum"><span class="fa fa-map-signs"></span>Curriculum</li>
          <li onclick="loadPage('faculty')" class="nav-faculty"><span class="fa fa-id-badge"></span>Faculty</li>
          <li onclick="loadPage('schedule-wizard')" class="nav-schedule-wizard"><span class="fa fa-magic"></span>Schedule Wizard</li>
          <li onclick="loadPage('myschedule')" class="nav-myschedule"><span class="fa fa-user-circle-o"></span>My Schedule</li>
          <li onclick="loadPage('login')">Log In</li>
        </ul>
      </div>

      <div id="container" class="content-container">

      </div>

    </div>






    <div class="modal-bg">
    </div>

    <div class="modal-container demo-modal">
      <div class="modal-header">
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button class="pull-right" onclick="closeModal('.demo-modal')">Close</button>
      </div>
    </div>

    <div class="modal-container schedule-modal">
      <div class="modal-header">
      </div>
      <div class="modal-body">
        <div class="alert-box info">
          <div class="alert-icon">
            <span class="fa fa-info-circle"></span>
          </div>
          <div class="alert-text">
            Schedule Uploaded Successfully
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button class="btn btn-success pull-right" onclick="closeModal('.schedule-modal')">Schedule</button>
        <button class="btn btn-default pull-right" onclick="closeModal('.schedule-modal')">Cancel</button>
      </div>
    </div>


<script src="dist/main.js" type="text/javascript"></script>

  </body>
</html>
