// =================================
//   Funkcja zmieniająca kolor tła
// =================================
// funckja poprzez metodę .style zmienia wartość tła dla elementu body
// kolor tła podany jest za pomocą zapisu hexadecymalnego 
// przykladowe wywołanie:
// <INPUT TYPE="button" VALUE="red" ONCLICK="changeBackground('#F00')"></INPUT>
function changeBackground(hexNumber) {
  document.body.style.backgroundColor = hexNumber;
}