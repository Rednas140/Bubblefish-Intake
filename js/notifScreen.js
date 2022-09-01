let notifToggler = document.getElementById("notifToggler");
let notifScreen = document.getElementById("notifScreen")
let closeScreen = document.getElementById("closeScreen")

notifToggler.addEventListener("click", toggleScreen)
closeScreen.addEventListener("click", toggleScreen);

function toggleScreen() {
    notifScreen.classList.toggle("show-notifScreen");

}