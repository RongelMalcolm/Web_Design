var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}
function clearbox(){
  document.getElementsByName("username").value="";
  document.getElementsByName("email").value="";
  document.getElementsByName("password").value="";
  document.getElementsByName("passwordrep").value="";
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;