<?php
	session_start();
	require(dirname(dirname(__FILE__))."/dbconfig.php");
	if(isset($_SESSION['IDENTITY']) && $_SESSION['IDENTITY']==1){  //已经登录
		require("course_class.php");
		require("teacher-info.php");
		
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

	<?php require("settingpane.php");?>
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
						<a  class="logo-expanded">
							<img src="assets/images/logo@2x.png" width="80" alt="" />
						</a>
						
						<a  class="logo-collapsed">
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
						<a href="#">
							<i class="linecons-cog"></i>
							<span class="title">课程</span>
						</a>
						<ul>
							<li>
								<a href="course-list.php">
									<span class="title">课程列表</span>
								</a>
							</li>
							<li>
								<a href="course-info-edit.php">
									<span class="title">新的课程</span>
								</a>
							</li>
						</ul>
					</li>

					<!-- 班级 -->
					<li class="opened active">
						<a href="#">
							<i class="linecons-desktop"></i>
							<span class="title">班级</span>
						</a>
						<ul>
							<li class="active">
								<a href="class-list.php">
									<span class="title">班级列表</span>
								</a>
							</li>
							<li>
								<a href="class-add.php">
									<span class="title">新的班级</span>
								</a>
							
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
								<a href="homework-add.php">
									<span class="title">新的作业</span>
								</a>
							</li>
							<li>
								<a href="homework-list.php">
									<span class="title">作业列表</span>
								</a>
							</li>
							<li>
								<a href="homework-info.php">
									<span class="title">作业详细</span>
								</a>
							</li>
							<li>
								<a href="homework-grade.php">
									<span class="title">作业批改</span>
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
								<a href="file-unchecked-list.php">
									<span class="title">待审核资料</span>
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
								<a href="message-received-list.php">
									<span class="title">收信箱</span>
								</a>
							</li>
							<li>
								<a href="message-sent-list.php">
									<span class="title">已发送</span>
								</a>
							</li>
							<li>
								<a href="message-view.php">
									<span class="title">查看消息</span>
								</a>
							</li>
							<li>
								<a href="message-write.php">
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
			<?php require("userinfonavbar.php");?>

			<!-- 主内容 -->
			<div class="page-title">
				<div class="title-env">
					<h1 class="title">班级列表</h1>
					<p class="description">当前教师用户正在教授的班级列表</p>
				</div>
				
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1">
						<li>
							<a href="index.php"><i class="fa-home"></i>主页</a>
						</li>
						<li>
							<a href="course-list.php">班级</a>
						</li>
						<li>
							<strong>班级列表</strong>
						</li>
					</ol>
				</div>
			</div>
			
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">班级列表</h3>
					
					<div class="panel-options">
						<a href="#" data-toggle="panel">
							<span class="collapse-icon">&ndash;</span>
							<span class="expand-icon">+</span>
						</a>
					</div>
				</div>
				<div class="panel-body">
					
					<script type="text/javascript">
					jQuery(document).ready(function($)
					{
						$("#example-1").dataTable({
							aLengthMenu: [
								[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]
							]
						});
					});
					</script>
					
					<table id="example-1" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>课程</th>
								<th>学期</th>
								<th>班级</th>
								<th>人数</th>
								<th>操作</th>
							</tr>
						</thead>
						<tbody>
							<?php
							while ($row=$class_result->fetch_assoc()) {
								$sql="select course_name,semester from course where cid='".$row['cid']."'";
								$result=$db->query($sql);
								$course=$result->fetch_assoc();
								$clas_time="第";
								for ($i=$row['begin_num']; $i <= $row['end_num']; $i++) { 
									$clas_time."$i";
								}
								echo "<tr>
								<td>".$course['course_name']."</td>
								<td>".$course['semester']."</td>
								<td><strong>".$row['week']."第".$row['begin_num']."-".$row['end_num']."节"."</strong></td>
								<td>".$row['stu_limit']."</td>
								<td>
									<a href='#'>学生</a>
									<a href='#'>小组</a>
									<a href='#'>编辑</a>
									<a href='#'>删除</a>
								</td>
							</tr>";
							}
							
							?>
						</tbody>
					</table>
				</div>
			</div>			

			

			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<?php require("footer.php");?>
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
<?php

}
	else{
		header("Location:"."../TS/login.php");
	}
?>