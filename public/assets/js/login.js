const form = document.querySelector('#loginForm')
const email = document.querySelector('#email')
const pwd = document.querySelector('#pwd')
const emailErrors = document.querySelector('#emailErrors')
const pwdErrors = document.querySelector('#pwdErrors')

form.addEventListener('submit', e => {
    let errors = 0
    let pattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]{2,})+$/
    if (email.value == '') {
        emailErrors.textContent = 'Please enter email'
        errors++
    }
    if (pwd.value == '') {
        pwdErrors.textContent = 'Please enter password'
        errors++
    }else if(!email.value.match(pattern)) {
        emailErrors.textContent = 'Email is not valid'
        errors++
    }
    if (errors > 0) {
        e.preventDefault()
    }
})
