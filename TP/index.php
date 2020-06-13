<?php 
    include '../header.php';
    setlocale(LC_TIME, 'fr_FR');
    date_default_timezone_set('Europe/Paris');
    
    $annee = $_GET['years'];
    $mois = $_GET['months'];
    $date = date($_GET['months']); 
    $timestamp = mktime(0, 0, 0, $mois,1,$annee); //Donne le timestamp correspondant à cette date
    
    $nameDays = date('D', $timestamp);
    echo $nameDays;

    $months = 
    [
    '1' => 'Janvier',
    '2' => 'Février',
    '3' => 'Mars',
    '4' => 'Avril',
    '5' => 'Mai',
    '6' => 'Juin',
    '7' => 'Juillet',
    '8' => 'Août',
    '9' => 'Septembre',
    '10' => 'Octobre',
    '11' => 'Novembre',
    '12' => 'Décembre'
    ];
    $message ='';
    ?>

<div class="contenue">
    <form action="index.php" method="GET" class="col-md-6 ml-2 row" id="form1">
    <select class="form-control form-control-sm col-3 mt-2" name="months" value="months" id="months">
    <?php 
    foreach ($months as $boby => $key) 
    {
        echo '<option value="'.$boby.'" name="'.$key.'">'.$key.'</option>';
    }
    ?>
    </select>
    <select class="form-control form-control-sm col-3 mt-2 ml-2" name="years" value="Years" id="years">
    <?php 
    for ($years=1970; $years < 2021 ; $years++)  
    {
        echo '<option value="'.$years.'">'.$years.'</option>';    
    }
?>
</select>
<input class="mt-2 col-3 ml-2" type="submit" value="S'organiser" name="submit">
</form>

<?php if (!empty($_GET['months']) && !empty($_GET['years'])) { ?>
<h1 id="he">Vous avez séléctioner : <?=$_GET['months'].' '.$_GET['years'] ?></h1>
<div class="contenue-table">
    <table id="calendar">
        <thead>
            <td>Lundi</td>
            <td>Mardi</td>
            <td>Mercredi</td>
            <td>Jeudi</td>
            <td>Vendredi</td>
            <td>Samedi</td>
            <td>Dimanche</td>
        </thead>
        <tbody>
            <tr>
            <?php
            $w1 = 1;
            $w2 = 1;
            
                for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            {
                if ($nameDays == 'Mon' && $i <= 7)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }
                if ($nameDays == 'Tue')
                {
                    if ($i <= 1)
                    {
                        echo $message = "<td class='text-center'></td>";
                    }
                    else if ($i <= 7  &&$i >= 6 )
                    {
                        while ($w1 <= 6) 
                        {
                            echo $message = "<td class='text-center'>".$w1."</td>";
                            $w1++;
                        }
                    }
                }
                if ($nameDays == 'Wed')
                {
                    if ($i <= 2)
                    {
                        echo $message = "<td class='text-center'></td>";
                    }
                    else if ($i <= 7  &&$i >= 5 )
                    {
                        while ($w1 <= 5) 
                        {
                            echo $message = "<td class='text-center'>".$w1."</td>";
                            $w1++;
                        }
                    }
                } 
                if ($nameDays == 'Thu')
                {
                    if ($i <= 3)
                    {
                        echo $message = "<td class='text-center'></td>";
                    }
                    else if ($i <= 7  &&$i >= 4 )
                    {
                        while ($w1 <= 4) 
                        {
                            echo $message = "<td class='text-center'>".$w1."</td>";
                            $w1++;
                        }
                    }
                }
                if ($nameDays == 'Fri')
                {
                    if ($i <= 4)
                    {
                        echo $message = "<td class='text-center'></td>";
                    }
                    else if ($i <= 7  &&$i >= 3 )
                    {
                        while ($w1 <= 3) 
                        {
                            echo $message = "<td class='text-center'>".$w1."</td>";
                            $w1++;
                        }
                    }
                }
                if ($nameDays == 'Sat')
                {
                    if ($i <= 5)
                    {
                        echo $message = "<td class='text-center'></td>";
                    }
                    else if ($i <= 7  &&$i >= 2 )
                    {
                        while ($w1 <= 2) 
                        {
                            echo $message = "<td class='text-center'>".$w1."</td>";
                            $w1++;
                        }
                    }
                } 
                if ($nameDays == 'Sun')
                {
                    if ($i <= 6)
                    {
                        echo $message = "<td class='text-center'></td>";
                    }
                    else if ($i <= 7  &&$i >= 1 )
                    {
                        while ($w1 <= 1) 
                        {
                            echo $message = "<td class='text-center'>".$w1."</td>";
                            $w1++;
                        }
                    }
                }   
            }  
            ?>
            </tr>
            <tr>
            <?php $date = date($_GET['months']); 
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            { 
                if ($nameDays == 'Mon' && $i <= 14 && $i > 7)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }
                if ($nameDays == 'Tue')
                {
                    if ($i <= 7)
                    {
                    $w2s = 7;
                        while ($w2 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$w2s."</td>";
                            $w2s++;
                            $w2++;
                        }
                    }
                }
            } ?>
            </tr>
            <tr>
           <?php $date = date($_GET['months']); 
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            { 
                if ($i <= 21 && $i > 14)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }         
            } ?>
            </tr>
            <tr>
           <?php $date = date($_GET['months']); 
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            { 
                if ($i <= 28 && $i > 21)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }         
            } ?>
            </tr>
            <tr>
           <?php $date = date($_GET['months']); 
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            { 
                if ($i <=cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) && $i > 28)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }     
            } ?>
            </tr>
        </tbody>
    </table>
</div>
</div>
<?php }?>
<?php
    include '../footer.php';
?>