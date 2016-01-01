<?php
	session_start();
	if(isset($_SESSION['IDENTITY']) && $_SESSION['IDENTITY']==1){  //已经登录
	require("teacher-info.php");
	if(isset($_POST["submit"])){
		// $department = $_POST['input_department'];
		 $tel = $_POST['input_tel'];
		 $email = $_POST['input_email'];
		// //$title=$_POST['input_title'];
		 $selfintro=$_POST['input_selfintro'];
		 $result=$_POST['input_result'];
		// //写入数据库
		// require(dirname(dirname(__FILE__))."/dbconfig.php");
		// $db = new mysqli($db_host,$db_username,$db_password,$db_database);
		// $sql = "update teacher set paper_intro='".$result."' , tel='".$tel."', email='".$email."' , intro='".$selfintro."' where account='".$_SESSION['id']."';";
		// $db->query($sql);
		require(dirname(dirname(__FILE__))."/dbconfig.php");
		$db = new mysqli($db_host,$db_username,$db_password,$db_database);
		if(!empty($tel)){
			$sql="update teacher set tel='".$tel."'where account='".$_SESSION['id']."';";
		$db->query($sql);
		}
		if(!empty($email)){
			$sql="update teacher set email='".$email."'where account='".$_SESSION['id']."';";
		$db->query($sql);
		}
		if(!empty($selfintro)){
			$sql="update teacher set selfintro='".$selfintro."'where account='".$_SESSION['id']."';";
		$db->query($sql);
		}
		if(!empty($result)){
			$sql="update teacher set result='".$result."'where account='".$_SESSION['id']."';";
		$db->query($sql);
		}
		
		
	}
	
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
<!--点设置按钮打开的设置面板-->
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
					<li>
						<a href="#">
							<i class="linecons-desktop"></i>
							<span class="title">班级</span>
						</a>
						<ul>
							<li>
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
					<h1 class="title">编辑个人资料</h1>
					<p class="description">教师编辑个人资料</p>
				</div>
				
				<div class="breadcrumb-env">
					<ol class="breadcrumb bc-1">
						<li>
							<a href="index.php"><i class="fa-home"></i>主页</a>
						</li>
						<li>
							<strong>编辑资料</strong>
						</li>
					</ol>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-12">
					
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title">编辑资料</h3>
							<div class="panel-options">
								<a href="#" data-toggle="panel">
									<span class="collapse-icon">&ndash;</span>
									<span class="expand-icon">+</span>
								</a>
							</div>
						</div>
						<div class="panel-body">
							
							<form role="form" class="form-horizontal" action="profile-edit.php" method="post">
								
								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-1">姓名</label>
									
									<div class="col-sm-5">
										<input type="text" class="form-control" id="field-1"name="input_name" placeholder="<?php echo $_SESSION['name'];?>" disabled>
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-2">院系</label>
									
									<div class="col-sm-5">
										<input type="text" class="form-control" id="field-2"name="input_department" placeholder="<?php echo $_SESSION['department'];?>" disabled>
									</div>
								</div>
								
								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-3">职称</label>
									
									<div class="col-sm-5">
										<input type="text" class="form-control" id="field-3" name="input_title" placeholder="<?php echo $_SESSION['title'];?>"disabled>
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-4">联系电话</label>
									
									<div class="col-sm-5">
										<input type="text" class="form-control" id="field-4" name="input_tel" placeholder="<?php echo $_SESSION['tel'];?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-4">电子邮件</label>
									
									<div class="col-sm-5">
										<input type="text" class="form-control" id="field-4" name="input_email" placeholder="<?php echo $_SESSION['email'];?>">
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-5">自我介绍</label>
									
									<div class="col-sm-5">
										<textarea class="form-control autogrow" cols="5" id="field-5"name="input_selfintro" placeholder="<?php echo $_SESSION['intro'];?>"></textarea>
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-6">科研成果</label>
									
									<div class="col-sm-5">
										<textarea class="form-control autogrow" cols="5" id="field-6" name="input_result"placeholder="<?php echo $_SESSION['paper_intro'];?>"></textarea>
									</div>
								</div>

								<div class="form-group-separator"></div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="field-7"></label>
									
									<div class="col-sm-5">
										<input type="submit" name="submit" value="保存" class="btn btn-secondary btn-single"></button>
									</div>
								</div>
								
							</form>
						</div>
					</div>
				</div>
			</div>
			

			<!-- Main Footer -->
			<!-- Choose between footer styles: "footer-type-1" or "footer-type-2" -->
			<!-- Add class "sticky" to  always stick the footer to the end of page (if page contents is small) -->
			<!-- Or class "fixed" to  always fix the footer to the end of page -->
			<?php require("footer.php");?>
		</div>
		
			
		<!-- start: Chat Section -->
	    <?php require("chat.php");?>
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
</php>
<?php
	
	}
	else{
		header("Location:"."../login.php");
		//header("Location:http://www.sina.com");
	}
?>