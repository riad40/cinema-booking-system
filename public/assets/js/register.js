// alert('js runing')
const registerForm = document.querySelector('#registerForm')
const name = document.querySelector('#fname')
const email = document.querySelector('#email')
const phone = document.querySelector('#phone')
const pwd = document.querySelector('#pwd')
const Rpwd = document.querySelector('#Rpwd')
const nameErrors = document.querySelector('#fnameErrors')
const emailErrors = document.querySelector('#emailErrors')
const phoneErrors = document.querySelector('#phoneErrors')
const pwdErrors = document.querySelector('#pwdErrors')
const RpwdErrors = document.querySelector('#RpwdErrors')

registerForm.addEventListener('submit', e => {
    let errors = 0
    let pattern = /^[a-zA-Z0-9]+@[a-zA-Z0-9]+(\.[a-zA-Z0-9]{2,})+$/
    if (name.value == '') {
        nameErrors.textContent = 'Please enter your name'
        errors++
    }
    if (email.value == '') {
        emailErrors.textContent = 'Please enter your email'
        errors++
    } else if (!email.value.match(pattern)) {
        emailErrors.textContent = 'Email is not valid'
        errors++
    }
    if(phone.value == '') {
        phoneErrors.textContent = 'Please enter your phone'
        errors++
    } else if(phone.value.length < 10) {
        phoneErrors.textContent = 'Phone must be 10 digits'
        errors++
    }
    if (pwd.value == '') {
        pwdErrors.textContent = 'Please enter your password'
        errors++
    }
    if (Rpwd.value == '') {
        RpwdErrors.textContent = 'Please enter your password'
        errors++
    } else if (pwd.value != Rpwd.value) {
        RpwdErrors.textContent = 'Passwords does not match'
        errors++
    }
    if (errors > 0) {
        e.preventDefault()
    }
})