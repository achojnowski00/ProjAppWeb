const openBtn = document.querySelector('.open-icon');
const closeBtn = document.querySelector('.close-icon');
const menu = document.querySelector('.hamMenu');


openBtn.addEventListener('click', function () {
  menu.classList.toggle('active')
  closeBtn.classList.toggle('active')
  openBtn.classList.toggle('active')
})

closeBtn.addEventListener('click', function () {
  menu.classList.toggle('active')
  closeBtn.classList.toggle('active')
  openBtn.classList.toggle('active')
})