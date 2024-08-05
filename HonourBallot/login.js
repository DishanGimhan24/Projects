const form= document.querySelector("form"),
    emailField=form.querySelector(".mail-field"),
     emailinput=emailField.getElementById("email"),
     passfield=form.querySelector(".pw-field"),
     passinput=passfield.getElementById("password");

//Email validation
function checkEmail(){

}
//Calling Function on Form Submit
form.addEventListener("submit",)




 



function togglePasswordVisibility() {
    var passwordField = document.getElementById("password");
    var toggleIcon = document.querySelector(".toggle-password");

    if (passwordField.type === "password") {
      passwordField.type = "text";
      toggleIcon.innerHTML = '<img src="images/hide.png" alt="Icon" height="20px" width="20px" >';
    } else {
      passwordField.type = "password";
      toggleIcon.innerHTML = '<img src="images/view.png" alt="Icon" height="20px" width="20px" >';
    }
  }