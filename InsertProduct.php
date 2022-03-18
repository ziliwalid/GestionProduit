<?php

$produitForm= $_GET['numP'];
$dateP = $_GET['dateP'];
?>
<form action="AffichageProd.php" method="get">
<fieldset>
    <center>
        <h2>Date d'achat: <?php echo $dateP?></h2>
        <h3>Numéro de Produit: <?php echo $produitForm?></h3>
    </center>

<?php
for($i=1;$i<=$produitForm;$i++){
    echo '
    <fieldset>
        <legend>Produit'.$i.'</legend>    
        <table>
            <tr>
                <td>Référence: </td>
                <td><input type="text" name="row['.($i-1).'][0]"></td>
            </tr>
            <tr>
                <td>Désignation: </td>
                <td><input type="text" name="row['.($i-1).'][1]"></td>
            </tr>
            <tr>
                <td>Prix Unitaire: </td>
                <td><input type="text" name="row['.($i-1).'][2]"></td>
            </tr>
            <tr>
                <td>Quantité achetée : </td>
                <td><input type="text" name="row['.($i-1).'][3]"></td>
            </tr>
            
        </table>
    </fieldset> <br>
    ';
}
?>
   <center> <input type="submit"> <input type="reset"> </center>
</fieldset>

</form>


<style>
    fieldset{
        border-radius: 5px;
    }
    legend{
        color: aqua;
    }
</style>


