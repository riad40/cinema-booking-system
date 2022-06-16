// seat validation
const seats = document.querySelectorAll('.seat-number')
seats.forEach(seat => {
    if(selectedSeats.includes(parseInt(seat.textContent))){
        // console.log(seat.innerText+ " taken");
        seat.classList.add('reserved')
    }else{
        // console.log(seat.innerText+' free');
        seat.addEventListener('click', (e) => {
            let seatNbr=e.target.innerText;            
            e.target.classList.toggle('active');
            if(e.target.classList.contains('active')){

                if(!selectedSeats.includes(seatNbr)){
                    selectedSeats.push(seatNbr)
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
    paymentForm.classList.remove('none')
    paymentForm.classList.add('animate__animated', 'animate__backInLeft')
})