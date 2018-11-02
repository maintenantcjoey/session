<?php
session_start();
require 'inc/head.php';
?>


<ul>
    <li>Cookies PecanNuts: <?php echo $_SESSION['nuts']?></li>
    <li>Cookies ChocolayteChips: <?php echo $_SESSION['chips']?></li>
    <li>Cookies Chocolate: <?php echo $_SESSION['chocolate']?></li>
    <li>Cookies M&M's: <?php echo $_SESSION['mm']?></li>
</ul>




<?php require 'inc/foot.php'; ?>
