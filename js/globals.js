
function loadPage(page){
  if(page === 'login'){
    $("#side-bar,#header").hide();
    $(".content-wrapper").addClass("full-height");
  }
  else {
    $("#side-bar,#header").show();
    $(".content-wrapper").removeClass("full-height");
  }

  $.ajax({
    method:"GET",
    url:"../php/" + page + ".php",
    success: function(result){
      $('#container').html(result);
      $("#side-bar ul li").removeClass("active");
      $(".nav-" + page).addClass("active");
    }
  })
}

function loadSubPage(subPage){
  $.ajax({
    method:"GET",
    url:"../php/" + subPage + ".php",
    success: function(result){
      $('.campus-buildings').html(result);
    }
  })
}

function validateLogin(page){
  //do js validation on the form
  //set up ajax to go to the login.php to check the db etc
  // if they have successfully logged in change pages else display errors
  loadPage(page);

}

function launchModal(section, page){
  if(section === '.edit-classroom'){
    $.ajax({
      method:"GET",
      url:"../php/" + page + ".php",
      success: function(result){
        $(section).children('.modal-body').html(result);
      }
    })
  }
  $('.modal-bg').show();
  $(section).addClass('show');
}

function closeModal(section){
  $('.modal-bg').hide();
  $(section).removeClass('show');
}

function toggleAccordian(elem){
  $(elem).next(".accordian-body").slideToggle();
  $(elem).parent().toggleClass("expanded");
  if($(elem).parent().hasClass('expanded')){
    $(elem).children("span").removeClass("fa-plus").addClass("fa-minus");
  }
  else{
    $(elem).children("span").removeClass("fa-minus").addClass("fa-plus");
  }
}

function updateSlidingSelect(current, next){
  $(current).removeClass('active').addClass('completed');
  if(next !== undefined || next !== null){
    $(next).addClass('active');
  }
}

function editCampus(elem){
  console.log(elem);
  $(".campus-container section").not(".active").addClass("inactive");
  $(elem).parent("section").removeClass("inactive").addClass("active");
}

function closeEdit(){
  $(".campus-container section").removeClass("active inactive");
}

var campuses = [
  {
    "campusName": "Access Road",
    "buildings":[
      {
        "name": "North Building",
        "addressLineOne" : "123 Access Road",
        "addressLineTwo" : "Suite 200",
        "city" : "Warwick",
        "state" : "RI",
        "zipCode" : "02709"
      },
      {
        "name": "South Building",
        "addressLineOne" : "123 Access Road",
        "addressLineTwo" : "Suite 300",
        "city" : "Warwick",
        "state" : "RI",
        "zipCode" : "02709"
      }
    ]
  },
  {
    "campusName" : "East Greenwich",
    "buildings" : [
      {
        "name" : "East Building",
        "addressLineOne" : "123 NE Tech Way",
        "addressLineTwo" : "Suite 100",
        "city" : "East Greenwich",
        "state" : "RI",
        "zipCode" : "02710"
      },
      {
        "name" : "West Building",
        "addressLineOne" : "123 NE Tech Way",
        "addressLineTwo" : "Suite 200",
        "city" : "East Greenwich",
        "state" : "RI",
        "zipCode" : "02710"
      }
    ]
  },
  {
    "campusName" : "Post Road",
    "buildings" : [
      {
        "name" : "Sun Building",
        "addressLineOne" : "123 Post Road",
        "addressLineTwo" : "Suite 100",
        "city" : "Warwick",
        "state" : "RI",
        "zipCode" : "02710"
      },
      {
        "name" : "Moon Building",
        "addressLineOne" : "123 Post Road",
        "addressLineTwo" : "Suite 200",
        "city" : "Warwick",
        "state" : "RI",
        "zipCode" : "02710"
      }
    ]
  }
]

function deleteAlert(){
  alert("Are you sure?");
}
