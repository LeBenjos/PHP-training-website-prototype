// HAMBURGER MENU (MOBILE)
// ----------------------------------------------------------------
const burger = document.querySelector(".mobile")
const nav = document.querySelector("nav")

burger.addEventListener("click", () =>{
    burger.classList.toggle("cross")
    nav.classList.toggle("open")
})
// ----------------------------------------------------------------

// CAROUSEL (MOBILE & TABLET)
// ----------------------------------------------------------------
let body = document.querySelector("body")

if(body.classList.contains("home")){
    let viewport = window.innerWidth
    const gallery = document.querySelector(".gallery")
    let carouselInterval

    // Carousel
    function carousel(gallery){   
            setTimeout(()=>{
                gallery.classList.toggle("g1")
                gallery.classList.toggle("g2")
            },3000)
            setTimeout(()=>{
                gallery.classList.toggle("g2")
                gallery.classList.toggle("g3")
            },6000)
            setTimeout(()=>{
                gallery.classList.toggle("g3")
                gallery.classList.toggle("g1")
            },9000)
    }

    // START CAROUSEL if the device (or viewport) is already like a phone
    if (viewport <= 1000){
        carousel(gallery)
    }

    // UPDATE VIEWPORT if resize
    window.addEventListener("resize", ()=>{
        viewport = window.innerWidth
    })

    // Carousel Interval
    carouselInterval = setInterval(()=>{
        if (viewport < 1000){
            carousel(gallery)
        } else {
            gallery.classList.add("g1")
            gallery.classList.remove("g2")
            gallery.classList.remove("g3")
        }
    }, 10000)
}
// ----------------------------------------------------------------