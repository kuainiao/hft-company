<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>添加用户 | 汉富通后台</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<?php echo R('Public/include_css', '', 'Widget');?>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="__PUBLIC__/vendor/metronic-bootstrap/image/favicon.ico" />

	<style type="text/css">
		.lunbo-tip{
			padding: 0px 0px 10px 20px;
			width: 98%;
			height: auto;
			margin-top: 20px;
		}
		.lunbo-tip input{
			margin-top: 5px;
		}
		#adduser{
			width: 220px;
			height: 32px;
			margin-top: 30px;
			margin-left: 40px;
			padding-top: 10px;
			padding-bottom: 10px;
		}

	</style>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<?php echo R('Public/header', '', 'Widget');?>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<?php echo R('Public/leftmenu', '', 'Widget');?>
		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN PAGE CONTAINER-->
			<div class="container-fluid">
				<!-- BEGIN PAGE HEADER-->
				<div class="row-fluid">
					<div class="span12">
						<?php echo R('Public/color_panel', '', 'Widget');?>
						<?php echo R('Public/main_top', '', 'Widget');?>
					</div>
				</div>
				<!-- END PAGE HEADER-->
				<!-- 主要内容部分 wangfan -->
				<div id="dashboard">
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption"><i class="icon-home"></i> 添加管理员用户</div>
						</div>
					</div>

					<div class="row-fluid">
						<div class="lunbo-tip">
							<form action="__APP__/System/do_adduser" method="post">
								账号: <input type="text" name="username"><br>
								密码: <input type="password" name="password"><br>
								重复: <input type="password" name="re_password"><br>
								<input type="submit" id="adduser" class="btn mini green" value="确 定"> 
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- END PAGE CONTAINER-->    
		</div>
		<!-- END PAGE -->
	</div>
	<!-- END CONTAINER -->

	<?php echo R('Public/footer', '', 'Widget');?>
	
	<?php echo R('Public/include_js', '', 'Widget');?>
	<script>
		jQuery(document).ready(function() {    
		   App.init(); // initlayout and core plugins
		   Index.init();
		   Index.initJQVMAP(); // init index page's custom scripts
		   Index.initCalendar(); // init index page's custom scripts
		   Index.initCharts(); // init index page's custom scripts
		   Index.initChat();
		   Index.initMiniCharts();
		   Index.initDashboardDaterange();
		   Index.initIntro();
		});
	</script>
	<!-- END JAVASCRIPTS -->

<script type="text/javascript">
	var _gaq = _gaq || [];
  	_gaq.push(['_setAccount', 'UA-37564768-1']);
    _gaq.push(['_setDomainName', 'keenthemes.com']);
    _gaq.push(['_setAllowLinker', true]);
    _gaq.push(['_trackPageview']);
    (function() {    
    	var ga = document.createElement('script'); 
        ga.type = 'text/javascript'; 
        ga.async = true;    
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);  
    })();
</script>
</body>
<!-- END BODY -->
</html>