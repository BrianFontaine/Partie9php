<?php 

    
    $anciennedate = "16-05-2016";
    $datedujour = date("d-m-Y");
    $jmoins = ((strtotime($datedujour)) - strtotime($anciennedate));
    $jmoins = round($jmoins / (60*60*24));
    
    include '../header.php';         // 11/10/12
?>
<p><?= "La différence entre les 2 dates est de $jmoins jours";?></p>

<?php
    include '../footer.php';
?>