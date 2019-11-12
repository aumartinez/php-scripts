//JS Script

$(document).ready(function(){
  //To Do
  
  $("#userForm").submit(function(evt){
    let errors = validateForm();
    
    if (errors.length == 0) {
      return true;
    }
    else {
      removeErrors();
      displayErrors(errors);
      evt.preventDefault();
      return false;
    }
    
  });
  
  
  function validateForm() {
    let errors = [];
    
    //Empty fields validation
    if ($("#name").val() == "") {
      errors.push("name");
    }
    
    if ($("#email").val() == "") {
      errors.push("email");
    }
    
    if ($("#password").val() == "") {
      errors.push("password");
    }
    
    //Password verification match
    if ($("#password").val() != $("#verify").val()) {
      errors.push("verify");
    }
    
    //Email check (basic)
    if (!($("#email").val().indexOf(".") > 2) && ($("#email").val().indexOf("@"))) {
      errors.push("email");
    }
    
    return errors;
  }//End validateForm()
  
  function displayErrors(errors) {    
    for (let i = 0, len = errors.length; i < len; i++) {      
      $("#" + errors[i] + "Error").addClass("active");      
    }
    $("#errorDiv").html("Errors found");
  }
  
  function removeErrors() {
    $(".errorMess.active").removeClass("active");
  }
});
