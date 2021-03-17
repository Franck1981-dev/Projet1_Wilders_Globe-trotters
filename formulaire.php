<?php include 'layout/_header.php';?>
       
      <img src="assets/Contact.png" alt="imgContact" width="150" />
    <section id="contact">
      <form id="contactForm">
        <label for="name">First name:</label><br />
        <input type="text" id="name" name="name" value="Name" /><br />
        <label for="email">Email:</label><br />
        <input
          type="email"
          id="email"
          name="email"
          value="example@mail.com"
        /><br />
        <label for="message">Message:</label><br />
        <textarea id="message" name="message"></textarea>
        <br /><br />
        <input type="submit" value="Envoi" />
      </form>
    </section>
    
    <!-- Connect the Javascript file -->
    <script src="script.js"></script>
  </body>
  <?php include 'layout/_footer.php';?>
</html>