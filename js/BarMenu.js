/*
MENU
*/
const body = document.querySelector("body"), 
        nav = document.querySelector("nav"), 
        modeToggle = document.querySelector(".darlight"), 
        searchToggle = document.querySelector(".searchToggle"),
        sliderclose = document.querySelector(".sliderclose"),
        slideropen = document.querySelector(".slideropen");

        let getMode = localStorage.getItem("mode");
        if(getMode && getMode === "dark-mode"){
            body,classList.add("dark");
        }

modeToggle.addEventListener("click" , () => {
    modeToggle.classList.toggle("activeLight");
    body.classList.toggle("dark");
    if (!body.classList.contains("dark")){
        localStorage.setItem("mode", "light-mode");
    }else{
        localStorage.setItem("mode", "darlight");
    }
});
searchToggle.addEventListener("click" , () => {
    searchToggle.classList.toggle("activeBar");
});

slideropen.addEventListener("click" , () => {
    nav.classList.add("active");
});

body.addEventListener("click" , e => {
    let clickedElm = e.target;
    if (!clickedElm.classList.contains("slideropen") && !clickedElm.classList.contains("menu")){
        nav.classList.remove("active");
    }
});