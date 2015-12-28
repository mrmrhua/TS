<?php
    $index_dir = "index.php";
    session_start();
    if(isset($_POST['submit'])){  //点击了提交
        require("dbconfig.php");
        $db = new mysqli($db_host,$db_username,$db_password,$db_database);
        if($_POST['identity']=="学生"){  //学生登录
            $login_sql = "select * from student where account='".$_POST['username']."' and passwd ='" . $_POST['password']."';";
            $result = $db->query($login_sql);
            echo $result->num_rows;
            if($result->num_rows == 0) {  //no found
                header("Location: ". "/login.php?error=1" );
               // header("Location: http://baidu.com");
            }
            else{  //successd
                $_SESSION['IDENTITY'] = 0;   //0表示学生
                $_SESSION['USERNAME'] = $_POST['username'];
                header("Location:"."student/index.php");
            }
        }
        else{   //教师登录
            $login_sql = "select * from teacher where account='".$_POST['username']."' and passwd ='" . $_POST['password']."';";
            $result = $db->query($login_sql);
            echo $result->num_rows;
            if($result->num_rows == 0) {  //no found
                header("Location: ". "/login.php?error=1" );
            }
            else{  //successd
                $_SESSION['IDENTITY'] = 1;
                $_SESSION['USERNAME'] = $_POST['username'];
                header("Location:"."teacher/index.php");
            }
        }
    }
    else{   //未点击submit
        if(isset($_GET['error'])){  //登录错误
            echo "账号密码有误，请重新输入";
        }
?>

<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
</head>
<body>
<form aciton="login.php" method="post">
    <label>用户名</label>
    <input type="textarea" name="username">
    <label></label>
    <input type="password" name="password">
    <input type="submit" name="submit" value="提交">
    <br />
    <label>学生</label>
    <input type="radio" checked="checked" name="identity" value="学生">
    <label>教师</label>
    <input type="radio" name="identity" value="教师">



</form>
</body>
</html>


<?php

    }

?>