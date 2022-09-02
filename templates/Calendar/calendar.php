<?php
class Calendar {
        private $year; //current year
        private $month; //current month
        private $start_weekday; //current month's first day
        private $days; //how many days in current month

        function __construct(){
            $this->year=isset($_GET["year"]) ? $_GET["year"] : date("Y");
            $this->month=isset($_GET["month"]) ? $_GET["month"] : date("m");
            
            $this->start_weekday=date("w", mktime(0, 0, 0, $this->month, 1, $this->year));
            $this->days=date("t", mktime(0, 0, 0, $this->month, 1, $this->year));
        }

        function out(){
            echo '<table align="center">';
            $this->chageDate("index.php");
            $this->weeksList();
            $this->daysList();
            echo '</table>';
        }

        private function weeksList(){
            $week=array('Sun','Mon','Tue','Wed','Thur','Fri','Sat');

            echo '<tr>';
            for($i=0; $i<count($week); $i++)
                echo '<th class="fontb">'.$week[$i].'</th>';

            echo '</tr>';
        }

        private function daysList(){
            echo '<tr>';
            for($j=0; $j<$this->start_weekday; $j++)
                echo '<td> </td>';


            for($k=1; $k<=$this->days; $k++){
                $j++;
                if($k==date('d'))
                    echo '<td class="fontb">'.$k.'</td>';
                else
                    echo '<td>'.$k.'</td>';

                if($j%7==0)
                    echo '</tr><tr>';
                
            }

            while($j%7!==0){
                echo '<td> </td>';
                $j++;
            }

            echo '</tr>';
        }

        private function prevYear($year, $month){
            $year=$year-1;
            
            if($year < 1970)
                $year = 1970;

            return "year={$year}&month={$month}";    
        }


        private function prevMonth($year, $month){
            if($month == 1) {
                $year = $year -1;
        
                if($year < 1970)
                    $year = 1970;

                $month=12;
            }else{
                $month--;
            }

            return "year={$year}&month={$month}";    
        }


        private function nextYear($year, $month){
            $year = $year + 1;

            if($year > 2038)
                $year = 2038;

            return "year={$year}&month={$month}";    
        }


        private function nextMonth($year, $month){
            if($month==12){
                $year++;

                if($year > 2038)
                    $year=2038;

                $month=1;
            }else{
                $month++;
            }
            

            return "year={$year}&month={$month}";    
        }

        private function chageDate($url=""){
            echo '<tr>';
            echo '<td><a href="?'.$this->prevYear($this->year, $this->month).'">'.'<<'.'</a></td>';
            echo '<td><a href="?'.$this->prevMonth($this->year, $this->month).'">'.'<'.'</a></td>';
            echo '<td colspan="3">';
            echo '<form>';
            echo '<select name="year" onchange="window.location=\'';
            for($sy=1970; $sy <= 2038; $sy++){
                $selected = ($sy==$this->year) ? "selected" : "";
                echo '<option '.$selected.' value="'.$sy.'">'.$sy.'</option>';
            }
            echo '</select>';
            echo '<select name="month"  onchange="window.location=\'';
            for($sm=1; $sm<=12; $sm++){
                $selected1 = ($sm==$this->month) ? "selected" : "";
                echo '<option '.$selected1.' value="'.$sm.'">'.$sm.'</option>';
            }
            echo '</select>';
            echo '</form>';    
            echo '</td>';


            echo '<td><a href="?'.$this->nextYear($this->year, $this->month).'">'.'>>'.'</a></td>';
            echo '<td><a href="?'.$this->nextMonth($this->year, $this->month).'">'.'>'.'</a></td>';
            echo '</tr>';
        }

    }