<html>
<head>
  <title>Licence Management System</title>
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
h3{
  color:"#000080";
  background-color:grey;
  font-size:20px;
  width:350px;
  display:block;
  border-color: black;
  border-width: 2px;
  border-style: solid;
  text-align: center;
  padding:10px;
}
.button{
  background-color: green;
  width: 100px;
  padding: 10px;
  font-size: 15px;
  color: white;
  border: 1px;
}
table{
  color:"#000000";
  background-color:grey;
  font-size:20px;
  width:300px;
  display:block;
  text-align: center;
  border-color: black;
  border-width: 5px;
  border-style: solid;
  text-decoration: none;
  padding:35px;
  }
</style>
</head>
<body background="./pic/logo.jpg">
  <center>
    <h1><font face="Lucida Calligraphy">LICENSE MANAGEMENT SYSTEM</font></h1>
    <form name="form2" method="post">
      <table>
        <tr><h3>GENERAL DETAILS</h3></tr>
        <tr><th><label for="name1">Name</label></th><th><input type="text" id="name1" name="name"></th></tr>
        <tr><th><label for="uname1">Username</label></th><th><input type="text" id="uname1" name="uname"></th></tr>
        <tr><th><label for="pass">Password</th><th><input type="password" id="pass" name="pass1"></th></tr>
        <tr><th><label for="pass3">Confirm Password</th><th><input type="password" id="pass3" name="pass2"></th></tr>
        <tr><th><label for="aadhar1">Aadhar</th><th><input type="text" id="aadhar1" name="aadhar"></th></tr>
          <!--security question and its ans not set..not created in the database as well-->
        <tr><th><input  type="submit" name="save" value="SAVE"></th>
          <th><input type="submit" name="next" value="NEXT"></th></tr>
      </table>
    </form>
  </center>
</body>
</html>
<?php
mysql_connect('localhost','root','');
mysql_select_db('myproject');
//$count=0;
if(isset($_POST['save']))
{
//  $count++;
//  if($count=1)
//  {
  $a = $_POST['name'];
  $b = $_POST['uname'];
  $c = $_POST['pass1'];
  $d = $_POST['pass2'];
  $e = $_POST['aadhar'];
  $ins = mysql_query("INSERT INTO gentable VALUES('$a','$b','$c','$d','','','','','','','','$e','')");
  if($c==$d && $ins>0)//$ins>0 means that there is atleast one row that has been inserted into the table
  {
    session_start();
    $_SESSION['u']=$a;
    echo"inserted";
  }
  else {
    echo "Passwords dont match";
    //  echo mysql_error();
    }
  //}
}
if(isset($_POST['next']))
{
  header("location:general.php");
}
?>
