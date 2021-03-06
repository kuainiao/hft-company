<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>企业动态</title>
	<link href="__PUBLIC__/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
		#c2{
			background-color: #F4F4F4;
			height: auto;
			padding: 40px;
		}

		.news_list div{
			margin: 10px 0px 15px 10px;
			border-bottom: 1px dashed gray;
			padding: 6px 0px 10px 0px;
		}
		.news_list div span{
			color: gray;
		}
		.news_title{
			width: 100px;
			margin-left: 8px;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
		}
		.news_time{
			float: right;
		}
	</style>
	<style type="text/css">
	.pageBar{
        margin-top: 80px;
        float: right;
        margin-bottom: 50px;
    }
    .pageBar a{
        background-color: #0F76BB;
        padding: 4px 10px 4px 10px;
        margin-left: 5px;
        text-decoration: none;
        color: white;
    }
    .pageBar a:hover{
        background-color: gray;
        color: white;
    }
    .pageBar span{
        background-color: gray;
        padding:4px 11px 4px 11px;
        margin-left: 5px;
        cursor: default;
        color: white;
    }
</style>
</head>
<body>
	<!-- 引入能够动态分配数据的公共模板文件 -->
	<?php echo R('Public/header', '', 'Widget');?>
	
<style type="text/css">
	#c2 img{
		max-width: 100%;
	}
</style>

<img src="__PUBLIC__/Images/<?php echo ($img_url); ?>" style=" width: 100%;" alt="#">

	<div id="main">
		<div class="container" id="summary-container">
	        <div class="row">
	        	<span id="sign">1</span>
	            <style type="text/css">
	#main{
        margin: 0px auto;
        width: 74%;
        height: auto;
        margin-top: 20px;
        margin-bottom: 20px;
    }
    #c1{           
        height: auto;
        background-color: #AB0900;
        padding: 16px 0px 16px 14px;        
    }
    #c1 .menu-title{
        padding: 5px 0px 5px 10px;
        font-size: 24px;
        color: white;
        margin-bottom: 10px;
    }
    #left-menus div{
        padding: 0px 0px 0px 10px;
        margin-bottom: 5px;
    }
    #left-menus div:hover{
        background-color: #ECABA8;
    }
    .signs{
        background-color: #ECABA8;
    }
    .hover-signs{
        background-color: #AB0900;
    }
    .left-menu-a{
        text-decoration: none;
        font-weight: bold;
        display: inline-block;
        width: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        font-family: "微软雅黑";
        font-family: "微软雅黑" !important;
    }
    #left-menus div:hover .left-menu-a{
        text-decoration: none;
        color: black;
    }
    .menu-a{
        color: black;
    }
    .hover-menu-a{
        color: white;
    }

    #sign{
        display: none;
    }
</style>


<div class="col-md-2" id="c1">
	<div class="menu-title">新闻资讯</div>
	<span></span>
	<div id="left-menus">
		<div id="sign1"><a class="left-menu-a" href="__APP__/News/enterprise">企业动态</a></div>
		<div id="sign2"><a class="left-menu-a" href="__APP__/News/industry">行业资讯</a></div>
	</div>
</div>



<script type="text/javascript">
	window.onload = function(){
		var sign = $('#sign').html();
		for(var i = 1; i < 3; i++){
			if (i == sign){
				$("#sign" + i).addClass('signs');
				$("#sign" + i + " a:only-child").removeClass('hover-menu-a');
				$("#sign" + i + " a:only-child").addClass('menu-a');
			}else{
				$("#sign" + i).addClass('hover-signs');
				$("#sign" + i + " a:only-child").addClass('hover-menu-a');
			}
		}
	}
</script>
	            <div class="col-md-8" id="c2">
	            	<div class="news_list">
	            		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div>
	            		    	<span class="glyphicon glyphicon-pencil"></span>
	            		        <span class="news_title">
	            		        	<a href="__APP__/News/enterprise_info/id/<?php echo ($vo["id"]); ?>"><?php echo ($vo["title"]); ?></a>
	            		        </span>
	            		        <span class="news_time"><?php echo ($vo["create_time"]); ?></span>
	            		    </div><?php endforeach; endif; else: echo "" ;endif; ?>
	            	</div>
	              	<div class="pageBar"><?php echo ($pageBar); ?></div>
	            </div>
	        </div>
	    </div>
	</div>

	<style type="text/css">
	#gotop{
        position: fixed;
        bottom: 50px;
        right: 15px;
        cursor: pointer;
    }
</style>


<div id="gotop">
    <img src="__PUBLIC__/Images/goto_top.png" alt="回到顶部" title="回到顶部" onclick="backToTop()" />
</div>


<script type="text/javascript">
	var scrolldelay;

    function backToTop() {
        scrolldelay = setInterval(ScrolltoTop, 10);
    }

    function ScrolltoTop() {
        window.scrollBy(0, -100);
        var h = getScrollTop();
        if (h <= 2) {
            //当到达顶部时  清除setInterval()方法 
            clearInterval(scrolldelay);
        }
    }

	//获取滚动条距离顶端的距离 
    function getScrollTop() {
        var scrollPos;
        if(window.pageYOffset){
            scrollPos = window.pageYOffset;
        }else if(document.compatMode && document.compatMode != 'BackCompat'){ 
            scrollPos = document.documentElement.scrollTop; 
        }else if(document.body){
            scrollPos = document.body.scrollTop; 
        }
        return scrollPos;
    }
</script>
	<!-- 引入能够动态分配数据的公共模板文件 -->
	<?php echo R('Public/footer', '', 'Widget');?>



	<!--[if lte IE 9]>
	<script src="__PUBLIC__/vendor/bootstrap/js/respond.min.js"></script>
	<script src="__PUBLIC__/vendor/bootstrap/js/html5shiv.js"></script>
	<![endif]-->
	<!-- <script src="http://libs.baidu.com/jquery/1.10.2/jquery.js"></script> -->
	<script src="__PUBLIC__/vendor/bootstrap/js/jquery-1.9.1.js"></script>
    <script src="__PUBLIC__/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
          
      });
    </script>
</body>
</html>