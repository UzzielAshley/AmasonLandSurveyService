// script.js
// Get the modal element
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var openModalBtn = document.getElementById('openModalBtn');

// Get the close button element inside the modal
var closeBtn = document.getElementsByClassName('close')[0];

// Function to open the modal
function openModal() {
  modal.style.display = 'block';
}

// Function to close the modal
function closeModal() {
  modal.style.display = 'none';
}

// Event listeners for the button and close button
openModalBtn.addEventListener('click', openModal);
closeBtn.addEventListener('click', closeModal);