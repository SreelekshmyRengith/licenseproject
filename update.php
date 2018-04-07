<html>
<head>
<title>LICENCE MANAGEMENT SYSTEM</title>
<style>
h1{
  color:"#000080";
  background-color:blue;
  font-size:40px;
  width:1180.5px;
  display:block;
  text-align: center;
  text-decoration: none;
  padding:40px;
  border:100px;
  background-image: url(head.jpg);
}
table.one{
	background-color:grey;
  font-size:20px;
  width:300px;
  display:block;
  text-align: left;
  border-color: black;
  border-width:1px;
  border-style: solid;
  padding:90px;
	padding-left: 20px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-right: 80px;
	}
table.two{
	background-color:grey;
  font-size:20px;
  width:300px;
  display:block;
  text-align: left;
  border-color: black;
  border-width:1px;
  border-style: solid;
	margin-bottom: 100px;
  padding:90px;
	padding-left: 20px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-right: 20px;
}
table.three{
	background-color:grey;
  font-size:20px;
  width:300px;
  display:block;
  text-align: left;
	line-height: 1.0;
	direction: ltr;
	border-color: black;
  border-width:1px;
  border-style: solid;
	padding:90px;
	padding-left: 20px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-right: 60px;
}
table.four{
	background-color:grey;
  font-size:20px;
  width:300px;
  display:block;
  text-align: left;
  border-color: black;
  border-width:1px;
  border-style: solid;
  padding:90px;
	padding-left: 20px;
	padding-top: 10px;
	padding-bottom: 10px;
	padding-right: 60px;
}
th{
	font-size: 15px;
	text-align: left;
	padding: 15px;
}
tr:hover {background-color: #BC4D35  ;}
</style>
</head>
<body background="./pic/logo.jpg">
			<h1>LICENSE MANAGEMENT SYSTEM</h1>
	<center>	<h2>WELCOME</h2> <br>
		<form name="gen" method="post">
    <table class="one">
			<h3>GENERAL DETAILS </h3><br>
			<tr><th>NAME:</th><th><input type="text" name="name"><br></th></tr>
			<tr><th>DOB:</th><th><input type="date" name="dob"><br></th></tr>
			<tr><th>AGE:</th><th><input type="text" name="age"><br></th></tr>
			<tr><th>GENDER:</th><th><input type="radio" name="gen" value="male">MALE
			<input type="radio" name="gen" value="female">FEMALE
			<input type="radio" name="gen" value="others">OTHERS<br></th></tr>
			<tr><th>COMMUNICATION ADDRESS:</th><th><input type="textarea" name="caddress"><br></th></tr>
            <tr><th>PERMANENT ADDRESS:</th><th><input type="textarea" name="paddress"><br></th></tr>
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
			        <option value="THIRUVANANTHAPURAM">THIRUVANANTHAPURAM</option><br></select><br></th></tr>
		    <tr><th>PHONE NUMBER:</th><th><input type="text" name="phone"><br></th></tr>
		    <tr><th>AADHAR NUMBER:</th><th><input type="text" name="aadhar"><br></th></tr>
		    <tr><th>BLOOD GROUP:</th><th><select name="drop"><br>
		        <option value="----SELECT----">----SELECT----</option><br>
		        <option value="O+">O+</option><br>
            <option value="O-">O-</option><br>
            <option value="A+">A+</option><br>
			      <option value="A-">A-</option><br>
			      <option value="B+">B+</option><br>
			      <option value="B-">B-</option><br>
			      <option value="AB+">AB+</option><br>
			      <option value="AB-">AB-</option><br></select><br></th></tr>
		  </table>
			<table class="two">
			<h3>LICENSE DETAILS </h3><br>
			<tr><th>LICENSE NUMBER:</th><th><input type="text" name="lnumber"><br></th></tr>
			<tr><th>DATE OF ISSUE:</th><th><input type="date" name="issuedate"><br></th></tr>
			<tr><th>S/W/D OF:</th><th><input type="text" name="sname"><br></th></tr>
			<tr><th>VALIDITY:</th><th>FROM:<input type="date" name="fromdate">
			TO:<input type="date" name="todate"><br></th></tr>
			<tr><th>CLASS OF VEHICLE:</th><th><select name="drop"><br>
            <option value="--------SELECT--------">--------SELECT--------</option><br>
            <option value="MC 50CC">MC 50CC</option><br>
            <option value="MC EX50CC">MC EX50CC</option><br>
            <option value="FVG">FVG</option><br>
			      <option value=" M/CYCL.WG "> M/CYCL.WG </option><br>
			      <option value="LMV">LMV</option><br>
			      <option value="LMV-NT ">LMV-NT </option><br>
			      <option value="LMV-TR ">LMV-TR </option><br>
			      <option value="HMV">HMV</option><br>
			      <option value="HPMV">HPMV</option><br>
			      <option value="HTV ">HTV </option><br>
			      <option value="TRAILER ">TRAILER </option><br></select><br></th></tr>
			<tr><th>TESTING AUTHORITY:</th><th><input type="text" name="authority"><br></th></tr>
		</table>
		<table class="three">
			<h3>CERTIFICATE OF REGISTRATION</h3>
						      <tr><th>OWN A VEHICLE:</th><th><input type="radio" name="vehicle" value="yes">yes
          	                      <input type="radio" name="vehicle" value="no">no</th></tr><br>
          	<tr><th> REGISTRATION NUMBER:</th><th><input type="text" name="reg"></th></tr><br>
          	<tr><th> DEALERS NAME:</th><th><input type="text" name="deal"></th></tr><br>
          	<tr><th>MAKERS NAME:</th><th><input type="text" name="make"></th></tr><br>
          	<tr><th>VEHICLE IS:</th><th><select name="drop">
    	          <option value="----select----">----select----</option>
    	          <option value="first hand">first hand</option>
          	    <option value="second hand">second hand</option>
          	    <option value="third hand">third hand</option></select></th></tr><br>
          	<tr><th> MAKERS CLASSIFICATION:</th><th><input type="text" name="makclass"></th></tr><br>
          	<tr><th> TYPE OF BODY:</th><th><input type="text" name="typbod"></th></tr><br>
          	<tr><th> CHASIS NUMBER:</th><th><input type="text" name="chasis"></th></tr><br>
          	<tr><th> ENGINE NUMBER:</th><th><input type="text" name="engno"></th></tr><br>
          	<tr><th>FUEL:</th><th><select name="drop"><br>
    	        <option value="----select----">----select----</option><br>
          	  <option value="petrol">petrol</option><br>
          	  <option value="diesal">diesal</option><br>
          	  <option value="gas">gas</option></th></tr></select><br>
          	<tr><th> COLOUR:</th><th><input type="text" name="colour"></th></tr><br>
          	<tr><th> DATE OF MANUFACTURE</th><th><input type="date" name="date"></th></tr><br>
          	<tr><th>HOURSE POWER:</th><th><input type="text" name="power"></th></tr><br>
          	<tr><th> SEATING CAPACITY:</th><th><input type="text" name="seatcap"></th></tr><br>
          	<tr><th> UNLADEN WEIGHT:</th><th><input type="text" name="unwieght"></th></tr><br>
          	<tr><th>CUBIC CAPACITY:</th><th><input type="text" name="cubcap"></th></tr><br>
          	<tr><th> NUMBER OF CYLINDERS:</th><th><input type="text" name="noc"></th></tr><br>
					</table>
          	<h3>INSURANCE DETAILS </h3>
						<table class="four">
			         <tr><th>INSURANCE COMPANY NAME:</th><th><input type="text" name="cname"></th></tr><br>
			         <tr><th>POLICY NUMBER:</th><th><input type="text" name="pno"></th></tr><br>
			         <tr><th>TAX AMOUNT PAID:</th><th><input type="text" name="tax"></th></tr><br>
			         <tr><th>VALIDITY:</th><th>FROM:<input type="date" name="ifrom">
			              TO:<input type="date" name="ito"><br></th></tr><br>
			         <tr><th></th><th><input type="submit" name="submit" value="SUBMIT"></th></tr>
            </table>
	   </form>
</center>
</body>
</html>
<?php

 ?>
