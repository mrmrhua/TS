<?php
	session_start();
	require(dirname(dirname(__FILE__))."/dbconfig.php");
	$db = new mysqli($db_host,$db_username,$db_password,$db_database);
	$sql ="select group_name,group_id from (groups NATURAL  JOIN student_group) where account='".$_SESSION['USERNAME']."' and cid=".$_GET['cid'].";";
	$group_result =$db->query($sql);
	$group_row = $group_result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>浙江大学软件工程课程网站</title>

	<link rel="stylesheet" href="assets/css/ffonts.css">
	<link rel="stylesheet" href="assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/xenon-core.css">
	<link rel="stylesheet" href="assets/css/xenon-forms.css">
	<link rel="stylesheet" href="assets/css/xenon-components.css">
	<link rel="stylesheet" href="assets/css/xenon-skins.css">
	<link rel="stylesheet" href="assets/css/custom.css">

	<script src="assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">

	<?php require("setting-pane.php"); ?>
<!-- 	<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
 -->	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
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
					<li>
						<a href="course-list.php">
							<i class="linecons-cog"></i>
							<span class="title">课程</span>
						</a>

					</li>

					<!-- 小组 -->
					<li class="opened active">
						<a href="#">
							<i class="linecons-desktop"></i>
							<span class="title">小组</span>
						</a>
						<ul>
							<?php
								require("course.php");
							echo $_SERVER['PHP_SELF']."?".$_SERVER['QUERY_STRING'];
								while($course_row = $course_result->fetch_assoc()) {
									if($course_row['cid']==$_GET['cid']){     //选中当前行
										$this_course = $course_row['course_name'];
										echo "<li class='opened active'>
												<a href='#'>
									<span class='title'>".$course_row['course_name']."</span>
								</a>";
									}
									else{
										echo "<li>
								<a href='#'>
									<span class='title'>".$course_row['course_name']."</span>
								</a>";
									}
									echo "<ul>
									<li class='active'>
										<a href='".$_SERVER['PHP_SELF']."?cid=".$course_row['cid']."'>
											<span class='title'>小组详细</span>
										</a>
									</li>
									<li>
										<a href='group-setup.php?cid=".$course_row['cid']."'>
											<span class='title'>建立小组</span>
										</a>
									</li>
									<li>
										<a href='group-join.php'>
											<span class='title'>加入小组</span>
										</a>
									</li>
								</ul></li>";
								}
							?>
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
								<a href="homework-list.php">
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
								<a href="file-list.php">
									<span class="title">资料列表</span>
								</a>
							</li>
							<li>
								<a href="file-add.php">
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
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<!-- 隐藏左边菜单 -->
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>
					
					<!-- 消息 -->
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-envelope-o"></i>
							<span class="badge badge-green">15</span>
						</a>
							
						<ul class="dropdown-menu messages">
							<li>
									
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
								
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
									<!-- Repeated -->
									
									<li class="active"><!-- "active" class means message is unread -->
										<a href="#">
											<span class="line">
												<strong>Luc Chartier</strong>
												<span class="light small">- yesterday</span>
											</span>
											
											<span class="line desc small">
												This ain’t our first item, it is the best of the rest.
											</span>
										</a>
									</li>
									
									<li class="active">
										<a href="#">
											<span class="line">
												<strong>Salma Nyberg</strong>
												<span class="light small">- 2 days ago</span>
											</span>
											
											<span class="line desc small">
												Oh he decisively impression attachment friendship so if everything. 
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Hayden Cartwright
												<span class="light small">- a week ago</span>
											</span>
											
											<span class="line desc small">
												Whose her enjoy chief new young. Felicity if ye required likewise so doubtful.
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="line">
												Sandra Eberhardt
												<span class="light small">- 16 days ago</span>
											</span>
											
											<span class="line desc small">
												On so attention necessary at by provision otherwise existence direction.
											</span>
										</a>
									</li>
									
								</ul>
								
							</li>
							
							<li class="external">
								<a href="blank-sidebar.html">
									<span>All Messages</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
					<!-- 提醒 -->
					<li class="dropdown hover-line">
						<a href="#" data-toggle="dropdown">
							<i class="fa-bell-o"></i>
							<span class="badge badge-purple">7</span>
						</a>
							
						<ul class="dropdown-menu notifications">
							<li class="top">
								<p class="small">
									<a href="#" class="pull-right">Mark all Read</a>
									You have <strong>3</strong> new notifications.
								</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list list-unstyled ps-scrollbar">
									<li class="active notification-success">
										<a href="#">
											<i class="fa-user"></i>
											
											<span class="line">
												<strong>New user registered</strong>
											</span>
											
											<span class="line small time">
												30 seconds ago
											</span>
										</a>
									</li>
									
									<li class="active notification-secondary">
										<a href="#">
											<i class="fa-lock"></i>
											
											<span class="line">
												<strong>Privacy settings have been changed</strong>
											</span>
											
											<span class="line small time">
												3 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-primary">
										<a href="#">
											<i class="fa-thumbs-up"></i>
											
											<span class="line">
												<strong>Someone special liked this</strong>
											</span>
											
											<span class="line small time">
												2 minutes ago
											</span>
										</a>
									</li>
									
									<li class="notification-danger">
										<a href="#">
											<i class="fa-calendar"></i>
											
											<span class="line">
												John cancelled the event
											</span>
											
											<span class="line small time">
												9 hours ago
											</span>
										</a>
									</li>
									
									<li class="notification-info">
										<a href="#">
											<i class="fa-database"></i>
											
											<span class="line">
												The server is status is stable
											</span>
											
											<span class="line small time">
												yesterday at 10:30am
											</span>
										</a>
									</li>
									
									<li class="notification-warning">
										<a href="#">
											<i class="fa-envelope-o"></i>
											
											<span class="line">
												New comments waiting approval
											</span>
											
											<span class="line small time">
												last week
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							<li class="external">
								<a href="#">
									<span>View all notifications</span>
									<i class="fa-link-ext"></i>
								</a>
							</li>
						</ul>
					</li>
					
				</ul>
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<!-- 搜索框 -->
					<li class="search-form always-visible"><!-- You can add "always-visible" to show make the search input visible -->
						
						<form method="get" action="#">
							<input type="text" name="s" class="form-control search-field" placeholder="Type to search..." />
							
							<button type="submit" class="btn btn-link">
								<i class="linecons-search"></i>
							</button>
						</form>
						
					</li>
					
					<!-- 用户头像 -->
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								王尼玛
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
					
					<!-- 聊天栏 -->
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>
					
				</ul>
				
			</nav>

			<!-- 主内容-zhuneirong -->
			<div class="page-title">
				
				<div class="title-env">
					<h1 class="title"><?php echo $this_course; ?></h1>
					<p class="description"><?php echo $group_row['group_name']; ?>  小组</p>
				</div>

			</div>

			<section class="profile-env">

				<div class="row">
					<!-- 小组成员信息 -->
					<div class="col-sm-3">
				
						<div class="panel-group" id="accordion-test-2">
							<?php
							$sql = "select name,major,account,tel,email,grade from student NATURAL  join student_group where group_id =". $group_row['group_id'];
							$result =$db->query($sql);
							$i = 0;
							while($row = $result->fetch_assoc()) {
								$i++;
								echo "<div class='panel panel-default'>
								<div class='panel-heading'>
									<h4 class='panel-title'>
										<a data-toggle='collapse' data-parent='#accordion-test-2' href='#collapse".$i."' class='collapsed'>" . $row['name'] . "</a>
									</h4>
								</div>
								<div id='collapse".$i."' class='panel-collapse collapse'>
									<div class='panel-body'>
										<div class='user-info-sidebar'>
											<a href='#' class='user-img'>
												<img src='assets/images/user-4.png' alt='user-img' class='img-cirlce img-responsive img-thumbnail' />
											</a>
											<a href='#' class='user-name'>" . $row['name'] . "<span class='user-status is-online'></span>
											</a>
											<span class='user-title'>
												<strong>" . $row['account'] . "</strong>
											</span>
											
											<hr />
											
											<ul class='list-unstyled user-info-list'>
												<li>
													<i class='fa-home'></i>
								" . $row['grade'] . " - " . $row['major'] . "
												</li>
												<li>
													<i class='linecons-mobile'></i>
								" . $row['tel'] . "
								</li>
												<li>
													<i class='linecons-mail'></i>
								" . $row['email'] . "
								</li>

											</ul>	
												
											<a href='message-write.html'>
												<button type='button' class='btn btn-success btn-block text-left'>
								写信
													<i class='linecons-mail pull-right'></i>
												</button>
											</a>
										</div>
									</div>
								</div>
							</div>";
							}
							?>

						</div>
					</div>
					<!-- 小组讨论内容 -->
					<div class="col-sm-9">
						
						<!-- User Post form and Timeline -->
						<form method="post" action="" class="profile-post-form">
							<textarea class="form-control input-unstyled input-lg autogrow" placeholder="What's on your mind?"></textarea>
							<i class="el-edit block-icon"></i>
							
							<ul class="list-unstyled list-inline form-action-buttons">
								<li>
									<button type="button" class="btn btn-unstyled">
										<i class="el-camera"></i>
									</button>
								</li>
								<li>
									<button type="button" class="btn btn-unstyled">
										<i class="el-attach"></i>
									</button>
								</li>
								<li>
									<button type="button" class="btn btn-unstyled">
										<i class="el-mic"></i>
									</button>
								</li>
								<li>
									<button type="button" class="btn btn-unstyled">
										<i class="el-music"></i>
									</button>
								</li>
							</ul>
							
							<button type="submit" class="btn btn-single btn-xs btn-success post-story-button">发表</button>
						</form>
						
						
						<!-- User timeline stories -->
						<section class="user-timeline-stories">
							
							<!-- Timeline Story Type: Status -->
							<article class="timeline-story">
								
								<i class="fa-paper-plane-empty block-icon"></i>
								
								<!-- User info -->
								<header>
									
									<a href="#" class="user-img">
										<img src="assets/images/user-4.png" alt="user-img" class="img-responsive img-circle" />
									</a>
									
									<div class="user-details">
										<a href="#">王尼玛</a>
										<time>12 hours ago</time>
									</div>
									
								</header>
								
								<div class="story-content">
									<!-- Story Content Wrapped inside Paragraph -->
									<p>最近作业好多啊！</p>
									
									<!-- Story Options Links -->
									<div class="story-options-links">
										<a href="#">
											<i class="linecons-heart"></i>
											赞 
											<span>(3)</span>
										</a>
										
										<a href="#">
											<i class="linecons-comment"></i>
											评论
											<span>(2)</span>
										</a>
									</div>
									
									
									<!-- Story Comments -->
									<ul class="list-unstyled story-comments">
										<li>
											
											<div class="story-comment">
												<a href="#" class="comment-user-img">
													<img src="assets/images/user-2.png" alt="user-img" class="img-circle img-responsive" />
												</a>
												
												<div class="story-comment-content">
													<a href="#" class="story-comment-user-name">
														张尼玛
														<time>28 September 2015 - 00:36</time>
													</a>
													
													<p>老司机，来点福利放松一下呗</p>
												</div>
											</div>
											
										</li>
										<li>
											
											<div class="story-comment">
												<a href="#" class="comment-user-img">
													<img src="assets/images/user-3.png" alt="user-img" class="img-circle img-responsive" />
												</a>
												
												<div class="story-comment-content">
													<a href="#" class="story-comment-user-name">
														董尼玛
														<time>01 September 2015 - 00:36</time>
													</a>
													
													<p>好好学习，天天向上啊！！</p>
												</div>
											</div>
											
										</li>
										<li>
											
											<div class="story-comment">
												<a href="#" class="comment-user-img">
													<img src="assets/images/user-3.png" alt="user-img" class="img-circle img-responsive" />
												</a>
												
												<div class="story-comment-content">
													<a href="#" class="story-comment-user-name">
														邢卫
														<time>01 September 2015 - 00:36</time>
													</a>
													
													<p>董尼玛同学，思想觉悟很高啊，要加分表扬</p>
												</div>
											</div>
											
										</li>
									</ul>
									
									<form method="post" action="" class="story-comment-form">
										<textarea class="form-control input-unstyled autogrow" placeholder="Reply..."></textarea>
									</form>
								</div>
								
							</article>

							<!-- Timeline Story Type: Status -->
							<article class="timeline-story">
								
								<i class="fa-paper-plane-empty block-icon"></i>
								
								<!-- User info -->
								<header>
									
									<a href="#" class="user-img">
										<img src="assets/images/user-4.png" alt="user-img" class="img-responsive img-circle" />
									</a>
									
									<div class="user-details">
										<a href="#">王尼玛</a>
										<time>12 hours ago</time>
									</div>
									
								</header>
								
								<div class="story-content">
									<!-- Story Content Wrapped inside Paragraph -->
									<p>老司机福利已上传，嘻嘻</p>
									
									<!-- Story Options Links -->
									<div class="story-options-links">
										<a href="#">
											<i class="linecons-heart"></i>
											赞 
											<span>(3)</span>
										</a>
										
										<a href="#">
											<i class="linecons-comment"></i>
											评论
											<span>(5)</span>
										</a>
									</div>
									
									
									<!-- Story Comments -->
									<ul class="list-unstyled story-comments">
										<li>
											
											<div class="story-comment">
												<a href="#" class="comment-user-img">
													<img src="assets/images/user-2.png" alt="user-img" class="img-circle img-responsive" />
												</a>
												
												<div class="story-comment-content">
													<a href="#" class="story-comment-user-name">
														邢卫
														<time>28 September 2015 - 00:36</time>
													</a>
													
													<p>王尼玛，不好好学习，又上传什么奇奇怪怪的东西！</p>
												</div>
											</div>
											
										</li>
									</ul>
									
									<form method="post" action="" class="story-comment-form">
										<textarea class="form-control input-unstyled autogrow" placeholder="Reply..."></textarea>
									</form>
								</div>
								
							</article>

						</section>
					</div>
					
				</div>
				
			</section>



			

			

			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy; 2015 
						<strong>软件需求&amp;项目管理 G10</strong> 
						| MailTo：450956162@qq.com
					</div>
					
					
					<!-- Go to Top Link, just add rel="go-top" to any link to add this functionality -->
					<div class="go-up">
					
						<a href="#" rel="go-top">Top
							<i class="fa-angle-up"></i>
						</a>
						
					</div>
					
				</div>
				
			</footer>
		</div>
		
			
		<!-- start: Chat Section -->
		<div id="chat" class="fixed">
			
			<div class="chat-inner">
			
				
				<h2 class="chat-header">
					<a href="#" class="chat-close" data-toggle="chat">
						<i class="fa-plus-circle rotate-45deg"></i>
					</a>
					
					Chat
					<span class="badge badge-success is-hidden">0</span>
				</h2>
				
				<script type="text/javascript">
				// Here is just a sample how to open chat conversation box
				jQuery(document).ready(function($)
				{
					var $chat_conversation = $(".chat-conversation");
					
					$(".chat-group a").on('click', function(ev)
					{
						ev.preventDefault();
						
						$chat_conversation.toggleClass('is-open');
						
						$(".chat-conversation textarea").trigger('autosize.resize').focus();
					});
					
					$(".conversation-close").on('click', function(ev)
					{
						ev.preventDefault();
						$chat_conversation.removeClass('is-open');
					});
				});
				</script>
				
				
				<div class="chat-group">
					<strong>Favorites</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Catherine J. Watkins</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Nicholas R. Walker</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Susan J. Best</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Fernando G. Olson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Brandon S. Young</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Work</strong>
					
					<a href="#"><span class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert J. Garcia</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Daniel A. Pena</em></a>
				</div>
				
				
				<div class="chat-group">
					<strong>Other</strong>
					
					<a href="#"><span class="user-status is-online"></span> <em>Dennis E. Johnson</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Stuart A. Shire</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Janet I. Matas</em></a>
					<a href="#"><span class="user-status is-online"></span> <em>Mindy A. Smith</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Herman S. Foltz</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Gregory E. Robie</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>Nellie T. Foreman</em></a>
					<a href="#"><span class="user-status is-busy"></span> <em>William R. Miller</em></a>
					<a href="#"><span class="user-status is-idle"></span> <em>Vivian J. Hall</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Melinda A. Anderson</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Gary M. Mooneyham</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Robert C. Medina</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Dylan C. Bernal</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Marc P. Sanborn</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Kenneth M. Rochester</em></a>
					<a href="#"><span class="user-status is-offline"></span> <em>Rachael D. Carpenter</em></a>
				</div>
			
			</div>
			
			<!-- conversation template -->
			<div class="chat-conversation">
				
				<div class="conversation-header">
					<a href="#" class="conversation-close">
						&times;
					</a>
					
					<span class="user-status is-online"></span>
					<span class="display-name">Arlind Nushi</span> 
					<small>Online</small>
				</div>
				
				<ul class="conversation-body">	
					<li>
						<span class="user">Arlind Nushi</span>
						<span class="time">09:00</span>
						<p>Are you here?</p>
					</li>
					<li class="odd">
						<span class="user">Brandon S. Young</span>
						<span class="time">09:25</span>
						<p>This message is pre-queued.</p>
					</li>
					<li>
						<span class="user">Brandon S. Young</span>
						<span class="time">09:26</span>
						<p>Whohoo!</p>
					</li>
					<li class="odd">
						<span class="user">Arlind Nushi</span>
						<span class="time">09:27</span>
						<p>Do you like it?</p>
					</li>
				</ul>
				
				<div class="chat-textarea">
					<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
				</div>
				
			</div>
			
		</div>
		<!-- end: Chat Section -->
		
		
	</div>
	
	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	

	<!-- Imported styles on this page -->
	<link rel="stylesheet" href="assets/js/datatables/dataTables.bootstrap.css">

	<!-- Bottom Scripts -->
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/TweenMax.min.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/xenon-api.js"></script>
	<script src="assets/js/xenon-toggles.js"></script>
	<script src="assets/js/datatables/js/jquery.dataTables.min.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/datatables/dataTables.bootstrap.js"></script>
	<script src="assets/js/datatables/yadcf/jquery.dataTables.yadcf.js"></script>
	<script src="assets/js/datatables/tabletools/dataTables.tableTools.min.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/xenon-custom.js"></script>

</body>
</html>