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

        <main>
            HOME
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
