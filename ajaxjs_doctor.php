<?php
// Start the session
session_start();
?>
<?php
$host='localhost';
	$uname='root';
	$pwd='admin';
	$db="project";

$con = mysql_connect($host,$uname,$pwd) or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
$name=$_POST['uname'];
$password=$_POST['password'];

$query=mysql_query("SELECT did,name FROM doctor WHERE name='$name' AND password='$password'");
if(mysql_num_rows($query)==1)
{
	while($ret=mysql_fetch_array($query))
	{
		$_SESSION["did"]=$ret['did'];
		$_SESSION["docname"]=$ret['name'];
		echo $ret['did'];
		break;
	}
}
else
	echo "Invalid Credentials";

?>