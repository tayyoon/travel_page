<?php 
// 세션을 시작합니다
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>영꾸러기 1</title>
    <style>
        

        .main{
            width: 300px;
            height: 100px;
            margin: 20px;
            border: 1px solid blue;
        }
        .main img{
            width: 100%;
            height: 100px;
        }
        #loggin{
            width: 400px;
            height: 30px;
            border: 1px solid red;
            margin: -130px 20px ;
            float: right;
        }
        #menu{
            width: 900px;
            height: 70px;
            margin: -95px 20px -5px;
            float: right;
            border: 1px solid blue;
        }
        .menuList{
            list-style: none;
            list-style-type: none;
            margin: 1px;
            padding: 0px;
            float: left;
        }
        #menu ul{
            margin:33px 25px;
            float: right;
        }
        #menu li{
            float: left;
            vertical-align: center;
            margin-right: 40px;
        }
        .menuList a{
            margin:1px;
            padding:0px;
            font-size: 30px;
            color: blue;
            text-decoration: none;
            display: block;
        }
        .menuList a:link{
            color:black;
        }
     
        .menuList a:hover{
            color: green;
        
        }
        .menuList a:active{
            color: red;
        }
        .firstVid{
            width: auto;
            height: 500px;
            margin:10px 20px;
            border: 1px solid blue;
            position: relative;
        }
        video{
            width: auto;
            height: 500px;
            margin: 0px 140px;
        }
        .vid_text{
            position: absolute;
            top: 50px;
            width: 100%;
            height: 50px;
            
        }
        .vid_text p{
            margin-top: 130px; 
            text-align: center;
            font-size: 50px;
            color: black;
            background-color: coral;
            opacity: 40%;
        }
        #preview{
            width: auto;
            height: 400px;
            text-align: center;
            margin-top: 30px;
            
        }
        #preview img{
            width: auto;
            height: 300px;
            
        }
        /* .pre_1 img{
            position: absolute; top:0; left: 0;
            width: 100%;
            height: 100%;
        } */
        .pre_1{
            width: 300px;
            height: 300px;
            display: inline-block;
            border: 1px solid black;
            margin-right: 20px;
            position: relative;
            /* background-image: url("dokyo_main.jpg"); */
        }
        /* .pre_text{
            position: absolute;
            top: 50%;
            width: 100%;
        }
        .pre_text p{
            margin-top: -200px;
            color: cornsilk;
            font-size: 20px;
        } */
        .pre_2{
            width: 300px;
            height: 300px;
            display: inline-block;
            border: 1px solid black;
            margin-right: 20px;
            position: relative;
            /* background-image: url("opera_main.jpg"); */
        }
        .pre_3{
            width: 300px;
            height: 300px;
            display: inline-block;
            border: 1px solid black;
            position: relative;
            /* background-image: url("taipei_main.jpg"); */
        }
        .pre_text1{
            padding: 5px 10px;
            background-color: yellow;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate( -50%, -50% );
        }
        .pre_text2{
            padding: 5px 10px;
            background-color: yellow;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate( -50%, -50% );
        }
        .pre_text3{
            padding: 5px 10px;
            background-color: yellow;
            text-align: center;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate( -50%, -50% );
        }
       #yet{
           width: auto;
           height: 200px;
           border:1px solid black;
           margin: -70px 20px 20px 20px;
       }
       #footer{
           background-color: lightgray;
           width: auto;
           height: 150px;
           border-top: 1px solid black;
       }

    </style>
</head>

<body>
    <div class=main>
        <a href="#" alt="그냥 메인으로 돌아오는거"><img src="ori_bran.jpg" alt=""></a>
    </div>

    <div id="loggin">
        <form action="loggin.php" method="POST">
        </form>
        <?php
		// 넘겨받은 로그인 세션값을 출력합니다
        echo $_SESSION['name']."님 안녕하세요";
        ?>

        <!-- <?php 
            echo "이름: ".$_POST['name']."<br/>";
            echo "나이: ".$_POST['age']."<br/>";
            echo "키: ".$_POST['height']."<br/>";
            echo "직업: ".$_POST['job'];
        ?> -->   <!-- 예제, 불러와서 화면에 나타내기 -->
    </div>

    <div id=menu> <!-- 메뉴 정해야해...-->
        <ul class=menuList>
            <li><a href=#> EUROPE</a></li>
            <li><a href=#>OCEANIA</a></li>
            <li> <a href=#>ASIA</a></li>
            <li><a href=#>FESTIVAL</a></li>
            <li> <a href=#>READY</a></li>
        </ul>
    </div>

    <div class=firstVid><!--컬러런 동영상 삽입-->
        <video muted autoplay loop>
            <source src="SNOW.mp4" type="video/mp4">
        </video> 
        <div class=vid_text><p>LET'S PLAY COLOR_RUN</p></div>   <!-- 호주 컬러런 페스티벌 글로 링크달기-->
    </div> 

    <div id=preview> <!-- 여행 다녀온 사진 그냥 넣어서 태그걸기-->
        <span><div class=pre_1>
            <a href="#" alt="도쿄 오다이바 포스트"><img src="dokyo_main.jpg" alt=""/> </a>
            <div class=pre_text1><p>ODAIBa</p></div>
        </div></span>
        <span><div class=pre_2>
           <a href="#" alt="오페라하우스 포스트"> <img src="opera_main.jpg" alt="" /> </a>
            <div class=pre_text2><p>OPERA HOUSE</p></div>
        </div></span>
        <span><div class=pre_3>
            <a href="#" alt="대만 포스트"><img src="taipei_main.jpg" alt="" /> </a>
            <div class=pre_text3><p>TaiPEi</p></div>
        </div></span>
    </div>

    <div id=yet>
        ~~~~~~~~~~~~~~~~
    </div>

    <div id=footer>
        <p> Blog: blog.naver.com/ddddd</p><a href="https://blog.naver.com/mack4624" target="_blank"><button>BLOG</button></a>
        <p> Instagram: @0000gggg0000</p><a href="https://www.instagram.com/0gguchu/" target="_blank"></a><button>INSTAGRAM</button>

    
    </div>    




</body>
</html>