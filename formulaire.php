<?php include 'layout/_header.php';

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        // trim les valeurs post
        $data = array_map('trim', $_POST);
        // vérifier email is ok
        $isOkEmail = filter_var($data['email'], FILTER_VALIDATE_EMAIL);

        if ($isOkEmail === false) {
            $errors[] = "Le format d'email saisi n'est pas valide";
        }
        if (strlen($data['message']) < 2) {
            $errors[] = 'Le message doit être renseigné !';
        }
    } else {
        $errors[] = 'Tous les champs sont requis';
    }
} ?>

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAsfzu1_3sq6TTPMwWxWUt4GptuOqj8y1WcA&usqp=CAU" id="imgContact" alt="imgContact"/>
    
        <form id="formulaire" method="POST" action="formulaire.php">
            <div>
                <label for="name" class="form-label">Nom:</label><br />
                <input type="text" id="name" name="name" class="form-control" id="name" placeholder="Votre nom ici" ><br /><br />
            </div>
            <div>
                <label for="firstname" class="form-label">Prénom:</label><br />
                <input type="text" id="firstname" name="firstname" class="form-control" id="firstname" placeholder="Votre prénom ici" ><br /><br />
            </div>
            <div>
                <label for="email" class="form-label">Email:</label><br />
                <input type="text" id="email" name="email" class="form-control" id="email" placeholder="name@example.com" ><br /><br />
            </div>
            <div>
                <label for="message" class="form-label">Message:</label><br />
                <textarea class="form-control" id="message" name="message" id="message" rows="5" placeholder="Votre message ici" ></textarea><br /><br />
            </div>         
            <?php
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    ?>
                    <div class="alert" role="alert">
                        <?php echo $error; ?><br />
                    </div>
            <?php
                }
            }
            ?>
            <div>
                <button class="submit" type="submit">Envoi</button>
            </div>
        </form>
 


<?php include 'layout/_footer.php'; ?>
