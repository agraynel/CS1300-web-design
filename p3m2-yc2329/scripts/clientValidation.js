// On load
$(document).ready(function () {

  $("#contact_form").on("submit", function() {
    var formValid = true;

    var nameIsValid = $("#name").prop("validity").valid;
    if(nameIsValid) {
      $("#nameError").hide();
    } else {
      $("#nameError").show();
      formValid = false;
    }

    var phoneIsValid = $("#phone").prop("validity").valid;
    if(phoneIsValid) {
      $("#phoneError").hide();
    } else {
      $("#phoneError").show();
      formValid = false;
    }

    var questionIsValid = $("#question").prop("validity").valid;
    if(questionIsValid) {
      $("#messageError").hide();
    } else {
      $("#messageError").show();
      formValid = false;
    }

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
