<?php
	header("Content-type:text/html;charset=utf-8");

	$userId=$_POST["userId"];
	// $username=$_POST["userName"];
	$userPass=$_POST["userPass"];

	$conn=mysql_connect("localhost:3306","root","root");
	if(!$conn){
		die("连接失败".mysql_error());
	}else{
		mysql_select_db("tianmao",$conn);

		// $sqlstr="insert into register(registerId,registerPassword)
		// 	values('$userId','$userPass')";
		$sqlstr="select * from register where registerId='$userId'";
		$result=mysql_query($sqlstr,$conn);

		mysql_close($conn);
		$rows = mysql_num_rows($result);
		// echo "注册成功！";
		if($rows==1){
			echo "1";
		}else{
			echo "0";
	}
}

?>