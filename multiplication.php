<?php
require_once ('head.php');
require_once ('navmenu.php');
?>


<div>
    <table>
        <?php
            for ($i=1; $i<=9; $i++){?>
                <tr>
              <?php for ($j=1; $j<=9; $j++){?>

                      <td><?php echo $i*$j?></td>


            <?php
              }?>
                </tr>
            <?php }
        ?>
    </table>
</div>
