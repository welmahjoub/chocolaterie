
      <?php
        // ouvrir le fichier en lecture seule
    $handle = fopen("admin/monfic.txt", "r");
  if ($handle) { 
       $cpt = 0;    
     $tableau = array(); // creer un tableau contentant les données lus 
     while (($buffer = fgets($handle, 4096)) !== false){ // récupérer chaque ligne du fichier et la mettre dans une varible 
         $tableau[$cpt] = $buffer; //  remplier le tableau avec les données récupérées
          $cpt ++;
       } 
    
  
  if (!feof($handle)) { // si c'est la fin du fichier 
        echo "Erreur: fgets() a échoué\n";
    }
    fclose($handle); //fermer le fichier 
  
  

  
}
 //mettre chaque case du tableau dans une varible 
       $i=0;
    while($i <= 8){
      $var = "var".$i;
      $$var = $tableau[$i];
    $i++;
    }
 

?>


    <div class="container" id="about">

            <div class="section-title text-center">
              <h2>Parametrage  </h2> 
          </div>

              <form id="paramétrage" method="post" action="admin/FichierTxt.php">


                <!--===================================================================== -->
                  <!--====================  Nom et adresse :   ============= -->
                <!-- ==================================================================== -->

                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="nomprenom"> Nom</label> 
                    <input type="nom" class="form-control" id="nom" name="nom"  class="form-control" value="<?php print $var0; ?>"
                    oninvalid="setCustomValidity('nom  obligatoires')"
                    oninput="setCustomValidity('')"  />
                  </div>
                              
                  <div class="form-group col-md-6">
                    <label for="nomprenom"> adresse</label> 
                    <input type="nom" class="form-control" class="form-control" id="adresse" name="adresse" value="<?php print $var1; ?>"/>
                  </div>

                </div>

                <!--===================================================================== -->
                  <!--====================  tel  et portable  :   ============= -->
                <!-- ==================================================================== -->

                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="tél">tél :</label>
                    <input type="tel" class="form-control" id="tel" name="tel" value="<?php print $var2; ?>" 
                     />
                  </div>
                              
                  <div class="form-group col-md-6">
                    <label for="portable">portable :</label>
                    <input type="tel" class="form-control" id="portable" name="portable" value="<?php print $var3; ?>" />
                  </div>

                </div>

                <!--===================================================================== -->
                  <!--====================  code postal   et ville   :   ============= -->
                <!-- ==================================================================== -->

                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="code postal">code postal :</label>
                    <input type="text" class="form-control" id="codepostal" name="codepostal" value="<?php print $var4; ?>" 
                     />
                  </div>
                              
                  <div class="form-group col-md-6">
                    <label for="ville">ville :</label>
                    <input type="text" class="form-control" id="ville" name="ville" value="<?php print $var5; ?>">
                  </div>

                </div>

                <!--===================================================================== -->
                  <!--====================  pays   et logo   :   ============= -->
                <!-- ==================================================================== -->

                <div class="form-row">

                  <div class="form-group col-md-6">
                    <label for="pays">pays :</label>
                    <input type="text" class="form-control" id="pays" name="pays" value="<?php print $var6; ?>" 
                     />
                  </div>
                              
                  <div class="form-group col-md-6">
                   <label for="logo">logo :</label>
                    <input type="text" class="form-control" id="logo" name="logo" value="<?php print $var7; ?>" />
                  </div>

                </div>                

                 <!--===================================================================== -->
                  <!--====================  horraire d'ouverture   ============= -->
                <!-- ==================================================================== -->

                <div class="form-row">

                  <div class="form-group col-md-12">
                    <label for="">horaires d'ouverture :</label>
                    <input type="text" class="form-control" id="HD" name="HD" value="<?php print $var8; ?>" />
                  </div>
                            
                </div> 

                 <!--===================================================================== -->
                  <!--====================  btn enregistrer    ============= -->
                <!-- ==================================================================== -->

                  <div class="form-row"> 

                  <div class="text-center">
                  <button type="submit" class="btn btn-info">Valider</button>
                  </div>
                  <br>

                </div>

            </form>

</div >

