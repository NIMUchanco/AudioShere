const showMenuIcon = document.querySelector(".show-menu-icon");
const sideBar = document.querySelector("#sidebar")

function displayThumbnail() {
  var input = document.getElementById("thumbnailInput");
  var preview = document.getElementById("thumbnailPreview");

  var file = input.files[0];
  var reader = new FileReader();

  reader.onload = function (e) {
    preview.src = e.target.result;
  };

  reader.readAsDataURL(file);
}

// console.log("script.js is loaded");

const toggle = document.getElementById("modeToggle");

document.addEventListener("DOMContentLoaded", function() {
  toggle.addEventListener("change", function () {
    if (this.checked) {
      document.body.classList.add("dark-mode");
      logo.src = "../assets/images/audioSphere_logo_dark_mode.png";

      console.log("Dark mode is enabled");
    } else {
      document.body.classList.remove("dark-mode");
      logo.src = "../assets/images/audioSphere_logo_light_mode.png";
      console.log("Dark mode is not enabled");
    }
  });

  showMenuIcon.addEventListener("click", function () {
    console.log("Show menu icon clicked");
    sideBar.classList.toggle("active");

    let closeIcon = document.querySelector(".close_icon");

    closeIcon.addEventListener("click", function () {
      console.log("Close icon clicked");
      sideBar.classList.remove("active");
    });
  });
});