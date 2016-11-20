<!DOCTYPE html>
<html>
  <head>
    <title>schEDUle</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link rel="stylesheet" href="dist/main.css" type="text/css" />
  </head>
  <body>
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

    <?php
    include_once('php/login.php');
    ?>

    <!-- <div id="container">
      <?php
      include_once('php/home.php');
      ?>

    </div> -->

<script src="dist/main.js" type="text/javascript"></script>

  </body>
</html>
