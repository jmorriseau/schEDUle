<!DOCTYPE html>
<html>
  <head>
    <title>schEDUle</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="dist/main.css" type="text/css" />
  </head>
  <body onload="loadPage('login')">
    <div id="header">
      header stuff here
    </div>
    <div id="side-bar">
      <ul>
        <li onclick="loadPage('home')">Home</li>
        <li onclick="loadPage('building')">Building</li>
        <li onclick="loadPage('classroom')">Classroom</li>
        <li onclick="loadPage('course')">Course</li>
        <li onclick="loadPage('curriculum')">Curriculum</li>
        <li onclick="loadPage('faculty')">Faculty</li>
        <li onclick="loadPage('schedule-wizard')">Schedule Wizard</li>
        <li onclick="loadPage('login')">Log In</li>
      </ul>
    </div>

    <div id="container" class="content-container">

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


<script src="dist/main.js" type="text/javascript"></script>

  </body>
</html>
