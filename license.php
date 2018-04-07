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
	<h4>LICENSE DETAILS </h4>
	<form name="lic" method="post">
		<table>
			<tr><th>LICENSE NUMBER:</th><th><input type="text" name="lnumber"></th></tr>
			<tr><th>DATE OF ISSUE:</th><th><input type="date" name="issuedate"></th></tr>
			<tr><th>S/W/D OF:</th><th><input type="text" name="sname"></th></tr>
			<tr><th>VALIDITY:</th><th>FROM:<input type="date" name="fromdate">
				TO:<input type="date" name="todate"></th></tr>
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
			<option value="TRAILER ">TRAILER </option><br></select></th></tr>
			<tr><th>TESTING AUTHORITY:</th><th><input type="text" name="authority"></th></tr>
			<tr><th></th><th><input type="submit" name="save" value="SAVE">
			<input type="submit" name="SUBMIT" value="SUBMIT"></th></tr>

	</center>
</form>
</table>
</body>
</html>
