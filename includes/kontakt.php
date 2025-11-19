<?php include "headerMain.php"?>
<video autoplay muted loop id="background-video">
  <source src="../images/monlive.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

<?php
// ===== ODESLÁNÍ EMAILU =====
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // TVŮJ EMAIL ZDE ↓↓↓
    $to = "bohm.kuba@seznam.cz";

    $subject = "Nová zpráva z kontaktního formuláře";
    $headers = "From: " . $email . "\r\n" .
               "Reply-To: " . $email . "\r\n";

    $body = "Jméno: $name\nEmail: $email\n\nZpráva:\n$message";

    mail($to, $subject, $body, $headers);

    $sent = true; // pro zobrazení hlášky
}
?>


<div class="contactAll">

            <div class="contact-form">

                <?php if (!empty($sent)): ?>
                    <div class="success">Zpráva byla úspěšně odeslána!</div>
                <?php endif; ?>

                <h2>Kontaktujte nás</h2>

                <form id="contactForm" method="POST">                   
                             <div class="nameIn">    <input  type="text" name="name" placeholder="Vaše jméno" required></div>
                                <input class="emailIn" type="email" name="email" placeholder="Váš e-mail" required>
                                <textarea name="message" placeholder="Zpráva" required></textarea>
                                <button type="submit">Odeslat</button>
                </form>
            </div>


</div>


<script>
// Po odeslání smaže obsah formuláře
document.getElementById("contactForm").addEventListener("submit", function() {
    setTimeout(() => this.reset(), 200);
});
</script>



<?php include "footerMain.php"?>