// Fonction qui gère l'affichage alterné des symboles X et O
var state = 0;
function morpion(id) {
   if(state === 0){
    $(id).replaceWith("O");
    state = 1;
   } else {
     $(id).replaceWith("X");
     state = 0;
     }
}

// Fonction qui affiche un symbole dans la case où l'on a cliqué
function checkvelocity(){
  var tableaudejeu = new Array();
  for(var i = 1 ; i < 10 ; i++){
    if($('#morpion-button'+i).text() == ""){
      tableaudejeu.push('#morpion-button'+i);
    }
  }
  return tableaudejeu;
}
checkvelocity();

// Fonction qui raffraichit le morpion
function refresh(){
  $('#refresh').on('click', function() {
    location.reload('#morpion-tableau');
  });
}
refresh();
