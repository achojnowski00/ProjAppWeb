const openBtn = document.querySelector('.open-icon');
const closeBtn = document.querySelector('.close-icon');
const menu = document.querySelector('.hamMenu');

// =================================================
//    Funckje otwierające i zamykające menu boczne
// =================================================
// elementy z klasą 'active' są widoczne a bez niej są niewidoczne
openBtn.addEventListener('click', function () {
  menu.classList.toggle('active')
  closeBtn.classList.toggle('active')
  openBtn.classList.toggle('active')
})


// funkcja znamyka manu boczne poprzez odjęcie klas active od odpowiednich elementów
closeBtn.addEventListener('click', function () {
  menu.classList.toggle('active')
  closeBtn.classList.toggle('active')
  openBtn.classList.toggle('active')
})