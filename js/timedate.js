// ============================================
//   POBRANIE INFO O DACIE I WYSWIETLENIE JEJ
// ============================================
// Funkcja pobiera z systemu dane o dacie i wyświetla je w formacie dd.mm.yy
function getthedate() {
  Todays = new Date();
  TheDate = ((Todays.getDate() < 10) ? "0" : "") + Todays.getDate() + "." + (Todays.getMonth() + 1) + "." + (Todays.getYear() - 100);
  document.getElementById("data").innerHTML = TheDate;
}
var timerID = null;
var timerRunning = false;

function stopclock() {
  if (timerRunning)
    clearTimeout(timerID);
  timerRunning = false;
}

// ========================================
//   FUNKCJA STARTUJĄCA CAŁY ZEGAR I DATE
// ========================================
// aby funkcje działały, należy w body umieścić atrybut onload="startclock()"
function startclock() {
  stopclock();
  getthedate();
  showtime();
}

// ============================================
//   POBRANIE I WYŚWIELTENIE INFORMACJI CZASU
// ============================================
// Funkcja pobiera z systemu dane o dacie i wyświetla je w formacie gg:mm:ss
function showtime() {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds()
  var timevalue = ((hours < 10) ? "0" : "") + hours
  timevalue += ((minutes < 10) ? ":0" : ":") + minutes
  timevalue += ((seconds < 10) ? ":0" : ":") + seconds
  document.getElementById("zegarek").innerHTML = timevalue;
  timerID = setTimeout("showtime()", 1000);
  timerRunning = true;
}