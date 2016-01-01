<?php
/**
 * Created by PhpStorm.
 * User: Ding-YH
 * Date: 2016/1/1
 * Time: 20:01
 *
 */
    session_start();
    header("Content-type:text/html;charset=utf-8");
    $destdir = '/hw/';
    if(is_uploaded_file($_FILES['file']['tmp_name'])) {
        $file = $_FILES["file"];
        //获取数组里面的值
        $name = $file["name"];//上传文件的文件名
        $type = $file["type"];//上传文件的类型
        $size = $file["size"];//上传文件的大小
        $tmp_name = $file["tmp_name"];//上传文件的临时存放路径

        //把上传的临时文件移动到hw目录下面
       move_uploaded_file($tmp_name, iconv("UTF-8","gb2312",'../hw/'.$name));  //转码

        //写数据库
        require(dirname(dirname(__FILE__))."/dbconfig.php");
        $db = new mysqli($db_host,$db_username,$db_password,$db_database);
        $sql="update student_homework set handin_status=1,handin_time=NOW(),filename='".$name."' where hw_id=".$_GET['hw_id']. " and student_account='".$_SESSION['USERNAME']."' ;";
        //echo $sql;
        $db->query($sql);
        //echo "succeed";
        header("Location:"."/student/homework-info.php?hw_id=".$_GET['hw_id']);
    }

?>