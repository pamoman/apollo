// Various functions.

"use strict";

function responsiveNav() {
    let navbar = document.getElementById('navbar');
    let navbarToggle = document.getElementById('navbar-toggle');

    navbarToggle.addEventListener('click', function () {
        navbar.classList.toggle('show');
    });
}
