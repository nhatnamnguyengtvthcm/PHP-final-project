const containerSeat = document.querySelector('.chooseSeat');
const seats = document.querySelectorAll('.row .seat:not(.occupied');
const count = document.getElementById('count');
const total = document.getElementById('total');
const seatSelect = document.querySelectorAll('.rowSeat');

populateUI();
let chooseSeat = seatSelect.value;

//populate ui
function populateUI() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');
  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }
}

// Seat click event
var getValue = document.getElementById('pickingSeat');
var pickingSeat = [];
containerSeat.addEventListener('click', (e) => {
  //Convert string to Number
  var seatNumber = String(e.target.value);
  //find the seat in the array
  var pos = pickingSeat.indexOf(seatNumber);



  //checking
  if (pos >= 0) {
    pickingSeat.splice(pos, 1);
  } else {
    pickingSeat.push(seatNumber);
  }
  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    e.target.classList.toggle('selected');

  }

  getValue.value = pickingSeat.toString();
});
// function changeColor() {
//     const selectedSeats = document.querySelectorAll('.seat.selected');
//   if (selectedSeats !== null && selectedSeats.length > 0) {
//     seats.forEach((seat, index) => {
//       if (selectedSeats.indexOf(index) != -1) {
//         seat.classList.add('occupied');
//       }
//     })
//   }
// }

// intial count and total
// changeColor();
// Regex Form
var errorTime = document.querySelector(".errorTime");
function formOrderTicket() {
  if (document.formOrderTicket.hour.value == "-1") {
    // errorTime.innerHTML = "Please choose time!"
    alert("error")
    return false;
  }
  return (true);
}



