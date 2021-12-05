<div class="contact wrapper">
  <FORM class='contact__buttons' METHOD="POST" NAME="background">
    <INPUT class='contact__btn contact__btn--yellow' TYPE="button" VALUE="żółty" ONCLICK="changeBackground('#FFF000')">
    <INPUT class='contact__btn contact__btn--black' TYPE="button" VALUE="czarny" ONCLICK="changeBackground('#000000')">
    <INPUT class='contact__btn contact__btn--white' TYPE="button" VALUE="biały" ONCLICK="changeBackground('#FFFFFF')">
    <INPUT class='contact__btn contact__btn--green' TYPE="button" VALUE="zielony" ONCLICK="changeBackground('#00FF00')">
    <INPUT class='contact__btn contact__btn--blue' TYPE="button" VALUE="niebieski"
      ONCLICK="changeBackground('#0000FF')">
    <INPUT class='contact__btn contact__btn--orange' TYPE="button" VALUE="pomarańczowy"
      ONCLICK="changeBackground('#FF8000')">
    <INPUT class='contact__btn contact__btn--gray' TYPE="button" VALUE="szary" ONCLICK="changeBackground('#c0c0c0')">
    <INPUT class='contact__btn contact__btn--red' TYPE="button" VALUE="czerwony" ONCLICK="changeBackground('#FF0000')">
  </FORM>

  <div class="contact__info">
    <p class="contact__data">Email: <a href="mailto:achojnowski00@gmail.com">achojnowski00@gmail.com</a></p>

    <p class="contact__data">
      Tel.: 346793479
    </p>
  </div>

  <form class='sendMail' action="" method="post">
    <h1 class="sendMail__heading">SKONTAKTUJ SIĘ ZE MNĄ</h1>
    <input class="sender inputbox" name="sender" type="text" placeholder="Twój adres email" required>
    <textarea class="content inputbox inputarea" name="content" placeholder="Treść maila" rows="10" required></textarea>
    <button class="submitbutton" name="sendMail" type="submit" href="/">WYSLIJ</button>
  </form>
</div>
