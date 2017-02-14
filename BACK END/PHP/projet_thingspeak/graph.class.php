<?php

/**
 * Nous créons un classe "Graph" qui va prendre les données du
 * fichier CSV et les retranscrire en page HTML.
 * Une page HTML est créée par jour et chaque page portera
 * donc la date à laquelle ont été relevé les données (température,
 * humidité et l'heure). Exemple : 01122016.html pour les données récupérées par
 * le NodeMCU le 01 décembre 2016.
 * Ces données seront ensuite transformées en graphique pour être visible sur le
 * site.
 */


class Graph {
  private $_nomGraph;

  public function __construct($donnees) {
    $this->_nomGraph = $donnees;
  }

  public function CreerGraph($CSV) {
    $file = fopen("\Graph".$this->CSV."html","a+");
    $copie = fopen("\CSV".$this->CSV."CSV","r+");
  }
}


?>
