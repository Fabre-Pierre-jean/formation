var arme_anime=document.getElementById("arme_anime")
var progressif = 1


function start(){
    myImg.onclick=mechantvie;
    setInterval("mechantdegat()",800);
    setInterval("zoomin()",800);
    cliqueMechant2()
    anime_hache()
}


function anime_hache(){
    arme_change.src="images/armes/armes_animé/1ere arme.gif"
}

function anime_pistolet(){
    arme_change.src="images/armes/armes_animé/pistolet.gif"
}

function anime_pompe(){
    arme_change.src="images/armes/armes_animé/1ere arme.gif"
}

function anime_ak47(){
    arme_change.src="images/armes/armes_animé/1ere arme.gif"
}

function anime_bazooka(){
    arme_change.src="images/armes/armes_animé/1ere arme.gif"
}
//armes icones

var iconeArme=document.getElementById("iconeArme")

function affichageArme(){
    iconeArme.src="images/armes/1ere arme.png"
    iconeArme.style.width="150px"; 
    iconeArme.style.height="70px"; 
}
		
affichageArme()

//PLAYER

var mechant2 = document.getElementById('mechant2');
var gain = document.getElementById('playerGain');
var score = document.getElementById('playerScore');
var comptGain = 0;
var comptScore = -1;
var VieMechant =  100;
var mechantMort = 10;
var degatBasique = 2

function cliqueMechant2(){
	comptScore++;
    afficheScore();
	/*--------------------Score pour chaqueClique--------------------------*/

	/*--------------------Gain pour chaqueClique--------------------------*/
	if(VieMechant >= 5){
        VieMechant = VieMechant-degatBasique;
		comptGain = comptGain + progressif;
        afficheGain();
	}/*-------------------Gain apres avoir tuer le mechant---------------*/
	else if (VieMechant == 5){
		afficheGain();
		VieMechant = 100;
    }    
    /*-----------------------------------------------------------------*/
	/*--------------------Pour afficher les equipements-------------*/
	if(comptGain >= acheterPistolet ){
		pistolet.style.opacity = "1";
	}
	if(comptGain >= acheterPompe){
		pompe.style.opacity = "1";
	}
	if(comptGain >= acheterAk47){
		ak47.style.opacity = "1";
	}
	if(comptGain >= acheterBazooka){
		bazooka.style.opacity = "1";
	}
}

//armes
var pistolet = document.getElementById('pistolet');
var pompe = document.getElementById('pompe');
var ak47 = document.getElementById('ak47');
var bazooka = document.getElementById('bazooka');
var arme_change = document.getElementById("arme_change");
var acheterPistolet = 5;/*--------------Initialisation des coûts des armes----------------*/
var acheterPompe = 10;/*--------------Initialisation des coûts des armes----------------*/
var acheterAk47 = 15;/*--------------Initialisation des coûts des armes----------------*/
var acheterBazooka= 20;/*--------------Initialisation des coûts des armes----------------*/
var audio =document.getElementById("audio")

function arme1(){
	if(comptGain < acheterPistolet){
		alert('Vous n\'avez pas asser d argent');
        pistolet.style.opacity="0.2";
	}
	else if(comptGain > acheterPistolet){
        comptGain = comptGain - acheterPistolet;
        comptGain = progressif++
        degatBasique = 5
        afficheVieMechant()
        afficheGain();
        iconeArme.src="images/armes/armes_animé/pistolet.gif";
        arme_change.src="images/armes/armes_animé/pistolet.gif";
	}
}

/*----------------------fonction pour pouvoir gagner les armes---------------------------------*/
function arme2(){
	if(comptGain < acheterPompe){
		alert('Vous n avez pas asser d argent');
	}
	else if(comptGain > acheterPompe){
        comptGain = comptGain - acheterPompe;
        progressif = 5
        comptGain = progressif
        degatBasique = 10
        afficheVieMechant()
        afficheGain();
        iconeArme.src="images/armes/armes_animé/pompe.gif";
        arme_change.src="images/armes/armes_animé/pompe.gif";
	}
}

/*----------------------fonction pour pouvoir gagner les armes---------------------------------*/
function arme3(){
	if(comptGain < acheterAk47){
		alert('Vous n avez pas asser d argent');
	}
	else if(comptGain > acheterAk47){
        comptGain = comptGain - acheterAk47;
        progressif = 10
        comptGain = progressif;
        degatBasique = 15
        afficheVieMechant()
        afficheGain();
        iconeArme.src="images/armes/mitraillette_icones.gif";
        arme_change.src="images/armes/ak.png";
       
	}
}

/*----------------------fonction pour pouvoir gagner les armes---------------------------------*/
function arme4(){
	if(comptGain < acheterBazooka){
		alert('Vous n avez pas asser d argent');
	}
	else if(comptGain > acheterBazooka){
		comptGain = comptGain - acheterBazooka;
        progressif = 5
        comptGain = progressif
        degatBasique = 20
        afficheVieMechant()
        afficheGain();
        iconeArme.src="images/armes/bazooka.gif";
        arme_change.src="images/armes/bazooka-2.png";
		
	}
}/*----------------------FIN fonction pour pouvoir gagner les armes---------------------------------*/

		
//Functions gerant affichage

function afficheVieMechant(){
    affichageviemechant.innerHTML = VieMechant+ " %";
}

function afficheNotreVie(){
    affichagevieplayer.innerHTML = player_vie+ " %";
}

function afficheScore(){
    score.innerHTML = comptScore;
}

function afficheGain(){
    gain.innerHTML = comptGain;
}

function afficheNbVie(){
    nbVie.innerHTML=nbrVie;
}

//Mechant normal

var affichagevieplayer=document.getElementById('playerVie');
var affichageviemechant=document.getElementById('affichageviemechant');
var mechant_degat = 10;
var player_vie = 100;
var VieMechant = 100;


function mechantvie() 
{
	
	if(VieMechant<5)
	{
        reinit()
        afficheVieMechant()
		comptGain = parseInt(comptGain) + parseInt(mechantMort);
	}
	else
	{
        afficheVieMechant()
        cliqueMechant2()
    }
}

function restart(){
    mort_img.src="";
    reinit2();
}

var nbVie=document.getElementById("nbVie");
nbrVie=3;
afficheNbVie()

var mort_img = document.getElementById("mort_img") //Image de notre mort
var armes=document.getElementById("armes")

function mechantdegat()
{
    
    if(player_vie==0)
    {
        
        afficheNotreVie();
        player_vie = 0;
        mort_img.src="images/mort ou fin/mort_nous.gif";
        myImg.style.display="none";
        mort_img.onclick=restart;
        arme_change.src=""
	armes.style.display="none"
    }
    else
    {
        afficheNotreVie();
        player_vie = player_vie-5;
        
    }
}


//avancement mechant

var myImg = document.getElementById("mechantImg");
function zoomin(){

    var currHeight = myImg.clientHeight;
    var currWidth = myImg.clientWidth;
    var debHeight = 252;
    var debWidth = 200;
		if(currHeight >= 500){ 
            reinit()
        
		} else{
            myImg.style.height = (currHeight + 15) + "px";
            myImg.style.width = (currWidth + 10) + "px";
		} 
}

function reinit(){
    
    
    
    VieMechant = 100;
    var currHeight = myImg.clientHeight;
    var currWidth = myImg.clientWidth;
    var debHeight = 252;
    var debWidth = 200;
        myImg.style.height= (debHeight) + "px"
        myImg.style.width= (debWidth) + "px"
        myImg.style.display="flex";
        myImg.style.justifyContent="center";
        myImg.style.width= "40px";
        myImg.style.height= "45px" ;  
        changePerso()
        vieMechant = 100;
        afficheVieMechant();
    
}

function reinit2(){
    if (nbrVie > 0){
    nbrVie--;
    afficheNbVie();

    player_vie = 100;
    VieMechant = 100;
    var currHeight = myImg.clientHeight;
    var currWidth = myImg.clientWidth;
    var debHeight = 252;
    var debWidth = 200;
        myImg.style.height= (debHeight) + "px"
        myImg.style.width= (debWidth) + "px"
        myImg.style.display="flex";
        myImg.style.justifyContent="center";
        myImg.style.width= "40px";
        myImg.style.height= "45px" ;  
        changePerso()
        vieMechant = 100;
        afficheVieMechant()
}
    else if (nbrVie == 0){
        alert("GAME OVER")//trouver image GAME OVER
    }

}

function getRandomMechant(){
      var nbre = '123456';
      var image = 'images/mechant_boss/';
      for (var z = 0; z < 1; z++ ) {
          image += nbre[Math.floor(Math.random() * 6)] + ".gif";
      }
      return image;
}
  

function changePerso(){
      myImg.src=getRandomMechant();
}

