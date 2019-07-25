<!doctype html>
<html lang="en">

  <head>
      <?php include 'partials/meta.php';  ?>
      <title>PW | Contact</title>
  </head>

  <body class="text-center">

    <?php include 'partials/header.php';  ?>
    <!-- FIN HEADER -->

    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
    <!-- DEBUT MAIN -->

    <main role="main">

        <section class="intro-contact">
          <div class="inner">
            <h2>CONTACT</h2>
          </div>
          <h2>Vous avez des questions pour Power Freak ? </h2>

          <p>
            Il suffit de poser votre question et de nous laisser votre email.
          </p>

          <form action="/ma-page-de-traitement" method="post">
              <div>
                  <label for="name">Nom :</label>
                  <input type="text" id="name" name="user_name">
              </div>
              <div>
                  <label for="mail">e-mail :</label>
                  <input type="email" id="mail" name="user_mail">
              </div>
              <div>
                  <label for="msg">Question :</label>
                  <textarea id="msg" name="user_message"></textarea>
              </div>
          </form>

          <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>


<p>
  Note à ajouter : pour réduire votre empreinte carbone, pensez à vider votre boite email de temps à autre ;)  // L’équipe Power Freak.
</p>

        </section>

    </main>

    <!-- FIN MAIN -->
    <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

    <?php include 'partials/footer.php';  ?>
    <!-- FIN FOOTER -->

  </body>

</html>
