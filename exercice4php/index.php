<?php  
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    include '../header.php';         // 11/10/12
?>
<p><?= time();?></p>
<p><?= mktime(0,0,0,12,22,1978);?></p>

<?php
    include '../footer.php';
?>