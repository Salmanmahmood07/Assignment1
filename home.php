<html>

<head>
<title> salman mahmood </title>
</head>

<body background="img/LyBT0h.jpg">

<table>
	
	<h1 align="center"> HOME </h1>

</table>

<table border="2" height="100" width="1335" bgcolor="green">

<tr align="center" bgcolor="blue" height="100" width="100">

<td><a href="home.php"><i> Home </i></a></td>
<td><a href="servicies.php"><i>Services</i></a></td>
<td><a href="Contactus.php"><i>Contact us</i></a></td>

</tr>
</table>
<marquee scrollamount="11">
<img height="400" width="500" src="img/My wedding Dream.jpg">
<img height="400" width="500" src="img/860451_luxurious-apartment-wallpapers_1920x1200_h.jpg">
<img height="400" width="500" src="img/43988139.jpg">
<img height="400" width="500" src="img/Art-Images-Apartment.jpg">
<img height="400" width="500" src="img/dfgbfgnfgnfn.png">
<img height="400" width="500" src="img/fb56483dee510577c97905893a943811.jpg">
<img height="400" width="500" src="img/fhfhjdb.png">
<img height="400" width="500" src="img/LyBT0h.jpg">
<img height="400" width="500" src="img/vhnfhng.png">

</marquee></br>

<table bgcolor="white">


<h1> PHP WORK<h1>
<?php

$firstname="salman";
$lastname="mahmood";
$phoneno="03046839008";
$email="salman@gmail.com";
$password=md5(00000);




echo 'Information</br>';
echo "$firstname
      $lastname<br>
      $phoneno<br>
      $email<br>
      $password";
?>

<h1> LOOPs</h1>

<br>

<H1>1-FOR LOOP</H1>
<?php

      for ($i=0; $i < 50 ; $i++) { 
      	
      	echo "Hello To The Future=$i";
      }
?>
</table>

<h1>2-WHILE LOOP</h1>
<?php

$i=0;

while ( $i< 80) {
	
	echo "Hello Buddy i am while loop=$i";

	$i++;
}

?>
<br>

<h1>3-DO WHILE LOOP</h1>

<?php

$i=0;

do {

echo "Hye....! Buddy i am DO WHILE LOOP=$i";
$i++;

} while ($i < 10) 
	
?>

</body>

</html>