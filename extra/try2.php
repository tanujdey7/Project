<?php
$con = mysqli_connect("localhost","root","","predictor");
if(!$con)
     die("Connection error:- " + mysqli_connect_error());
$s1 = "select Symbol from s_c_details;";
$result = $con->query($s1);
$i = 1;
if($result->num_rows > 0)
        {
            while($row = mysqli_fetch_row($result))
            {
                $a1 = "../stock_data/" . $row[0] . ".csv";
                $rows1 = fopen($a1,'r');
                while($rec = fgetcsv($rows1))
                {
                    $r[1] = round($rec[3],3);
                    $r[2] = round($rec[4],3);
                    $r[3] = $rec[5]; 
                }
                //echo $r[1] . "<br>";
                $s2 = "UPDATE stock_details SET Open='" . $r[1] . "',Close='" . $r[2] . "',Volume='". $r[3]. "' WHERE Symbol='" . $row[0]. "';";
                $con->query($s2);
                echo $con->error . "<br>";
                $i++;
             }
        }
?>