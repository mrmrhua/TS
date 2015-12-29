<?php
/**
 * Created by PhpStorm.
 * User: Ding-YH
 * Date: 2015/12/29
 * Time: 11:28
 */
    require(dirname(dirname(__FILE__))."/dbconfig.php");
    $db = new mysqli($db_host,$db_username,$db_password,$db_database);
    $sql = "select * from(course NATURAL join (select cid,week,begin_num,end_num from class NATURAL join class_student where student_account ='". $_SESSION['USERNAME']."') temp );";
    $course_result =$db->query($sql);
 ?>
