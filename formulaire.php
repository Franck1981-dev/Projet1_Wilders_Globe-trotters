<?php include 'layout/_header.php'; ?>
       
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAsfzu1_3sq6TTPMwWxWUt4GptuOqj8y1WcA&usqp=CAU" id="imgContact" alt="imgContact"/>
    <section id="contact">
      <form id="formulaire">        
        <label for="email">Email:</label><br />
        <input
          type="email"
          id="email"
          name="email"
          value="Votre mail ici"
        /><br />
        <label for="message">Message:</label><br />
        <textarea id="message" name="message" value="Votre message ici"></textarea>
        <br /><br />
        <input type="submit" value="Envoi" />
      </form>
    </section>
    
    <!-- Connect the Javascript file -->
    <script src="assets/script.js"></script>
  </body>
  <?php include 'layout/_footer.php'; ?>
</html>