// Start with one background
var bgToggle = true;

// Function to toggle between two backgrounds
function toggleBackground() {
  bgToggle = !bgToggle;

  if (bgToggle) {
    document.body.style.backgroundImage = "url('images/lightmodebg.jpg')";
    document.getElementById("mode").innerHTML = "light mode";
  } else {
    document.body.style.backgroundImage = "url('images/darkmodebg.jpg')";
    document.getElementById("mode").innerHTML = "dark mode";
  }

  // Keep background behavior consistent
  document.body.style.backgroundSize = "cover";
  document.body.style.backgroundRepeat = "no-repeat";
  document.body.style.backgroundAttachment = "fixed";
  document.body.style.backgroundPosition = "center";
}


function mySubmitCheck() {
  // compare password and confirmation
  if (password.value != confirm.value) {
    alert("Passwords has to match");
    return false; // failed validation
  }
  return true; // success
}

// Set initial background
document.body.style.backgroundImage = "url('images/lightmodebg.jpg')";
document.body.style.backgroundSize = "cover";
document.body.style.backgroundRepeat = "no-repeat";
document.body.style.backgroundAttachment = "fixed";
document.body.style.backgroundPosition = "center";
