const left = document.querySelector(".left");
const right = document.querySelector(".right");
const toggle = document.querySelector(".toggle-sidebar");
const links = document.querySelectorAll('.sidebar .mid ul li a')
toggle.addEventListener("click", function (event) {
    left.classList.contains("head-sidebar")
        ? left.classList.remove("head-sidebar")
        : left.classList.add("head-sidebar");
    toggle.innerHTML == '<i class="bi bi-list-nested"></i>'
        ? (toggle.innerHTML = '<i class="bi bi-x"></i>')
        : (toggle.innerHTML = '<i class="bi bi-list-nested"></i>');
});

// links.forEach(link => {
//     link.addEventListener("click", event => {
//         links.forEach(l => {
//             if (l !== link) {
//                 l.classList.remove('active');
//             }
//         });
//         link.classList.add('active');
//     });
// });
