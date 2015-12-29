<?php
/**
 * Created by PhpStorm.
 * User: Ding-YH
 * Date: 2015/12/28
 * Time: 21:38
 * 每个页面的用户信息窗口
*/

require("student_info.php");

 ?>
<div class="settings-pane">

    <a href="#" data-toggle="settings-pane" data-animate="true">
        &times;
    </a>

    <div class="settings-pane-inner">

        <div class="row">

            <div class="col-md-4">

                <div class="user-info">

                    <div class="user-image">
                        <a href="profile-main.html">
                            <img src=<?php echo "assets/usericon/".$stu_id.".jpg" ?> class="img-responsive img-circle"/>
                        </a>
                    </div>

                    <div class="user-details">

                        <h3>
                            <a href="profile-main.html"><?php
                                echo $name; ?>
                            </a>

                            <!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
                            <span class="user-status is-online"></span>
                        </h3>

                        <p class="user-title"><?php echo $stu_id; ?> | <?php echo $grade; ?>
                            | <?php echo $major; ?></p>

                        <div class="user-links">
                            <a href="profile-edit.php" class="btn btn-primary">编辑资料</a>
                            <a href="password-change.html" class="btn btn-success">修改密码</a>
                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-8 link-blocks-env">

                <div class="links-block left-sep">
                    <h4>
                        <span>通知</span>
                    </h4>

                    <ul class="list-unstyled">
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1"/>
                            <label for="sp-chk1">用户消息</label>
                        </li>
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2"/>
                            <label for="sp-chk2">作业事件</label>
                        </li>
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3"/>
                            <label for="sp-chk3">课程通知</label>
                        </li>
                        <li>
                            <input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4"/>
                            <label for="sp-chk4">站内通知</label>
                        </li>
                    </ul>
                </div>

                <div class="links-block left-sep">
                    <h4>
                        <a href="#">
                            <span>Help Desk</span>
                        </a>
                    </h4>

                    <ul class="list-unstyled">
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Support Center
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Submit a Ticket
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Domains Protocol
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-angle-right"></i>
                                Terms of Service
                            </a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>

    </div>

</div>