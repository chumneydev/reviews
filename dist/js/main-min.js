function animatedForm(){const e=document.querySelectorAll(".fa-arrow-down");console.log(e),e.forEach(e=>{e.addEventListener("click",()=>{const t=e.previousElementSibling,n=e.parentElement,a=n.nextElementSibling;"text"===t.type&&validateUser(t)?nextSlide(n,a):"email"===t.type&&validateEmail(t)?nextSlide(n,a):"password"===t.type&&validateUser(t)?nextSlide(n,a):n.style.animation="shake 0.5s ease",n.addEventListener("animationend",()=>{n.style.animation=""})})})}function validateUser(e){if(!(e.value.length<6))return error("rgb(87,189,130)"),!0;console.log("Not Enough Characters"),error("rgb(189,87,87)")}function validateEmail(e){if(/(.+)@(.+){2,}\.(.+){2,}/.test(e.value))return error("rgb(87,189,130)"),!0;error("rgb(189,87,87)")}function nextSlide(e,t){e.classList.add("inactive"),e.classList.remove("active"),t.classList.add("active")}function error(e){document.body.style.backgroundColor=e}animatedForm();