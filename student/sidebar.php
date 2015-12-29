<?php
/**
 * Created by PhpStorm.
 * User: Ding-YH
 * Date: 2015/12/29
 * Time: 16:23
 */
?>
<div class="sidebar-menu toggle-others fixed">

    <div class="sidebar-menu-inner">

        <header class="logo-env">

            <!-- logo -->
            <div class="logo">
                <a href="index.php" class="logo-expanded">
                    <img src="assets/images/logo@2x.png" width="80" alt="" />
                </a>

                <a href="index.php" class="logo-collapsed">
                    <img src="assets/images/logo-collapsed@2x.png" width="40" alt="" />
                </a>
            </div>

            <!-- This will toggle the mobile menu and will be visible only on mobile devices -->
            <div class="mobile-menu-toggle visible-xs">
                <a href="#" data-toggle="user-info-menu">
                    <i class="fa-bell-o"></i>
                    <span class="badge badge-success">7</span>
                </a>

                <a href="#" data-toggle="mobile-menu">
                    <i class="fa-bars"></i>
                </a>
            </div>

            <!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
            <div class="settings-icon">
                <a href="#" data-toggle="settings-pane" data-animate="true">
                    <i class="linecons-cog"></i>
                </a>
            </div>


        </header>



        <ul id="main-menu" class="main-menu">
            <!-- add class "multiple-expanded" to allow multiple submenus to open -->
            <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->

            <!-- 课程 -->
            <li class="opened active">
                <a href="course-list.php">
                    <i class="linecons-cog"></i>
                    <span class="title">课程</span>
                </a>

            </li>

            <!-- 小组 -->
            <li>
                <a href="#">
                    <i class="linecons-desktop"></i>
                    <span class="title">小组</span>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <span class="title">软件需求分析与设计</span>
                        </a>
                        <ul>
                            <li class="active">
                                <a href="group-info.html">
                                    <span class="title">小组详细</span>
                                </a>
                            </li>
                            <li>
                                <a href="group-setup.html">
                                    <span class="title">建立小组</span>
                                </a>
                            </li>
                            <li>
                                <a href="group-join.html">
                                    <span class="title">加入小组</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="title">项目管理与案例分析</span>
                        </a>
                        <ul>
                            <li class="active">
                                <a href="group-info.html">
                                    <span class="title">小组详细</span>
                                </a>
                            </li>
                            <li>
                                <a href="group-setup.html">
                                    <span class="title">建立小组</span>
                                </a>
                            </li>
                            <li>
                                <a href="group-join.html">
                                    <span class="title">加入小组</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="title">软件质量保证与测试</span>
                        </a>
                        <ul>
                            <li class="active">
                                <a href="group-info.html">
                                    <span class="title">小组详细</span>
                                </a>
                            </li>
                            <li>
                                <a href="group-setup.html">
                                    <span class="title">建立小组</span>
                                </a>
                            </li>
                            <li>
                                <a href="group-join.html">
                                    <span class="title">加入小组</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- 作业 -->
            <li>
                <a href="#">
                    <i class="linecons-note"></i>
                    <span class="title">作业</span>
                </a>
                <ul>
                    <li>
                        <a href="homework-list.html">
                            <span class="title">作业列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="homework-info.html">
                            <span class="title">作业详细</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- 课程资料 -->
            <li>
                <a href="#">
                    <i class="linecons-star"></i>
                    <span class="title">资料</span>
                </a>
                <ul>
                    <li>
                        <a href="file-list.html">
                            <span class="title">资料列表</span>
                        </a>
                    </li>
                    <li>
                        <a href="file-add.html">
                            <span class="title">新的资料</span>
                        </a>
                    </li>
                </ul>
            </li>

            <!-- 消息 -->
            <li>
                <a href="#">
                    <i class="linecons-mail"></i>
                    <span class="title">消息</span>
                    <span class="label label-success pull-right">5</span>
                </a>
                <ul>
                    <li>
                        <a href="message-received-list.html">
                            <span class="title">收信箱</span>
                        </a>
                    </li>
                    <li>
                        <a href="message-sent-list.html">
                            <span class="title">已发送</span>
                        </a>
                    </li>
                    <li>
                        <a href="message-view.html">
                            <span class="title">查看消息</span>
                        </a>
                    </li>
                    <li>
                        <a href="message-write.html">
                            <span class="title">写消息</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>

    </div>

</div>
