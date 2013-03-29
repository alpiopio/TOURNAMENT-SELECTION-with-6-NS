<?php
for ($i=0;$i<10;$i++){/*random nilai individu*/
	$cromosom[($i+1)] = round(mt_rand(0,15),2);
}
echo "<b>nilai populasi = ".implode(',',$cromosom)."</b><br>";/*menampilkan nilai individu*/
echo "<br><b>POPULASI</b>";
for ($i=0;$i<10;$i++){/*menampilkan nilai individu menurun*/
	echo "<br>individu[".($i+1)."] pada index ke-".($i+1)." dengan nilai = ".$cromosom[($i+1)];
}
$x = 1;
echo "<br><br><b>FITNES</b>";
foreach($cromosom as $fitness){
	$in = $x++;
	$final_fitness = (15*$fitness)-pow($fitness,2);
	$array_fitness[$in] = (15*$fitness)-pow($fitness,2);
	echo "<br>individu[".$in."] pada index ke-".$in." dengan fitness = ".$final_fitness;
}

$randommember = array_rand($array_fitness,6);/*random member turnamen*/
for ($i=0;$i<6;$i++){
	$member[$randommember[$i]] = $array_fitness[$randommember[$i]];/*mengambil member turnamen ke array*/
}
echo "<br><br><b>MEMBER / individu terpilih untuk di turnamenkan</b>";
$i = 1;
foreach($member as $key=>$value){/*menampilkan member sekaligus menjadikan array multi dimensi*/
	echo "<br>member[".$i++."] pada index ke ".$key." => ".$value;
	$newmember[] = array($key=>$value);
}

echo "<br>";

$temp = 0;
foreach($newmember as $key=>$value){/*seleksi individu*/
	foreach($value as $keys=>$values){
		if($temp < $values){
			$temp = $values;
			$x = $keys;
		}
	}
}
echo "<br>individu terpilih = ".$temp." pada index ke-".$x;/*menampilkan individu terpilih*/
?>
