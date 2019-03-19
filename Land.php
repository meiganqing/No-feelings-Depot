<?php
	header("Content-type:text/html;charset=utf-8");

	$userId=$_POST["userId"];
	// $username=$_POST["username"];
	$userpass=$_POST["userpass"];

	$conn=mysql_connect("localhost:3306","root","root");
	if(!$conn){
		echo "服务器出错";
	}else{
		mysql_select_db("tianmao",$conn);

		$sqlstr="select * from register where registerId='$userId' and registerPassword='$userpass'";

		$result=mysql_query($sqlstr,$conn);

		mysql_close($conn);

		$rows=mysql_num_rows($result);

		if ($rows==1) {
			echo "1";	
		}else{
			echo "0";
		}
	}
	// if($rows==1){
	// 	echo("1");
	// }else{
	// 	echo("0");
	// }

?>