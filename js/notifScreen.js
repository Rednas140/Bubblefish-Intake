let notifToggler = document.getElementById("notifToggler");
let notifScreen = document.getElementById("notifScreen")

notifToggler.addEventListener("click", toggleScreen);

function toggleScreen() {
    console.log('hello')
    notifScreen.classList.toggle("show-notifScreen");
}