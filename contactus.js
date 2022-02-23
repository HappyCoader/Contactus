const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});

function validation(){
  var name = document.getElementsByName("name").value;
  var email = document.getElementsByName("email").value;
  var phone = document.getElementsByName("phone").value;
  var message = document.getElementsByName("message").value;
}