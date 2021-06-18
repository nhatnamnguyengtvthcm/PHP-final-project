const container = document.getElementById('containerStage');
const seats = document.querySelectorAll('.row .seat:not(.occupied');
const count = document.getElementById('count');
const total = document.getElementById('total');
const seatSelect = document.querySelectorAll('.rowSeat');

populateUI();
let chooseSeat = seatSelect.value;

// Save selected movie index and price
function setMovieData(movieIndex, moviePrice) {
  localStorage.setItem('selectedMovieIndex', movieIndex);
  localStorage.setItem('selectedMoviePrice', moviePrice);
}

// update total and count
function updateSelectedCount() {
  const selectedSeats = document.querySelectorAll('.row .seat.selected');

  const seatsIndex = [...selectedSeats].map((seat) => [...seats].indexOf(seat));

  localStorage.setItem('selectedSeats', JSON.stringify(seatsIndex));

  //copy selected seats into arr
  // map through array
  //return new array of indexes

  const selectedSeatsCount = selectedSeats.length;

  count.innerText = selectedSeatsCount;

  // total.innerText = selectedSeatsCount * ticketPrice;


}

// get data from localstorage and populate ui
function populateUI() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) > -1) {
        seat.classList.add('selected');
      }
    });
  }

  const selectedMovieIndex = localStorage.getItem('selectedMovieIndex');

  if (selectedMovieIndex !== null) {
    selectedIndex = selectedMovieIndex;
  }
}

// Movie select event
container.addEventListener('change', (e) => {
  chooseSeat = e.target.value + "";
  setMovieData(e.target.selectedIndex, chooseSeat);
  updateSelectedCount();
});

// Seat click event
var getValue = document.getElementById('pickingSeat');
var pickingSeat = [];
container.addEventListener('click', (e) => {
  if (e.target.classList.contains('seat') && !e.target.classList.contains('occupied')) {
    e.target.classList.toggle('selected');
    updateSelectedCount();
  }
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

  getValue.value = pickingSeat.toString();
});
function changeColor() {
  const selectedSeats = JSON.parse(localStorage.getItem('selectedSeats'));
  if (selectedSeats !== null && selectedSeats.length > 0) {
    seats.forEach((seat, index) => {
      if (selectedSeats.indexOf(index) != -1) {
        seat.classList.add('occupied');
      }
    })
  }
}

// intial count and total
changeColor();
updateSelectedCount();

