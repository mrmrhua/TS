<?php
/**
 * Created by PhpStorm.
 * User: Ding-YH
 * Date: 2015/12/28
 * Time: 20:03
     */
    require(dirname(dirname(__FILE__))."/dbconfig.php");
    $db = new mysqli($db_host,$db_username,$db_password,$db_database);
    $sql = "select name,major,grade,account from student where account='". $_SESSION['USERNAME']."';";
    $result =$db->query($sql);
    $row = $result->fetch_assoc();

    $name = $row['name'];
    $major = $row['major'];
    $stu_id = $row['account'];
    $grade = $row['grade'];
    $_SESSION['name'] =  "ding";  //姓名在其他页面用到比较多，放到session里\
   // $_SESSION['usericon'] =

?>