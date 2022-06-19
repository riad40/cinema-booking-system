// seat validation
let selectedSeatsValidate = []
const seats = document.querySelectorAll('.seat-number')
seats.forEach(seat => {
    if (selectedSeats.includes(parseInt(seat.textContent))) {
        // console.log(seat.innerText+ " taken");
        seat.classList.add('reserved')
    } else {
        // console.log(seat.innerText+' free');
        seat.addEventListener('click', (e) => {
            let seatNbr = e.target.innerText         
            e.target.classList.toggle('active');
            if(e.target.classList.contains('active')){
                if(!selectedSeats.includes(seatNbr)){
                    selectedSeats.push(seatNbr)
                    selectedSeatsValidate.push(seatNbr)
                }
            }else{
                if(selectedSeats.includes(seatNbr)){
                    selectedSeats.splice(selectedSeats.indexOf(seatNbr),1)
                }
            }
            updateSeatsInput();
        })
    }
})
selectedSeats=[];
function updateSeatsInput(){
    let seatsInputText=selectedSeats.join(',');
    document.getElementById('booked_seats').value=seatsInputText;
}

// display payment form
const continueToPayment = document.querySelector('#continueToPayment')
const paymentForm = document.querySelector('#payment')

continueToPayment.addEventListener('click', () => {
    if(selectedSeatsValidate.length == 0){
        Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'You must select at least one seat',
        })
    } else {
        paymentForm.classList.remove('none')
        paymentForm.classList.add('animate__animated', 'animate__backInLeft')
    }
})

// payment form validation
const payment_form = document.querySelector('#paymentForm')
const card_type = document.querySelector('#card_type')
const card_number = document.querySelector('#card_number')
const card_expiry = document.querySelector('#expiry_date')
const card_cvv = document.querySelector('#cvv')
const card_type_error = document.querySelector('#card_type_errors')
const card_number_error = document.querySelector('#card_number_errors')
const card_expiry_error = document.querySelector('#expiry_date_errors')
const card_cvv_error = document.querySelector('#cvv_errors')

paymentForm.addEventListener('submit', e => {
    let errors = 0
    if (card_type.value == '') {
        card_type_error.textContent = 'Please enter card type'
        card_type.style.borderColor = 'red'
        errors++
    }
    if (card_number.value == '') {
        card_number_error.textContent = 'Please enter card number'
        card_number.style.borderColor = 'red'
        errors++
    }
    if (card_expiry.value == '') {
        card_expiry_error.textContent = 'Please enter expiry date'
        card_expiry.style.borderColor = 'red'
        errors++
    } else if(!card_expiry.value.includes('/')){
        card_expiry_error.textContent = 'Expiry date is not valid'
        card_expiry.style.borderColor = 'red'
        errors++
    }
    if (card_cvv.value == '') {
        card_cvv_error.textContent = 'Please enter cvv'
        card_cvv.style.borderColor = 'red'
        errors++
    } else if(card_cvv.value.length < 3 || card_cvv.value.length > 3){
        card_cvv_error.textContent = 'CVV is not valid'
        card_cvv.style.borderColor = 'red'
        errors++
    }
    if (errors > 0) {
        e.preventDefault()
    }
})