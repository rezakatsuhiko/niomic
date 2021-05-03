<?php
$ballpoint = 1750;
$uang = 5000;
$lusin= 12;
$beli = $ballpoint * $lusin;
$bayar = $uang *5;
echo $kembali = $beli - $uang;   
?>  

<?php
$ceban = 10000;
$goceng = 5000;
$noban= 2000;
$mainan= 55000;
$duit = ($ceban*3) + ($goceng*4) + ($noban*5);

echo $beli = $duit - $mainan;
   
?>

<?php
$ceban = 10000;
$goceng = 5000;
$noban= 2000;
$mainan= 55000;
$duit = ($ceban*3) + ($goceng*4) + ($noban*5);

echo $beli = $duit - $mainan;
   
?> 

<?php
for($a=1;$a<82;$a++){
    if($a<68){
        $bayar=$a+=10000;
        if($a=68){
        $bayar2=$a+=30100;
        }
    }
}
echo $total = $bayar + $bayar2;
   
?> 