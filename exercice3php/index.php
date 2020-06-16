<?php  
    setlocale(LC_TIME, 'fr_FR');
    include '../header.php';         
?>
<p><?= strftime('%A %d %B %Y');?></p>

<?php
    include '../footer.php';
?>