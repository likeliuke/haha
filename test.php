<?php
//Fill up array with names
$a[]="Anna";
$a[]="Brittany";
$a[]="Cinderella";
$a[]="Diana";
$a[]="Eva";
$a[]="Fiona";
$a[]="Gunda";
$a[]="Hege";
$a[]="Inga";
$a[]="Johanna";
$a[]="Kitty";
$a[]="Linda";
$a[]="Nina";
$a[]="Ophelia";
$a[]="Petunia";
$a[]="Amanda";
$a[]="Raquel";
$a[]="Cindy";
$a[]="Doris";
$a[]="Eve";
$a[]="Evita";
$a[]="Sunniva";
$a[]="Tove";
$a[]="Unni";
$a[]="Violet";
$a[]="Liza";
$a[]="Elizabeth";
$a[]="Ellen";
$a[]="Wenche";
$a[]="Vicky";
//get the q parameter from URL
$phone=$_GET["phone"];
//lookup all hints from array if length of q>0
if(strlen($phone) > 0)
{
	$hint = "";
	for($i=0;$i<count($a);$i++)
	{
		if(strtolower($phone)==strtolower(substr($a[$i],0,strlen($phone))))
		{
			if($hint == "")
			{
				$hint = $a[$i];
			}else{
				$hint = $hint.",".$a[$i];
			}
		}
	}
}
//Set output to "no suggestion" if no hint were found
//or to the correct values
if($hint == "")
{
	$aa = "no suggestion";
}else{
	$aa = $hint;
}
//output the response
echo $aa;
?>