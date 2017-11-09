// On load
$(document).ready(function () {

  $("#mainForm").on("submit", function() {
    var formValid = true;

    var firstNameIsValid = $("#firstName").prop("validity").valid;
    if(firstNameIsValid) {
      $("#fnameError").hide();
    } else {
      $("#fnameError").show();
      formValid = false;
    }

    var lastNameIsValid = $("#lastName").prop("validity").valid;
    if(lastNameIsValid) {
      $("#lnameError").hide();
    } else {
      $("#lnameError").show();
      formValid = false;
    }

    // if you didn't do the optional parts
    // var emailIsValid = $("#userEmail").prop("validity").valid;
    // if(emailIsValid) {
    //   $("#emailError").hide();
    // } else {
    //   $("#emailError").show();
    //   formValid = false;
    // }

    // if you did the optional parts:

    // if email is empty (that is, the value is missing)
    if($("#userEmail").prop("validity").valueMissing) {
      $("#emailErrorNoEmail").show();
      formValid = false;
    } else {
      $("#emailErrorNoEmail").hide();
    }

    // if email is invalid (that is, there is a type mismatch)
    if($("#userEmail").prop("validity").typeMismatch) {
      $("#emailErrorInvalEmail").show();
      formValid = false;
    } else {
      $("#emailErrorInvalEmail").hide();
    }

    return formValid;
  });

});
