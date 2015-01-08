<?php if(out_id()==5 or out_id()==6 or out_id()==7 or out_id()==8 or out_id()==31){?>
<div class="innerheader mb20 inner001">
<?php }?>
<?php if(out_id()==9 or out_id()==10 or out_id()==11 or out_id()==12 or out_id()==13 or out_id()==32){?>
<div class="innerheader mb20 inner002">
<?php }?>
<?php if(out_id()==15 or out_id()==16 or out_id()==17 or out_id()==18){?>
<div class="innerheader mb20 inner003">
<?php }?>
<?php if(out_id()==19 or out_id()==20 or out_id()==21 or out_id()==22 or out_id()==23 or out_id()==24){?>
<div class="innerheader mb20 inner004">
<?php }?>
<?php if(out_id()==26){?>
<div class="innerheader mb20 inner005">
<?php }?>
<?php if(out_id()==27 or out_id()==28 or out_id()==29 or out_id()==30){?>
<div class="innerheader mb20 inner006">
<?php }?>

	<div class="wrap">
		<div class="hotline">
	      <div class="fl">
	        仲泰业投资管理有限公司<br>
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
