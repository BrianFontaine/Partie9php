<?php $date = date($_GET['months']); 
            for ($i = 1; $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']); $i++) 
            { 
                if ($nameDays == 'Mon' && $i <=cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) && $i > 28)
                {
                    echo $message = "<td class='text-center'>".$i."</td>";
                }
                if ($nameDays == 'Tue')
                {
                    if ($i >= 27 && $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) )
                    {
                    $primaryDays = 28;
                        if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 28)
                        {
                            while ($w5 <= 1 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 29)
                        {
                            while ($w5 <= 2 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                        else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) != 31)
                        {
                            while ($w5 <= 3 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else 
                        {
                            while ($w5 <= 4 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                    }
                }
                if ($nameDays == 'Wed')
                {
                    if ($i >= 26 && $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) )
                    {
                    $primaryDays = 27;
                        if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 28)
                        {
                            while ($w5 <= 2 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 29)
                        {
                            while ($w5 <= 3 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                        else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) != 31)
                        {
                            while ($w5 <= 4 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else 
                        {
                            while ($w5 <= 5 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                    }
                }
                if ($nameDays == 'Thu')
                {
                    if ($i >= 25 && $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) )
                    {
                    $primaryDays = 26;
                        if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 28)
                        {
                            while ($w5 <= 3 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 29)
                        {
                            while ($w5 <= 4 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                        else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) != 31)
                        {
                            while ($w5 <= 5 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else 
                        {
                            while ($w5 <= 6 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }                  
                    }
                }
                if ($nameDays == 'Fri')
                {
                    if ($i >= 24 && $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) )
                    {
                    $primaryDays = 25;
                        if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 28)
                        {
                            while ($w5 <= 4 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 29)
                        {
                            while ($w5 <= 5 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                        else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) != 31)
                        {
                            while ($w5 <= 6 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else 
                        {
                            while ($w5 <= 7 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                    }
                }
                if ($nameDays == 'Sat')
                {
                    if ($i >= 23 && $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) )
                    {
                    $primaryDays = 24;
                        if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 28)
                        {
                            while ($w5 <= 5 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 29)
                        {
                            while ($w5 <= 6 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                        else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 30)
                        {
                            while ($w5 <= 7 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else if (cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) )
                        {
                        while ($w5 <= 7) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                    }
                }
                if ($nameDays == 'Sun')
                {
                    if ($i >= 22 && $i <= cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) )
                    {
                    $primaryDays = 23;
                        if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 28)
                        {
                            while ($w5 <= 6 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 29)
                        {
                            while ($w5 <= 7 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                        else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 30)
                        {
                            while ($w5 <= 7 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                        else if ( cal_days_in_month(CAL_GREGORIAN, $_GET['months'], $_GET['years']) == 31)
                        {
                            while ($w5 <= 7 ) 
                            {
                                echo $message = "<td class='text-center'>".$primaryDays."</td>";
                                $primaryDays++;
                                $w5++;
                            }
                        }
                    }
                }     
            } ?>