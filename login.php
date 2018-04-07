<!-- PAGE 1-->
<?php
mysql_connect('localhost','root','');
mysql_select_db('myproject');
if(isset($_POST['sub']))
{
  $username=$_POST['uname'];
  $password=$_POST['pass'];
  $sel = mysql_query("SELECT * from gentable where username='$username' AND password='$password'");
  if(mysql_num_rows($sel)>0)
  {
    echo "login succesful";
    session_start();
    $_SESSION['u']=$username;
    header("location:update.php");
  }
  else {
    ?>
    <center><b><?php echo "Wrong Username or password";?> </b></center>
   <?php
  }
}
 ?>
<html>
<head>
  <title> Log In</title>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body background="./pic/logo.jpg">

<form name="login" method="post">
  <h1>LICENSE MANAGEMENT SYSTEM</h1><br>
    <marquee><font face="Times New Roman" size="20"><b>Welcome to License Management System!</b></font></marquee>
  <div class="gallery">
  <a target="_blank" href="road.jpg">
    <img src="road.jpg" alt="road" width="300" height="200">
  </a>
  <div class="desc">OBEY TRAFFIC RULES</div>
</div>
<!--  <img src="./pic/road.jpg">-->
  <table>
    <tr><th>Username:<input type="text" name="uname"></th></tr>
    <tr><th>Password:<input type="password" name="pass"></th></tr>
    <tr><th><input type="submit" class="button" name="sub" value="Log In"></th></tr>
    <tr><th>  <a href="newacc.php">Create a new account</a> </th></tr>
    <tr><th><a href="forgetpass.php">Forget password</a></th></tr>
  </table>
  <center><div class="relative"><i>Copyright 2017@ NanCiPriSree</i></div></center>
</form>
</body>
</html>
