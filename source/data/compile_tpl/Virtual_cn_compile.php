<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<title>开通模拟账户</title>
<!-- css -->
    <link type="text/css" rel="stylesheet" href="<?php cmspath('template');?>/style/common.css" media="screen" />
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
</head>
<body>

<div class="innerheader mb20 inner004">
	<div class="wrap">
		<div class="hotline">
	      <div class="fl">
	        仲泰业投资有限公司<br>
	        <span>长三角交易所131号会员单位</span>
	      </div>
	      财富热线：4000897771
	    </div>
		<div class="nav">
			<div class="logo"><img src="<?php cmspath('template');?>/images/logo.gif"></div>
			<ul>

	        <li class="<?php echo get_web_param('index_focus');?>"><a href="<?php cmspath('index');?>" class="n">首页</a></li>

	         <?php 
 $fun_return=nav_middle();if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $nav_child){?> 
	        <li class="<?php echo $nav_child['class'];?>"><a href="<?php echo $nav_child['url'];?>" class="n" <?php echo $nav_child['target'];?>><span><?php echo $nav_child['cate_name'];?></span></a>
	          <?php if($nav_child['id']!=26){?>
	          <div class="hide nav_sub opac80 ">
	            <div class="cbox c<?php echo $nav_child['id'];?>">
	            <?php 
 $fun_return=$nav_child['child'];if(isset($fun_return)&&is_array($fun_return)){
foreach($fun_return as $v){?>
	            <a href="<?php echo $v['url'];?>"> <?php echo $v['cate_name'];?> </a>
	            <?php 
}
}?>
	            </div>
	          </div>
	          <?php }?>
	                            
	      </li>
	      <?php 
}
}?>
	      </ul>
		</div>

	</div>
	
</div>


<div class="wrap mb20">
	<iframe style="width:980px;height:830px;background-color:#fff;" marginWidth=0 marginHeight=0 src=" http://58.215.166.104:16987/SelfOpenAccount/first.jsp?memberno=131" frameBorder=0 scrolling=no></iframe>
</div>
<?php $this->display('foot',1,1);?>
</body>
</html>