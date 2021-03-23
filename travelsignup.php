<?php
	$host = "webdev.iptime.org:3306";
	$user = "taylo92";
	$passwd = "tay92";
	$dbname = "taylo92"; 
	
	$mysqli = new mysqli($host, $user, $passwd, $dbname); // 데이터베이스에 접속하는 방법
	
	$id = $_POST['id'];
	$pw = $_POST['pw'];
	$name = $_POST['name'];
	$email = $_POST['email'];

	$sql = "insert into travelsign(id, pw, name, email) value('$id', '$pw', '$name', '$email')";

	// 테이블명(컬럼명1,컬렴명2,컬럼명3) 요소(위에서 변수로 지정한 값들, 앞에 있는 위치와 순서에 맞게 하야함)

	$result = $mysqli -> query($sql);
	if($result >0){
		echo "<script>alert('회원가입완료!'); location='port_login_ok.php'</script>";
	}else{
		echo "<script>alert('회원가입실패ㅠ');</script>";
	}
	//echo $result;

?>