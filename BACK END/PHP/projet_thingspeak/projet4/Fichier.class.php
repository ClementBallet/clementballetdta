<?php
    class fichier
    {
      private $_nomFichier;

      public function __construct($extention)
      {
        $date = date("dmY");
        $this ->_nomFichier = $date.$extention;
      }


      public function ecrireCSV($temp,$hum,$heure)
      {
        $fichier = fopen("CSV/".$this->_nomFichier,"a+");
        $lignes[] = array($temp,$hum,$heure);
        foreach($lignes as $ligne){
          fputcsv($fichier, $ligne, "\t");
        }
        fclose($fichier);
        if($fichier)
        {
         echo "fichier ecrit";
        }
        else
        {
         echo "erreur";
        }
      }

      public function lire()
      {
         $file = fopen($this->_nomFichier,"r+");
         while($ligne = fgets($file))
         {
            echo $ligne;
         }
         fclose($file);
      }

      public function ajoutIndex()
      {
              $indexFichier = fopen("CSV/indexFichier.txt","a+");
              while($ligne = fgets($indexFichier))
              {
                if($ligne = $this->_nomFichier)
                {
                  return;
                }
                else
                {
                }
              }
              fputs($indexFichier, $this->_nomFichier."\n");
              fclose($indexFichier);
              if($indexFichier)
              {
              echo "ajout";
              }
              else
              {
              echo "erreur";
              }
      }
    }
?>
