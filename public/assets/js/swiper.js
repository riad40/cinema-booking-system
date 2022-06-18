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

// contact us form validation
const contact_form = document.querySelector('#contact_us')
const contact_name = document.querySelector('#full-name')
const contact_email = document.querySelector('#email')
const contact_message = document.querySelector('#message')
// error fields
const contact_name_error = document.querySelector('#name_contact_us_errors')
const contact_email_error = document.querySelector('#email_contact_us_errors')
const contact_message_error = document.querySelector('#message_contact_us_errors')

contact_form.addEventListener('submit', (e) => {
    let i = 0
    const email_regex = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]{2,})+$/
    // validate name
    if (contact_name.value === '') {
        contact_name_error.textContent = 'Please enter your name'
        contact_name.style.borderColor = 'red'
        i++
    }
    // validate email
    if (contact_email.value === '') {
        contact_email_error.textContent = 'Please enter your email'
        contact_email.style.borderColor = 'red'
        i++
    } else if (!contact_email.value.match(email_regex)) {
        contact_email_error.textContent = 'Please enter a valid email'
        contact_email.style.borderColor = 'red'
    }
    // validate message
    if (contact_message.value === '') {
        contact_message_error.textContent = 'Please enter your message'
        contact_message.style.borderColor = 'red'
        i++
    }
    if (i > 0) {
        e.preventDefault()
    }
})