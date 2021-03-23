<?php

	$host = "webdev.iptime.org:3306";
	$user = "taylo92"; // myadmin(데이터베이스) 접속 아이디
	$passwd = "tay92"; // myadmin(데이터베이스) 접속 패스워드
	$dbname = "taylo92"; // 데이터베이스명
    
    // 위에서 설정해준 변수는 데이터베이스를 연동시켜주기 위해 대입한 변수

	$mysqli = new mysqli($host, $user, $passwd, $dbname); // 데이터베이스 접속하는것, 연동되도록 하는부분??

	
	$id = $_POST['id']; // get post방식 으로 html문에서 사용자로부터 입력받는 부분을 그대로 가져와 변수에 대입
    $pw = $_POST['password'];
    
    // get = url 에 정보 노출 위험, 보안이 별로임

	$sql = "select * from login where id='$id' and password='$pw'";   // login:데이터베이스에 지정한 테이블명
	// 위 sql문을 쿼리로 날린다. 
	$result = $mysqli -> query($sql);

	// 조건에 맞는 데이터의 행의 수를 count라는 변수에 저장한다. 
	$count = mysqli_num_rows($result); // 로그인을 할 경우, 아이디-패스워드 확인을 해야해서 그 확인할 하는 확인 수? 를 count변수에 담음
	// echo $count;: 
	if($count>0){
		// 로그인 성공 : 확인을 해서 아이디, 패스워드가 둘다 맞아야 하기때문에 count변수는 0 보다 많아야함
		echo "<script>alert('로그인 성공!'); </script>";
		echo "<script>alert('$id 님 반갑습니다!'); </script>";
		echo("<script>location.replace('port_login_ok.php');</script>");  //로그인이 선공하면 alert 창 뜨고 지정된 html 로 이동
	}else{
		// 로그인 실패
        echo "<script>alert('로그인 실패 ㅠ'); </script>";
		echo("<script>location.replace('port.html');</script>"); //로그인이 실패하면 alert 창 뜨고 지정된(원래로그인창있는) html 로 이동
	}
?>