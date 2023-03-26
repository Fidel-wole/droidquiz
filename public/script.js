const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themetoggler = document.querySelector(".theme-toggle")
const date = document.querySelector("#date");
const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
const day = new Date();
let currentday = days[day.getDay()];
menuBtn.addEventListener('click', ()=>{
    sideMenu.style.display='block';
})
closeBtn.addEventListener('click', ()=>{
    sideMenu.style.display='none'
})

themetoggler.addEventListener("click", ()=>{
    document.body.classList.toggle("dark-theme");
     themetoggler.querySelector("span:nth-child(1)").classList.toggle('active');
     themetoggler.querySelector("span:nth-child(2)").classList.toggle('active');
    })
date.value="Happy " +  currentday;    
