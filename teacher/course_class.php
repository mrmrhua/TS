<?php
    require(dirname(dirname(__FILE__))."/dbconfig.php");
    $db = new mysqli($db_host,$db_username,$db_password,$db_database);
    if (mysqli_connect_errno())
    {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

    //$sql="select * from class where tid='".$_SESSION['tid']."'";
    $sql="select * from class where cid in (select cid from course where tid='".$_SESSION['tid']."')";
    $class_result=$db->query($sql);
    $classes=array();
    $sql = " select * from course where teacher_name='".$_SESSION['name']."'";
    $course_result =$db->query($sql);
?>