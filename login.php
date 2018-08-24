<?php
session_start(); 
?>
<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>

.button{
	  color:#fff;
  font-size:20px;
	border: 1px solid #a6a6a6;
	width:100px;
	height: 43px;
	border-radius: 5px;
	margin-top: 5px;
	margin-right: 6px;
	outline: none;
  background: rgb(255,48,25); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(255,48,25) 0%, rgb(207,4,4) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(255,48,25)), color-stop(100%,rgb(207,4,4))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* W3C */
}
.reset{
	  color:#fff;
  font-size:20px;
	border: 1px solid #a6a6a6;
	width: 100px;
	height: 43px;
	border-radius: 5px;
	margin-top: 5px;
	margin-right: 50px;
	outline: none;
	float:right;
  background: rgb(255,48,25); /* Old browsers */
  background: -moz-linear-gradient(top,  rgb(255,48,25) 0%, rgb(207,4,4) 100%); /* FF3.6+ */
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgb(255,48,25)), color-stop(100%,rgb(207,4,4))); /* Chrome,Safari4+ */
  background: -webkit-linear-gradient(top,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* Chrome10+,Safari5.1+ */
  background: -o-linear-gradient(top,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* Opera 11.10+ */
  background: -ms-linear-gradient(top,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* IE10+ */
  background: linear-gradient(to bottom,  rgb(255,48,25) 0%,rgb(207,4,4) 100%); /* W3C */
}
.inpu
 {
    width: 50%;
    padding: 10px;
    margin: 10px 0;
    outline: none;
    color: #000;
    font-weight: 500;
    font-family: 'Roboto', sans-serif;
}
</style>
<title>MR Login</title>
</head>
<body>
<table width="400px" height="300px" class="table" border="1" align="center" cellpadding="2" cellspacing="2" bgcolor="#CCCCCC" class="table">
<tr>
<div class="regisFrm">
<form name="login" method="post">
<td>
<table width="100%" height="350px" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="5" align="center"><strong>Login </strong></td>
</tr>
<div>
<tr>
<td width="78">Client id</td>
<td width="6">:</td>
<td width="294"><input name="Emp_id" type="text" id="Emp_id"></td>
</tr>
<tr >
<td>Password</td>
<td>:</td>
<td><input name="password" type="password" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>

<td><input type="submit" class="button" name="submit" value="Login"></td>
<td><input type="reset" class="reset" name="reset" value="reset"></td>
</form>
</div>
</tr>
</table>
</td>

</tr>
</table>
<?php
if (isset($_POST['submit']))
	{
			include 'config.php';
			// Create connection

$Emp_id=$_POST['Emp_id'];
$password=$_POST['password'];

//echo $Emp_id,$password;
 $query="SELECT Emp_name FROM representatives WHERE Emp_id='$Emp_id' and password='$password'";
 
$rel = mysqli_query($conn,$query);

$d= mysqli_num_rows($rel);
 if ($d > 0)
{
	echo "<script language='javascript' type='text/javascript'> location.href='home.php' </script>";
	$_SESSION['login_user']=$Emp_id;
	while($value=mysqli_fetch_array($rel))
	{
		$_SESSION['user_name']=$value[0];
	}
  }
  else
  {
echo "<script type='text/javascript'> location.href='login.php' alert('User Name Or Password Invalid!')</script>";
}


$conn = null;


}
?>
</fieldset>
			</article>								
	</main>
      </div>
    </div>
  </div>
</body>
</html>