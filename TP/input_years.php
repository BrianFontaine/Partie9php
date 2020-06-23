<?php 
    foreach ($months as $boby => $key) 
    {
        echo '<option value="'.$boby.'" name="'.$key.'">'.$key.'</option>';
    }
    ?>
        </select>
        <select class="form-control form-control-sm col-3 mt-2 ml-2" name="years" value="Years" id="years">
            <?php 
    for ($years=1500; $years < 2100 ; $years++)  
    {
        echo '<option value="'.$years.'">'.$years.'</option>';    
    }
?>