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
    // while($row = $class_result->fetch_assoc()){
    //     $classes[]=array(
    //         "cid"=>$row['cid'],
    //         "week"=>$row['week'],
    //         "begin"=>$row['begin_num'],
    //         "end"=>$row['end_num'],
    //         );
        
    // }

    $sql = " select * from course where teacher_name='".$_SESSION['name']."'";
    $course_result =$db->query($sql);
    //$courses=array();
    // while($row = $course_result->fetch_assoc()){
    //     $class_num=0;
    //     //echo"<script >alert($classes[0]['cid'])</script>";
    //     //if(!empty($classes))
    //     foreach($classes as $clas){
    //         if($clas['cid']==$row['cid'])$class_num++;
    //     }
    //     $courses[]=array(
    //         "cid"=>$row['cid'],
    //         "name"=>$row['course_name'],
    //         "credit"=>$row['course_credit'],
    //         "semester"=>$row['semester'],
    //         "stu_limit"=>$row['stu_limit'],
    //         "class_num"=>$class_num
    //         );
    //     }
   

    //个人信息在其他页面用到比较多，放到session里
?>