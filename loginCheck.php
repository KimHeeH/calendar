<?php

$host = 'localhost';
$user = 'korea';
$pw = '1234';
$dbName = 'test6';
$con = new mysqli($host, $user, $pw, $dbName);

$id = $_POST['id']; // 아이디
$pw = $_POST['pw']; // 패스워드

$query = "select * from member where member_email='$id' and member_pw_1='$pw'";

$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if($id==$row['member_email'] && $pw==$row['member_pw_1']){ // id와 pw가 맞다면 login

	
	echo "<script> location.href = 'calendar.html'; </script>";


}else{ // id 또는 pw가 다르다면 admin_login 폼으로

   echo "<script> alert('아아디나 비밀번호를 다시 입력하세요'); </script>";
   echo "<script> location.href = 'login.php'; </script>";

}

?>