const navOpenBtn = document.getElementById('hamburger')
const navCloseBtn = document.getElementById('close')

const menu = document.querySelector('.menu')
const backDrop = document.querySelector('.dark-overlay')

navOpenBtn.addEventListener('click', function(){
   backDrop.style.display="block"
   menu.style.display="block"
   menu.style.width="65%"
   menu.style.height="100%"
})

navCloseBtn.addEventListener('click', function(){
   backDrop.style.display="none"
   menu.style.display="none"
   menu.style.width="0"
   menu.style.height="0"
})

document.addEventListener("scroll", function(){
    //let header = document.getElementById('header')
    //header.classList.toggle("sticky", window.scrollY > 0)

    let subheader = document.querySelector(".bottom")
    subheader.classList.toggle("stick", window.scrollY > 192)
})