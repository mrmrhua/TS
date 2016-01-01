<?php
/**
 * Created by PhpStorm.
 * User: Ding-YH
 * Date: 2016/1/2
 * Time: 0:59
 */
session_start();
header("Content-type:text/html;charset=utf-8");

if(is_uploaded_file($_FILES['file']['tmp_name'])) {
    $file = $_FILES["file"];
    //获取数组里面的值
    $name = $file["name"];//上传文件的文件名
    $type = $file["type"];//上传文件的类型
    $size = $file["size"];//上传文件的大小
    $tmp_name = $file["tmp_name"];//上传文件的临时存放路径

    //把上传的临时文件移动到对应课程名目录下面 /material/course_name/XXX.ppt
    $dst = "../".$name."/"   //>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    move_uploaded_file($tmp_name, iconv("UTF-8","gb2312",'../h'));  //转码

    //写数据库
    require(dirname(dirname(__FILE__))."/dbconfig.php");
    $db = new mysqli($db_host,$db_username,$db_password,$db_database);
    $sql="insert into material(file_from,up_date,course_name) values()"
        select name from student where account = $_SESSION['USERNAME']
        select course_name from course where cid= XXX
    $db->query($sql);
    //echo "succeed";
    header("Location:"."/student/homework-info.php?hw_id=".$_GET['hw_id']);
}
