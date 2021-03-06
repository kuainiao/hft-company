<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>编辑图片资源 | 汉富通后台</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<?php echo R('Public/include_css', '', 'Widget');?>
	<!-- END PAGE LEVEL STYLES -->
	<link rel="shortcut icon" href="__PUBLIC__/vendor/metronic-bootstrap/image/favicon.ico" />

	<style type="text/css">
		.logo{
			width: 400px;
			margin: 20px 0px 20px 0px;
		}
		.upload{
			margin: 30px 0px 10px 20px;
		}
		.green{
			margin-top: 30px;
			float: left;
		}
		.lunbo-tip{
			padding: 20px 0px 10px 20px;
			width: 98%;
			height: auto;
			margin-top: 30px;
			border: 1px dashed red;
		}
		.lunbo-tip p{
			color: gray;
			font-size: 24px;
		}
		.lunbo-tip p span{
			color: red;
		}
		.lunbo-list{
			height: auto;
			margin-bottom: 50px;
		}
		.lunbo-list img{
			width: 100%;
		}
		.lunbo-list a{
			width: 30px;
			height: 30px;
			background-color: red;
		}
		.lunbo-list input{
			margin-top: -5px;
		}
		.lunbo-list span{
			font-size: 16px;
			color: green;
			font-weight: bold;
			line-height: 30px;
		}
		.part-list{
			margin-bottom: 20px;
		}
		.part-list img{
			width: auto;
		}

		/* a upload input */
		.a-upload {
			float: left;
			margin-top: 30px;
		    padding: 7px 20px;
		    height: 18px;
		    line-height: 20px;
		    position: relative;
		    cursor: pointer;
		    color: #888;
		    background: #fafafa;
		    border: 1px solid #ddd;
		    border-radius: 4px;
		    overflow: hidden;
		    display: inline-block;
		    *display: inline;
		    *zoom: 1;
		}
		.a-upload input {
		    position: absolute;
		    font-size: 100px;
		    right: 0;
		    top: 0;
		    opacity: 0;
		    filter: alpha(opacity=0);
		    cursor: pointer;
		}
		.a-upload:hover {
		    color: #444;
		    background: #eee;
		    border-color: #ccc;
		    text-decoration: none;
		}


		#delete-lunbo{
			width: 58px;
			height: 18px;
			float: right;
			margin-top: 2px;
		}
		.logo-title{
			font-size: 20px;
			color: gray;
			font-weight: bold;
		}
	
		#delete-part{
			width: 68px;
			height: 18px;
			float: left;
			margin-top: 15px;
			padding-top: 9px;
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
			<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
			<div id="portlet-config" class="modal hide">
				<div class="modal-header">
					<button data-dismiss="modal" class="close" type="button"></button>
					<h3>Widget Settings</h3>
				</div>
				<div class="modal-body">
					Widget settings form goes here
				</div>
			</div>
			<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->

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
				<div id="dashboard">  <!-- <div class="container-fluid"> -->
					<div class="portlet box blue">
						<div class="portlet-title">
							<div class="caption"><i class="icon-home"></i> 编辑网站图片素材</div>
						</div>
					</div>
					<!-- BEGIN PAGE CONTENT-->
					<div class="row-fluid">
						<div class="tabbable tabbable-custom tabbable-full-width">
							<ul class="nav nav-tabs">
								<li class="active"><a data-toggle="tab" href="#tab_2_2">网站Logo</a></li>
								<li><a data-toggle="tab" href="#tab_2_3">轮播图片</a></li>
								<li><a data-toggle="tab" href="#tab_2_5">产品图片</a></li>
								<li ><a data-toggle="tab" href="#tab_1_2">合作方图片</a></li>
							</ul>
							<div class="tab-content">
								<div id="tab_2_2" class="tab-pane active">
									<div class="row-fluid">
										<!-- BEGIN PAGE CONTENT-->
										<div class="row-fluid">
											<div class="span12">
												<!-- BEGIN GALLERY MANAGER PORTLET-->
												<div class="portlet box purple">
													<div class="portlet-title">
														<div class="caption"><i class="icon-reorder"></i>修改网站Logo图片</div>
													</div>
													<div class="portlet-body">
														<div class="lunbo-tip"><p><span>请注意上传的图片将会直接替换掉原有的logo图片</span></p></div>
														<!-- BEGIN GALLERY MANAGER PANEL-->
														<div class="row-fluid">
															<!-- 图片上传表单 -->
															<form action="__APP__/Material/images_logo_upload" method="post" enctype="multipart/form-data">
																<a href="javascript:;" class="a-upload">
																    <input type="file" name="logo">点击选择上传的图片
																</a>
																<input class="btn pull-right green" type="submit" value="上  传"/>
															</form>
														</div>
														<!-- END GALLERY MANAGER PANEL-->
														<br>
														<br>
														<br>
														<p class="logo-title">当前Logo图片:</p>
														<hr class="clearfix"/>
														<img class="logo" src="__PUBLIC__/Uploads/logos/logo.png">
														<!-- BEGIN GALLERY MANAGER LISTING-->
													</div>
												</div>
												<!-- END GALLERY MANAGER PORTLET-->
											</div>
										</div>
										<!-- END PAGE CONTENT-->
									</div>
									<div class="space40"></div>
									<div class="pagination pagination-centered"></div>
								</div>
								<!--end tab-pane-->
								<div id="tab_2_3" class="tab-pane">
									<div class="row-fluid">
										<div class="span12">
											<!-- BEGIN GALLERY MANAGER PORTLET-->
											<div class="portlet box purple">
												<div class="portlet-title">
													<div class="caption"><i class="icon-reorder"></i>修改网站轮播图片</div>
												</div>
												<div class="portlet-body">
													<div class="lunbo-tip"><p><span>请注意上传的图片的宽高尺寸 [最好保持所有图片尺寸宽高一致]</span></p></div>
													<!-- BEGIN GALLERY MANAGER PANEL-->
													<div class="row-fluid">
														<!-- 图片上传表单 -->
														<form action="__APP__/Material/images_lunbo_upload" method="post" enctype="multipart/form-data">
															<a href="javascript:;" class="a-upload">
															    <input type="file" name="logo">点击选择上传的图片
															</a>
															<input class="btn pull-right green" type="submit" value="上  传"/>
														</form>
													</div>
													<!-- END GALLERY MANAGER PANEL-->
													<br>
													<br>
													<div class="lunbo-tip"><p>从下面所有图片中选择三张图片作为轮播图片组 <span>[只允许选择三张]</span>
														<br><br>
														前台页面导航下的图片将从下面的图片中选择，请必须保证至少有8张图片待选</p>
													</div>
													<hr class="clearfix"/>
													
													<!-- BEGIN DASHBOARD STATS -->
													<div class="row-fluid">
														<form action="__APP__/Material/update_lunbo" method="post">
															<?php if(is_array($lunbo_img_list)): $i = 0; $__LIST__ = $lunbo_img_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="lunbo-list">
																	<img src="__PUBLIC__/Uploads/lunbo_imgs/<?php echo ($vo["imgname"]); ?>" alt="<?php echo ($vo["real_imgname"]); ?>">
																	<span>选中</span><input type="checkbox" value="<?php echo ($vo["imgname"]); ?>" name="lunbos[]" <?php if($vo["status"] == 1): ?>checked
																	    <?php else: endif; ?>/>
																	<a href="__APP__/Material/delete_lunbo/id/<?php echo ($vo["id"]); ?>" class="btn pull-right green" id="delete-lunbo">移除图片</a>
																</div>
																<hr class="clearfix"/><?php endforeach; endif; else: echo "" ;endif; ?>
															<input type="submit" class="btn pull-right green" value="确 定">
														</form>
													</div>
													<!-- END DASHBOARD STATS -->

													<!-- BEGIN GALLERY MANAGER LISTING-->
												</div>
											</div>
											<!-- END GALLERY MANAGER PORTLET-->
										</div>
										
									</div>
									<div class="spac40"></div>
									<div class="pagination pagination-centered">
									</div>
								</div>
								<!--end tab-pane-->
								<div id="tab_2_5" class="tab-pane">
									<div class="row-fluid">

									</div>
									<div class="spac40"></div>
									<div class="pagination pagination-right">
									</div>
								</div>
								<!--end tab-pane-->
								<div id="tab_1_2" class="tab-pane">
									<div class="row-fluid">


										<div class="span12">
											<!-- BEGIN GALLERY MANAGER PORTLET-->
											<div class="portlet box purple">
												<div class="portlet-title">
													<div class="caption"><i class="icon-reorder"></i>编辑网站合作方图片</div>
												</div>
												<div class="portlet-body">
													<div class="lunbo-tip"><p><span>请注意上传的图片的宽高尺寸 [最好保持所有图片尺寸宽高一致]</span></p></div>
													<!-- BEGIN GALLERY MANAGER PANEL-->
													<div class="row-fluid">
														<!-- 图片上传表单 -->
														<form action="__APP__/Material/images_part_upload" method="post" enctype="multipart/form-data">
															<a href="javascript:;" class="a-upload">
															    <input type="file" name="part">点击选择上传的图片
															</a>
															<input class="btn pull-right green" type="submit" value="上  传"/>
														</form>
													</div>
													<!-- END GALLERY MANAGER PANEL-->
													<br><br><br>
													<h4>合作方图片列表</h4>
													<hr class="clearfix"/>

													<!-- BEGIN DASHBOARD STATS -->
													<div class="row-fluid">
														<?php if(is_array($part_img_list)): $i = 0; $__LIST__ = $part_img_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="part-list">
																<img src="__PUBLIC__/Uploads/parts/<?php echo ($vo["imgname"]); ?>" alt="">
																<a href="__APP__/Material/delete_part?imgname=<?php echo ($vo["imgname"]); ?>" id="delete-part" class="btn mini green"><i class="icon-trash"></i> 删除图片</a>
															</div>
															<hr class="clearfix"/><?php endforeach; endif; else: echo "" ;endif; ?>
													</div>
													<!-- END DASHBOARD STATS -->
												</div>
											<!-- BEGIN GALLERY MANAGER LISTING-->
											</div>
										</div>
										<!-- END GALLERY MANAGER PORTLET-->
									</div>
									<div class="spac40"></div>
									<div class="pagination pagination-centered">
									</div>
								</div>
								<!--end tab-pane-->
							</div>
						</div>
					</div>
				<!--end tabbable-->           
				</div>
				<!-- END PAGE CONTENT-->

			</div>
		</div>
		<!-- END PAGE CONTAINER-->    
	</div>
	<!-- END PAGE -->
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