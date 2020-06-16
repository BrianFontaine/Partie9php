<?php       
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