<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Test ckeditor</title>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.config.extraPlugins = 'autogrow';
    CKEDITOR.config.autoGrow_minHeight = 250;
    CKEDITOR.config.autoGrow_maxHeight = 600;
    </script>
  </head>
  <body>
    <h1>TEST CKEDITOR</h1>
    <div>
    <form action="test_ckeditor.php" method="post">
      <label>Ecrivez votre texte :</label>
      <br><br>
      <textarea name="editer" id="editer" rows="8" cols="40"></textarea>
      <script>CKEDITOR.replace( 'editer' );
      </script>
      <input type="submit" name="submit" value="Envoyer">
    </form>
    </div>

    <div>

      <?php
	  
	  
      if (isset($_POST['editer'])) { 
      	echo htmlspecialchars($_POST['editer']);
      }
      
      ?>

    </div>
  </body>
</html>
