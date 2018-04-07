<html>
<head>
	<title> LICENSE MANAGEMENT SYSTEM</title>
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
	</style>
</head>
<body background="./pic/logo.jpg">
	<center>
		<h1>LICENCE MANAGEMENT SYSTEM</h1>
		<h2>WELCOME</h2><br>
    <h4>CERTIFICATE OF REGISTRATION</h4>
	  	    <form name="rc" method="post">
					<table>
	        <tr><th>OWN A VEHICLE:</th><th><input type="radio" name="vehicle" value="yes">yes
            <input type="radio" name="vehicle" value="no">no</th></tr><br>
					<tr><th> REGISTRATION NUMBER:</th><th><input type="text" name="reg"></th></tr><br>
          <tr><th> DEALERS NAME:</th><th><input type="text" name="deal"></th></tr><br>
          <tr><th>MAKERS NAME:</th><th><input type="text" name="make"></th></tr><br>
          <tr><th>VEHICLE IS:</th><th><select name="drop">
                  <option value="----select----">----select----</option>
    	            <option value="first hand">first hand</option>
                  <option value="second hand">second hand</option>
                  <option value="third hand">third hand</option></th></tr></select><br>
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
          <tr><th><input type="submit" name="save" value="SAVE"></th>
          <th><input type="submit" name="next" value="NEXT"></th></tr><br>
     </table>
     </form>
     </center>
</body>
</html>
