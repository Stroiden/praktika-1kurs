<html>
  <head>
    <title>PHP</title>
  </head>
  <body>
    <?php
      echo time().'<br>';


      echo mktime(0, 0, 0, 1, 1, 2025).'<br>';


      echo mktime(0, 0, 0, 12, 31).'<br>';


      echo mktime(13, 12, 59, 3, 15, 2000).'<br>';


      $sec = time() - mktime(7, 23, 48, 2, 1);
      $min = $sec / 60;
      $hours = $sec / (60*60);
      $days = $sec / (60*60*24);
      echo $days.'<br>';

    
      echo date('Y-m-d H:i:s').'<br>';


      echo date('Y-m-d', mktime(0, 0, 0, 12, 31, 2013)).'<br>';
      echo date('d.m.Y', mktime(0, 0, 0, 12, 31, 2013)).'<br>';
      echo date('d.m.y H:i:s', mktime(12, 59, 59, 12, 31, 2013)).'<br>';


      echo date('d.m.Y', mktime(0, 0, 0, 2, 13, 2015)).'<br>';


      $week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thur', 'Fri', 'Sat');
      $day = date('w');
      echo $week[$day].'<br>';

      $day1 = date('w', mktime(0, 0, 0, 6, 6, 2016));
      echo $week[$day1].'<br>';

      $day2 = date('w', mktime(0,0,0,9,27,2002));
      echo $week[$day2].'<br>';

    

      $months = array('', 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
      $m = date('n');
      echo $months[$m].'<br>';


      echo date('t').'<br>';


      $date = '13.12.2013';
      $a = explode('.', $date);
      $n = mktime(0,0,0,$a[1], $a[0], $a[2]);
      $day = date('w', $n);
      echo $week[$day].'<br>';



      $date = '11.02.2015';
      $a = explode('.', $date);
      $n = mktime(0,0,0,$a[1], $a[0], $a[2]);
      $m = date('n', $n);
      echo $months[$m].'<br>';


      $date1 = '2020.06.25';
      $date2 = '2021.06.25';
      if($date1 > $date2){
        echo "$date1 > $date2".'<br>';
      }else{
        echo "$date1 < $date2".'<br>';
      }

      $date = '2025-12-31';
      echo date('d-m-Y',strtotime($date)).'<br>';


      $date = '2025-12-31T12:13:59';
      echo date('H:i:s d.m.Y',strtotime($date)).'<br>'; 


      $date = '2025-12-31';
      echo date('d.m.Y', strtotime("$date +2 day")).'<br>';
      echo date('d.m.Y', strtotime("$date +1 month 3 days")).'<br>';
      echo date('d.m.Y', strtotime("$date +1 year")).'<br>';


      $newyear = mktime(0, 0, 0, 1, 1, date('Y') + 1);
      $sec = $newyear - time();
      $days = floor($sec / (60*60*24));
      echo "До нового года : $days".'<br>';


      $year = 2021;
      $friday = 0;
      for($month = 1; $month <= 12; $month++){
        $days_in_month = date('t', mktime(0, 0, 0, $month, 1, $year));
        for($day = 1; $day <= $days_in_month; $day++){
            $d = date('w', mktime(0, 0, 0, $month, $day, $year));
            if($d == 5){
              if( date('d', mktime(0, 0, 0, $month, $day, $year)) == 13){
              $friday++; 
              $friday_date .= date('d.m.Y', mktime(0, 0, 0, $month, $day, $year)).'<br>';
              }
            }
        }
      }
        echo "В $year году 'пятниц 13-го' - $friday<br>
        Они выпадают на числа: $friday_date".'<br>';


      echo ( date('l jS \of F Y h:i:s A', strtotime('-100 years')) );
    ?>
  </body>
</html>