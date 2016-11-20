function loadPage(page){
  if(page === 'login'){
    $("#side-bar,#header").hide();
  }
  else {
    $("#side-bar,#header").show();
  }

  $.ajax({
    method:"GET",
    url:"../php/" + page + ".php",
    success: function(result){
      $('#container').html(result);
    }
  })
}
