var swiper = new Swiper(".home", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    }
});

const toggleButton = document.getElementsByClassName('toggle-button')[0]
const navbarLinks = document.getElementsByClassName('navbar-links')[0]

toggleButton.addEventListener('click', () => {
  navbarLinks.classList.toggle('active')
})

/* ===== for reserve page ===== */
// console.log('js running');
const seats = document.querySelectorAll('#seat')

seats.forEach(seat => {
    seat.addEventListener('click', () => {
        // console.log('clicked')
        seat.style.backgroundColor = 'blue'
    })
})

const getTickets = document.querySelector('#getTicket')
const payment = document.querySelector('#payment')

getTickets.addEventListener('click', () => {
    payment.classList.remove('none')
    payment.classList.add('animate__animated', 'animate__bounceInLeft')
})
