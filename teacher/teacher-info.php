<?php
    require(dirname(dirname(__FILE__))."/dbconfig.php");
    $db = new mysqli($db_host,$db_username,$db_password,$db_database);
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
    $sql = "select * from teacher where account='". $_SESSION['USERNAME']."';";
    $result =$db->query($sql);
    $result = $result->fetch_assoc();
    $_SESSION['tid'] = $result['tid'];
    $_SESSION['name'] = $result['teacher_name'];
    $_SESSION['department'] = $result['department'];
    $_SESSION['id'] = $result['account'];
    $_SESSION['title'] = $result['title'];
    $_SESSION['paper_intro'] = $result['paper_intro'];
    $_SESSION['tel'] = $result['tel'];
    $_SESSION['email'] = $result['email'];
    $_SESSION['intro']=$result['intro'];

    //个人信息在其他页面用到比较多，放到session里
?>