<center>
<table>
    <th>Référence</th>
    <th>Désignation</th>
    <th>Prix unitaire</th>
    <th>Quantité</th>
    <th>Prix </th>

<?php

function getColor($tbl,$l){
    if($tbl[$l][3]<=2){
        return "indianred";
    }
    if($tbl[$l][3]>=10){
        return "greenyellow";
    }
    return "deepskyblue";
}

$ref = $_GET['row'];
$length = count($ref);
$columns = array_column($ref, '3');
$columnPU= array_column($ref,'2');
array_multisort($columns, SORT_NUMERIC, $ref);


$total = 0;

for ($l=0;$l<$length;$l++){
        echo "<tr style='background-color: ".getColor($ref,$l)."'> ";
            for ($col=0;$col<4;$col++){
                echo "<td class='colors'>".$ref[$l][$col]."</td>";
            }
    $sumItem = $ref[$l][2]*$ref[$l][3];
    $total += $sumItem;
    echo '<td>'.$sumItem.'</td>';
    echo "</tr>";

}
echo '
    <tr>
        <td colspan="3">Prix Total: </td>
        <td class="sum" colspan="2">'.$total.' MAD</td>
    </tr>
';

?>
</table>
</center>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
    }

     td,  th {
        border: 1px solid #ddd;
        padding: 8px;
    }



     th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: black;
        color: white;
    }
     .sum{
         color: red;
         text-align: right;
         font-weight: bold;
     }


</style>