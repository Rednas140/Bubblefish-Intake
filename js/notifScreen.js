let notifToggler = document.getElementById("notifToggler");
let notifScreen = document.getElementById("notifScreen")
let closeScreen = document.getElementById("closeScreen")
let notifClose = document.querySelectorAll(".notif-close")
console.log(notifClose)

notifClose.forEach(notifClose => {
    notifClose.addEventListener("click", closeNotfication)
});

notifToggler.addEventListener("click", toggleScreen)
closeScreen.addEventListener("click", toggleScreen);


function toggleScreen() {
    notifScreen.classList.toggle("show-notifScreen");

}

function closeNotfication(e) {
    let notifcation = document.getElementById(e.target.dataset.id)
    notifcation.remove()
    console.log(e.target.dataset.id)
}