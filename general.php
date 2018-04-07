<html>
<head>
<title>LICENCE MANAGEMENT SYSTEM</title>
<style>
h1{
	color:"#000080";
	background-color: blue;
	font-size:40px;
	width:1150px;
	display:block;
	text-align: center;
	text-decoration: none;
	padding: 65px;
}
</style>
</head>
<body>
	<center>
		<h1>LICENSE MANAGEMENT SYSTEM</h1>
		<h2>WELCOME</h2>
	<h4>GENERAL DETAILS </h4>
	<form name="gen" method="post">
		<table>
			<tr><th>NAME:</th><th><input type="text" name="name"></th></tr>
			<tr><th>DOB:</th><th><input type="date" name="dob"></th></tr>
			<tr><th>AGE:</th><th><input type="text" name="age"></th></tr>
			<tr><th>GENDER:</th><th><input type="radio" name="gen" value="male">MALE
				<input type="radio" name="gen" value="female">FEMALE
				<input type="radio" name="gen" value="others">OTHERS</th></tr>
			<tr><th>COMMUNICATION ADDRESS:</th><th><input type="textarea" name="caddress"></th></tr>
            <tr><th>PERMANENT ADDRESS:</th><th><input type="textarea" name="paddress"></th></tr>
            <tr><th>DISTRICT:</th><th><select name="drop"><br>
            <option value="--------SELECT--------">--------SELECT--------</option><br>
            <option value="ALAPPUZHA">ALAPPUZHA</option><br>
            <option value="ERNAKULAM">ERNAKULAM</option><br>
            <option value="KASARGOD">KASARGOD</option><br>
	      		<option value="KANNUR">KANNUR</option><br>
			      <option value="PALAKKAD">PALAKKAD</option><br>
			      <option value="WAYANAD">WAYANAD</option><br>
			      <option value="KOZHIKODE">KOZHIKODE</option><br>
			      <option value="THRISSUR">THRISSUR</option><br>
			      <option value="MALAPURAM">MALAPURAM</option><br>
			      <option value="IDUKKI">IDUKKI</option><br>
			      <option value="KOTTAYAM">KOTTAYAM</option><br>
			      <option value="PATHANAMTHITTA">PATHANAMTHITTA</option><br>
			      <option value="KOLLAM">KOLLAM</option><br>
			      <option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option><br></select></th></tr>
		    <tr><th>PHONE NUMBER:</th><th><input type="text" name="phone"></th></tr>
		    <tr><th>AADHAR NUMBER:</th><th><input type="text" name="aadhar"></th></tr>
		    <tr><th>BLOOD GROUP:</th><th><select name="drop1"><br>
		    <option value="----SELECT----">----SELECT----</option><br>
		    <option value="O+">O+</option><br>
            <option value="O-">O-</option><br>
            <option value="A+">A+</option><br>
			<option value="A-">A-</option><br>
			<option value="B+">B+</option><br>
			<option value="B-">B-</option><br>
			<option value="AB+">AB+</option><br>
			<option value="AB-">AB-</option><br></select></th></tr>
			<tr><th></th><th><input type="submit" name="save" value="SAVE">
			<input type="submit" name="next" value="NEXT"></th></tr>
</center>
</form>
</table>
</body>
</html>
<?php
mysql_connect('localhost','root','');
mysql_select_db('myproject');
session_start();
if(isset($_SESSION['u']))
{}
if(isset($_POST['save']))
{
$date=$_POST['dob'];
$age=$_POST['age'];
$gen=$_POST['gen'];
$cadd=$_POST['caddress'];
$padd=$_POST['paddress'];
$ph=$_POST['phone'];
$dr=$_POST['drop'];
$bl=$_POST['drop1'];
$que = mysql_query("INSERT INTO gentable VALUES('','','','','$date','$age','$gen','$cadd','$padd','$dr','$ph','','$bl')");
if($que>0)
{
	echo"inserted";
}
else {
	echo "error";
}
} ?>
