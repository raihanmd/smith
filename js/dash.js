const homeText = document.querySelector('.home');
const dashText = document.querySelector('.dash');
const sidebar = document.querySelector('.sidebar');
sidebar.addEventListener('mouseover', function () {
    homeText.classList.remove ('hidden')
    dashText.classList.remove ('hidden')
})
sidebar.addEventListener('mouseleave', function () {
    homeText.classList.add ('hidden')
    dashText.classList.add ('hidden')
})