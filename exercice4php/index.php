<?php  
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    include '../header.php';         // 11/10/12
?>
<p><?= strftime('%A %d %B %Y, %H:%M');?></p>

<?php
    include '../footer.php';
?>