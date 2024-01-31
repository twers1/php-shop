/*----slider---*/
$('.hero-slider').slick({
    autoplay: true,
    infinity: false,
    spedd: 300,
    nextArrow: $('.next'),
    prevArrow: $('.prev'),
})

$('.testimonial-slider').slick({
    autoplay: true,
    infinity: false,
    spedd: 300,
    nextArrow: $('.next1'),
    prevArrow: $('.prev1'),
})


const header = document.querySelector('header')

function fixedNavbar(){
    header.classList.toggle('scrolled', window.pageYOffset > 0)
}
fixedNavbar();
window.addEventListener('scroll', fixedNavbar)

let menu =  document.querySelector('#menu-btn')
let userBtn = document.querySelector('#user-btn')

menu.addEventListener('click', function(){
    let nav = document.querySelector('.navbar')
    nav.classList.toggle('active')
})

userBtn.addEventListener('click', function(){
    let userBtn = document.querySelector('.user-box')
    userBtn.classList.toggle('active')
})