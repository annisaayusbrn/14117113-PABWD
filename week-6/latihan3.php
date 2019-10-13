<?php
$nama=array("lanirne","aduh","qifuat","anevi","samid", "kifuat");
sort($nama);

$clength=count($nama);
for($x=$clength; $x>=0;$x--)
   {
   echo $nama[$x];
   echo "<br>";
   }
?>