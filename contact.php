<!DOCTYPE html>
<html lang="en" class="sr">
  <title>VEDA</title>
  <link rel="stylesheet" href="style.css">
  <body>
    <header class="l-header">
      <nav class="nav bd-grid">
          <div>
              <a href="index.html" class="nav__logo">VEDA</a>
          </div>

          <div class="nav__menu" id="nav-menu">
              <ul class="nav__list">
                  <li class="nav__item"><a href="index.html" class="nav__link">Home</a></li>
                  <li class="nav__item"><a href="about.html" class="nav__link">About</a></li>
                  <li class="nav__item"><a href="adopt.php" class="nav__link">Adopt</a></li>
                  <li class="nav__item"><a href="contact.html" class="nav__link active-link">Contact</a></li>
                  <li class="nav__item"><a href="https://cara.wcd.gov.in/" class="nav__link">CARA</a></li>
              </ul>
          </div>

          <div class="nav__toggle" id="nav-toggle">
              <i class='bx bx-menu'></i>
          </div>
      </nav>
  </header>
  <br>
  <center>
  <div class="paragraph">
      <h1>Get in Touch with Us</h1><br>
      <p>
        We’re here to help with all your adoption-related queries and support needs. Reach out to us, and our team will respond promptly!
      </p>
      <br>
      <form action="scontact.php" method="post" class="contact__form">
        <h2>Contact Us</h2>
        <input class="contact__input" type="text"  name="name" placeholder="Enter your name" required>
        <input class="contact__input" type="email"  name="email" placeholder="Enter your email" required>
        <input class="contact__input" type="tel"  name="phone" placeholder="Enter your phone number">
        <input class="contact__input" type="text"  name="phone" placeholder="Enter your City">
        <textarea class="contact__input" id="message" name="message" rows="4" placeholder="Write your message here" required></textarea>
        <button class="contact__button" type="submit">Submit</button>
    </form>
    <div class="paragraph">
      Email: support@vedaadoption.org <br>
      Phone: +91-123-456-7890<br>
      Working Hours:<br>
      Monday to Friday: 9:00 AM – 6:00 PM<br>
      Saturday: 10:00 AM – 4:00 PM
    </div>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3846.3217524371503!2d75.636374!3d15.413176!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8f944f7cb2301%3A0xe39ea5d1d5e09e33!2sTontadarya%20College%20of%20Engineering%2C%20Gadag!5e0!3m2!1sen!2sin!4v1733231006735!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
  </body>
</html>