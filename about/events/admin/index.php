<?php



include ("connection.php");

if(isset($_POST['submit'])){

	$email =  $_POST['email'];

	$password =  $_POST['password'];

 $res = mysql_query("select * from user where username ='$email' and password = MD5('$password')");

 $rowcli = mysql_fetch_array($res);

 if(mysql_num_rows($res)>0){


 mysql_close($con);

 $ds =  mysql_fetch_array($res);
$uid=$rowcli['sno'];
  session_start();
 $_SESSION['aa']='test';
 $_SESSION['name']=$uid;

   header("location:result.php");

 }else{

 header("location:index.php?q=err");

 }

}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="css/broker.css" type="text/css" media="all" />
</head>

<body>

<form name="login" method="post" action="">
  <center>
    <img class="logo" width="270" height="200" src="riv.png" />
  </center>
  <table id="box">
  <tr>
    <th colspan="2">Login</th>
  </tr>
  <tr>
    <td><table id="login">
        <tr>
          <td >Email</td>
          <td width="145" ><input class="input-login" type="text" name="email" /></td>
        </tr>
        <tr>
          <td> Password</td>
          <td><input class="input-login" type="password" name="password" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input class="submit-login" type="submit" name="submit" value="Login" /></td>
        </tr>
      </table></td>
  </tr>
</form>
</body>
</html>