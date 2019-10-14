        <!--=============================================================================================================== -->
        <!--========================== page : listes des stages    ========================= -->
        <!--========================== parametre : rien ================= --> 
        <!--========================== acteur  :   secretariat =================== --> 
        <!--========================== traitement  : on peut modifer un stage ou le supprimer ou ajouter un nouveau stage ========== -->  
        <!--========================== Redirection  :  modiferstage,supprimer stage    ======= -->                          
        <!-- =============================================================================================================== --> 

    <!--=============================================================================================================== -->
    <!--=========================================== php  ============================================= -->
	<!-- =============================================================================================================== -->
    
    <?php
    
    require('connexion.php');

/*        if(isset($_GET["message"]))
    {
      echo '<script language="javascript">';
      echo 'alert("'.$_GET["message"].'")';
      echo '</script>';

    }
*/


    /*<!--=============================================================================================================== -->
    <!--===========================================  srcipt botton supprimer  ============================================= -->
    <!-- =============================================================================================================== -->*/

if(isset($_POST['btn_DeleteStage'])){
    
    $id=$_POST["idStage"];

    $bdd->query('DELETE FROM stage WHERE id='.$id);
    
    
}

    /*<!--=============================================================================================================== -->
    <!--===========================================  srcipt botton ajouter  ============================================= -->
    <!-- =============================================================================================================== -->*/

    if(isset($_GET['btn_ajouterStage'])){
        
        $theme=$_GET['theme'];
        $debut=$_GET['debut'];
        $fin=$_GET['fin'];
        $nbplace=$_GET['nbplace'];
        $desc=$_GET['description'];

        require('connexion.php');
            
        $stmt = $bdd->prepare("INSERT INTO stage (theme,debut,fin,description,nbplace) VALUES (:theme, :debut, :fin, :desc,:nbplace)");
            
        $stmt->bindParam(':theme', $theme);
        $stmt->bindParam(':debut', $debut);
        $stmt->bindParam(':nbplace', $nbplace);
        $stmt->bindParam(':fin', $fin);
        $stmt->bindParam(':desc', $desc);

        $stmt->execute();

    }
    
    ?>

    <!--=============================================================================================================== -->
    <!--=========================================== fin php   ============================================= -->
	<!-- =============================================================================================================== --> 

    
    <!--=============================================================================================================== -->
    <!--=========================================== Head  ============================================= -->
	<!-- =============================================================================================================== -->

   
    <!--=============================================================================================================== -->
    <!--=========================================== FIN Head  ============================================= -->
	<!-- =============================================================================================================== -->  
    

    
<body>
    
   
    
   	<!--=============================================================================================================== -->
    <!--=========================================== Center  ============================================= -->
	<!-- =============================================================================================================== -->

    <br>
    <br>


    
    <div class="container" id="restaurant-menu">

            <div class="section-title text-center">
              <h2>Listes des Stages </h2> 
          </div>
            
            <!--===================================================================== -->
		    <!--==================== Form Recherche  ============= -->
			<!-- ==================================================================== -->

				<div class="input-group">

					<input type="text" class="form-control" style="width: 350px"
						placeholder="theme stage" id="motcle"  
						autofocus="autofocus"   />

					<button class="btn btn-default" type="button" onclick="afficherListeStages()" >
						<i class="glyphicon glyphicon-search"></i>
					</button>
                    
                     <!--===================================================================== -->
                    <!--====================  Button ajouter Publication ============= -->
                    <!-- ==================================================================== -->

                    <button type="button" class="btn btn-info" data-toggle="modal"
                        data-target="#myModal" style="margin-left: 20px;" >
                        <span class="glyphicon glyphicon-plus"> </span> 
                    </button>


				</div>

			<!--===================================================================== -->
		    <!--==================== FIN  Form Recherche  ============= -->
			<!-- ==================================================================== -->

			<br />

			<!--===================================================================== -->
		    <!--====================  Table Liste stages  ============= -->
			<!-- ==================================================================== -->

			<table class="table table-bordrered" width="50%" >

				<!--===================================================================== -->
			    <!--====================  Tete du  Table Liste stages  ============= -->
				<!-- ==================================================================== -->

							<tr>
								<th >id</th>
								<th >theme</th>
								<th>Date Debut</th>
								<th >Date fin </th>
                                <th >nombre de place disponible</th>
								<th >Description</th>
                                <th>Action</th>

							</tr>
                
                 <!--===================================================================== -->
                <!--============== contenu du table : sera remplir avec ajax   ========== -->
                <!-- ==================================================================== -->
                  <tbody id="ContenuListeStages">

                  </tbody>

            </table>

            <!--===================================================================== -->
            <!--==================== FIN  table   ============= -->
            <!-- ==================================================================== -->


    </div>
    
        <!--===================================================================== -->
		<!--==================== FIN Liste des stages ============= -->
		<!-- ==================================================================== -->

		<!--===================================================================== -->
		<!--==================== Formulaire Ajouter stage  ============= -->
		<!-- ==================================================================== -->
    
    <div class="modal" id="myModal" role="dialog">
        <form method="get">

			<div class="modal-dialog">

				<div class="modal-content">

					<div class="modal-header">

					<!--===================================================================== -->
                    <!--==================== botton Ajouter stage  ============= -->
                    <!-- ==================================================================== -->    

						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Ajouter stage</h4>

					</div>

					
                    <!--===================================================================== -->
                    <!--==================== contenue du modal  ============= -->
                    <!-- ==================================================================== -->    

					<div class="modal-body">

						

                    <!--===================================================================== -->
                    <!--==================== theme et nb de place  ============= -->
                    <!-- ==================================================================== -->    

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="titre" class="form-control-label">theme :</label> 
                                    <input  type="text" class="form-control" id="theme" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="titre" class="form-control-label">nombre de place :</label> 
                                     <input  type="number" class="form-control" id="nbplace" />
                                </div>
                            </div>
					<!--===================================================================== -->
                    <!--==================== date debut et date fin du stage   ============= -->
                    <!-- ==================================================================== -->    

                            <div class="form-row">
                            
                                <div class="form-group col-md-6">
                                    <label for="date">Date Debut</label> 
                                    <input required="required" type="date" class="form-control" 
                                    id="debut" />
                                 </div>
                                
                                <div class="form-group col-md-6">
                                    <label for="date">Date Fin</label> 
                                    <input required="required" type="date" class="form-control" 
                                    id="fin" />
                                 </div>
                                
                            </div>

                    <!--===================================================================== -->
                    <!--==================== Description   ============= -->
                    <!-- ==================================================================== -->    
                            

							<div class="form-group">
								<label for="contenu" class="form-control-label">Description :</label>
								<textarea  class="form-control" id="description"></textarea>
							</div>

						

					</div>

				    <!--===================================================================== -->
                    <!--==================== Annuler et Enregistrer ============= -->
                    <!-- ==================================================================== -->    

					<div class="modal-footer">

						<button type="button" class="btn btn-secondary"
							    data-dismiss="modal">Annuler</button>

						<button type="submit" class="btn btn-primary" data-dismiss="modal" name="btn_ajouterStage"
							    >Enregistrer</button>

					</div>

				</div>

			</div>
            </form>

		</div>

		<!--===================================================================== -->
		<!--====================  FIN Formulaire Ajouter stage  ============= -->
		<!-- ==================================================================== -->


    <!--===================================================================== -->
    <!--====================  Modal Suppression  ============= -->
    <!-- ==================================================================== -->

      <div class="modal" tabindex="-1" id="supp_stage" role="dialog">
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
                    <input type="hidden" name="idStage" id="idStage">
                    <p>Etes-vous sur de vouloir supprimer cette Satge?</p>
                </div>

                <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                     <input type="submit" class="btn btn-primary" value="supprimer" name="btn_DeleteStage"/> 
              </div>
          </form>
      
        </div>
        </div>
        </div>

    <!--===================================================================== -->
    <!--====================  Fin Modal Suppression  ============= -->
    <!-- ==================================================================== -->

	<!--=============================================================================================================== -->
    <!--===========================================  FIN Center  ============================================= -->
	<!-- =============================================================================================================== -->
    
     <!--=============================================================================================================== -->
    <!--=========================================== javascript  ============================================= -->
	<!-- =============================================================================================================== -->
    
    <script language="JavaScript">
        

        /*<!--===================================================================== -->
        <!--=== fonction qui return un object request xml  ======== -->
        <!-- ==================================================================== --> */   
        function getRequestObject()
       {
           var req = null; 

           if (window.XMLHttpRequest)
            {
                req = new XMLHttpRequest();

            } 
            else if (window.ActiveXObject) 
            {
                try {
                    req = new ActiveXObject("Msxml2.XMLHTTP");
                } catch (e)
                {
                    try {
                        req = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (e) {}
                }
            }

            return req;
       }
        

        /*<!--===================================================================== -->
        <!--=== fonction remplir table liste des stages  selon mot cle de rechercher (theme ) ======== -->
        <!-- ==================================================================== --> */   
        
        function afficherListeStages()
        {
            
            var req = getRequestObject(); 
            var them=document.getElementById("motcle").value; 

            req.onreadystatechange = function()
            { 
               
                if(req.readyState == 4)
                {
                    if(req.status == 200)
                    {
                        
                        var table=document.getElementById("ContenuListeStages");
                        table.innerHTML=req.responseText;	 // stocker le resultat (liste des stages ) dans la table 

                    }	
                    else	
                    {
                        alert(req.responseText);
                    }	
                } 
            }; 


            req.open("GET", "admin/script_listeSatgesBytheme.php?theme="+them, true); 
            req.send(null);
            
            
            
           
        }
        /*<!--===================================================================== -->
        <!--=== Script permet charger l'id qui sera utile lors la suppression  ======== -->
        <!-- ==================================================================== --> */  

        function chargerid(id){

            document.getElementById("idStage").value=id;

          }
        
        /*<!--===================================================================== -->
        <!--=== afficher date actuel dans les champs date debut et date fin  ======== -->
        <!-- ==================================================================== --> */ 

        function RemplirDatePardefault()
      {
            var date = new Date();
            var day = date.getDate();
            var month = date.getMonth() + 1;
            var year = date.getFullYear();

            if (month < 10) month = "0" + month;
            if (day < 10) day = "0" + day;

            var today = year + "-" + month + "-" + day;       
            document.getElementById("debut").value = today;
            document.getElementById("fin").value = today;
      }
        
        
        /*<!--===================================================================== -->
        <!--=== chargement du page   ======== -->
        <!-- ==================================================================== --> */ 

         window.onload=function()
         {
             afficherListeStages(); // remplir liste par default lors de chargement du page par tous les stages du BD
             
             RemplirDatePardefault();
         }
        
    </script>
    
    
    <!--=============================================================================================================== -->
    <!--=========================================== FIN javascript  ============================================= -->
	<!-- =============================================================================================================== -->
    
