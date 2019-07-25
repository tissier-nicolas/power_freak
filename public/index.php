<!doctype html>
<html lang="en">

    <head>
        <?php include 'partials/meta.php';  ?>
        <title>PW | Home</title>
    </head>

    <body>

      <div class="wrapper">

        <?php include 'partials/header.php';  ?>
        <!-- FIN HEADER -->

        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->
        <!-- DEBUT MAIN -->

        <main class="page-main">

            <div class="contenu-1">
              <div class="section-1" style="background-image: url('assets/images/new_picture_4.png')">
                  <img src="assets/images/new_picture_4.png" alt="" width="300" />
              </div>

              <div class="section-2">
                <h2><em class="thin">UN AN APRES SA SORTIE,</em><br/>
                  POWER FREAK<br/>
                  <em class="color">SE FAIT UN NOUVEL <br/
                    >ECO-LOOK !</em>
                </h2>

                <button class="btn-shine"><a href="recyclage.php"><span>En savoir plus</span></a></button>

              </div>



            </div>

            <!-- Fin contenu-1 -->

            <div class="contenu-2">
              <div class="section-3">
                <h2>2 GOUTS <br/>
                </br/><em>100%</em> NATURELS :</h2>
                    <img src="assets/images/new_picture_2.png" alt="" width="1000" />
              </div>

              <div class="section-4">
               <img src="assets/images/new_picture_5.png" alt="" width="1000" />
                 <h3>PAMPLEMOUSSE ROSE <br />ET FRAMBOISE</h3>
              </div>
            </div>

            <!-- Fin contenu-2 -->

            <div class="contenu-3">
              <div class="section-5">
 <img src="assets/images/new_picture_6.png" alt="" width="1000" />
              </div>

              <div class="section-6">
                <h2>UNE BOISSON<br/></h2>
                <h2> ENERGISANTE</h2>
              </div>
            </div>

            <!-- Fin contenu-3 -->

        </main>

        <!-- FIN MAIN -->
        <!-- XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX -->

        <?php include 'partials/footer.php';  ?>
        <!-- FIN FOOTER -->

      </div>

      <script type="text/javascript" charset="utf-8">
          $(window).load(function() {
            $('.flexslider').flexslider();
          });
          $( function() {
            $( "#accordion" ).accordion();
          } );
      </script>

    </body>
</html>
