const hamburger =  document.querySelector("#menu-icon");

const menu = document.querySelector(".responsive-menu");


hamburger.addEventListener("click", (event)=>{
    event.preventDefault();
    menu.classList.toggle('active')
})

console.log(menu);
