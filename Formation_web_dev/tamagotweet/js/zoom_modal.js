// !!!!!!!!!!! POUR RECUP MES VARIABLES PHP EN JS JE SUIS OBLIGÉ D'UTILISER ECHO ET JSON_ENCODE !!!!!!!
var myImg = document.getElementById("tweetGo");

myImg.style.width= newtaille + "px"; //j'applique ma variable newtaille au style en HTML a myImg
myImg.style.height= newtaille + "px" ;
if(nbtweet==7){   //    sert pour afficher la gif du vomit
  myImg.src="img/hvomit.gif";
}else if(nbtweet==8){  // on reinitialise le compteur et l'image.
    reinit();
}


function reinit(){             // fonction reinitialisation et redimensionne l'image.
    myImg.src="../img/homer.gif"
    var currHeight = myImg.clientHeight;
    var currWidth = myImg.clientWidth;
    var debHeight = 270;
    var debWidth = 270;
    myImg.style.height= (debHeight) + "px"
    myImg.style.width= (debWidth) + "px"
    myImg.style.display="flex";
    myImg.style.justifyContent="center";
}

var modal = document.getElementById("myModal");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("modalclose")[0];




if (nbtweet ==5) {
    modal.style.display = "block";
}


// bouton qui permet de fermer le modal
function enleveModal() {
    modal.style.display = "none";
}



if(nbtweet==7){
  myImg.src="img/hvomit.gif";
}

