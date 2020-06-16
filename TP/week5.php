<?php
                if ($nameDays == 'Sat')
                {
                if (cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 31)
                        {
                        while ($w6 <= 1) 
                            {
                                echo $message = "<td class='text-center'>31</td>";
                                $primaryDays++;
                                $w6++;
                            }
                        }
                    }
                    if ($nameDays == 'Sun')
                    {
                        if ($i >= 29 && cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 30)
                        {
                            while ($w6 <= 1)
                            {
                                echo $message = "<td class='text-center'>30</td>";
                                echo $message = "<td class='text-center'>31</td>";
                                $w6++;
                            }
                        }
                        if ($i >= 29 && cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 31)
                        {
                        while ($w6 <= 1) 
                        {
                            echo $message = "<td class='text-center'>30</td>";
                            echo $message = "<td class='text-center'>31</td>";
                            $w6++;
                        }
                }
            }
        ?> 