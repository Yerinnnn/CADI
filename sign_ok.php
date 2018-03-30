<?php
    $ID = $_POST["sign_id"];
    $PASS = $_POST["sign_pass"];

    echo "$ID $PASS";


    // mysql 접속 계정 정보
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_password = 'apmsetup';
    $mysql_db = 'cadi';

    // 접속
    $conn = mysql_connect($mysql_host, $mysql_user, $mysql_password);
    $dbconn = mysql_select_db($mysql_db, $conn);

    

    // charset 설정, 설정하지 않으면 기본 mysql 설정으로 됨, 대체적으로 euc-kr를 많이 사용
    mysql_query("set names utf8"); // charset 'UTF8'
    echo "<meta charset=utf-8/>";

    //쿼리, news 라는 테이블이 존재, id, title, content 필드가 존재할 경우
    $query = "INSERT INTO cadi_user VALUES ('', '$ID', '$PASS')";

    //쿼리 성공시 쿼리 리소스 가져옴
    $res = mysql_query($query, $conn);
    if ($res > 0)
    {
        echo ' WELCOME!';
    }
    else
    {
        echo ' You failed to sign up for membership.';
    }
?>