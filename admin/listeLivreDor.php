        <!--=============================================================================================================== -->
        <!--========================== page : liste des commentaire   ========================= -->
        <!--========================== parametre : rien ================= --> 
        <!--========================== acteur  :  secretariat =================== --> 
        <!--========================== traitement  : afficher tous les commentaire dans un table avec possibilte d'examiner un commanter ou le supprimer  ========== -->  
        <!--========================== Redirection  :  examiner commentaire  ======= -->                          
        <!-- =============================================================================================================== --> 

    <!--=============================================================================================================== -->
    <!--=========================================== php  ============================================= -->
	   <!-- =============================================================================================================== -->
    
    <?php
    
    require('connexion.php');


    /*<!--=============================================================================================================== -->
    <!--===========================================  srcipt botton supprimer  ============================================= -->
    <!-- =============================================================================================================== -->*/

    if(isset($_POST['btn_DeleteCommentaire'])){
    
    $id=$_POST["idCommantaire"];


    $bdd->query('DELETE FROM livredor WHERE id='.$id);
    
    
    }
    
    
    ?>

    <!--=============================================================================================================== -->
    <!--=========================================== fin php   ============================================= -->
	<!-- =============================================================================================================== --> 



    <br>
    <br>

<div id="team">
  <div class="container">
    <div id="row">
      
      <div class="section-title text-center">
       <h2>Commentaires</h2>
      </div>
        <form name="formulaire" >
            


            <!--===================================================================== -->
            <!--==================== table : listes des livre dor    ============= -->
            <!-- ==================================================================== -->

            <table class="table table-bordrered" width="50%" >

                <!--===================================================================== -->
                <!--==================== en tete du table   ============= -->
                <!-- ==================================================================== -->

                    <tr>
                      <th >Nom </th>
                      <th >message</th>
                      <th>date</th>
                      <th >etat</th>
                      <th >Reponse</th>
                      <th>Action</th>

                    </tr>
     


                <!--===================================================================== -->
                <!--============== contenu du table : sera remplir avec ajax   ========== -->
                <!-- ==================================================================== -->
                  <tbody id="ContenuListeLivredor">
                        <?php
                            
                            $reponse = $bdd->query('SELECT * from livredor '); 

                            while ($donnees = $reponse->fetch())
                            {
                                echo " <tr>";
                                echo "<th scope='row'>". $donnees["nom"]."</th>";
                                echo "<td>".$donnees["message"]. " </td>";
                                echo "<td>".$donnees["date"]. " </td>";
                                echo "<td>".$donnees["etat"]. " </td>";
                                echo "<td>".$donnees["reponse"]. " </td>";

                               /*<!--===================================================================== -->
                              <!--=== Lien Modifier ou examnier  Commentaire    ======== -->
                              <!-- ==================================================================== --> */                                
                                echo "<td> <a href='admin/examinerLivreDor.php?id=".$donnees['id']."'  class='btn btn-info' > <span class='glyphicon glyphicon-edit'> </span> </a>"; ?>

                              <!--===================================================================== -->
                              <!--=== lien supprimer    ======== -->
                              <!-- ==================================================================== -->                                  

                                 <a href="#" 
                                         onclick="chargerid('<?= $donnees['id'] ?>')"  class='btn btn-danger' data-toggle="modal" data-target="#supp_Commentaire" > 
                                       <span class='glyphicon glyphicon-remove'> </span>
                                     </a>
                                </td>

                              <?php   echo " </tr>";
                            }
                         ?>
            </tbody>

            </table>

            <!--===================================================================== -->
            <!--==================== FIN  table   ============= -->
            <!-- ==================================================================== -->


        </form>

    </div>
  </div>
</div>

    <!--===================================================================== -->
    <!--====================  Modal Suppression  ============= -->
    <!-- ==================================================================== -->

      <div class="modal" tabindex="-1" id="supp_Commentaire" role="dialog">
      <div class="modal-dialog" role="document">
      <div class="modal-content">

      <div class="modal-header">
        <h5 class="modal-title text-center">Suppression</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> 

      <form method="POST">
            <div class="modal-body">
                <input type="hidden" name="idCommantaire" id="idCommantaire">
                <p>Etes-vous sur de vouloir supprimer cette Commentaire?</p>
            </div>

            <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                 <input type="submit" class="btn btn-primary" value="supprimer" name="btn_DeleteCommentaire"/> 
          </div>
      </form>
      
        </div>
        </div>
        </div>

    <!--===================================================================== -->
    <!--====================  Fin Modal Suppression  ============= -->
    <!-- ==================================================================== -->
    
<script type="text/javascript">

        /*<!--===================================================================== -->
        <!--=== Script permet charger l'id qui sera utile lors la suppression  ======== -->
        <!-- ==================================================================== --> */  

        function chargerid(id){

            document.getElementById("idCommantaire").value=id;

          }

</script>
        
	<!--=============================================================================================================== -->
    <!--===========================================  FIN Center  ============================================= -->
	<!-- =============================================================================================================== -->
