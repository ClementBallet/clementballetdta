<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test PHP</title>
  </head>
  <body>
   <form class="" action="test.php" method="post">
      <label for="">Devinez le nombre entre 0 et 100.</label>
      <br />
      <br />
      <input type="number" name="nombre_choisi" value="" min="0" max="100">
      <input type="submit" value="Valider" />
    </form>
  </body>
</html>

    <?php
      $nombre_defini = 26;

       if ($_POST['nombre_choisi'] < $nombre_defini) {
        echo "Trop petit";
        }
       elseif ($_POST['nombre_choisi'] > $nombre_defini) {
          echo "Trop grand";
          }
       elseif($_POST['nombre_choisi'] === '') {
            echo "Veuillez remplir le champs.";
            }
       else {
         echo "<br />Bravo, tu l'as trouvé !! C'était " . $nombre_defini . ".";
       }





    ?>
