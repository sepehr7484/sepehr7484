<?php
$connect = mysqli_connect('localhost','sajjad','123456','sajjad1');
$query="SELECT * FROM sajjad2";
$result =mysqli_query($connect,$query);
$row =mysqli_fetch_array($result);
echo '
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>آزمایشگاه نرم افزار</title>

	<style type="text/css">
	body{
		background-color: #000000;
	}
	#header{
		background-color:#8A2BE2 ;
		box-shadow: 3px 3px 10px  10px #7FFF00;
		width: 100%;
		height: 150px;
	    text-align: center; 
	    border-radius: 20px; 
	}
	p{
		font-size: 35px; 
	}
	#stage{
		background-color: #000080;
		width: 100%;
		height:500px;
		box-shadow: 3px 10px  20px 8px #FF0000;
		border-radius: 20px;
	}
	#stagein{
      background-color: #111111;
      width: 35%;
      height:450px;
      border-radius: 20px;
      padding-bottom: 0px;
      color:yellow;
	}
	

	</style>

</head>
<body>


<div id="header">
<marquee><p>آزمایشگاه مهندسی نرم افزار</p></marquee>
<progress ></progress>	
</div>

<br>
<div id="stage">
	<br>
<center>
<div id="stagein">
	<br>
	<br>
	';
echo '<h3>stid:</h3>',  $row[0];
echo '<h3>name:</h3>',  $row[1];
echo '<h3>family:</h3>',$row[2];
echo '<h3>Adress:</h3>',$row[3];

echo '

</div>
</center>
 </div>


</body>
</html>
';
?>
