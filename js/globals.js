function loadPage(page){
  if(page === 'login'){
    $("#side-bar,#header").hide();
    $("#container").css({"height":"100%","width":"100%","margin":"0"});
  }
  else {
    $("#side-bar,#header").show();
    $("#container").css({"height":"calc(100% - 100px)","width":"90%","margin":"100px 0 0 10%"});
  }

  $.ajax({
    method:"GET",
    url:"../php/" + page + ".php",
    success: function(result){
      $('#container').html(result);
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
  // if($(elem).parent().hasClass("expanded")){
  //   $(elem).parent().removeClass("expanded").addClass("collapsed");
  // }
  // else {
  //   $(elem).parent().removeClass("collapsed").addClass("expanded");
  // }
  $(elem).next(".accordian-body").slideToggle();
  $(elem).parent().toggleClass("expanded");
  if($(elem).parent().hasClass('expanded')){
    $(elem).children("span").removeClass("fa-plus").addClass("fa-minus");
  }
  else{
    $(elem).children("span").removeClass("fa-minus").addClass("fa-plus");
  }
}

function updateClassroomSelect(current, next){
  $(current).removeClass('active').addClass('completed');
  if(next !== undefined || next !== null){
    $(next).addClass('active');
  }
}
