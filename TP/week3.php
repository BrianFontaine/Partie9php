<?php $date = date($_GET['months']); 
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            { 
                if ($nameDays == 'Mon' && $i <= 21 && $i > 14)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }
                if ($nameDays == 'Tue')
                {
                    if ($i <= 20 )
                    {
                    $primaryDays = 14;
                        while ($w3 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w3++;
                        }
                    }
                }
                if ($nameDays == 'Wed')
                {
                    if ($i <= 19 )
                    {
                    $primaryDays = 13;
                        while ($w3 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w3++;
                        }
                    }
                }
                if ($nameDays == 'Thu')
                {
                    if ($i <= 18 )
                    {
                    $primaryDays = 12;
                        while ($w3 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w3++;
                        }
                    }
                }
                if ($nameDays == 'Fri')
                {
                    if ($i <= 17 )
                    {
                    $primaryDays = 11;
                        while ($w3 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w3++;
                        }
                    }
                }
                if ($nameDays == 'Sat')
                {
                    if ($i <= 18 )
                    {
                    $primaryDays = 10;
                        while ($w3 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w3++;
                        }
                    }
                }
                if ($nameDays == 'Sun')
                {
                    if ($i <= 17 )
                    {
                    $primaryDays = 9;
                        while ($w3 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w3++;
                        }
                    }
                }       
            } ?>
                </tr>
                <tr>
                    <?php $date = date($_GET['months']); 
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            { 
                if ($nameDays == 'Mon' && $i <= 28 && $i > 21)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }
                if ($nameDays == 'Tue')
                {
                    if ($i <= 20 )
                    {
                    $primaryDays = 21;
                        while ($w4 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w4++;
                        }
                    }
                }
                if ($nameDays == 'Wed')
                {
                    if ($i <= 19 )
                    {
                    $primaryDays = 20;
                        while ($w4 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w4++;
                        }
                    }
                }
                if ($nameDays == 'Thu')
                {
                    if ($i <= 18 )
                    {
                    $primaryDays = 19;
                        while ($w4 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w4++;
                        }
                    }
                }
                if ($nameDays == 'Fri')
                {
                    if ($i <= 17 )
                    {
                    $primaryDays = 18;
                        while ($w4 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w4++;
                        }
                    }
                }
                if ($nameDays == 'Sat')
                {
                    if ($i <= 16 )
                    {
                    $primaryDays = 17;
                        while ($w4 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w4++;
                        }
                    }
                }
                if ($nameDays == 'Sun')
                {
                    if ($i <= 15 )
                    {
                    $primaryDays = 16;
                        while ($w4 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w4++;
                        }
                    }
                }                
            } ?>