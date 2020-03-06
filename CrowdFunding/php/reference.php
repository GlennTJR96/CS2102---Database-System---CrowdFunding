<?php
$link = pg_connect("host=localhost port=5432 dbname=postgres user=postgres password=password");
$query = " SELECT * FROM normaluser;";
$res = pg_query($link,$query);
#print_r($link);
#$res1 = pg_get_result($link);

#echo print_r($res1);


echo "<table>";

while ($row = pg_fetch_row($res)) {
  echo "Name: $row[0]  Password: $row[1]   email: $row[2]    activation: $row[3]";
  echo "<br />\n";
}


?>

<html>
	<head> 
		<title> woohoo </title>
	</head>

	<body>
		<h1> testing. . . </h1>
	</body>
	
</html>
