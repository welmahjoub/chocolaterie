


<?php

if(isset($_GET['theme'])){
    
   $theme=$_GET["theme"];
   $theme.="%";
    
    require('connexion.php');
    
    $reponse = $bdd->query("SELECT * from stage where theme like'".$theme."'" ); 

    while ($donnees = $reponse->fetch())
    {
        
        echo " <tr>";
        echo "<th scope='row'>". $donnees["id"]."</th>";
        echo "<td>".$donnees["theme"]. " </td>";
        echo "<td>".$donnees["debut"]. " </td>";
        echo "<td>".$donnees["fin"]. " </td>";
        echo "<td>".$donnees["nbplace"]. " </td>";
        echo "<td>".$donnees["description"]. " </td>";
        
        // lien modifier stages
        echo "<td> <a href='admin/ModifierStage.php?id=".$donnees['id']."' class='btn btn-info'  > <span class='glyphicon glyphicon-edit'> </span> </a>";
        
        // lien supprimer stage avec confirmation avant la suppreession 
        ?>

          <a href="#" 
                onclick="chargerid('<?= $donnees['id'] ?>')"    class='btn btn-danger' data-toggle="modal" data-target="#supp_stage"> 
               <span class='glyphicon glyphicon-remove'> </span>
          </a>
        </td>
        
        <?php
       
        echo " </tr>";
    }
    
   
}

?>

