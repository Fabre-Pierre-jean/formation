<html>
  <head>
    <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="arenestyle.css">
  </head>
    <body>
    <div class="headtitle" > <img src="pokewar-1.png" alt=""> </div>
    <div class="container">


       <div class="arene"> <img src="arene_psy-1.png" alt="">
      </div>


      <div id="pokemonback"><?php echo $pokemonselected->getBackimg() ?></div>



      <div id="pokemonface"><?php echo $pokemonopponent->getFrontimg();?></div>


       <div class="cadreattack"> <img src="main.gif" alt="">
             <div class="attackbutton">
                <form method="post" action="main.php">
                  <div class="none">
                  <input type="text" name="pokemon" value='<?php echo $_POST['pokemon']; ?> '>
                  <input type="text" name="dresseur" value='<?php echo $_POST['dresseur'];?>'></div>

                   <input type="submit" name="attackbutton" value="<?php echo $attacks[0]; ?>" >
                   <input type="submit" name="attackbutton" value="<?php echo $attacks[1]; ?>">
                   <input type="submit" name="attackbutton" value="<?php echo $attacks[2]; ?>">
                   <input type="submit" name="attackbutton" value="<?php echo $attacks[3]; ?>">
                </form>
            </div>
      </div>

      <form action="exitcombat.php"  method="post">
              <input type="submit" name="exit" value="sortir du combat">
              </form>
            
   </div>


    </body>

</html>
