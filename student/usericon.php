<?php
/**
 * Created by PhpStorm.
 * User: Ding-YH
 * Date: 2015/12/29
 * Time: 0:41
 */
    session_start();
    require("student_info.php");
?>

<li class="dropdown user-profile">
                    <a href="#" data-toggle="dropdown">
                        <img src=<?php echo "assets/usericon/". $stu_id.".jpg" ?> alt="user-image" class="img-circle img-inline userpic-32" width="28" />
<span>
								<?php
                                echo $name; ?>
    <i class="fa-angle-down"></i>
							</span>
</a>

<ul class="dropdown-menu user-profile-menu list-unstyled">
    <li>
        <a href="message-write.html">
            <i class="fa-edit"></i>
            新的消息
        </a>
    </li>
    <li>
        <a href="password-question-set.html">
            <i class="fa-wrench"></i>
            密保设置
        </a>
    </li>
    <li>
        <a href="profile-main.html">
            <i class="fa-user"></i>
            个人资料
        </a>
    </li>
    <li class="#">
        <a href="password-change.php">
            <i class="fa-unlock"></i>
            修改密码
        </a>
    </li>
    <li>
        <a href="#">
            <i class="fa-wrench"></i>
            帮助
        </a>
    </li>
    <li class="#">
        <a href="extra-lockscreen.html">
            <i class="fa-lock"></i>
            登出
        </a>
    </li>
</ul>
</li>