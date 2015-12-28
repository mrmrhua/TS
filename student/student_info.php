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
    $result = $result->fetch_assoc();
    $name = $result['name'];
    $major = $result['major'];
    $stu_id = $result['account'];
    $grade = $result['grade'];
    $_SESSION['name'] =  $name;  //姓名在其他页面用到比较多，放到session里
?>