<html>
<!-- <meta charset="utf-8"> -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

$host = 'localhost';
$user = 'korea';
$pw = '1234';
$dbName = 'test6';
$con = new mysqli($host, $user, $pw, $dbName);

$blank1 = $_POST['blank1']; // 아이디
$blank2 = $_POST['blank2']; // 패스워드
$blank3 = $_POST['blank3'];
$blank4 = $_POST['blank4'];
$blank5 = $_POST['blank5'];

$sql = "insert into spend (
    blank1,
    blank2,
    blank3,
    blank4,
    blank5
)";

$sql = $sql. "values (
    '$blank1',
    '$blank2',
    '$blank3',
    '$blank4',
    '$blank5'
)";
if($mysqli->query($sql)){ 
    echo '<script>alert("등록완료")</script>'; 
  }else{ 
    echo '<script>alert("등록실패")</script>';
  }

  mysqli_close($mysqli);

?>

<script>
location.href = "calendar.html";
</script>
</html>