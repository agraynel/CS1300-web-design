/* Form validation
  CREDITS:
  https://www.tutorialspoint.com/javascript/javascript_form_validations.htm
  http://www.w3schools.com/js/js_validation.asp
  http://www.w3schools.com/js/tryit.asp?filename=tryjs_validation_number

  This is the validation form js file I used in CS 2300 in 17Spring.
  All of the code are written by me.
*/

// Check name valid, name should only contain letters. The length should be between 1 and 30.
function validName(name) {
  //Name can have characters, spaces, numbers, underscores, dashes and name can't be all spaces
  var isValidLetter = /\S/.test(name) && /^[A-Za-z\s]+$/.test(name);
  var isValidNameLength = (name !== '') && name.length <= 30;
  var isValidName = isValidLetter && isValidNameLength;
  if (!isValidName) {
    showError("name_error_message", "Please enter a valid name.");
  }
  return isValidName;
}

//check phone number valid within USA
function validPhoneNumber(number) {
  var isValidNumber = /\S/.test(number) && /^[0-9]+$/.test(name); && number.length == 10;
  if (!isValidNumber) {
    showError("phone_error_message", "Please enter a valid number within United States!");
  }
  return isValidNumber;
}

//check email valid
function validEmail(email) {
  var isValidEmail =;
  if (!isValidEmail) {
    showError("email_error_message", "Please enter a valid email address!");
  }
  return isValidEmail;
}

//check question valid
function validQuestion(text) {
  var notAllSpaces = /\S/.test(text);
  var isValidLength = text.length <= 300 && text.length >= 2;
  var isValidQuestion = notAllSpaces && isValidLength;
  if (!isValidQuestion) {
    showError("question_error_message", "The question should be between 2 and 300 characters and not all spaces." );
  }
  return isValidQuestion;
}

//check answer valid
function validOptional(text) {
  var notAllSpaces = /\S/.test(text);
  var isValidLength = text.length <= 100 && text.length >= 2;
  var isValidQuestion = notAllSpaces && isValidLength;
  if (!isValidQuestion) {
    showError("option_error_message", "The answer should be between 2 and 100 characters and not all spaces." );
  }
  return isValidQuestion;
}

// validate the form
function validate() {
  var name = validName(document.forms.contact_form.name.value);
  var phone = validPhoneNumber(document.forms.contact_form.phone.value);
  var email = validEmail(document.forms.contact_form.email.value);
  var question = validQuestion(document.forms.contact_form.question.value);
  var optional = validOptional(document.forms.contact_form.optional-question.value);
  var isValidForm = name && phone && email && question && optional;

  return isValidForm;
}

// Show error message
function showError(id, errorMessage) {
   document.getElementById("add_error_message").innerHTML = (errorMessage == "") ? "Your information have been submitted successfully!" : errorMessage;
}
