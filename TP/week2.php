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
                if ($nameDays == 'Wed')
                {
                    if ($i <= 7)
                    {
                    $primaryDays = 6;
                        while ($w2 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w2++;
                        }
                    }
                }
                if ($nameDays == 'Thu')
                {
                    if ($i <= 11)
                    {
                    $primaryDays = 5;
                        while ($w2 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w2++;
                        }
                    }
                }
                if ($nameDays == 'Fri')
                {
                    if ($i <= 10)
                    {
                    $primaryDays = 4;
                        while ($w2 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w2++;
                        }
                    }
                }
                if ($nameDays == 'Sat')
                {
                    if ($i <= 9)
                    {
                    $primaryDays = 3;
                        while ($w2 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w2++;
                        }
                    }
                }
                if ($nameDays == 'Sun')
                {
                    if ($i <= 8)
                    {
                    $primaryDays = 2;
                        while ($w2 <= 7) 
                        {
                            echo $message = "<td class='text-center'>".$primaryDays."</td>";
                            $primaryDays++;
                            $w2++;
                        }
                    }
                }
            } ?>