function info() {
    location.href = "info.php";
}

function pin() {
    window.open('https://www.google.com/maps/@53.9525504,16.5896424,3a,45.6y,232.01h,91.14t/data=!3m6!1e1!3m4!1sryGSwWV2bYTWuAtbHrDbUg!2e0!7i16384!8i8192?entry=ttu', '_blank');
}

function register() {
    location.href = "register.php";
}

function index() {
    location.href = "index.php"; 
}

function main() {
    location.href = "wypozyczalnia.php";
}

function astra() {
    location.href = "astra.php";
}

function clk() {
    location.href = "clk.php";
}

function a4() {
    location.href = "a4.php";
}

function civic() {
    location.href = "civic.php";
}

function clio() {
    location.href = "clio.php";
}

function corsa() {
    location.href = "corsa.php";
}

function merc_s() {
    location.href = "s.php";
}

function a8() {
    location.href = "a8.php";
}

function panel_logowanie() {
    location.href = "panel_logowanie.php";
}

function nav_show() {
    let box = document.querySelector(".nav_box");
    box.style.visibility = "visible";
}

function nav_close() {
    let box = document.querySelector(".nav_box");
    box.style.visibility = "hidden";
}

function show_login_change() {
    let box = document.querySelector(".hidden_login");
    let box2 = document.querySelector(".close_login");
    // let box3 = document.querySelector(".account_info");
    box.style.visibility = "visible";
    box2.style.visibility = "visible";
    // box3.style.height = "600px";
}

function show_pass() {
    let box = document.querySelector(".pass");
    let box2 = document.querySelector(".pass2");
    box.style.visibility = "hidden";
    box2.style.visibility = "visible";
}

function show_pass_change() {
    let box = document.querySelector(".hidden_pass");
    let box2 = document.querySelector(".close_pass");
    box.style.visibility = "visible";
    box2.style.visibility = "visible";
}

function save_data() {
    var login = document.querySelector("#login").value;
    var pass = document.querySelector("#pass").value;
    document.querySelector("#log").innerHTML = login;
    document.querySelector("#pas").innerHTML = pass;
    show_rental();
}

function show_rental() {
    
}

function rental_close() {
    
}

function login_close() {
    let box = document.querySelector(".close_login");
    let box2 = document.querySelector(".hidden_login");
    // let box3 = document.querySelector(".account_info");
    box.style.visibility = "hidden";
    box2.style.visibility = "hidden";
    // box3.style.height = "400px";
}

function pass_close() {
    let box = document.querySelector(".close_pass");
    let box2 = document.querySelector(".hidden_pass");
    box.style.visibility = "hidden";
    box2.style.visibility = "hidden";
}

// function currentSlide(i) {
//     let i;
    
//     document.querySelector("")
// }

const slides = document.querySelectorAll('.bigbox');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
let currentSlide = 0;

function showSlide(index) {
    if (index < 0) {
        currentSlide = slides.length - 1;
    } else if (index >= slides.length) {
        currentSlide = 0;
    }
    
    slides.forEach((slide, i) => {
        if (i === currentSlide) {
            slide.style.display = 'block';
        } else {
            slide.style.display = 'none';
        }
    });
}

prevBtn.addEventListener('click', () => {
    currentSlide--;
    showSlide(currentSlide);
});

nextBtn.addEventListener('click', () => {
    currentSlide++;
    showSlide(currentSlide);
});

showSlide(currentSlide);