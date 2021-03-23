<?php
    include ('conn.php');

    $id = $_POST['id'];
    $pw = $_POST['pw'];

    $sql = "select * from board1 where id='$id' and pw='$pw'";

    $result = $mysqli -> query($sql);

    $count = mysqli_num_rows($result); // mysqli_num_rows 함수는 리절트 셋(result set)의 총 레코드 수를 반환합니다.

    $result2 = mysqli_fetch_array($result);

    $_SESSION['name'] = $result2['name'];

    echo $count;

    if($count>0){
        echo "<script> alert('로그인성공'); </script>";
//        echo "<script> location.replace('board_1ok.php')</script>";
    }else{
        echo "<script> alert('로그인실패ㅠ'); </script>";
        echo "<script> location.replace('board_1.php');</script>";
    }

?>