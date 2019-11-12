//JS Script

$(document).ready(function(){
  //To Do
  
  $("#userForm").submit(function(evt){
    let errors = validateForm();
    
    if (errors.length == 0) {
      return true;
    }
    else {
      evt.preventDefault();
      return false;
    }
    
  });
  
  function validateForm() {
    let errorFields = [];
    
    if ($("#name").val() == "") {
      errorFields.push("name");
    }
    
    if ($("#email").val() == "") {
      errorFields.push("email");
    }
    
    if ($("#password").val() == "") {
      errorFields.push("password");
    }
    
    return errorFields;
  }
});
