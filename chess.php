<?php
    $cellNum=2;
    $rowNum=1;
    $color=['#FFFFFF','#000000'];
    $color1='#FFFFFF';
    $color2='#000000';
    
     //Thariq//

    echo '<table border="1">';
    for($row=1;$row<=6;$row++){
        echo "<tr>";
        for($col=1;$col<=6;$col++) {
            
            $total=$row*$col;
            
            if(($row+$col) % 2 == 0) {
                echo "<td height=50px width=50px bgcolor=#FFFFFF align='center'>$total</td>";
            } else {
                echo "<td height=50px width=50px bgcolor=#000000 style='color:white; text-align:center;'>$total</td>";
            }
        }
        echo "</tr>";
    }
    echo '</table>';
?>
