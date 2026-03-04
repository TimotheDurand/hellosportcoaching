<?php
include("header.php");
include("menu-mobile.php");
include("database.php");

$feedback = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']) && isset($_POST['message'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $feedback = "L'email n'est pas valide.";
    } else {
        if ($conn->connect_error) {
            $feedback = "Erreur de connexion à la base de données.";
        } else {
            $sql = "INSERT INTO DB_hellosportcoaching_MAIL (mail_hsc, message_mail_hsc) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                $feedback = "Erreur de préparation de la requête.";
            } else {
                $stmt->bind_param("ss", $email, $message);
                if ($stmt->execute()) {
                    $to = 'hellosportcoaching@gmail.com';
                    $subject = 'Mail provenant du site hellosportcoaching.com';
                    $headers = "From: $email\r\n";
                    $headers .= "Reply-To: $email\r\n";
                    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
                    $body = "Email: $email\nMessage: $message\n";

                    if (mail($to, $subject, $body, $headers)) {
                        $feedback = "Votre message a été envoyé avec succès.";
                    } else {
                        $feedback = "Erreur lors de l'envoi de l'email.";
                    }
                } else {
                    $feedback = "Erreur lors de l'enregistrement dans la base de données.";
                }
                $stmt->close();
            }
        }
        $conn->close();
    }
}
?>

<main>
    <section class="section-bg">
        <?php include("menu.php"); ?>
        <div class="pres">
            <h1 class="name">Elodie Colet</h1>
        </div>
        <section class="section-contact">
            <article class="article-contact-1">
                <h1 class="h1-contact">Contactez-moi</h1>
                <h2 class="h2-contact">Je me ferai un plaisir de répondre à vos objectifs.</h2>
                <p class="p-contact"><img src="Image/icon-de-telephone.png" alt="telephone" class="img-tel">06 07 57 05 17</p>
                <a class="a-mail" href="mailto:hellosportcoaching@gmail.com"><p class="p-contact-2"><img src="Image/icon-email.png" alt="email" class="img-tel">hellosportcoaching@gmail.com</p></a>
                <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d508547.7695913967!2d-52.758479478004354!3d5.258044002595986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8d120a7d73441cc1%3A0x9229a3707004d5e1!2sKourou%2097310%2C%20Guyane%20fran%C3%A7aise!5e0!3m2!1sfr!2sfr!4v1724955189412!5m2!1sfr!2sfr" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </article>
            <article class="article-contact-2">
                <h1 class="h1-contact">Formulaire de contact</h1>
                <?php if (!empty($feedback)): ?>
                    <p class="feedback"><?php echo $feedback; ?></p>
                <?php endif; ?>
                <form action="contact.php" method="POST">
                    <label for="email" class="lab-email">Votre Email : </label><br>
                    <input type="email" id="email" name="email" class="email" required><br><br>

                    <label for="message" class="lab-email">Votre Message :</label><br>
                    <textarea id="message" name="message" rows="4" cols="50" class="message" required></textarea><br><br>

                    <p class="bt"><button type="submit" class="boutton">Envoyer l'email</button></p>
                </form>
            </article>
        </section>
    </section>
    <?php include("section-3.php"); ?>
</main> 

<?php include("footer.php"); ?>
