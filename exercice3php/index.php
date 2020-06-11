<?php  
    setlocale(LC_TIME, 'fr_FR');
    include '../header.php';         // 11/10/12
?>
<p><?= strftime('%A %d %B %Y');?></p>

<?php
    include '../footer.php';
?>