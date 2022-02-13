<?php 

$string  = "salom hammaga";
$number = 123431839.32;


echo strtolower($string)."<br>";
echo strtoupper($string)."<br>";
echo ucwords($string)."<br>";
echo number_format($number,'3','.',' ')."<br>";

echo str_pad($number, 20, 0,STR_PAD_LEFT)."<br>";


$length  = "
	salom
	<b>hammaga</b>
	qalesan,
";
echo $length."<br>";
echo nl2br($length)."<br>";
echo htmlentities($length)."<br>";
echo html_entity_decode(htmlentities($length))."<br>";



function sum(...$number){
	$sum = 0;
	foreach ($number as $key => $value) {
		$sum+=$value;
	}
	return $sum;
}


echo sum(1,3,4,6,3,6,9,3)."<br>";


$date = date('Y-d-m H:i:s');
echo $date;
echo print_r(date_parse_from_format('H:i:s d-m-Y', $date));

?>
